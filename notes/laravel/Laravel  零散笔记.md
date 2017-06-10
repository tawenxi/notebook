## helper function

Laravel 包含一些多样化的 PHP 辅助函数函数。许多在 Laravel 自身框架中使用；如果你觉得实用，也可以在你应用当中使用。

[helper function](https://docs.golaravel.com/docs/5.1/helpers/)

https://docs.golaravel.com/docs/5.1/helpers/
-------
## view snippet  
可以用View::make或者View::makecompact或者View::render  

## View::composer来在服务提供者中boot视图组件
```
public function boot() { // 使用对象型态的视图组件...
 view()->composer( 'profile', 'App\Http\ViewComposers\ProfileComposer' ); // 使用闭包型态的视图组件... 
view()->composer('dashboard', function ($view) { }); } 
-------
在组件中定义composer方法  
public function compose(View $view) { $view->with('count', $this->users->count()); }
```

## 也可以在服务提供者中boot  View::share
```
public function boot() { 
view()->share('key', 'value'); 
}
```
具体链接
[链接](https://docs.golaravel.com/docs/5.1/views/)

## 服务提供者的boot方法
来做一些需要需要用到其他依赖的场景。




