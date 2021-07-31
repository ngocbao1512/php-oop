<?php
    class employee {
        protected $fname;
        protected $lname;

        public function setName($fn,$ln) {
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

        public function setDept($dno, $dname) {
            $this->deptNo = $dno;
            $this->deptName = $dname;
        }

        public function getDept() {
            echo "<br>Dept No:  " . $this->deptNo . "<br> deptName ".$this->deptName;
        }

    }

    $objDept = new department();

    $objDept -> setName("ngoc","bao");
    $objDept -> setDept(5,"IT");

    $objDept -> getFullName();
    $objDept -> getDept();
?>