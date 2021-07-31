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

    class Salary extends department {
        private $sal;

        public function setSalary($salary) {
            $this->sal = $salary;
        }

        public function getSalary() {
            echo "Salary is : ".$this->sal;
        }
    }

    $objSal = new Salary();

    $objSal -> setName("ngoc","bao");
    $objSal -> setDept(5,"IT");

    $objSal -> getFullName();
    $objSal -> getDept();

    $objSal -> setSalary(1000);
    $objSal -> getSalary();
?>