<?php
    class test {
        public static $svar = 1;
        public $nvar;

        public function __construct() {
            $this->nvar = 2;
        }

        public static function getSValue() {
            echo "<br>Value of static variable is : " . self::$svar;
            self::$svar++;
        }

        public function getNvalue() {
            echo "<br>Value of normal variable is : " . $this->nvar;
        }
    }
    
    $obj = new test();
    $obj->getNvalue();
    
    test::getSValue();
    $obj->getNvalue();
    test::getSValue();
    echo "<br*****<br>";
    $obj1->getNvalue();
    test::getSValue();

?>

<!-- koong can tao motj doi tuowng cungx goi duocj static function  -->