<?php
// access modifiers
// public
// private
// protected
class Employee{
    private $name = "harry";
     private function showname(){
        echo "$this->name";
    }
}
 $harry = new Employee();   
 echo $harry->name;
?>