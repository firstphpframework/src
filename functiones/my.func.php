<?php
if(!function_exists('myfunc'))
{
    function myfunc($time)
    {
         $week_cn = array('七','一','二','三','四','五','六');
         return date('Y',$time).'年'.date('m',$time).'月'.date('d',$time).'日 '.date('H',$time).'时'.date('i',$time).'分'.date('s',$time).'秒 '.'星期'.$week_cn[date('w',$time)];
    }
}
