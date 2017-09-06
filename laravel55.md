# Vue 
mount 和data 是函数，用法
mount () { this.$http.post("api/post",
{"id":this.id,}).then({response=>{
js控制台代码}})  }  
data () { return {
follow:false ,
} }  

-------
methods 和computed 是对象，用法
methods :{
follow(){this.$http.post("api路劲",{})}}同上  
可以看出methods 是用来放函数的对象，而mount 是一个构造函数，通常用来操作$http   
computed :{
text(){return this.follow?true:false;}}
computed也是一个存放函数的容器  
-------
总结:methods 和computed 是存放函数的容器
data 存放变量的容器
mount 相当于构造方法

在laravel 的api 端用middleware("api")做过滤，返回的结果是一个return response()->json(["follow"=>false]);  这个求组在js 的response 中传给了response.data  

-------
props :["question","user"],注意这里是逗号  
这两个参数通过组件的参数传值过来，在js 中通过this .question 方式访问，这种参数可做$http.post 参数传递给api ..
-------
-------
# request 总结
request("attribute")可通过这种方式拿到request 的值。拿到request 值的方法总结:

1. request("attribute")还可以传递数组
2. $request->get("attribute")
3. $request ->query ("attribute")
4. $request ->all()返回求组
5. $request ->attribute 
6. $request ->filled ("attribute")返回非空
7. $request ->input ("attribute")

-------
# 5.2新特性:路由模型的隐式绑定  
route::get ("/user/{user}",function($user){
return $user;})会得到一个$user 实例。
如果想用其他字段可以在routeserviceprovide 中的boot 方法加/Route::bind ("username",function($user){
return User::where("username",$user)->first()})

-------
5.2新特性:middleware("throttle:60");可以用来限制访问次数。
可以安装httpie 来攻击api   
5.2新特性:多表认证
-------
- 5.3新特性:cache 
cache(["key"="value"]，分钟数int)设置cache 值，在5.5中必须传入有效时间。
cache("key",默认值)获取cache 值  
cache()->get ("key")  

- 5.3新特性:db 查询get 返回的是collection .之前是求组，如果要返回求组就->get ()->all ()  

- 5.3新特性:$loop 这个全局变量可以在模板中使用。只能放在foreach 中，$loop的属性有index ,remaining ,count ,
first ,last (这个返回一个bool),
parent (返回上一层循环的loop)  

- 5.3新特性:分页，在控制器中/User ::paginate(3)  
在模板中:$users ->links()

- 5.3新特性:可以make :mail SenduserMail 来创建一个mailable ,mailable 充当一个控制器的角色。。在应用程序中mail::to($user->email)->send (new SenduserMail($user)).
这里注意可以用mailtrip来测试邮件。
- 5.3新特性：多对多当中的toggle：
在多对多中
public function favorite(){
    return $this->belonsTomany(User:class,'favor');
}
这里第二个参数接一个favor表

-------

5.4新特性:make controller 有一个参数-r 和-m=post   


-------

5.5新特性:fresh 命令，建立新的数据库
5.5新特性:$request ->validate ([规则求组])  
返回求组。其中路由规则可用求组形式表示了new Phone 
5.5新特性:make rule命令，在passes 方法中定义return pregmatch 
5.5新特性:make :factory Postfactory --model =post   
5.5新特性:自定义模板标签
在app service provide 中定义/blade ::if ("member",function(){return…})  
5.5新特性:简单的静态页面路由
route ::get ("/","welcome",["v"=>1]);
5.5新特性:consele 不用注册。


