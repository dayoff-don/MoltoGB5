<?include_once('./common.php');?>

<!DOCTYPE html>
<html lang="kr" class="T_ht_p100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>비디오 테스트</title>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="/css/sass/jmodule.css">

    
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

    <div id="app" class="">
        1: {{videos.videos}}
        <br/>
        2: {{videos.name}}
        <br/>
        2: {{videos.src}}
        <br/>
        2: {{videos.playTime}}
        <br/>
        2: {{videos.professor}}
        <br/>
        2: {{videos.category}}
        <br/>
        2: {{videos.content}}
        <br/>
        
        <div style="max-width:1200px" class="T_wd_full U_mg_ct">
            <div class="T_fl_lt">
                <video width="400" height="240" controls>
                    <source v-bind:src="setSrc" type="video/mp4">
                    Your browser does not support the video tag.    
                </video>
                <div>
                    <h3>
                        <span>과목명</span>
                        <span>강의명</span>
                    </h3>
                    <div>
                        <img src="" alt="교수 사진">
                        <span>교수명</span>
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
            <div>
                <h3>다음강좌</h3>
                <ul>
                    <li>
                        <a href="">
                            <img src="" alt="동영상 섬네일">
                            <h4>동영상 제목</h4>
                            <span>강의 교수명</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="" alt="동영상 섬네일">
                            <h4>동영상 제목</h4>
                            <span>강의 교수명</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="" alt="동영상 섬네일">
                            <h4>동영상 제목</h4>
                            <span>강의 교수명</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="" alt="동영상 섬네일">
                            <h4>동영상 제목</h4>
                            <span>강의 교수명</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="" alt="동영상 섬네일">
                            <h4>동영상 제목</h4>
                            <span>강의 교수명</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div> 
    </div>

    <script>

    const today = new Date();
	const app = new Vue({
		mode: 'production',
		el:'#app',
		data:{
            videos:[],
            setVideo: [],
            setSrc : [],
		},
        created(){
           this.fetchData()
        },
        methods:{
            fetchData() {
                axios.get('/APItest/video.php')
                .then(result => {
                    console.log(result.data);
                    console.log(result.data.videos[0]);
                    this.videos = result.data;
                    console.log(this.videos);
                }).catch(error => {
                console.log(error)
                this.errored = true
                }).finally(() => this.loading = false);
            },
            removeData(e){

            },
            chageData(e){
           
            },
			onSubmitForm(e){
				
		    },
        }
	});
        
    </script>

    <style>

    </style>
</body>
</html>