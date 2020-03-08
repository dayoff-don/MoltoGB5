<?
	include_once("./_common.php");
	if($bo_table == '') $bo_table="notice"; //테이블 이름
	$write_table = "g5_write_{$bo_table}";

	//게시판 목록보기에 필요한 각종 변수 초기값을 설정합니다.
	$tablename = $write_table; //테이블 이름
	if($gopage == '') $gopage = 1; //페이지 번호가 없으면 1
	$list_num = 8; //한 페이지에 보여줄 목록 갯수
	//$page_num = 5; //한 화면에 보여줄 페이지 링크(묶음) 갯수
	$offset = $list_num*($gopage-1); //한 페이지의 시작 글 번호(listnum 수만큼 나누었을 때 시작하는 글의 번호)

	//전체 글 수를 구합니다. (쿼리문을 사용하여 결과를 배열로 저장하는 일반적 인 방법)
	$query = "select count(*) as cnt from $tablename where 1 $ser_sql1 $ser_sql2 $ser_sql3 $ser_sql4 $ser_sql5"; // SQL 쿼리문을 문자열 변수	에 일단 저장하고
	$row = sql_fetch($query);	
	$total_no = $row[cnt]; //배열의 첫번째 요소의 값, 즉 테이블의 전체 글 수를 저장합니다.

	//전체 페이지 수와 현재 글 번호를 구합니다.
	$total_page=ceil($total_no/$list_num); // 전체글수를 페이지당글수로 나눈 값의 올림 값을 구합니다.
	$cur_num=$total_no - $list_num*($gopage-1); //현재 글번호

	$gopagesize=10;

	$p_start=(ceil($gopage/$gopagesize)-1)*$gopagesize+1; //시작페이지수
	$p_last=ceil($gopage/$gopagesize)*$gopagesize; //마지막페이지

	if($p_last>$total_page)$p_last=$total_page; //마지막페이지가 전체보다크면 마지막페이지를 전체페이지수로
	$p_next=$p_start+$gopagesize; //다음페이지의 페이지번호
	$p_prev=$p_start-$gopagesize; //이전페이지의 페이지번호
	if($p_next>=$total_page)$p_next=$total_page; //다음페이지번호가 전체보다 크면 전체페이지수로
	if($p_prev<=0)$p_prev=1; //이전페이지번호가 0보다 작으면 1로셋팅

	//bbs테이블에서 목록을 가져옵니다. (위의 쿼리문 사용예와 비슷합니다 .)
	$query2="select * from $tablename where 1 $ser_sql1 $ser_sql2 $ser_sql3 $ser_sql4 $ser_sql5 order by wr_10 limit $offset, $list_num"; // SQL 쿼리문 // order by desc 
	$result2 = sql_query($query2);

    header('Content-Type: application/json');
	$make_json = Array();
	$make_json_list = Array();
	for ($i=0; $row=sql_fetch_array($result2); $i++)    {
		$list = array("wr_subject" => $row['wr_subject'],"wr_content" => $row['wr_content'] ,"wr_datetime" => $row['wr_datetime'],"wr_id" => $row['wr_id']);
		array_push($make_json_list, $list);
	}

	function my_json_encode($arr)
	{
		//convmap since 0x80 char codes so it takes all multibyte codes (above ASCII 127). So such characters are being "hidden" from normal json_encoding
		array_walk_recursive($arr, function (&$item, $key) { if (is_string($item)) $item = mb_encode_numericentity($item, array (0x80, 0xffff, 0, 0xffff), 'UTF-8'); });
		return mb_decode_numericentity(json_encode($arr), array (0x80, 0xffff, 0, 0xffff), 'UTF-8');
	}

	$make_json['list_info'] = $make_json_list;
	$make_json['totalPage'] = $total_page;
	//print_r($make_json);
	if(!$make_json){
		echo 'noData';	
	}else{
		$mt_output = my_json_encode($make_json);
		echo  urldecode($mt_output);
	}
?>