
流程控制：代码执行的方向

# 控制分类
顺序结构：从上往下顺序执行（最基本结构）
分支结构：给定一个条件，有多种可执行方式，根据条件执行某一段代码
循环结构：在某个条件控制的范围内，指定的代码块可以重复执行

# 顺序结构

最基本的结构，所有代码默认都是从上往下依次执行，系统默认规定

# 分支结构

php中的分支结构主要两种：if和switch

# if分支

给定一个条件，同时为该条件设置多种情况，通过条件判断来实现具体的执行段
基本语法：if分支在php中有多种执行方式

最简if：只有一段代码，但是可以选择是否执行

if(condition_expr){
	meet_condition_expr;
}

基础if：有两面性，满足条件与否都有可执行代码

if(condition_expr){
	meet_condition_expr;
} else {
	not_meet_condition_expr;
}

复杂if：多重选择

如果条件特别多才会采用复合if形式
1. 如果条件比较单一，会采用elseif复合方式
2. 如果条件不一致，建议使用嵌套，但是不宜有太多层嵌套


if(condition_expr1){
	expr;
} else if (){
	expr
} else if 
...
else {
}


if分支适用于所有的条件判断（分支结构）

<?
$day = 'sunday';

// 最简if
if($day == 'sunday'){
	echo 'go out';
}

// 基础if
if($day == 'sunday'){
	echo 'go out';
} else {
	echo 'go to work';
}

// 复杂if
if($day == 'sunday'){
	echo 'go out';
} else if ($day = 'saturday'){
	echo 'play at home';
} else {
	echo 'work';
}
?>

# switch分支

有一组情形存在，同一个条件，通常有多个值，但是每个值都会有对应不同的代码要执行
switch的判断方式，是将条件放到分支结构内部判断

switch(condition_expr){
	//所有条件判断，逐个执行
	case value1: 
		exec_expr1; //条件表达式的结果与value1相等(==)
		break;  // 如果条件匹配成功，那么就结束switch
	case value2: 
		exec_expr2;
		break;
	...
	case valueN: 
		exec_exprN;
		break;
	default   //如果所有的case都不匹配时
		exec_expr;
		break;
}

<?
// 根据日期做不同的事情
$day = 1;

//从1-7做不同的事情
switch($day){   //条件是个具体的值
	case 1:
		echo '1'; break;
	case 2:
		echo '2'; break;

	// 省略一部分

	default:
		echo 'error'; break;
}
?>

if和switch的选择
1. if能做所有的分支结构的事情
2. switch处理的是条件比较多，同时有比较单一，而且是固定值匹配的分支结构