<?
    include_once("./_common.php");
    if(!$is_member){
        echo 'err';
    }else{
        $sql = "SELECT * FROM g5_git_record WHERE id= '".$member['mb_id']."' AND date = '".date('Ymd')."' ";
        $row = sql_fetch($sql); 
        if($row)echo "did";
        else {
            if($commit > 0){
                $sql = "insert into g5_git_record
                set id   = '".$member['mb_id']."',
                commit = ".$commit.",
                date = CURDATE();
                ";
                //echo $sql;
                sql_query($sql);
                echo 'ok';
            }
            //생성하기

        }
        
    }

?>