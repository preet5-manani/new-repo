<?php
class employee{
    public $name;
    public $lang;
    public $salary;

    public function __construct($name,$lang,$salary){
        $this->name = $name;
        $this->lang = $lang;
        $this->salary = $salary;
    }
    public function describe(){
        echo "name of programer: $this->name";
        echo "language of programer: $this->lang";
        echo "salary of the programer: $this->salary";
    }
}
$harry = new employee("harry","php",5);
$harry->describe();
?>