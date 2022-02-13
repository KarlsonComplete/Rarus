<?php
$s1 = '()';
$s2 = '(())';
$s3 = '((()))';
$s4 = '(';
$s5 = '((())';
$s6 = '))()))';

    function isCorrect($string){
        # Массив скобок
        $brackets = array(

            array('(', ')')
        );
            var_dump($brackets);
           echo '<br>';

        # Обходим массив скобок
        foreach( $brackets as $bracket ){
            # Считаем количество
            if( substr_count($string, $bracket[0]) != substr_count($string, $bracket[1]) )
                # Если количество не совпадает - ошибка
                return false;
        }

        # По умолчанию
            return true;
    }


if(isCorrect($s2)) {
    echo 'Строка верна';
}
else {
    echo 'Строка не верна';
}

