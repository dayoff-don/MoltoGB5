<<<<<<< HEAD
<template>
    <div class="container">
        <article>
            <h1 class="title">{{post.title}}</h1>
            <p>{{post.content}}</p>
        </article>
    </div>
</template>

 

<script>
export default {
    data(){
        return{
            id: this.$route.params.id,
            posts: [
                {
                    id: "vue01", title:'what is vue nuxt?',
                    content:"route기능을 활용한 Vue를 사용한 nuxt의 기능중 하나입니다."
                },
                {
                    id: "vue02", title:'what is use component',
                    content:"해당 기능들은 하나의 컴포넌트에서 사용중입니다. 지금은 2개 네비와 컨텐츠를 사용합니다."
                },
                {
                    id: "vue03", title:'what do it this?',
                    content:"dist 기능을 활용한 web에 베포 테스트 그리고 node를 사용한 베포테스트입니다."
                }
            ]
        } 
    },
    computed:{
        post(){
            return this.posts.find(post=>post.id===this.id)
        }
    }
}
</script>

 

<style long="scss">

.container {
display: flex;
width:100%;
justify-content: space-between;
line-height: 1.5;
}

article * {

margin-bottom: 1rem;

}

aside {

min-width: 280px;

max-width: 280px;

padding-left: 2rem;

}

.title {

font-size: 2rem;

}

=======
<template>
    <div class="container">
        <article>
            <h1 class="title">{{post.title}}</h1>
            <p>{{post.content}}</p>
        </article>
    </div>
</template>

 

<script>
export default {
    data(){
        return{
            id: this.$route.params.id,
            posts: [
                {
                    id: "vue01", title:'what is vue nuxt?',
                    content:"route기능을 활용한 Vue를 사용한 nuxt의 기능중 하나입니다."
                },
                {
                    id: "vue02", title:'what is use component',
                    content:"해당 기능들은 하나의 컴포넌트에서 사용중입니다. 지금은 2개 네비와 컨텐츠를 사용합니다."
                },
                {
                    id: "vue03", title:'what do it this?',
                    content:"dist 기능을 활용한 web에 베포 테스트 그리고 node를 사용한 베포테스트입니다."
                }
            ]
        } 
    },
    computed:{
        post(){
            return this.posts.find(post=>post.id===this.id)
        }
    }
}
</script>

 

<style long="scss">

.container {
display: flex;
width:100%;
justify-content: space-between;
line-height: 1.5;
}

article * {

margin-bottom: 1rem;

}

aside {

min-width: 280px;

max-width: 280px;

padding-left: 2rem;

}

.title {

font-size: 2rem;

}

>>>>>>> 78f73c664159341f41233d9d1aff2c31be21e3a9
</style>