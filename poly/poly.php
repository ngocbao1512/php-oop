<?php
    interface math {
        public function calculate();
    }
    class square implements math {
        public $num;
        public function __construct($val) {
            $this->num = $val;
        }
        public function calculate() {
            echo  "square is : " .$this->num*$this->num;
        }
    }
    class cube implements math {
        public $num;
        public function __construct($val) {
            $this->num = $val;
        }
        public function calculate() {
            echo "<br>Cube is: " . $this->num*$this->num*$this->num;
        }
    }

    $obj = new square(2);
    $obj->calculate();

    $objC = new cube(3);
    $objC->calculate();


?>
<!-- 
    implement : decription to start using a plan or system
    interface giống như một bản kế hoạch soạn trước và các class implements để thực thi 
 -->

