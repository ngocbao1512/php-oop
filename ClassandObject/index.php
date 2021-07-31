<?php
    class test {
        var $num;
        function getValue() {
            echo "value of num is: " . $this->num."<br>";
        }
    }

    $obj = new test();
    $obj1 = new test();
    $obj -> num = 10;
    $obj -> getValue();
    $obj1 -> num = 20;
    $obj1 -> getValue();

    
?>

<!-- '->' is equivalent to the dot operator in java, use to access variables available or function in that context  -->
