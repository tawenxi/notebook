### 应用场景  
如果需要刚显示3列多行的一个淘宝式的一个页面，一个购买项目就是一个article标签。这里所有的数据库字段都放在一列中，所以需要用到chunk来进行单元格行列构造。可以用div来代替table实现。一行就是<div class="row">

### 具体代码
```
@foreach($articles->chunk(3) as $row)
{
<div class=row>
@foreach($row as $article)
{
<article class="col-md-4">
$article->…
</article>
}
}

```
### 感悟
chunk 都是放在foreach中进行排队取数据。