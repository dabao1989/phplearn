<?php
/**
 * Created by PhpStorm.
 * User: liuyibao
 * Date: 2018/2/27
 * Time: 下午1:42
 */

$a = 1;
$a = $a << 2; //左移两位
echo $a, ":", decbin($a), "\n"; //decbin()获取int类型的二进制表示字符串

$a = ~ $a; //取反
echo $a,":", decbin($a), "\n";

/*The size of an integer is platform-dependent, although a maximum value of about two billion is the usual value (that's
 32 bits signed). 64-bit platforms usually have a maximum value of about 9E18, except on Windows prior to PHP 7, where
it was always 32 bit. PHP does not support unsigned integers. Integer size can be determined using the constant PHP_INT_SIZE,
 maximum value using the constant PHP_INT_MAX since PHP 5.0.5, and minimum value using the constant PHP_INT_MIN since PHP 7.0.0.*/

//echo PHP_INI_SIZE;//php7
echo PHP_INT_MAX;