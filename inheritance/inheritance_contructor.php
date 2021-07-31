<?php
    class employee {
        protected $fname;
        protected $lname;

        public function __construct($fn,$ln) {
            $this->fname = $fn;
            $this->lname = $ln;
        }

        public function getFullName() {
            echo "<br>Full Name: " . $this->fname . " " . $this->lname;
        }
    }

    class department extends employee {
        private $deptNo;
        private $deptName;

        public function __construct($fn, $ln, $dno, $dname) {
            parent::__construct($fn,$ln);
            $this->deptNo = $dno;
            $this->deptName = $dname;
        }

        public function getDept() {
            echo "<br>Dept No:  " . $this->deptNo . "<br> deptName ".$this->deptName;
        }

    }

    $objDept = new department("ngoc","bao",10,"information technology");
    $objDept->getFullName();
    $objDept->getDept();
    


?>