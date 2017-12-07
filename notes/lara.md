 + 在blade 中可以使用{{ $name or '无名大侠' }} 的这种语法
 + 如果要原样输出HTML 可以使用{!!'<cript>alert('你好')</cript>'!!}，不建议使用，但是可以使用{{{<html><head><title></title></head> <body></body></html>}}}来输出HTML代码
 + @{{sss}}输出{{sss}}， 不解析
 + 和fillable相对的是guarded
 + $hidden 表示隐藏的 也就是查询的时候不显示的字段 比如Password字段
 + docker： docker version    service docker start