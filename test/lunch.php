<?include_once('./_common.php');?>
<?

$bo_table = "lunch";
$g5['lunch_table'] = 'add_lunch';
$set_sql_table = $g5['write_prefix'].$bo_table;
$sql = "select * from ".$set_sql_table;
$sql_query = sql_query($sql);

$list = array();
while($row = sql_fetch_array($sql_query)){
    $list[] = $row;
}

?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>

<style>
body,html{font-size:1em;margin:0;padding:0}
@media screen and (max-width : 640px){
    body,html{font-size:0.7em}
}
.U_wrap{display:table;width:100%;height:100%}
.U_cell{display:table-cell;vertical-align:middle;width:100%}
.U_table{width:90%;max-width:1000px;border-collapse: collapse;max-height:80%;overflow:auto;margin:0 auto}
.U_table caption{font-size:1.4rem;font-weight:700;padding:10px}
.U_table th {font-size:1rem;text-align:center;padding:10px 0;border-bottom:5px solid #d9d9d9}
.U_table td {font-size:0.8rem;padding:15px 8px;text-align:center;border-bottom:1px dashed #d9d9d9}
.U_td01{width:10%;max-width:80px}
.U_td02{width:10%;max-width:80px}
.U_td03{width:30%;max-width:80px}
.U_td04{width:10%;max-width:60px}
.U_td05{width:10%;max-width:120px}
.U_td06{width:20%;max-width:120px}
.U_td07{width:10%;max-width:120px}
</style>

<script>
    $(function(){
        $('.choice').on('click',function(){
            var id = $(this).data('id');
            $.ajax({ url: "http://grassgardener.kr/test/lunch.ajax.php", // 클라이언트가 HTTP 요청을 보낼 서버의 URL 주소 
            data: { wr_id : id,
                    action : 'choice'
            }, // HTTP 요청과 함께 서버로 보낼 데이터 
            method: "GET", // HTTP 요청 메소드(GET, POST 등) 
            dataType: "json" // 서버에서 보내줄 데이터의 타입 }) // HTTP 요청이 성공하면 요청한 데이터가 done() 메소드로 전달됨. 
            }).done(function(json) {console.log(json) }) 
            // HTTP 요청이 실패하면 오류와 상태에 관한 정보가 fail() 메소드로 전달됨. 
            .fail(function(xhr, status, errorThrown) {console.log('에러') }) 
            //.append("상태: " + status); 
            // .always(function(xhr, status) { $("#text").html("요청이 완료되었습니다!"); });

        });
    });

</script>

<div class="U_wrap">
    <div class="U_cell">
        <table class="U_table">
            <caption>오늘뭐먹을까요?</caption>
            <head>
                <tr>
                    <th>분류</th>
                    <th>위치</th>
                    <th>가게이름</th>
                    <th>머지가능</th>
                    <th>배달가능</th>
                    <th>금일투표</th>
                    <th>누적투표</th>
                </tr>
            </head>
            <tbody>
                <?for($i=0; $i < count($list); $i++){?>
                <tr>
                    <td class="U_td01"><?=$list[$i]['ca_name']?></td>
                    <td class="U_td02" title="위치위치" target="_blank"><a href="<?=$list[$i]['wr_link1']?>"><?=$list[$i]['wr_1']?></a></td>
                    <td class="U_td03"><?=$list[$i]['wr_subject']?></td>
                    <td class="U_td04"><?=$list[$i]['wr_2'] ? 'o':'x' ?></td>
                    <td class="U_td05"><?=$list[$i]['wr_3'] ? 'o':'x'?></td>
                    <td class="U_td06"><span>0</span> <button class="choice" data-id="<?=$list[$i]['wr_id']?>">투표하기</button></td>
                    <td class="U_td07"><span>0</span></td>
                </tr>
                <?}?>
            </tbody>
        </table>
    </div>
</div>