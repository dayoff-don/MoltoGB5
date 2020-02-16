<?php
    
    include_once("./_common.php");
    include_once("./_head.php");
?>

    <?if($is_member){?>
    <div class="T_ft_ct T_ht_full U_mg_ct T_ds_table PT_wd_sz640">
        <div class="T_ht_full T_wd_full T_ds_cell T_vt_md">
            <div>
                <div class="sir_main01">
                    <div class="top">
                        <div class="con"></div>
                        <div class="iofo">
                            <ul>
                                <li>100</li>
                                <li>50</li>
                                <li>0</li>
                            </ul>
                        </div>
                    </div>
                    <div class="btm">
                        <div class="com"></div>
                    </div>
                </div>     
            </div>
            <div>
                <span class="">이용중인 잔디 정원사 <span>2명</span></span>
                <span class="">오늘은 <span>x명</span>이 인증되었네요.</span>
                <a href="">인증을 안하셨나요? 인증하러 가기</a>
            </div>
        </div>
    </div>
    <?}?>
<?
    include_once("./_tail.php");
?>
