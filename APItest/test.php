<?
include_once('../common.php');

if($action == 'getItem'){
    $arr['state'] = 'getItem';
    $arr['item'][0]['itemTit'] = '상품이름01';
    $arr['item'][0]['itemContent'] = '상품설명01';
    $arr['item'][0]['itemprice'] = '1,000원';

    $arr['item'][0]['itemTit'] = '상품이름02';
    $arr['item'][0]['itemContent'] = '상품설명02';
    $arr['item'][0]['itemprice'] = '2,000원';

    $arr['item'][0]['itemTit'] = '상품이름02';
    $arr['item'][0]['itemContent'] = '상품설명02';
    $arr['item'][0]['itemprice'] = '3,000원';
}
else if($action == 'getMember'){
    $arr['state'] = 'getMember';
    $sql = "select * from ".$g5['member_table']." where mb_1 = 'dogcolley'";
    $row = sql_fetch($sql);
    $arr['member'] = $row;
}
else if($action == 'updateMember'){
    $arr['state'] = 'updateMember';
    if($member['mb_id'] == $updateMember['mb_id']){
        $sql = "UPDATE ".$g5['member_table']." SET
            mb_2 = '".$updateMember['mb_info']."'
            WHERE mb_id = '".$member['mb_id']."'
        ";


    }else{
        $arr['state'] = 'err';
    }
}else {
    $arr['state'] = 'err';
}



$myJSON = json_encode($arr);

echo $myJSON;

?>