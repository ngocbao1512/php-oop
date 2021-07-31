<?php

    interface test {
        public function getValue();
        public function setValue($val);
    }

    class demo implements test {
        public $num;
        public function getValue() {
            echo " <br> Value is : " . $this->num;
        }
        public function setValue($val) {
            $this->num = $val;
        }
    }

    class demo1 implements test {
        public $num;
        public function getValue() {
            echo " <br> Value is : " . $this->num;
        }
        public function setValue($val) {
            $this->num = $val;
        }
    }

    $objDemo = new demo();
    $objDemo->setValue(10);
    $objDemo->getValue();

    $objDemo1 = new demo1();
    $objDemo1->setValue(200);
    $objDemo1->getValue();
?>