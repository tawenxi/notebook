<!DOCTYPE html>
<html>
<head>
	<title>VueJs</title>
	<script src="vue.js"></script>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>

<body>
	<h1>hello,Vue!!</h1>
    <div id="app">
    	@{{ message }}
    	<br/>
    	<input type="text" v-model="message"></input>
    	<pre>
    		@{{$data|json}}
    	</pre>
    </div>


    <script type="text/javascript">
    	var vue1 = new Vue({
	    el : '#app',
	    data : {
	        message : 'hello,world',
	    },
	})
    </script>
</body>
</html>