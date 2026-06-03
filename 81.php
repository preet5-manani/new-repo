<?php 
echo "what is this";
class Employee{
    public $name = "harry";
    private $salary = 12000;
    private $grade = 3;
    function setsalary($salary){
        $this->salary = $salary;
    }

    function getsalary(){
        $this->salary = $salary;
        echo "The salary of the employee is $this->name and is $this->salary";
    }
    function showname(){
        echo "The name of the employee is $this->name";
     }
}
class programmer extends Employee{
    private $language = "php";

    function changelanguage($lang){
        $this->language = $lang;
    }
}
$rohan = new Employee ();
$rohan->name = "Rohan";
$rohan->setsalary(2);
$rohan->getsalary();
$rohan->showname();

$shubham = new Employee ();
$shubham->name = "Shubham";
$shubham->setsalary(25000);
$shubham->getsalary();
$shubham->showname();

$geeta = new Employee ();
$geeta->name = "Geeta";
echo $geeta->changelanguage("python");
$geeta->showname();
$geeta->getsalary();
?>