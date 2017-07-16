<!DOCTYPE html>
<html>
<head>
	<title>VueJs</title>
	<script src="vue.js"></script>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>

<body>
    <div id="app">
    {{-- 	<form @click.prevent='count+=10'> --}}
            <div class='well center-block' style="max-width: 400px">
        <button type="submit" class="btn btn-primary btn-lg btn-block" @click.prevent='count+=10'>submit @{{ count }}</button>
            </div>
     {{--    </form>   --}}   
    </div>


    <script type="text/javascript">
    	var vue = new Vue({
	    el : '#app',
	    data : {
	        message : '',
            count : 0,
	    },
        methods : {
            updateCount : function (a) {
                this.count+=1;
                // a.preventDefault();
                //这里的preventDefault可以阻止页面的跳转（阻止默认行为）也可以在@submit.prevent='submitform'这样阻止
                //知识点：这里的函数比较简单可以在@click='count+=1'
                //@后面接事件，可用的事件有
                //submit keydown keyup click

               // 归纳：在<div a='b'>标签中a是Vuejs的内核函数，而b的我们Vue实例中自定义的date属性或者method或者自定义语句。通过这里的a='b',把自定义的数据交给Vuejs内核b处理。
            }
        }
	})
    </script>
</body>
</html>