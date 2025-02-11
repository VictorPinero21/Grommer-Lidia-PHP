<?php

class Departamentos {

    private $dept_no;
    private $dnombre;
    private $dloc;

   
    public function __construct($dept_no, $dnombre, $dloc) {
        $this->dept_no = $dept_no;
        $this->dnombre = $dnombre;
        $this->dloc = $dloc;
    }

    public function getDept_no() {
        return $this->dept_no;
    }

    public function getDnombre() {
        return $this->dnombre;
    }

    public function getDloc() {
        return $this->dloc;
    }

    public function setDeptno($dept_no) {
        $this->dept_no = $dept_no;
    }

    public function setDnombre($dnombre) {
        $this->dnombre = $dnombre;
    }

    public function setDloc($dloc) {
        $this->dloc = $dloc;
    }

}

?>