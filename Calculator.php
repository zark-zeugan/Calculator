<?php
$a = (int)readline('Enter a number a = ');
$b = (int)readline('Enter a number b = ');
$op = readline('Select an operation = ');

switch($op)
{
    case('+'):
        echo 'The answer is : '.$c = $a+$b;
    break;

    case('-'):
        echo 'The answer is : '.$c = $a-$b;
    break;

    case('*'):
        echo 'The answer is : '.$c = $a*$b;
    break;

    case('/'):
        echo 'The answer is : '.$c = $a/$b;
    break;

    default :
    echo 'Sorry operation not identified !';

}

?>