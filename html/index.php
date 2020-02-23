<?php
    include_once("./_common.php");
    if($is_member)$Jmode = 'main01';
    include_once("./_head.php");
?>
    <?if($is_member){?>
    <div class="T_wd_full T_ht_full">
        <div class="T_ft_ct T_ht_full U_mg_ct T_ds_table PT_wd_sz640 ">
            <div class="T_ht_full T_wd_full T_ds_cell T_vt_md" style="max-width:640px">
                <div class="T_ht_p60">
                    <div class="sir_main01 T_ht_full" >
                        <div class="top T_ht_p70 T_ps_rl" style="bottom:-5%">
                            <div class="con M_wd_p20 PT_wd_p15 U_mg_ct T_ht_full" style="max-width:100px;border:9px solid #333;border-radius: 100px 100px 0 0;border-bottom:0;">
                                <div class="T_pd_Pwd30 T_ht_full T_wd_full">
                                    <div class="T_ps_rl T_wd_full T_ht_full">
                                        <div class="T_ps_ab T_wd_full" :style="{transition:'1s all',height:set_height,background:set_color,bottom:0,borderRadius:'100px 100px 0 0'}"></div>
                                    </div>    
                                </div>
                            </div>
                            <div class="iofo T_ps_ab T_ht_full U_ft_cfff" style="right:2%;top:0">
                                <ul class="T_ht_full sir_icon01s T_ft_lt">
                                    <li>100'c</li>
                                    <li>75'c</li>
                                    <li>50'c</li>
                                    <li>25'c</li>
                                    <li>0'c</li>
                                </ul>
                            </div>
                        </div>
                        <div class="btm T_ht_p30 T_ps_rl" style="background: url('/img/main01.png')no-repeat center;background-size:auto 100%">
                            <div class="T_ds_table T_wd_full T_ht_full U_ft_cfff">
                                <div class="T_ds_cell T_ht_full T_wd_full T_vt_md U_ft_cfff T_ft_rem15 T_ft_wh700" :style="{transition:'1s all',color:set_color}"><span class="T_ds_inbl T_wd_sz60 T_ht_sz60 U_bg_cfff U_bd_rd T_ft_wh_700" style="line-height:60px">{{set_txt}} <span class="T_ft_sz14">%</span></span></div>
                            </div>
                        </div>
                    </div>     
                </div>
                <div class="U_ft_fm05 U_ft_cfff T_ps_rl T_ft_rem18 T_lh_14 T_ft_wh300 T_pd_top30">
                    <span class="">이용중인 잔디 정원사 <span>{{set_total}}명</span>,</span>
                    <span class="">오늘은 <span>{{set_today}}명</span>이 인증되었네요.</span>
                    <a href="<?=G5_URL?>html/git/git01.php" class="T_ds_block T_mg_top10 T_wd_p60 T_pd_top10 T_pd_btm5 U_bd_rd U_mg_ct T_ps_rl U_bg_c333 U_ft_cfff" style="max-width:400px">인증하러 가기</a>
                </div>
            </div>
        </div>
    </div>
    <?}?>
<?
    include_once("./_tail.php");
?>
