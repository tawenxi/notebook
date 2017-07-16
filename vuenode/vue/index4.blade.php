<!DOCTYPE html>
<html>
<head>
	<title>VueJs</title>
	<script src="vue.js"></script>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>

<body>

<div id="app">
<counter heading='Like'></counter>
<counter heading='DisLike'></counter>

@{{ count }}  不在模板中就是自定义的data当中的属性。

</div>

<template id='my-template'>
    <div class="alert-warning">
        <h1>@{{ heading }}</h1>
        <div class='well center-block' style="max-width: 400px">
        <button type="button" class="btn btn-primary btn-block btn-lg"  @click='num+=1'>@{{ num }}</button>
        </div>
    </div>
</template>


<script>

Vue.component('counter',{
    template:'#my-template',//这里注意#
    props:['heading'],
    // data : function(){
    //     return {count:0};//注意这里的data定义的函数方式，实际上是返回的是一个count属性，内核式count，专门在组件模板中使用的
    data(){
        return {count:0,
            num:1,

        };//注意这里叶可以用data()函数
    }
        
});

var vm = new Vue({

    el: "#app",
    data:{
        count:100,
    },

})
</script>


</body>
</html>