<!DOCTYPE html>
<html>
<head>
	<title>VueJs</title>
	<script src="http://cdn.bootcss.com/vue/1.0.14/vue.js"></script>
  <link rel="stylesheet" type="text/css" href="css/app.css">
<script src="https://cdn.bootcss.com/vue-resource/0.6.1/vue-resource.min.js"></script>
<meta id='token' name="token" value="{{ csrf_token() }}">


</head>

<body>
<h1 align="middle">Tasks</h1>
<task-app>

</task-app>

<template id="tasks-template" >
  <div class="container">
  <form class="form-group" @submit="createTask">
  <input type="text" class="form-control" name="" v-model='notes'>
  <button type="submit" class="btn btn-block btn-success">Create Task</button>
    
    
  </form>
 
    <ul class="list-group">
      <li class="list-group-item" v-for= "task in list |orderBy 'id' -1">
      <strong @click="deleteTask(task)">X</strong>
      @{{ task.body }}-- <strong @click="deleteTask(task)">X</strong></li>
    </ul>

</div>
</template>





<script>
Vue.http.headers.common['X-CSRF-TOKEN']=document.querySelector('#token').getAttribute('value');
Vue.component('task-app',{
  template:'#tasks-template',
  data:function(){
    return {
      notes:'',

      
    };
  },
 props:['list'],
  created:function(){
    // var vm = this;
    this.$http.get('api/tasks',function(data){
      this.list = data;
    });
  },

  methods:{
    deleteTask:function(task){
      this.list.$remove(task);
    },
    createTask:function(e){
      e.preventDefault();
      this.$http.post('api/tasks',{body:this.notes},function(response){
        this.list.push(response.task);
        console.log(response);

      }.bind(this)) ;
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