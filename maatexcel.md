# Import



```
        Excel::load(storage_path('excel.xls'), function($reader) {
    // reader methods
            //dd($reader->all());

            })->dd( );  
    }

    Excel::load(storage_path('excel.xls'))->dd();
```

+  这三个dd的结果是一样的
+  其中回调函数的可选的
+  'force_sheets_collection' => false, 默认值，但是还是要把多余的sheets删除 返回返回RawsCollection
+  get()->groupBy('firstname');
+   echo $res=$import->first()->name;
+   echo $res=$import->get()->getTitle();
+   get 返回的是一张表  但是表叫做RowCollection,行叫做CellCollection
+   first 返回的是一行数据
+   $res=$import->takeRows(1)->get();
+    $res=$import->takeRows(1)->get();
     $res=$import->takeRows(1)->get();
+ 如果不加get（） 返回的是一个大的LaravelExcelReader
+ $res=$import->skipRows(1)->get();
+ $res=$import->skipRows(1)->skipColumns(1)->takeColumns(2)->get();先取后跳
+ $res=$import->skipRows(1)->skipColumns(1)->takeColumns(2)->get()->toArray();
+ $res=$import->skipRows(1)->skipColumns(1)->takeColumns(2)->toArray();   get()可以去掉。建议去掉  兼容object
+ each 可以遍历每一行数据  然后进行自操作返回本身的操作结果。
 ```
        $res=$import->skipRows(1)->skipColumns(1)->takeColumns(2)->each(
            function($row) {
                 $row->amount++;

    }
    );

 ```
+ $res1=Excel::selectSheetsByIndex(0)->load(storage_path("excel.xls"))->get(); 选表
+ $res1= $import->get(['name','account']); 选列
+ $reader->select(array('firstname', 'lastname'))->get();
+ 输出时间格式

```
$rows->each(function($row) {

    $created_at = $row->created_at->format('Y-m-d');

});
```

+ 设置编码格式

```
Excel::load('filename.csv', function($reader) {

}, 'UTF-8');
```

+ 转化
```
Excel::load('file.csv', function($file) {

    // modify stuff

})->export('csv');
```

+ // Disable calculation
$reader->calculate(false);

+ RowsCollection是以集合的形式包围的一个双层集合

集合在maatexcel的使用
  $res1= $import->all()->avg('amount'); 可以获得amount列的平均数
  $res1= $import->all()->all(); 可以剥离一个{} 但是毫无意义

+ 感悟：集合里是一个数组，数组的每一个元素的键值就相当于这个对象的属性并且可以用$collection->name 进行调用
```
   $res1= $import->all()->filter(function ($item) {
    return $item->account > 200;
});
```


+ 筛选：filter
```
$collection = collect([1, 2, 3, 4]);

$filtered = $collection->filter(function ($item) {
    return $item > 2;
});

$filtered->all();
```

```
  $res1= $import->all()->filter(function ($item) {
    return $item->account>200;
});
```

+ 筛选 where()#

以一对指定的「键／数值」筛选集合：

+ 排序 
``` $res1= $import->all()->sortByDesc('amount');```

+ 重新确认key
values()#

返回「键」重新被设为「连续整数」的新集合：


