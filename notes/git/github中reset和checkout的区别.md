git reset用于重置操作
---------
+ 重置某个文件的stage操作  
  


> git reset HEAD -- file；清空add命令向暂存区提交的关于file文件的修改（Ustage）；这个命令仅改变暂存区，并不改变工作区，这意味着在无任何其他操作的情况下，工作区中的实际文件同该命令运行之前无任何变化
>
```
可以直接用git reset filename
```

+ reset用于回到过去操作

> git reset --hard HEAD  


git checkout
===

git checkout -- file；
-------

撤销对工作区修改；这个命令是以最新的存储时间节点（add和commit）为参照，覆盖工作区对应文件file；这个命令改变的是工作区
git checkout commit号码或者branch -- file
-------
相当于指定版本的checkout -f

 `checkout -f` 

checkout
-------
检查Head Index和工作区的区别

Checkout branch
-------
切换分支

checkout -b branch
-------
创建切换分支
