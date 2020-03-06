<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

if (!defined('_SHOP_')) {
    $pop_division = 'comm';
} else {
    $pop_division = 'shop';
}

$sql = " select * from {$g5['new_win_table']}
          where '".G5_TIME_YMDHIS."' between nw_begin_time and nw_end_time
            and nw_device IN ( 'both', 'pc' ) and nw_division IN ( 'both', '".$pop_division."' )
          order by nw_id asc ";
$result = sql_query($sql, false);

echo count($result);
?>


<!-- 팝업레이어 시작 { -->
<div id="hd_pop2" class="swiper-container">
    <h2>팝업레이어 알림</h2>

    <div class="swiper-wrapper">
    <?php
    for ($i=0; $nw=sql_fetch_array($result); $i++)
    {
        // 이미 체크 되었다면 Continue
        if ($_COOKIE["hd_pops_{$nw['nw_id']}"])
            continue;
    ?>

        <div id="hd_pops_<?php echo $nw['nw_id'] ?>" class="hd_pops swiper-slide">
            <div class="hd_pops_con" style="width:<?php echo $nw['nw_width'] ?>px;height:<?php echo $nw['nw_height'] ?>px">
                <?php echo conv_content($nw['nw_content'], 1); ?>
            </div>
        </div>
    <?php }
    if ($i == 0) echo '<span class="sound_only">팝업레이어 알림이 없습니다.</span>';
    ?>
    </div>
    <div class="swiper-pagination"></div>
    <div class="btn_wraps">
        <button class="hd_pops_reject hd_pops_<?php echo $nw['nw_id']; ?>"><strong><?php echo $nw['nw_disable_hours']; ?></strong>시간 동안 다시 열람하지 않습니다.</button>
        <button class="hd_pops_close hd_pops_<?php echo $nw['nw_id']; ?>">닫기 <i class="fa fa-times" aria-hidden="true"></i></button>
    </div>
</div>

<script>
$(function() {

    $(".hd_pops_reject").click(function() {
        $('#hd_pop2 .swiper-slide').each(function(e){
            var id = $(this).attr('id');
            var ck_name = id;
            set_cookie(ck_name, 1, 24, g5_cookie_domain);
        });
        $('#hd_pop2').css({display:"none"});
    });

    $('.hd_pops_close').click(function() {
        $('#hd_pop2').css({display:"none"});
    });
    $("#hd").css("z-index", 1000);
});
</script>
<!-- } 팝업레이어 끝 -->