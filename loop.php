<?php

//echo str_repeat('*', 10);
/** 
for($i=1; $i<=20; $i++)
{
    //echo "* $i <br>";
    echo str_repeat("*",$i). "<br>";

}
*/


//factorial
/** 
$number= 4;
$result=1;

for($i=1; $i<=$number; $i++)
{
    $result=$result*$i;
}

echo $result;
*/


//times table
/** 
$num=2;
for($i=1; $i<=10; $i++)
{
    echo "$num * $i = " . $num*$i ."<br>" ;

}
*/



//nested loop--- times table

/** 
$num=10;
for($i=1; $i<=$num; $i++)
{
    for($j=1; $j<=10; $j++ )
    {
        echo "$i * $j = " . $i*$j ."<br>" ; 
    }

}
*/


//while loop

/** 
$i=1;
while($i<=10)
{
    echo "$i Hellow <br>";
    $i++;
}
*/

//do while loop -- 

//condition false holeo 1 bar run kore
/** 
$i=1;
do{
    echo "$i Hellow <br>";
    $i++;
}

while($i<=10);
*/


//foreach loop
/** 
$fruits=[
    'mango',
    'apple',
    'lemon'
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<ul>
    <?php
        foreach($fruits as $index=> $fruit) //array te giye data iteration kora
        {
            echo "<li>" .++$index. "$fruit </li>";
            //++ (0) theke start na hoiye (1) theke hobe,pre increment
        }
            
    ?>    
</ul>

    
</body>
</html>
*/


//--- scoping ---

/** 
$name='sayed';
function printName()
{
    echo $name; // local variable echo korte hoi funtion er bahire

}
echo $name;
printName();
*/


//globals variable
/** 
$GLOBALS['name']='sayed';
function printName()
{
   echo $GLOBALS['name']; // global hole bahire call dile kaj kore

}
echo $name;
printName();
*/

//globals variable
/** 
$GLOBALS['name']='sayed';
function printName()
{
    $GLOBALS['age']= 26; // global hole vitore call dileo kaj kore
    echo $GLOBALS['name'];

}
printName();
echo $GLOBALS['age'];
*/
?>






<!-- 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP with HTML</title>
</head>

<body>

    <select>
    
        <?php

         //for($i=2023; $i >= 1901; $i--)
          //echo  "<option> $i </option>";

        ?>
      
    </select> 
 
</body>
</html>  

-->
