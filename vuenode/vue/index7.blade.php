<!DOCTYPE html>
<html>
<head>
	<title>VueJs</title>
	<script src="vue.js"></script>

  <style>
    .completed{
      text-decoration: line-through;
    }
  </style>
</head>

<body>
<div id="app">
<ul>
  <li :class="{'completed':task.completed}" v-for="task in tasks" @click='changeTag(task)' >@{{ task.body }}</li>
</ul>
</div>
<script>


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
    methods:{
      changeTag(task){
        task.completed=!task.completed;


      }
    }


})
</script>


</body>
</html>