<?php

namespace Entity;

#[\AllowDynamicProperties]
class Employees {

public $id_employee;
public $first_name;
public $name;
public $sexe;
public $service;
public $starting_date;
public $salary;

public function __construct($id_employee = null, $first_name = null, $name = null, $sexe = null, $service = null, $starting_date = null, $salary = null) { 
    $this->id_employee = $id_employee;
    $this->first_name = $first_name;
    $this->name = $name;
    $this->sexe = $sexe;
    $this->service = $service;
    $this->starting_date = $starting_date;
    $this->salary = $salary;

}


}










?>