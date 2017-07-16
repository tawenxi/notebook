<!DOCTYPE html>
<html>
<head>
	<title>VueJs</title>
	<script src="http://cdn.bootcss.com/vue/1.0.14/vue.js"></script>
  <link rel="stylesheet" type="text/css" href="css/app.css">
  <script src="https://cdn.bootcss.com/vue-resource/0.8.0/vue-resource.min.js"></script>


</head>

<body>
<h1 align="middle">Tasks</h1>
<task-app>

</task-app>

{{-- <template id="tasks-template" list="{{ $tasks }}" @submit="createtask"> --}}
<template id="tasks-template"  @submit="createtask">
  <div class="container">
  <form class="form-group" type='submit'>
  <input type="text" class="form-control" name="">
  <button type="button" class="btn btn-block btn-success">Create Task</button>
    
    
  </form>
 
    <ul class="list-group">
      <li class="list-group-item" v-for= 'task in list'>
      <strong @click="deleteTask(task)">X</strong>
      @{{ task.body }}-- <strong @click="deleteTask(task)">X</strong></li>
    </ul>

</div>
</template>





<script>

Vue.component('task-app',{
  template:'#tasks-template',
  data:function(){
    return {
     
    };
  },
   props:['list'],
  created:function(){
    // var vm = this;
    this.$http.get('api/tasks',function(data){
      this.list = data;
    });
  },
  // created:function(){
  //   this.list=JSON.parse(this.list);
  // },

  methods:{
    deleteTask:function(task){
      this.list.$remove(task);
    },


  },
});

  new Vue({
  
    el: "body",
    data: {

    },
  
  })
</script>

</body>
</html>