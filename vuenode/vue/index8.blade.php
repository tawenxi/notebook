<!DOCTYPE html>
<html>
<head>
	<title>VueJs</title>
	<script src="http://cdn.bootcss.com/vue/1.0.14/vue.js"></script>
  <link rel="stylesheet" type="text/css" href="css/app.css">


  <style>
    .completed{
      text-decoration: line-through;
    }
  </style>
</head>

<body>
<div id="app">

<task-app :list="tasks"> {{-- **list绑定** 当tasks为vue对象的data的时候需要加冒号绑定--}}
  
</task-app> 



<template id='task-template'>
  <h1> My tasks <span v-if='remain'>(--@{{ remain }})</span></h1>
<ul>
   <li :class="{'completed':task.completed}" v-for="task in list" @click="changeTag(task)" >@{{ task.body }}
<strong @click='deleteTask(task)'>X</strong>
   </li>

    
 

</ul>

</template>


</div>
<script>

Vue.component('task-app',{
  template:'#task-template',
  props:['list'],//数据导入接口
      methods:{
      changeTag(task){
        task.completed=!task.completed;
      },
      deleteTask(task){
        this.list.$remove(task);
      }
    },
    computed:{
    remain:function(){
      return this.list.filter(function(task){
        return !task.completed;
      }).length;
    }
    }
});

var vm = new Vue({

    el: "#app",
    data:{
      completed:'something',
       tasks:[
          {body:'go to movie',completed:false},
          {body:'learn vuejs in action',completed:true},
          {body:'go to the shop',completed:false}
       ]
    },



});
</script>


</body>
</html>