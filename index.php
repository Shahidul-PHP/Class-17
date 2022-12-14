<?php 

// code in OOP concept

class room{
    function one(){
        echo "this is room number 605";
    }
    function two()
    {
        echo "this is room number 602";
    }
    function three()
    {
        echo "this is room number 502";
    }
}

$objOfRoom = new room;

$objOfRoom->one();
echo '<br>';
$objOfRoom->two();
echo '<br>';
$objOfRoom->three();
echo '<br>';

?>