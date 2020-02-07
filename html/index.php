<?php
    include_once("./_common.php");
    include_once(G5_PATH."/head.sub.php");
?>
    <div id="app">


    <?php @include_once(get_social_skin_path().'/social_login.skin.php'); // 소셜로그인 사용시 소셜로그인 버튼 ?>
    
    </div>
    
    <script type="text/babel">
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
