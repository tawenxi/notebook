# 主要命令

+ require:

```
require illuminate/html 
```
>用于通过命令行安装单个依赖包 

+ create-project  

```
create-project Laravel/laravel Sample "5.1.*" 
``` 
> 用于通过命令行安装单独的项目，指定目录  

+ composer update  

> 对composr.json文件中的依赖包进行升级处理，并且会自动更新composer.lock的内容。

+ composer install

> 对composer.lock中的固定版本(不会随着composer update自动更新)进行重装。对版本控制特别重要。
```
通常要删除vendor文件夹，再运行composer install把vendor文件夹还原到版本号的状态。另外.env文件是不要删除的。
```
> 如果没有composer.lock文件，则当运行install的时候会运行update

+ composer dump-autoload   

```

```

+ composer view laravel/laravel

```
用于查看具体信息
```

+ composer search laravel

```
搜索laravel相关包
```

+ composer 

```
列出所有命令
```

+ composer.json中的dev，指定开发环境需要下载的包，可以用install --no-dev忽视

+ conposer.json中的scripts.列出了安装后需要再执行的命令
```

```  
    好  

+ 。。。
  + ？？











