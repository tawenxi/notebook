在http/kernel.php中，注册中间件，有两种中间件，
- 一种是middleware,过滤所有的http请求，
- 一种是routermiddleware过滤指定的http请求。指定有两种方式，一种是通过路由指定，还有一种是通过控制器的构造方法用middleware方法指定。
> $request->user()可以获取当前用户模型

 auth::loginusingid($id)可以登录
