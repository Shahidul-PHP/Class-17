<?php 

// parent/ main company
class companyOne{
    function body(){
        echo "car body manufacturer";
        echo "<br>";
    }
    function enginee()
    {
        echo "car enginee manufacturer";
        echo "<br>";
    }
    function wheel()
    {
        echo "car wheel manufacturer";
        echo "<br>";
    }
}

// child/ second company
class companyTwo extends companyOne
{
    function ac()
    {
        echo "car AC manufacturer";
        echo "<br>";
    }
    function horn()
    {
        echo "car Horn";
        echo "<br>";
    }
    function headlight()
    {
        echo "car headlight manufacturer";
        echo "<br>";
    }
    function call_protected()
    {
        return $this->horn();
    }
}

$objectOfCar = new companyTwo;

$objectOfCar->call_protected();
$objectOfCar->body();








?>