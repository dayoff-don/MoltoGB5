<<<<<<< HEAD
<?
    $Jmode = 'my01';
    include_once('../../common.php');
    include_once("../_head.php");
?>

<div class="T_wd_full T_ht_full T_ds_table T_pd_btm40" style="background-size: 110%">
    <div class="T_wd_full T_ht_full T_ds_cell T_vt_md">

        <div id="contributions_info" class="U_area01 T_pd_top100 T_pd_ht20 T_ps_rl clear " style="max-width:640px;background-size:auto 100%">
            <div class="userInfo T_ft_rem12 U_ft_c333 PC_pd_wd40 T_ps_rl">
                <ul class="T_ft_ct T_ds_Cinbl T_pd_top30 T_ps_rl sir_years_btn">
                    <li class="M_wd_sz90 M_ht_sz90 PT_wd_sz110 PT_ht_sz110 sir_bd01 T_ps_rl U_bd_all01 U_bd_rd T_vt_top " style="border-width:3px">
                    <div class="T_ds_table T_wd_full T_ht_full ">
                            <div class="T_ds_cell T_wd_full T_ht_full T_vt_md">
                                <strong class="T_ds_block T_mg_btm10 T_ft_wh500 T_ft_rem12 U_ft_c000">GIT계정</strong>
                                <span class="T_ds_block T_ft_rem9hf U_ft_c777"><?=$member['mb_1']?></span> 
                            </div>
                        </div>
                    </li>
                    <li class="M_wd_sz90 M_ht_sz90 PT_wd_sz110 PT_ht_sz110 sir_bd01 T_ps_rl U_bd_all01 U_bd_rd M_mg_Pwd3 PT_mg_wd40 T_vt_top " style="border-width:3px">
                    <div class="T_ds_table T_wd_full T_ht_full">
                            <div class="T_ds_cell T_wd_full T_ht_full T_vt_md">
                            <strong class="T_ds_block T_mg_btm10 T_ft_wh500 T_ft_rem12 U_ft_c000">POINT</strong>    
                            <span class="T_ds_block  T_ft_rem9hf U_ft_c777"><?=$member['mb_point']?></span>
                            </div>
                        </div>
                    </li>
                    <li class="M_wd_sz90 M_ht_sz90 PT_wd_sz110 PT_ht_sz110 sir_bd01 T_ps_rl U_bd_all01 U_bd_rd T_vt_top " style="border-width:3px">
                        <div class="T_ds_table T_wd_full T_ht_full">
                            <div class="T_ds_cell T_wd_full T_ht_full T_vt_md ">
                                <strong class="T_ds_block T_mg_btm10 T_ft_wh500 T_ft_rem11 U_ft_c000">금일인증</strong>    
                                <span class="T_ds_block  T_ft_rem9hf U_ft_c777" :style="todayComit ? 'color:#239a3b' : 'color:#f10000'">{{todayComit ? "인증함" : "인증안함"}}</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>


        </div>
    </div>
</div>

<?
    include_once("../_tail.php");
?>
=======
<?
    $Jmode = 'my01';
    include_once('../../common.php');
    include_once("../_head.php");
?>

<div class="T_wd_full T_ht_full T_ds_table T_pd_btm40" style="background-size: 110%">
    <div class="T_wd_full T_ht_full T_ds_cell T_vt_md">

        <div id="contributions_info" class="U_area01 T_pd_top100 T_pd_ht20 T_ps_rl clear " style="max-width:640px;background-size:auto 100%">
            <div class="userInfo T_ft_rem12 U_ft_c333 PC_pd_wd40 T_ps_rl">
                <ul class="T_ft_ct T_ds_Cinbl T_pd_top30 T_ps_rl sir_years_btn">
                    <li class="M_wd_sz90 M_ht_sz90 PT_wd_sz110 PT_ht_sz110 sir_bd01 T_ps_rl U_bd_all01 U_bd_rd T_vt_top " style="border-width:3px">
                    <div class="T_ds_table T_wd_full T_ht_full ">
                            <div class="T_ds_cell T_wd_full T_ht_full T_vt_md">
                                <strong class="T_ds_block T_mg_btm10 T_ft_wh500 T_ft_rem12 U_ft_c000">GIT계정</strong>
                                <span class="T_ds_block T_ft_rem9hf U_ft_c777"><?=$member['mb_1']?></span> 
                            </div>
                        </div>
                    </li>
                    <li class="M_wd_sz90 M_ht_sz90 PT_wd_sz110 PT_ht_sz110 sir_bd01 T_ps_rl U_bd_all01 U_bd_rd M_mg_Pwd3 PT_mg_wd40 T_vt_top " style="border-width:3px">
                    <div class="T_ds_table T_wd_full T_ht_full">
                            <div class="T_ds_cell T_wd_full T_ht_full T_vt_md">
                            <strong class="T_ds_block T_mg_btm10 T_ft_wh500 T_ft_rem12 U_ft_c000">POINT</strong>    
                            <span class="T_ds_block  T_ft_rem9hf U_ft_c777"><?=$member['mb_point']?></span>
                            </div>
                        </div>
                    </li>
                    <li class="M_wd_sz90 M_ht_sz90 PT_wd_sz110 PT_ht_sz110 sir_bd01 T_ps_rl U_bd_all01 U_bd_rd T_vt_top " style="border-width:3px">
                        <div class="T_ds_table T_wd_full T_ht_full">
                            <div class="T_ds_cell T_wd_full T_ht_full T_vt_md ">
                                <strong class="T_ds_block T_mg_btm10 T_ft_wh500 T_ft_rem11 U_ft_c000">금일인증</strong>    
                                <span class="T_ds_block  T_ft_rem9hf U_ft_c777" :style="todayComit ? 'color:#239a3b' : 'color:#f10000'">{{todayComit ? "인증함" : "인증안함"}}</span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>


        </div>
    </div>
</div>

<?
    include_once("../_tail.php");
?>
>>>>>>> 78f73c664159341f41233d9d1aff2c31be21e3a9
