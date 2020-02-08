<?php
    include_once("./_common.php");
    include_once(G5_PATH."/head.sub.php");
?>
    <div id="loading"></div>

    <?if(!$is_member){?>
    <div class="T_ds_table T_ht_full T_wd_full U_mg_ct gs_bg01 T_ps_rl" style="max-width:640px">
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
    <div class="U_area01 gs_nav clear T_ps_ab PT_pd_top40 M_pd_top20">
        <button class="T_fl_lt">몌뉴열기</button>
        <ul class="T_ps_ab T_mg_Ctop20" style="top:100%">
            <li><a href="#">마이페이지</a></li>
            <li><a href="#">잔디잔디</a></li>
            <li><a href="#">커뮤니티</a></li>
            <li><a href="<?=G5_BBS_URL?>/logout.php">로그아웃</a></li>
        </ul>
        <div class="T_fl_rt clear">
            <form class="T_fl_Clt T_pd_lt20 U_bd_rd clear">
                <input class="T_ht_sz50 IM_bd_all0" type="text" value="">
                <button type="submit">제출</button>
            </form>
        </div>
    </div>
    

    <?}?>
        
    
    <style>

        @keyframes AnimationName { 
            0%{background-position:0% 50%} 
            50%{background-position:100% 50%} 
            100%{background-position:0% 50%} 
        }
        body,html{height:100%;}
        .gs_bg01{background:url("/img/gs_bg01.jpg")no-repeat center;width:100%;background-size: 100%}
        .gs_bg01:before{width:100%;height:100%;display:block;content:"";top:0;left:0;background:linear-gradient(137deg, #440808, #8e2881, #122496, #072712);position:absolute;display: flex; flex-direction: column; align-items: center; justify-content: center;animation: AnimationName 15s ease infinite;opacity:0.4}
        .gs_bd01{border:5px solid #fff}
        .gs_btn01:before{content:"";width:100%;height:100%;display:block;position:absolute;background:rgba(255,255,255);top:0;left:0;transform:scale(0);transition:0.3s all;border-radius:50%}
        .gs_btn01:hover:before{transform:scale(0.9)}
        .gs_btn01 a{position:relative}
        .gs_btn01:hover a{background: linear-gradient(to right, #427905, #5bad00);-webkit-background-clip: text;-webkit-text-fill-color: transparent;}
        #loading{width:100%;height:100%;top:0;left:0;background:rgba(0,0,0,1);transition:1s all;position:absolute;z-index:999;opacity:1}
        #loading.on{opacity:0}
        
        .gs_nav button,.gs_nav li a{display:block;width:50px;height:50px;border-radius:50%;background:#000}
    </style>

    <script type="text/babel">
        $(function(){
            $(window).load(function(){
                $('#loading').addClass('on');
                setTimeout(() => {
                    $('#loading').remove();
                }, 1000);
            });
        });

        const app = new Vue({
            mode: 'production',
            el:'#app',
            data:{

            },
            methods:{

            }

        });

    </script>

<?
    include_once(G5_PATH."/tail.sub.php");
?>
