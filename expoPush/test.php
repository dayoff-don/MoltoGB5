<?
    include_once("../common.php");
?>

<form action="./test_update.php" method="post">    
    <div>
        <label for="tit">제목</label>
        <input type="text" name="tit" id="tit" value="타이틀">
    </div>
    <div>
        <label for="url">전송URL</label>
        <input type="text" name="url" id="url" value="">
    </div>
    <div>
        <label for="">메세지내용</label>
        <input type="text" name="content" id="content" value="message">
    </div>
    <div>
        <label for="recipient">대상토큰</label>
        <input type="text" name="recipient" id="recipient" value="ExponentPushToken[o9oX3eLO_Xdc5B3uGt1r8t]">
    </div>
    <div>
        <label for="channelName">대상아이디</label>
        <input type="text" name="channelName" id="channelName" value="guest">
    </div>
    <button>전송해볼까?</button>
</form>