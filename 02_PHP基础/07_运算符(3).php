# 计算机码

计算机码：计算机实际存储数据的时候，采用的编码规则（二进制规则）
分为：原码、反码、补码，（数值本身最左边一位用来充当符号位，正数为0，负数为1）

原码：数据本身从10转2进制得到的结果
	正数：左边符号为0（正数的原码、反码和补码都是原码本身）
	负数：左边符号为1
反码：针对负数，符号位不变，其他位取反
补码：针对负数，反码+1

系统中存在两个0，+0和-0


# 位运算符

取出计算机中最小的单位（位bit）进行运算
& 按位与 两个都为1，结果为1，否则为0
| 按位或 两个有一个为1，结果为1
~ 按位非 1变0,0变1
^ 按位异或 两个相同为0，两个不同为1
<< 按位左移 全32位左移一位，右边补0
>> 按位右移 全32位右移一位，左边补符号位内容（正数补0，负数补1）

注意：这两点是关键！！！
1. 系统进行任何运算的时候都是用的补码
2. 运算结束后都必须转换成原码才是最终要显示的数据

按位左移：乘以2的操作
按位右移：除以2的操作（不完全正确，整数除以2会出现小数）


# 运算符优先级

优先级：多种运算符同时存在时，如何结合运算

大概的是：算数运算符（优于）位运算符（优于）逻辑运算符 （不是绝对）

查看手册：运算符/运算符优先级
