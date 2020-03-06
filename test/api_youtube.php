<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://unpkg.com/vue"></script>
    <title>API 유투브 테스트</title>
</head>
<body>


<iframe id="face" src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fcnvc1365&amp;width=400&amp;height=298&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=true&amp;show_border=true&amp;appId=297372790454280" scrolling="no" frameborder="0" style=" overflow:hidden; width:400px; height:298px;" allowtransparency="true"></iframe>
<br>
<br>
<br>
<br>

<iframe id="face" src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fcnvc1365&amp;width=398&amp;height=3000&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=true&amp;show_border=true&amp;appId=297372790454280" scrolling="no" frameborder="0" style="border:1px solid #dedede; overflow:hidden; width:400px; height:300px;" allowtransparency="true"></iframe>


<br>
<br>
<br>
<br>
<br>
<br>

<iframe id="face" src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fcnvc1365&amp;width=500&amp;height=208&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=true&amp;show_border=true&amp;appId=297372790454280" scrolling="no" frameborder="0" style="border:1px solid #dedede; overflow:hidden; width:500px; height:208px;" allowTransparency="true"></iframe>



  <br>
<br>
<br>
<br>
<br>
<br>

<?php // 원격 파일을 사용하기 전에 성공적으로 open 되었는지 확인

  if ($fp = fopen('https://www.youtube.com/', 'r')) { 
    $content = ''; 
    // 전부 읽을때까지 계속 읽음 
    while ($line = fgets($fp, 1024)) { $content .= $line; }
     // content 사용 // ... 
    print_r($content);
    } else { // 파일 open시 에러 발생 
      echo "erro";
    }
?>
    
    <div id="app">
        {{message}}

    </div>

    <script>
        var app = new Vue({
		  el: '#app',
		  data: {
			message: 'HI YOUTUBE AND VUE JS'
		  },
		  methods: {
        reverseMessage: function () {
          this.message = this.message.split('').reverse().join('')
        }
		  }
		});
    </script>
</body>
</html>