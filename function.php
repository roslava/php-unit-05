<?php

function t1()
{
    global $a, $b, $out1;
    $i = $a;
    while ($i <= $b) {
        $out1 = $out1 . $i . " ";
        $i = $i + 1;
    }
    echo $out1;
//    var_dump($out1);
}


function t2()
{
    global $d, $e, $out2;
    $i = $d;
    while ($i <= $e) {
        $out2 = $out2 . $i . " ";
        $i = $i + 2;
    }
    echo $out2;
// var_dump($out2);
}


function t3()
{
    global $f, $g, $out3;
    $i = $f;
    while ($i >= $g) {
        $out3 = $out3 . $i . " ";
        $i = $i - 2;
    }
    echo $out3;
// var_dump($out3);
}


function t4()
{
    global $num1, $num2, $out4;
    if ($num1 > $num2) {
        $num1 += +$num2 - $num2 = $num1;
    }
    $i = $num1;
    while ($i <= $num2) {
        $out4 = $out4 . $i . " ";
        $i = $i + 1;
    }
    echo $out4;
// var_dump($out4);
}






//function mb_strrev($str){
//    $r = '';
//    for ($i = mb_strlen($str); $i>=0; $i--) {
//        $r .= mb_substr($str, $i, 1);
//    }
//    return $r;
//}
//
//echo mb_strrev("☆❤world"); // echo "dlrow❤☆"






function t5()
{
    global $out5;
    $i = 1;
    while ($i < 2) {
        $out5 = $out5 . " " . strrev($out5);
        $i = $i + 1;
    }
    echo $out5;
 var_dump($out5);
}


function t6()
{
    global $out6, $k;
    $i = 1;
    while ($i <= $k) {
        $out6 = $out6 . $i . " * ";
        $i = $i + 1;
    }
    echo $out6;
// var_dump($out6);
}


function t7()
{
    global $out7, $m;
    $i = 1;
    while ($i <= $m) {
        ($i % 2 == 0) ? $out7 = $out7 . $i . " ** " : $out7 = $out7 . $i . " * ";
        $i = $i + 1;
    }
    echo $out7;
// var_dump($out7);
}


function t8()
{
    global $out8, $n;
    $i = 1;
    while ($i <= $n) {
        $out8 = $out8 . $i . " " . 0 . " ";
        $i = $i + 2;
    }
    echo $out8;
// var_dump($out8);
}


function t9()
{
    global $out9;
    $i = 0;
    while ($i < 3) {
        $out9 = $out9 . "***<br>";
        $i++;
    }
    echo $out9;
// var_dump($out9);
}


function t10()
{
    global $out10, $t;
    $i = 2020;
    while ($i >= $t) {
        if ($i % 2 == 0) {
            $out10 = $i . "<br>" . $out10;
        }
        $i--;
        if ($i % 2 != 0) {
            continue;
        }
    }
    echo $out10;
// var_dump($out10);
}


function t11()
{
    global $out11, $num1, $num2;
    $sum = 0;
    $i = $num1;
    while ($i < $num2) {
        $sum = $sum + $i;
        $out11 = $sum;
        $i = $i + 1;
    }
    echo $out11;
//var_dump($out11);
}


function t12()
{
    global $out12, $num4, $num5;
    $multi = 1;
    $i = $num4;
    while ($i < $num5) {
        $multi = $multi * $i;
        $out12 = $multi;
        $i = $i + 1;
    }
    echo $out12;
// var_dump($out12);
}