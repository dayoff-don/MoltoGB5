
<?php
include_once("../common.php");

require_once __DIR__ . '/vendor/autoload.php';

$channelName = $_POST['channelName'];
$recipient = $_POST['recipient'];
$tit = $_POST['tit'];
$content = $_POST['content'];
$url = $_POST['url'] ? $_POST['url'] : '';

if($content && $channelName && $recipient && $tit && $content){
    try {
        $expo = \ExponentPhpSDK\Expo::normalSetup();
        //$recipient = 'ExponentPushToken[a-bsqCI31E8cfCTk8RyQ0e]';
        //$channelName = 'News';
        $channelName = 'guest';
        $expo->subscribe($channelName, $recipient);
        $notification = ['tit'=>"{$tit}",'body' => "{$content}", 'data'=> json_encode(array('url' =>"{$url}"))];
        $expo->notify([$channelName], $notification);
        //echo 'Succeeded! We have created an Expo instance successfully';
        echo '전송성공';
    } catch (Exception $e) {
        echo '전송실패';
    }
}else{
    echo '전송실패';
}
?>