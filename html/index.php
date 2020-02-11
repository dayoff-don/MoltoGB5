<?php
     $Jmode = 'git01';
    include_once("./_common.php");
    include_once("./_head.php");
?>
<?if($is_member){?>
<div id="contributions_info" v-if="showContributions.length !== 0" class="U_area01 T_pd_top100 T_ps_rl clear PC_wd_sz640">
    <div class="userInfo T_ft_rem12 U_ft_c333 PC_pd_wd40">
        <div>검색대상: <span>{{setName}}</span></div>
        <div>오늘 : <span>{{today}}</span> </div>
        <div>사용년도 데이터 : <span>{{setYear}} </span></div>
        <div>오늘 커밋여부 : <span>{{todayComit ? "인증함" : "인증안함"}}<button @click="" v-if="todayComit">인증하기</button></span></div>
        
    </div>
    <ul class="commitYear T_ly_3   T_ft_ct ">
        <li v-for="(data, index) in years" :key="index"><button type="button" v-bind:class="{active: years[index].year == setYear ? true : false}" v-on:click="chageData(years[index].year)">{{years[index].year}} ({{years[index].total}})</button></li>
    </ul>

    <ul class="commitBox clear PC_pd_wd40" >
        <li v-for="(data, index) in showContributions" :key="index" v-bind:style="{background:data.color}"> 
            <span class="weekTitle" style="font-size:10px" v-if=" (index+7) % 7 ==0">{{ (index+7) / 7 }} week</span>
            <div v-if="data"> 
            {{data.date}}({{data.intensity}})
            </div>                   
        </li>
    </ul>
    </div>
</div>
<?}?>

<?
    include_once("./_tail.php");
?>
