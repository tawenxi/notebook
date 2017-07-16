### 变量提升
Js会先加载所有的Var申明，再运行具体的代码，这个过程叫做变量提升  
### 区块内的变量和区块外的一样
### 数据类型
1. 数值
2. 字符串
3. 对象：数组 对象 函数
4. boolean
5. null
6. undefined
### 判断数据类型的方法  
1. typeof
2. instanceof
3. Object.prototype.Tostring 

### null和undefined的区别
null表示无，undefined表示未定义。
null转化成0，undefined转化成NaN。
1+null表示1,1+undefined 表示NaN
typeof null 是对象
typeof undefined 是undefined。

### 布尔
假的  
1. undefined
2. null
3. 0
4. NaN 非数字，但是任然是一个数值型 NaN===NaN 是假，isNAN（'ss'）是真，参数为具体数字的时候为假；
但是isNaN(['123']),isNaN([])为假；判断是不是NaN更靠谱的办法：function myisnan(var){
    return var!==var;
}
5. ''
其他都为真的，包括[],{}

### 数值的存储方式
所有的数值都是以64位浮点的形式存在
所以1===1.0
Infinity :表示无穷大有正负之分，一般的数学运算都不会报错；
Infinity比任何数都大除了NaN；
Infinity和NaN比较总是返回false
null和Infinity运算的时候会转化成0
undefined和Infinity运算总是返回NaN
isfinite()检测一个变量是不是正常的数值

### 字符串
字符串的只读属性



