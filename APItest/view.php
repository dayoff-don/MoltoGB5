<?
	include_once("./_common.php");
	//게시판 목록보기에 필요한 각종 변수 초기값을 설정합니다.
	$write_table = "g5_write_{$bo_table}";
	$tablename = $write_table; //테이블 이름

	$board_skin_path = 'skin/borad';
	
	$query="select * from $tablename where wr_id = '".$wr_id."'"; // SQL 쿼리문 // order by desc 
	$result = sql_query($query);
	$write = sql_fetch_array($result);
	$view = get_view($write, $board, $board_skin_path);

	 // 윗글을 얻음
    $sql = " select wr_id, wr_subject, wr_datetime from {$write_table} where wr_is_comment = 0 and wr_num = '{$write['wr_num']}' and wr_reply < '{$write['wr_reply']}' {$sql_search} order by wr_num desc, wr_reply desc limit 1 ";
    $prev = sql_fetch($sql);
    // 위의 쿼리문으로 값을 얻지 못했다면
    if (!$prev['wr_id'])     {
        $sql = " select wr_id, wr_subject, wr_datetime from {$write_table} where wr_is_comment = 0 and wr_num < '{$write['wr_num']}' {$sql_search} order by wr_num desc, wr_reply desc limit 1 ";
        $prev = sql_fetch($sql);
    }

    // 아래글을 얻음
    $sql = " select wr_id, wr_subject, wr_datetime from {$write_table} where wr_is_comment = 0 and wr_num = '{$write['wr_num']}' and wr_reply > '{$write['wr_reply']}' {$sql_search} order by wr_num, wr_reply limit 1 ";
    $next = sql_fetch($sql);
    // 위의 쿼리문으로 값을 얻지 못했다면
    if (!$next['wr_id']) {
        $sql = " select wr_id, wr_subject, wr_datetime from {$write_table} where wr_is_comment = 0 and wr_num > '{$write['wr_num']}' {$sql_search} order by wr_num, wr_reply limit 1 ";
        $next = sql_fetch($sql);
    }
	
	$view['wr_next'] = $next['wr_subject'];
	$view['wr_prev'] = $prev['wr_subject'];print_r2($view);
	
	function my_json_encode($arr)
	{
		//convmap since 0x80 char codes so it takes all multibyte codes (above ASCII 127). So such characters are being "hidden" from normal json_encoding
		array_walk_recursive($arr, function (&$item, $key) { if (is_string($item)) $item = mb_encode_numericentity($item, array (0x80, 0xffff, 0, 0xffff), 'UTF-8'); });
		return mb_decode_numericentity(json_encode($arr), array (0x80, 0xffff, 0, 0xffff), 'UTF-8');
	}

	$make_json = $view;
	//print_r($make_json);
	if(!$make_json){
		//echo 'noData';	
	}else{
		$mt_output = my_json_encode($make_json);
		//echo  urldecode($mt_output);
	}

?>