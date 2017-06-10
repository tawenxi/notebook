- make:console console name
    会生成comend 文件，

- 其中有一个signature属性，是用来定义命令的，make:hello {name?}或者make:hello {name=tawenxi}就是一个signature..  
- 还有一个handle方法是用来写逻辑的
- 在handle方法中写
    $this->info("hello,my boy ".$this->argument("name"))

- 然后在console/kernel.php文件中，注册console文件。就完成了php artisan创建。
