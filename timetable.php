<?php

$input= $_GET['timestable'];

for($i=1; $i<=10; $i++)
{
    echo "$input * $i = " . $input*$i ."<br>" ;
}