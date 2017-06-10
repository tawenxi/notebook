### 作用  
可以获得3维数据。  

### 使用  

User::with("comment"，"book","hhhh.jjjj")->get()

-------
可以用一个或者多个参数，也可以嵌套

User::with("comment"=>function($query){
$query->where(…)

})->get()  
也可以接一个闭包来查询


