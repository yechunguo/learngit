<?php
header("content-type:text/html;charset=utf-8");
//定义一个小鸭类

class User
{
    public $name = 'AAAA';
}

$u1 = new User();
echo $u1->name;

echo '<hr>';
$u2 = clone $u1;
$u2->name = 'BBBB';
echo $u1->name;
