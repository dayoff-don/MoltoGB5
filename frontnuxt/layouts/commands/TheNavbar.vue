<template>
    <nav class="nav">
        <Logo2 />
        <div class="logo">
            <nuxt-link :to="{name:'index'}" class="logho text-lg">
            <span class="subheader">A Vue School course</span>
        </div>
        <div class="sasstest">
               <a href="#">vue01</a>
               <a href="#">vue02</a>
               <a href="#">vue03</a>
               <a href="#">sub01</a>
        </div>
    </nav>
</template>



<script>
import Logo2 from '~/components/Logo.vue'

export default {
  components: {
    Logo2
  }
}

</script>



<style scoped>
.nav a {text-decoration: none}
.nav {padding-bottom: 20px;line-height:80px;max-width: 1200px;margin:0 auto}
.nav:after{content:"";clear:both;display:block}
.nav .subheader{text-decoration: none;font-size:1.7em;margin-left:10px;color:#35495e}
.nav svg{width:80px;height:80px}
.nav > * {float:left}
.nav .sasstest{float:right}
.nav .sasstest a{margin:0 10px}
/*
.sasstest{
    color:blue;
    span{color:red;display:block}
}
*/

/*
nav{
display: flex;
width:300px;height:100px;background:red;position:fixed;
justify-content: space-between;
align-self: center;
margin-bottom: 70px;
font-weight: lighter;
letter-spacing: 0.5px;
}
*/

/*
.nav .logo{
display: flex;
flex-direction: column;
justify-content: center;
}

.nav .logo .subheader{
opacity: 0.70;
font-size: 0.9rem;
color:white;
}

.nav .nav-content{
font-size: 1rem;
}

.nav-content ul{
display:flex;
list-style: none;
}

.nav-content ul li{
padding: 2px 10px;
}

.nav-content ul li:not(:first-of-type){
border-left: 1px solid rgb(255, 255, 255,0.2);
}
*/
</style>