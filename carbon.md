# carbon 时间处理类

+ 申明

使用
你需要通过命名空间导入 Carbon 来使用，而不需每次都提供完整的名称。

use Carbon\Carbon;
```
    public function boot()
    {
        \Carbon\Carbon::setLocale('zh');
    }

```



+ 基本应用  


```
$now = Carbon::now();                    //2016-11-03 14:13:16
echo Carbon::now('Europe/London'); //2016-10-14 20:21:20
除 now() 外，还提供了 today()、tomorrow()、yesterday() 等静态函数，
$today = Carbon::today();                //2016-11-03 00:00:00
$tomorrow = Carbon::tomorrow();          //2016-11-04 00:00:00
$yesterday = Carbon::yesterday(); 
以上输出结果其实是一个 Carbon 类型的日期时间对象：

```
要想获取字符串类型的日期，可以使用下面的代码：使用toDateTimeString
```
echo Carbon::today()->toDateTimeString();
echo Carbon::yesterday()->toDateTimeString();
echo Carbon::tomorrow()->toDateTimeString();

```

Carbon 的方法返回的为一个日期时间对象。虽然它是一个对象，但是你却可以直接使用 echo 输出结果，因为有 __toString 魔术方法。但是如果你想把它转为字符串，可以使用 toDateString 或 toDateTimeString 方法：

```
echo Carbon::now()->toTimeString(); //2016-10-14
echo Carbon::now()->toDateString(); //2016-10-14
echo Carbon::now()->toDateTimeString(); //2016-10-14 20:22:50
```

###日期解析###
你还可以使用 parse 方法解析任何顺序和类型的日期（结果为 Carbon 类型的日期时间对象）：

+ 直接接收一个时间
> 还是喜欢用parse
echo Carbon::parse('2016-10-15')->toDateTimeString(); //2016-10-15 00:00:00
echo Carbon::parse('2016-10-15')->toDateTimeString(); //2016-10-15 00:00:00
echo Carbon::parse('2016-10-15 00:10:25')->toDateTimeString(); //2016-10-15 00:10:25
 
echo Carbon::parse('today')->toDateTimeString(); //2016-10-15 00:00:00
echo Carbon::parse('yesterday')->toDateTimeString(); //2016-10-14 00:00:00
echo Carbon::parse('tomorrow')->toDateTimeString(); //2016-10-16 00:00:00
echo Carbon::parse('2 days ago')->toDateTimeString(); //2016-10-13 20:49:53
echo Carbon::parse('+3 days')->toDateTimeString(); //2016-10-18 20:49:53
echo Carbon::parse('+2 weeks')->toDateTimeString(); //2016-10-29 20:49:53
echo Carbon::parse('+4 months')->toDateTimeString(); //2017-02-15 20:49:53
echo Carbon::parse('-1 year')->toDateTimeString(); //2015-10-15 20:49:53
echo Carbon::parse('next wednesday')->toDateTimeString(); //2016-10-19 00:00:00
echo Carbon::parse('last friday')->toDateTimeString(); //2016-10-14 00:00:00

###构造日期###

```
$year = '2015';
$month = '04';
$day = '12';
 
echo Carbon::createFromDate($year, $month, $day); //2015-04-12 20:55:59

$hour = '02';
$minute = '15':
$second = '30';
 
echo Carbon::create($year, $month, $day, $hour, $minute, $second); //2015-04-12 02:15:30
此外，还可以传递一个有效的时区作为最后一个参数。
```

###日期操作###

```
echo Carbon::now()->addDays(25); //2016-11-09 14:00:01
echo Carbon::now()->addWeeks(3); //2016-11-05 14:00:01
echo Carbon::now()->addHours(25); //2016-10-16 15:00:01
echo Carbon::now()->subHours(2); //2016-10-15 12:00:01
echo Carbon::now()->addHours(2)->addMinutes(12); //2016-10-15 16:12:01
还是喜欢用modify
echo Carbon::now()->modify('+15 days'); //2016-10-30 14:00:01
echo Carbon::now()->modify('-2 days'); //2016-10-13 14:00:01
```

###日期比较###

在 Carbon 中你可以使用下面的方法来比较日期：

min –返回最小日期。
max – 返回最大日期。
eq – 判断两个日期是否相等。
gt – 判断第一个日期是否比第二个日期大。
lt – 判断第一个日期是否比第二个日期小。
gte – 判断第一个日期是否大于等于第二个日期。
lte – 判断第一个日期是否小于等于第二个日期。

```
    echo Carbon::now()->tzName;                        // America/Toronto
    $first = Carbon::create(2012, 9, 5, 23, 26, 11);
    $second = Carbon::create(2012, 9, 5, 20, 26, 11, 'America/Vancouver');
     
    echo $first->toDateTimeString();                   // 2012-09-05 23:26:11
    echo $first->tzName;                               // America/Toronto
    echo $second->toDateTimeString();                  // 2012-09-05 20:26:11
    echo $second->tzName;                              // America/Vancouver
     
    var_dump($first->eq($second));                     // bool(true)
    var_dump($first->ne($second));                     // bool(false)
    var_dump($first->gt($second));                     // bool(false)
    var_dump($first->gte($second));                    // bool(true)
    var_dump($first->lt($second));                     // bool(false)
    var_dump($first->lte($second));                    // bool(true)

    $first->setDateTime(2012, 1, 1, 0, 0, 0);
    $second->setDateTime(2012, 1, 1, 0, 0, 0);         // Remember tz is 'America/Vancouver'
     
    var_dump($first->eq($second));                     // bool(false)
    var_dump($first->ne($second));                     // bool(true)
    var_dump($first->gt($second));                     // bool(false)
    var_dump($first->gte($second));                    // bool(false)
    var_dump($first->lt($second));                     // bool(true)
    var_dump($first->lte($second));                    // bool(true)

```

```
$first = Carbon::create(2012, 9, 5, 1);
$second = Carbon::create(2012, 9, 5, 5);
var_dump(Carbon::create(2012, 9, 5, 3)->between($first, $second));          // bool(true)
var_dump(Carbon::create(2012, 9, 5, 5)->between($first, $second));          // bool(true)
var_dump(Carbon::create(2012, 9, 5, 5)->between($first, $second, false));   // bool(false)


```

```

$dt = Carbon::now();
 
$dt->isWeekday();
$dt->isWeekend();
$dt->isYesterday();
$dt->isToday();
$dt->isTomorrow();
$dt->isFuture();
$dt->isPast();
$dt->isLeapYear();
$dt->isSameDay(Carbon::now());
$born = Carbon::createFromDate(1987, 4, 23);
$noCake = Carbon::createFromDate(2014, 9, 26);
$yesCake = Carbon::createFromDate(2014, 4, 23);
$overTheHill = Carbon::now()->subYears(50);
var_dump($born->isBirthday($noCake));              // bool(false)
var_dump($born->isBirthday($yesCake));             // bool(true)
var_dump($overTheHill->isBirthday());              // bool(true) -> default compare it to today!

```


### 日期Diff###
```
$mm->diffForHumans();
$mm->diffIndays();
$mm->diffInmonths();
Carbon::now()->modify("+2 year")->diffForHumans(Carbon::now()->modify("+365 days"));  

```


