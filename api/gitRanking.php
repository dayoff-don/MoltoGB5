<?
    include_once("./_common.php");
    if($is_member){

        //make sql data
        if($mode == 'today'){
            $sql = "SELECT * FROM g5_git_record WHERE date = '".date('Ymd')."' ";
            $result = sql_query($sql);
            for($i=0 ; $row = sql_fetch_array($result) ; $i++){
                $list[$i] = $row;
                $list[$i]['git_id'] = get_member($list[$i]['id'], $fields='mb_1')['mb_1'];
            }
        }else if($mode == 'week' || $mode == 'month' || $mode == 'year' || $mode =='total'){
            
            if($mode == 'week' || $mode == 'month' || $mode == 'year'){
                if($mode == 'week'){
                    //주 랭킹 만들때
                    $date = date('Ymd', time());
                    $day_of_week = date('w'); 
                    if($day_of_week == 0)$day_of_week = 7;
                    $set_FD = date('Ymd', strtotime($date​." -".($day_of_week - 1)."days")); // 시작일
                    $set_LD = date('Ymd', strtotime($date​." +".(7 - $day_of_week)."days")); // 종료일   
                    
                }else if($mode == 'month'){
                    //월로 만들때
                    $set_Y = date('Y');
                    $set_M = date('m');
                    $set_FD = $set_Y.$set_M.'01';
                    $set_LD = $set_Y.$set_M.date('t', strtotime($set_Y."-".$set_M."-01"));
                }else if($mode == 'year'){
                    //년도 만들때
                    $set_Y = date('Y');
                    $set_FD = $set_Y.'01'.'01';
                    $set_LD = $set_Y.'12'.date('t', strtotime($set_Y."-12-01"));                   
                }
                    $add_date = 'WHERE date >= "'.$set_FD.'" && date <= "'.$set_LD.'" ';    
                    $add_limit = '0,4';
            }

            if($add_limit){
                $add_limit = 'LIMIT '.$add_limit;
            }
 

            $sql = "SELECT id, COUNT(*) FROM g5_git_record ".$add_date." GROUP BY id HAVING COUNT(*) ORDER BY COUNT(*) DESC ".$add_limit;
            $result = sql_query($sql);
            for($i=0 ; $row = sql_fetch_array($result) ; $i++){
                $list[$i] = $row;
            }
        }

        //make Json 
        $mt_output = my_json_encode($list);
        echo  urldecode($mt_output);

    }else{
        die;
    }



?>