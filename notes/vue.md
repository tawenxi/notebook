### 基本用法  
> > <script> 
vue = new Vue({
    el : '#app',
    data : {
        message : 'hello,world'
    }
})

</script>
> 
>### 格式  
new Vue 是一个对象 传入参数叶是一个对象，在js中对象是以类似于json的格式书写的``` el ：'#app',```

### 表单数据双向绑定  
<input type="text" :model="message"></input>
要注意的是input需要在app的包含中;
作用：即可让js程序获取input或者textarea的数据，并且传递给逻辑进行逻辑操作判断。

### 提取data数据
可以用@{{ $data | json}}  注意这里的$符号

