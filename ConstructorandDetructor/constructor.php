<?php
    class test {
        public $num;

        public function  getValue() {
            echo  "Value is : ". $this->num;
        }
        public function __construct($value1,$value2) {
            $this ->num = $value1 + $value2;

        }
        public function __destruct() {
            echo "<br>Destructor call. ";
        }
    }
    $obj = new test(220,30);
    $obj->getValue();

?>
<!-- construct and destruct ko cần call lên lúc khởi tạo một object nó mặc định call hai function này lên 
 -->
 <!-- construct để khởi tạo giá trị destruct dungf như các hàm bth  -->