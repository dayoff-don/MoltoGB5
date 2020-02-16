function dateAddDel(sDate, nNum, type) {
    var yy = parseInt(sDate.substr(0, 4), 10);
    var mm = parseInt(sDate.substr(5, 2), 10);
    var dd = parseInt(sDate.substr(8), 10);
    
    if (type == "d") {
        d = new Date(yy, mm - 1, dd + nNum);
    }
    else if (type == "m") {
        d = new Date(yy, mm - 1, dd + (nNum * 31));
    }
    else if (type == "y") {
        d = new Date(yy + nNum, mm - 1, dd);
    }

    yy = d.getFullYear();
    mm = d.getMonth() + 1; mm = (mm < 10) ? '0' + mm : mm;
    dd = d.getDate(); dd = (dd < 10) ? '0' + dd : dd;

    return '' + yy + '-' +  mm  + '-' + dd;
}


function dateDiff(_date1, _date2) {
    var diffDate_1 = _date1 instanceof Date ? _date1 :new Date(_date1);
    var diffDate_2 = _date2 instanceof Date ? _date2 :new Date(_date2);

    diffDate_1 =new Date(diffDate_1.getFullYear(), diffDate_1.getMonth()+1, diffDate_1.getDate());
    diffDate_2 =new Date(diffDate_2.getFullYear(), diffDate_2.getMonth()+1, diffDate_2.getDate());

    var diff = Math.abs(diffDate_2.getTime() - diffDate_1.getTime());
    diff = Math.ceil(diff / (1000 * 3600 * 24));

    return diff;
}

const mode = document.getElementById('app').getAttribute('data-mode')

console.log(mode);
if(mode == 'git01'){
    const today = new Date();
    const app = new Vue({
        mode: 'production',
        el:'#app',
        data:{
            mode2: '',
            pass : 0,
            userName: '',
            setName : '',
            setYear:'',
            today: today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate(),
            historyName : [],
            years : [],
            contributions : [],
            showContributions : [],
            todayComit: false,
        },
        created: function () {
            axios.get(g5_url + '/api/gitGetName_api.php').then(res=>{
                this.userName = res.data;
                this.makeData();
            });
        },
        methods:{
            removeData(e){
                this.showContributions = [];
                this.contributions = [];
                this.years =[];
                this.todayComit = false;
            },
            chageData(e){
                this.setYear = e;
                this.showContributions =[];
                this.contributions.forEach(element => {
                    const yy = parseInt(element.date.substr(0, 4), 10);
                    if( yy == e){
                        this.showContributions.unshift(element);
                    }
                });
                const ckeckData = new Date(e+'-'+1+'-'+1);
                        for(let i =1; i< ckeckData.getDay(); i++){
                            this.showContributions.unshift('');
                }
            },
            makeData(){
                if(this.showContributions.length !== 0){
                    this.contributions = [];
                    this.years =[];
                    this.showContributions =[];
                    this.todayComit = false;
                }

                axios.get(`https://github-contributions-api.now.sh/v1/${this.userName}`).then(res=>{
                    if(res.data.contributions.length == 0){
                        alert("유저정보가 없습니다.");
                    }else{
                        this.setName = this.userName;
                        this.years = res.data.years;
                        this.setYear = this.years[0].year;
                        this.contributions = res.data.contributions;
                        this.contributions.forEach(element => {
                            const yy = parseInt(element.date.substr(0, 4), 10);
                            if( yy == this.setYear ){
                                if(dateDiff(element.date,this.today) == 0 && element.count > 0){
                                    console.log(dateDiff(element.date,this.today) == 0 );
                                    console.log(element.count );
                                    this.todayComit = true;
                                    console.log("인증");
                                };
                                this.showContributions.unshift(element);
                            }
                        });
                        const ckeckData = new Date(this.setYear+'-'+1+'-'+1);
                        for(let i =1; i< ckeckData.getDay(); i++){
                            this.showContributions.unshift('');
                        }
                        //console.log(ckeckData);
                        //console.log(ckeckData.getFullYear());
                        //console.log(ckeckData.getMonth());
                        //console.log(ckeckData.getDate());
                        //console.log(ckeckData.getDay());
                        //console.log(res.data);
                        //console.log(res.data.years);
                        //console.log(res.data.contributions);
                        //console.log(element.date); 
                        //console.log(Object.values(this.years[0])[0]);
                        //console.log(yy);
                        //console.log(this.showContributions);

                    }
                });
            },
            onSubmitForm(e){
                e.preventDefault();
                this.makeData();
            },
        }
    });
}

$(function(){
    var windowHide = false;

    $(window).load(function(){
        $('#loading').addClass('on');
        setTimeout(() => {
            $('#loading').addClass('on2');
        }, 1000);
    });

    $('.J_toggle_btn').on('click', function(){
        $(this).toggleClass('on').siblings('.J_toggle_con').toggle().toggleClass('on');
        $('body').toggleClass('J_hide01');
    });

    $('.J_auto_close').on('mouseenter',function(){
        $(this).addClass('J_hv_set');
    });

    $('.J_auto_close').on('mouseleave',function(){
        $(this).removeClass('J_hv_set');
    });


    $('.read_link').on('click',function(){
        alert("준비중입니다.");
        return false;
    });

    $(window).click(function(){
        $('.J_auto_close').each(function(){
            if(!$(this).hasClass('J_hv_set')){
                $(this).find('.J_toggle_btn.on').trigger('click');
            }
        })
    });

});
