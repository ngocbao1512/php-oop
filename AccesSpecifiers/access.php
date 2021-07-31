<?php
    class test {
        public $public;
        protected $protected;
        private $private;

        public function setValue ($value) {
            $this->public = $value;
            $this->protected = $value;
            $this->private = $value;
        }

        public function getValue () {
            echo "Value of public variable: ".$this -> public;
            echo "<br>value of protected variable: ".$this -> protected;
            echo "<br>value of private variable: ".$this -> private;
        }

    }

    $obj = new test();
    $obj -> setValue(10);
    $obj -> getValue();
  
    /* only can access public variable available can't access protected and private variable here */
?>