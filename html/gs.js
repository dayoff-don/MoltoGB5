$(function(){
    $(window).load(function(){
        $('#loading').addClass('on');
        setTimeout(() => {
            $('#loading').addClass('on2');
        }, 1000);
    });
});
/*
const app = new Vue({
    mode: 'production',
    el:'#app',
    data:{

    },
    methods:{

    }

});
*/
