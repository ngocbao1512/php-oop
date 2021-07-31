<?php
    class base {
        public $num;

        public function square() {
            echo "square is : ".$this->num*$this->num;
        }
    }

    class derived extends base {
        public $num1;
        public function cube() {
            echo "<br>square is ".$this->num1*$this->num1*$this->num1;
        }
    }

    $obj = new derived();
    $obj -> num = 3;
    $obj -> square();
    /* class derived inherit from class base so it can call function square in class base */

    $obj -> num1=3;
    $obj -> cube();
    /* cube is function of derived extends from base so class can't call function cube */
    /* ex : $obj2 = new base(); 
            $obj2 -> cube(); that is wrong, localhost will be return error can't excuted */
?>