
数据类型: data type 存储的数据本身的类型,而不是变量的类型
php是弱类型语言,变量本身没有数据类型

# php的八种数据类型

分为3大类, 8小类

简单/基本数据类型:4小类
- 整型 int/integer 系统分配4个字节存储,表示整数类型
- 浮点型 float/double 系统分配8个字节存储,表示小数或者整型存不下的整数
- 字符串型: string 系统根据实际长度分配,表示字符串
- 布尔类型: bool/boolean 只有两个值 true/false

复合数据类型:2小类
- 对象类型: object 存放对象(面向对象)
- 数组类型: array 存储多个数据(一次性0)

特殊数据类型:
- 资源类型: resource 存放资源数据(php外部数据 如数据库 文件等)
- 空类型: NULL 只有一个值就是NULL 不能运算

# 类型转换

类型转换: 很多条件下,需要指定数据类型,需要外部数据(当前取得的数据)转换成目标数据类型

php有2种类型转换方式
1. 自动转换: 系统根据需求自己判定,自己转换(用的较多,但是效率低)
2. 强制转换: 人为根据需要的目标类型转换
强制转换规则: 在变量之前增加一个括号(),然后再里面写上对应的数据类型:int/integer....,注意设置为NULL类型要用unset()


转换过程中,用的比较多的是转布尔类型(判断)和转数值类型(算术运算)

其他类型转布尔: true/false, php中比较少类型转换成false, 大部分都是true,
可以查阅php手册>附录>PHP 类型比较表 

表达式----------boolean : if($x)
$x = "";----------FALSE
$x = null;----------FALSE
var $x;----------FALSE
$x is undefined----------FALSE
$x = array();----------FALSE
$x = false;----------FALSE
$x = true;----------TRUE
$x = 1;----------TRUE
$x = 42;----------TRUE
$x = 0;----------FALSE
$x = -1;----------TRUE
$x = "1";----------TRUE
$x = "0";----------FALSE
$x = "-1";----------TRUE
$x = "php";----------TRUE
$x = "true";----------TRUE
$x = "false";----------TRUE

其他类型转数值的说明:
1. 布尔true为1, false为0
2. 字符串转数值有自己的规则
	以字母开头的字符串---0
	以数字开头的字符串,渠道碰到字符串位置,不会同时包含两个小数点


# 类型判断

通过类型判断函数,判断变量,返回变量所保存数据的数据类型(相同结果为true, 不同为false)
是一组以is_开头后面跟类型名字的函数 is_XXX(var)

布尔类型不能用echo查看,可以用var_dump()查看 var_dump(var1, var2, ...)

含有一组函数可以获取以及设定数据的类型
gettype(var): 获取类型,得到的是该类型对应的字符串
settype(var, type): 设定数据类型,与强制转换不同
1. 强制转换变量名, 是对数据值复制的内容进行处理, 不会处理实际存储的内容
2. settype会改变数据本身



<?php

// 创建数据
$a = 'abc1.1.1';
$b = '1.1.1abc';

// 自动转换
// 算术+运算 系统先转换成数值类型(整型和浮点型) 然后运算
echo $a + $b;   // 1.1  (0 + 1.1)

// 强制转换
echo '<br/>',(float)$a;  // 0
echo '<br/>',(float)$b;  // 1.1

// 判断数据类型
echo '<br/>';
var_dump(is_int($a));  //bool(false)
echo '<br/>';
var_dump(is_string($a));  //bool(true)

echo '<br/>';
echo gettype($a);  //string  强制转换不会修改原有数据

echo '<br/>';
var_dump(settype($b,'int'));  //bool(true)

echo '<br/>';
echo gettype($b),$b; //integer, 1  settype修改了数据本身

?>