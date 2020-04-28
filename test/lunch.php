<?include_once('./_common.php');?>

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
                    <th>투표</th>
                    <th>누적투표</th>
                </tr>
            </head>
            <tbody>
                <tr>
                    <td class="U_td01">한식</td>
                    <td class="U_td02" title="위치위치"><a href="">확인</a></td>
                    <td class="U_td03">돈까스이야기</td>
                    <td class="U_td04">o</td>
                    <td class="U_td05">o</td>
                    <td class="U_td06">5 <button>투표하기</button></td>
                    <td class="U_td07">999</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>