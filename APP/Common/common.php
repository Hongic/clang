<?php

/*
 * 公共函数
 */

//截取utf8字符串 

function utf8Substr($str, $from, $len) {
    return preg_replace('#^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,' . $from . '}' .
            '((?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,' . $len . '}).*#s', '$1', $str);
}

function l_r_trim($str) {
    echo trim($str);
}
?> 

