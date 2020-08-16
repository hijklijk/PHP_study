
主要讲分支和循环结构的替代语法

有时需要HTML和PHP进行混搭，如果使用原始的PHP代码会非常不美观

举例：九九乘法表

<table border=1>
<?php for($i=1;$i<10;$i++) { ?>
	<tr>
		<?php for ($j=1;$j<=$i;$j++){ ?>
		<td>
			<?php echo $i.'*'.$j.'='.$i*$j ?>
		</td> 
		<?php }?>
	</tr>
<?php }?>
</table>

php书写html中的大括号{}非常不美观，所以php提供了一种机制，可以不用写大括号：
for(;;){ ==> for (;;)
}		 ==> endfor;

以上九九乘法表的代码可以优化为如下

<table border=1>
<?php for($i=1;$i<10;$i++): ?>
	<tr>
		<?php for ($j=1;$j<=$i;$j++): ?>
		<td>
			<?php echo $i.'*'.$j.'='.$i*$j ?>
		</td> 
		<?php endfor?>
	</tr>
<?php endfor?>
</table>

php中替代语法主要对应分支结构和循环结构，均为同种模式：
左大括号使用冒号替代
右大括号使用end+替代

if(): endif;
switch(): endswitch;
for(;;): endfor
while
foreach
