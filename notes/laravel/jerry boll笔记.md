- $request->all()是一个数组
   之后可以用$a=$request->all()
   $a[other]="other"
    Model::create($a)

- 模型有一个latest方法可以倒序时间排序后面接get,当然还有oldest