<<?php 
class Employee {
    private $name;
    private $email;
    function __construct($name_in, $email_in) {
        $this->name = $name_in;
        $this->email  = $email_in;
    }
    function getName() {
        return $this->name;
    }
    function getEmail() {
        return $this->email;
    }
    function getnameAndEmail() {
      return $this->getName().' by '.$this->getEmail();
    }
}
class EmployeenameDecorator {
    protected $name;
    protected $email;
    public function __construct(Employee$employee_in) {
        $this->Employee = $Employee_in;
        $this->resetEmail();
    }   
    
    function resetEmail() {
        $this->email = $this->email->getEmail();
    }
    function showEmail() {
        return $this->email;
    }
}
class EmployeeEmailDecorator  {

    private $emd;
    public function __construct(EmployeeEmailDecorator $emd_in) {
        $this->emd = $emd_in;
    }
    function exclaimEmail() {
        $this->emd->email = "!" . $this->emd->email . "!";
    }
}




















 ?> 