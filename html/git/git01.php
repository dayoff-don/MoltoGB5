<?
    $Jmode = 'git01';
    include_once('../../common.php');
    include_once("../_head.php");
?>

<div id="contributions_info" v-if="showContributions.length !== 0" class="U_area01 T_pd_top100 T_ps_rl clear" style="max-width:640px">
    <div class="userInfo T_ft_rem12 U_ft_c333 PC_pd_wd40">
        <strong class="T_ds_block U_bd_rd U_bd_all01 sir_bd01 U_bg_cfff clear T_ft_rem12">
            <span class="T_fl_lt T_wd_p40 sir_bg01 U_ft_cfff U_bd_rd T_pd_ht15  T_ft_ct" style="max-width:100px">사용자</span>
            <a :href="'https://github.com/'+setName" target="_blank" class="T_fl_lt T_wd_p60 text_over T_pd_ht15 T_pd_Plt5" >
             {{setName}} <span class="T_ft_sz12 T_ft_wh400">▶</span>
            </a>
        </strong>
        <ul class="T_ft_ct T_ds_Cinbl T_pd_top30">
            <li class="M_wd_sz90 M_ht_sz90 PT_wd_sz110 PT_ht_sz110 sir_bd01 T_ps_rl U_bd_all01 U_bd_rd T_vt_top" style="border-width:3px">
               <div class="T_ds_table T_wd_full T_ht_full">
                    <div class="T_ds_cell T_wd_full T_ht_full T_vt_md">
                        <strong class="T_ds_block T_mg_btm10 T_ft_wh500 T_ft_rem12 U_ft_c000">Today</strong>
                        <span class="T_ds_block T_ft_rem9hf U_ft_c777">{{today}}</span> 
                    </div>
                </div>
            </li>
            <li class="M_wd_sz90 M_ht_sz90 PT_wd_sz110 PT_ht_sz110 sir_bd01 T_ps_rl U_bd_all01 U_bd_rd M_mg_Pwd3 PT_mg_wd40 T_vt_top" style="border-width:3px">
               <div class="T_ds_table T_wd_full T_ht_full">
                    <div class="T_ds_cell T_wd_full T_ht_full T_vt_md">
                      <strong class="T_ds_block T_mg_btm10 T_ft_wh500 T_ft_rem12 U_ft_c000">Year Data</strong>    
                      <span class="T_ds_block  T_ft_rem9hf U_ft_c777">{{setYear}} </span>
                    </div>
                </div>
            </li>
            <li class="M_wd_sz90 M_ht_sz90 PT_wd_sz110 PT_ht_sz110 sir_bd01 T_ps_rl U_bd_all01 U_bd_rd T_vt_top" style="border-width:3px">
                <div class="T_ds_table T_wd_full T_ht_full">
                    <div class="T_ds_cell T_wd_full T_ht_full T_vt_md ">
                      <strong class="T_ds_block T_mg_btm10 T_ft_wh500 T_ft_rem11 U_ft_c000">금일인증</strong>    
                      <span class="T_ds_block  T_ft_rem9hf U_ft_c777" :style="todayComit ? 'color:#239a3b' : 'color:#f10000'">{{todayComit ? "인증함" : "인증안함"}}</span>
                      <button @click="record" v-if="todayComit" class="T_ps_ab U_bg_cfff T_wd_full T_lh_16 U_bd_all01 U_bd_rd sir_bd01 T_ft_rem10 U_mg_ct" style="left:0;right:0;bottom:-10px">{{recordTxt}}</button>
                    </div>
                </div>
            </li>
        </ul>
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


<?
    include_once("../_tail.php");
?>
