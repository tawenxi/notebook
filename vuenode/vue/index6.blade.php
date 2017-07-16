<!DOCTYPE html>
<html>
<head>
	<title>VueJs</title>
	<script src="vue.js"></script>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>

<body>

<div id="app">

@{{ lever }}
<br>
@{{ property }}
<br>
@{{ username }}

<br>
<input type="text" class="text-primary text-success text" v-model='first' name="">
<input type="text" class="text-primary text-success text" v-model='last' name="">


</div>



<script>


var vm = new Vue({

    el: "#app",
    data:{
        count:100,
        points:200,
        first:'jerry',
        last:'bool',
    },
    computed: {
      property () {
        return true;
      },
      lever:function(){
        if (this.points<100) {
            return '普通会员';
        }
        return 'VIP会员';
      },
      username(){
        return this.first+this.last;
      }//两种方式
    }

})
</script>


</body>
</html>