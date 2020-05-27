<?
    if(!$Jmode)$Jmode = 'normal';

    include_once(G5_PATH."/head.sub.php");
    
    add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/scss/skin/thema/gs.css?ver=1.0.7"> ',0);
?>

<div id="loading"></div>
<div id="app" data-mode="<?=$Jmode?>" class="T_wd_full T_ht_full"> 
    <?if((!$is_member && $Jmode !== "info01" )){?>
    <div class="T_ds_table T_ht_full T_wd_full U_mg_ct T_ps_rl" style="max-width:640px">
        <div class=" T_ds_cell T_ht_p80  T_vt_md" >
            <div class=" T_ft_ct gs_login U_bd_rd T_ps_rl U_ft_cfff">
                <div class="gs_bd01 T_wd_sz300 T_ht_sz300 U_bd_rd U_mg_ct T_ds_table U_ov_hd">
                    <div class="T_ds_cell T_ht_full T_vt_md T_ft_rem30 T_ft_wh700 U_ft_fm01 gs_btn01 T_ps_rl ">
                        <?php @include_once(get_social_skin_path().'/social_login.skin.php'); // 소셜로그인 사용시 소셜로그인 버튼?>
                    <div>
                <div>
            </div>
            
        </div>
    </div>
    <?}else{?>
    <div id="J_nav" class="PC_pd_wd50 U_area01 U_mg_ct gs_nav clear T_ps_ab PT_pd_top40 M_pd_top20 T_ps_fx" style="left:0;right:0;z-index:90">
        <div class="T_fl_lt J_auto_close T_ft_sz20">
            <button class=" J_toggle_btn" >
                <i class="fas fa-align-left U_off_show"></i>
                <i class="fas fa-align-justify U_on_show"></i>
            </button>
            <ul class="T_ps_ab T_mg_Ctop10 T_ft_ct T_ft_sz25 J_toggle_con T_ds_non" style="top:100%">
                <li><a href="<?=G5_URL?>" ><i class="fas fa-home"></i>   <span class="sound_only">home</span></a></li>
                <li><a href="<?=G5_URL?>/html/mypage/my01.php" ><i class="fas fa-user-circle"></i><span class="sound_only">mypage</span></a></li>
                <li><a href="<?=G5_URL?>/html/git/git01.php" ><i class="fab fa-github"></i><span class="sound_only">gitpage</span></a></li>
                <li><a href="#" class="read_link"><i class="fas fa-users"></i><span class="sound_only">info</span></a></li>
                <li><a href="<?=G5_URL?>/html/help/help.php" ><i class="fas fa-hands-helping"></i><span class="sound_only">maker info</span></a></li>
                <li><a href="<?=G5_BBS_URL?>/logout.php"><i class="fas fa-sign-out-alt"></i><span class="sound_only">logout</span></a></li>
            </ul>
        </div>
        <?if($Jmode == "git01"){?>
        <div class="T_fl_rt clear J_auto_close" >
            <button class="T_ft_sz20 J_toggle_btn" id="J_ch_btn01"><i class="fas fa-search"></i></button>
            <form  v-on:submit="onSubmitForm" class="T_pd_lt20 U_bd_rd clear M_wd_full J_toggle_con sg_chbox T_ds_non" >
                <input v-model="userName" class="T_ht_sz30 T_mg_top10 IM_bd_all0 T_fl_lt" type="text" value="">
                <button type="submit" class="T_fl_rt T_ft_sz20"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <?}?>
    </div>
    <?}?>

