<?php


//check odd even number


//print_r($_GET['number']);

$user_input= ($_GET['number']);

if($user_input%2==0)
{
    echo "Even";

}
else
{
    echo "Odd";

}