# phpsnippet 的使用说明

+ doc_c

```
/**
 * undocumented class
 *
 * @package default
 * @author 
 **/
class 
{
} // END class 

```

+  $_按下ESC再按TAB  



```
$_COOKIE['variable']
$_ENV['variable']
$_FILES['variable']
$_GET['variable']
$_POST['variable']
$_REQUEST['variable']
$_SERVER['variable']
$_SESSION['variable']
```




+ this+TAB


```$this->```


+ /**

```/**
 * 
 */
 ```

+ am--

```
$name = array_map(function ($value) {
    
}, $array);
```


+  array


```
$arrayName = array('' => , );
```


+ c

```
/**
 * summary
 */
class Name extends ExtendsName
{
    /**
     * summary
     */
    public function __construct()
    {
        
    }
}
```




+ case
>
case expr:
	
	break;
>


+ class

```
/**
 * summary
 */
class Name extends ExtendsName
{
    /**
     * summary
     */
    public function __construct()
    {
        
    }
}
```


+ closure

```
$name = function ($value) use ($name)  {
    
    };
```


+ con



```function __construct($foo = null)
{
    $this->foo = $foo;
}```


+ def and def?

```
define('', '');
```


+ do

```
do {
    
}while (expr);
```


+ doc_c


```
/**
 * undocumented class
 *
 * @package default
 * @author 
 **/
class 
{
} // END class
```


+ doc_d

```
/**
 * undocumented constant
 **/
define(, );
```


+ doc_f


```
/**
 * undocumented function
 *
 * @return void
 * @author 
 **/
function ()
{
}
```


+ doc_i


```
/**
 * undocumented class
 *
 * @package default
 * @author 
 **/
interface 
{
} // END interface
```


+ doc_s


```
/**
 * undocumented function
 *
 * @return void
 * @author 
 **/
function ();
```


+ doc_v


```
/**
 * undocumented class variable
 *
 * @var string
 **/
var $;
```


+ doc_s


```
/**
 * undocumented function
 *
 * @return void
 * @author 
 **/
function ();
```


+ echo


```
echo 'string';
```


+ else


```
else {
    
}
```



+ elseif


```
elseif (condition) {
    # code...
}
```



+ ethis


```
echo $this->
```


+ ev


```
echo $
```


+ f


```
function name()
{
    
}
```


+ flatten


```
$return = array();
array_walk_recursive($array, function ($x) use (&$return) { $return[] = $x; });
```


+ for


```
for ($i = 0; $i < ; $i++) {
    
}
```


+ foreach


```
foreach ($variable as $key => $value) {
    # code...
}

```

+ foreachk


```
foreach ($collection as $key => $value) {
    
}
```


+ fpri


```
final private function name($)
{
    
}
```


+ fpub


```
final public function name($)
{
    
}
```


+ fpubs


```
final public static function name($)
{
    
}
```


+ fun


```
public function name($value='')
{
    
}
```


+ getter


```
/**
 * @return type
 */
public function getName()
{
    return $this->name;
}
```


+ setter


```
/**
 * @param type $name
 */
public function setName($name)
{
    $this->name = $name;
    return $this;
}
```

+ gm


```
/**
 * @return type
 */
public function getName($name)
{
    return $this->name
}
```


+ i


```
interface Name
{
    
}
```


+ if?


```
$retVal = (condition) ? a : b;
```


+ if


```
if (condition) {
    # code...
}
```


+ ifelse


```
if (condition) {
    # code...
} else {
    # code...
}
```



+ inc


```
include 'file';
```


+ is


```
isset($var)
```


+ m


```
public function name()
{
    
}
```


+ n


```
namespace Qualified\Name;
```




+ namespace;



```
namespace Qualified\Name;
```




+ p


```
/**
 * @var [type]
 */
private $name;
```



+ pr


```
print_r();
```



+ pre


```
print_r($); exit;
```



+ pri


```
private function name($)
{
    
}
```




+ pro


```
protected function name($)
{
    
}
```



+ pub


```
public function name($)
{
    
}
```



+ pubs


```
public static function name($)
{
    
}
```



+ r


```
return;
```



+ req


```
require 'filename';
```



+ req1


```
require_once 'filename';
```


+ reqd


```
require dirname(__DIR__) . 'filename';
```



+ ret


```
return;
```


> 等同于r

+ ret0


```
return false;
```



+ ret1


```
return true;
```



+ retf


```
return false;
```



+ rett


```
return true;
```



+ rt


```
return $this
```



+ rv


```
return $name;
```



+ self


```
self::
```



+ sm


```
/**
 * @param type $name
 */
public function setName($name)
{
    $this->name = $name;
    return $this;
}
```



+ switch


```
self::switch (variable) {
    case 'value':
        # code...
        break;
    
    default:
        # code...
        break;
}
```


+ t


```
$this->
```



+ this


```
$this->
```



+ throw


```
throw new Exception("Error Processing Request", 1);
```




+ trait


```
/**
 * summary
 */
trait Name
{
    public function name(params...)
    {
        // code...
    }
}
```



+ throw


```
throw new Exception("Error Processing Request", 1);
```




+ try


```
try {
    
} catch (Exception $e) {
    
}
```




+ use


```
use Qualified\Name;
```





+ vd


```
var_dump($);
```




+ vde


```
var_dump($); exit;
```




+ while  



```
while (expr) {}
```
    





