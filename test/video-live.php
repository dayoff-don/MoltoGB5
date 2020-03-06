<?include_once('./common.php');?>

<!DOCTYPE html>
<html lang="kr" class="T_ht_p100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>비디오 테스트</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.34/browser.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="/css/sass/jmodule.css">
    <?/*
    <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
    <link href="https://vjs.zencdn.net/7.6.6/video-js.css" rel="stylesheet" />
    <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
    */?>
    <script src="https://cdn.jwplayer.com/libraries/7aXLpnrC.js"></script>


</head>
<body class="T_ds_table T_ht_p100 U_mg_ct T_wd_full">
    

    <header id="app2" >
        <div style="max-width:1200px" class="T_wd_full U_mg_ct T_fl_Clt clear">
            <button>메뉴버튼</button>
            <h1><img src="" alt="로고"></h1>
            <form action="">
                <input type="text" placeholder>
                <button>검색</button>
            </form>
        </div>
    </header>

    <div id="player">Loading the player...</div>

    <?/*
    <div id="app" class="">
        <button type="button" v-on:click="test01">테스트</button>
        <br/>
        <div style="max-width:1200px" class="T_wd_full U_mg_ct">
            <div class="T_fl_lt">
                <!--
                <video width="400" height="240" controls v-bind:src="setVideo.src" >
                </video>
                -->
                <div>
                    <h3>
                        <span>과목명: {{setVideo.category}}</span>
                        <span>강의명: {{setVideo.tit}}</span>
                    </h3>
                    <div>
                        <img v-bind:src="setVideo.professorImg" alt="교수 사진">
                        <span>교수명: {{setVideo.professor}}</span>
                    </div>
                    <ul class="T_fl_Clt clear">
                        <li><a href="">[모달팝업]강의정보</a></li>
                        <li><a href="">[모달팝업]교재몰</a></li>
                        <li><a href="">[모달팝업]부록교재</a></li>
                        <li><a href="">[모달팝업]교수정보</a></li>
                        <li><a href="">[링크이동]원서접수</a></li>
                        <li><a href="">[AJAX]좋아요</a></li>
                        <li><a href="">[+추가]+추가</a></li>
                    </ul>
                </div>
                <p>강의요약설명</p>
            </div>
            <div class="T_fl_rt">
                <h3>다음강좌</h3>
                <ul>
                    <li v-for="(data, index) in videos" :key="index" style="border:1px solid red" >
                        <button type="button" v-on:click="changeVideo(index)">
                            <img :src="data.thumbnail" alt="동영상 섬네일">
                            <h4>[동영상분류:{{data.category}}]동영상 제목 : {{data.tit}} </h4>
                            <span>강의 교수명 : {{data.professor}}</span>
                        </button>
                    </li>
                </ul>
            </div>
        </div> 
    </div>
    */?>
    <script type="text/babel">
    
    jwplayer('player').setup({
        width: "100%",
        height: "406",
        primary: "flash",
        autostart: "true",
        //repeat: 'always',
        androidhls:true,
        aspectratio: "16:9",
        sources:[
            {	file: "rtmp://localhost/hls/test"},
            {	file: "http://localhost:8080/hls/test.m3u8"}
        ]
    });

    /*
    const today = new Date();
	const app = new Vue({
		mode: 'production',
		el:'#app',
		data:{
            videos:[],
            setVideo: [],
            setSrc : [],
            errored : false,
            loading : false,
            setType:'video/mp4'
		},
        created(){
           this.fetchData();
        },
        methods:{
            test01(e){
                console.log("??");
                console.log(this.videos);
            },
            fetchData() {
                axios.get('/APItest/video.php')
                .then(result => {
                    console.log('json 반환2');
                    this.videos = result.data;
                    this.setVideo = this.videos[0];
                    console.log(this.videos);
                    console.log(this.setVideo);
                }).catch(error => {
                console.log("에러입니다. \n"+error);
                this.errored = true;
                }).finally(() => this.loading = false);
            },
            removeData(e){

            },
            changeVideo(e){
                console.log(e);
                this.setVideo = this.videos[e];
            },
			onSubmitForm(e){
				
		    },
        }
	});
    */
    </script>

    <style>

    </style>
</body>
</html>