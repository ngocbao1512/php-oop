<?php
    abstract class test {
        public function demoFun() {
            echo "This is normal function";
        }
        abstract public function setValue($val);
        abstract public function getValue();
    }

    class demo extends test {
        public $num;

        public function setValue($val) {
            $this->num = $val;
        }
        public function getValue() {
            echo " <br>Value is : ".$this->num;
        }
    }

    $obj = new demo();
    $obj -> setValue(10);
    $obj->demoFun();
    $obj->getValue();
?>