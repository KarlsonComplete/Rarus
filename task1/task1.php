<?php
$s1 = '()';
$s2 = '(())';
$s3 = '((()))';
$s4 = '(';
$s5 = '((())';
$s6 = '))))((((';


function isCorrect($string){
        $len = mb_strlen($string);
        $stack = [];

        for ($i=0; $i<$len;$i++){
            $sim=mb_substr($string,$i,1);
            if ($sim =='('){
                $stack[]=$sim;
               //var_dump($stack);
            }elseif ($sim == ')'){
                if (!$last = array_pop($stack)){
                    return false;
                }
                if ($sim === ')' && $last !='('){
                    return false;
                }
            }
        }
        return count($stack) === 0;
}

if(isCorrect($s5)) {
    echo 'Строка верна';
}
else {
    echo 'Строка не верна';
}



