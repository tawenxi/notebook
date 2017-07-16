<!DOCTYPE html>
<html>
<head>
	<title>VueJs</title>
	<script src="vue.js"></script>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>

<body>
    <div id="app">
    	<form>
            <div class="alert-danger" v-if='!message'>
            {{-- 这里也可以用v-show --}}
            You must enter a message to submit</div>
            <textarea class="form-control" rows="6" v-model='message' name=""></textarea>
            <br>
            <button class='btn btn-block btn-success' v-if = 'message'>send message</button>
            <br>
            @{{ message }}
        </form>
    </div>


    <script type="text/javascript">
    	var vue = new Vue({
	    el : '#app',
	    data : {
	        message : '',
	    },
	})
    </script>
</body>
</html>