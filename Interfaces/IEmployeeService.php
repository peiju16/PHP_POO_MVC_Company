<?php

namespace Interfaces;

interface IEmployeeService{

    public function listerEmployee();

    public function listerColumn();

    public function ficheEmployee($id);

    public function ajouterEmployee();

    public function modifyEmployee($id);

    public function deleteEmployee($id);




}

















?>