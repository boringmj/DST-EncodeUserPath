<?php

/**
 * 饥荒 TheNet:EncodeUserPath(string) 函数的 PHP 实现
 * 
 * @param string $str
 * @return string
 */
function encode($str): string {
    $list="0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz-_";
    if(substr($str,2,1)== "_")
        $str=substr($str,0,2).substr($str,3);
    $str=str_split($str,5);
    $result_str='';
    foreach($str as $v) {
        $base=2;
        $result='0';
        $len=strlen($v);
        for($i=0;$i<$len;$i++) {
            $pos=strpos($list,substr($v,$i,1));
            $value=substr($list,((32/$base)*($pos%$base)),1);
            $last_pos=strpos($list,substr($result,-1))+floor($pos/$base);
            $last=substr($list,$last_pos,1);
            $result=substr($result,0,-1).$last.$value;
            $base*=2;
        }
        $result_str.=$result;
    }
    return $result_str;
}

// Demo
echo encode('ABCdef123'); // 52PIF8KG886

?>
