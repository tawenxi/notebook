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
favor中间表包含两个字段一个 post_id,一个是user_id;
增加关联记录的操作是 $user->favorite()->attach($post); 返回NULL
取消关联记录的操作是 $user->favorite()->detach($post);

在5.3中新增了toggle方法，可以代替attach 和detach方法。
操作发昂发是 $user->favorite()->toggle($post); 返回一个数组key分别是attach和detach。

-5.3新特性：make:notification PostPublished 邮件通知
$user->notify(new \App\Notifications\PostPublished($post));
就可以通知用户了。


-------

- 5.4新特性:make controller 有一个参数-r 和-m=post  
- 5.4新特性：路由可以使用链式调用，route::name('home')->prefix('admin')->middleware('admin')->get('/home',function(){ return 'home'})
- 5.4新特性：Hight Order Message
  $post->each->archive()  这个可以返回整个集合
  $post->map->archive()   而这个只返回 实际的archive()方法的返回结果也就是true
  $post->map->title; 就等于$post->pluch('title')
  Hight Order Message 只对contains,each,every,filter,first,map,partition,reject,sortBy,sortByDesc,sum 起作用。
- 5.4新特性：blade中的component标签，作用：可以代替@include标签
  @component('blade文件')
    @slot('heading')heading 是一个变量名
        hello,world
    @endslot
  @endcomponent



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

-----
PHP7新特性：$var ?? '默认值'


- manytomany 总结
    public function followers()
    {
        return $this->belongsToMany(self::class, 'followers', '少（我）', '多（目标）')->withTimestamps();
    }
$user->followers()->pluck('followers') 可以取得目标id的数组
$user->followers()->get() 可以取得带 pivot的二维集合；
save和attach效果一样，detach是删除记录的
save必须接对象，而attach和detach 可以接id叶可以接对象
toggle 可以接id也可以接对象。

# 站内信
+ php artisan make:notification NewUserFollowNotification
+ php artisan notification:table
    public function toDatabase($notifiable)
    {
        return [
        'name'=>\Auth::guard('api')->user()->name,
        ];  
    }

在控制器中用
$userToFollow->notify(new \App\Notifications\NewUserFollowNotification());
就可以在数据库中的notification表插入一条站内信了。
然后创建一个blade用来展示站内信，模板中使用$user->notifications 就可以拿到该用户的所有站内信。数据库字段notifiable_id 就是站内信的所有者id

# 使用(自定义Notification  User事件通知)发送邮件







