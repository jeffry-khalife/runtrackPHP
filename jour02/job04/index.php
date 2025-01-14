<?php 

for ( $i=0; $i<=100; $i++)
{
    if ($i % 3 === 0 && $i % 5 === 0) {
        echo "FizzBuzz";
        echo "<br>";
    }
    elseif ($i % 5 === 0) {
        echo "Buzz";
        echo "<br>";
    }
    elseif ($i % 3 === 0) {
        echo "Fizz";
        echo "<br>";
    }
    else {
    echo $i;
    echo "<br>";
    }       
}
//Test avec swtich et case
/* 
for ( $i=0; $i<=100; $i++)
{
    switch ($i) {
        case $i % 3 === 0:
            echo "Fizz";
            echo "<br>";
        case $i % 5 === 0:
            echo "Buzz";
            echo "<br>";
        case  $i % 3 && $i % 5 === 0:
            echo "FizzBuzz";
            echo "<br>";
        case $i;
            echo $i;
            echo "<br>";
    }       
}
*/

?>