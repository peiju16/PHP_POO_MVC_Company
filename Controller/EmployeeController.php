<?php

namespace Controller;

class EmployeeController
{

    private $service;

    public function __construct(\Interfaces\IEmployeeService $service)
    {
        $this->service = $service;
    }

    public function route()
    {

        if (!isset($_GET["action"])) {
            $this->listerEmployee();
        } else {
            if ($_GET["action"] == "show") {
                $this->ficheEmployee();
            }
            if ($_GET["action"] == "add") {
                $this->ajouterEmployee();
            }
            if ($_GET["action"] == "modify") {
                $this->modifyEmployee();
            }
            if ($_GET["action"] == "delete") {
                $this->deleteEmployee();
            }
        }

    }

    public function listerEmployee()
    {

        try {

            $employees = $this->service->listeremployee();
            $stmt = $this->listerColumn();

            $view = new View("Vues/lister_employee.php", ['employees' => $employees, "stmt" => $stmt]);
            $view->render();

        } catch (\Exception $e) {
            (new View("Vues/erreur.php", ['error' => $e->getMessage()]))->render();
        }
    }

    public function listerColumn()
    {
        try {
            return $this->service->listerColumn();
        } catch (\Exception $e) {
            (new View("Vues/erreur.php", ['error' => $e->getMessage()]))->render();
        }

        return false;
    }


    public function ficheEmployee()
    {
        try {

            $employee = $this->service->ficheEmployee($_GET["id"]);
            $view = new View("Vues/fiche_employee.php", ['employee' => $employee]);
            $view->render();

        } catch (\Exception $e) {
            (new View("Vues/erreur.php", ['error' => $e->getMessage()]))->render();
        }
    }

    

    public function ajouterEmployee()
    {
        if ($_POST) {

            foreach ($_POST as $index => $value) {
                $_POST[$index] = addslashes($value);
            }


            try {
                $this->service->ajouterEmployee();
                $employees = $this->service->listerEmployee();
                $stmt = $this->listerColumn();
                $view = new View("Vues/lister_employee.php", ['msg' => "Votre nouveau employé a bien été ajouté", "employees" => $employees, "stmt" => $stmt]);
                $view->render();

            } catch (\Exception $e) {
                (new View("Vues/erreur.php", ['error' => $e->getMessage()]))->render();
            }


        } else {
            $view = new View("Vues/ajouter_employee.php");
            $view->render();
        }


    }

    public function modifyEmployee()
    {
        if ($_POST) {
            foreach ($_POST as $index => $value) {
                $_POST[$index] = addslashes($value);
            }

            try {
                $this->service->modifyEmployee($_POST["id_employee"]);
                $employees = $this->service->listeremployee();
                $stmt = $this->listerColumn();
                $view = new View("Vues/lister_employee.php", ['msg' => "Votre employé a bien été modifié", "employees" => $employees, "stmt" => $stmt]);
                $view->render();

            } catch (\Exception $e) {
                (new View("Vues/erreur.php", ['error' => $e->getMessage()]))->render();
            }

        } else {

            $employee = $this->service->ficheEmployee($_GET['id']);
            $view = new View("Vues/ajouter_employee.php", ["employee" => $employee]);
            $view->render();

        }

    }

    public function deleteEmployee()
    {
        try {
            $employee = $this->service->deleteEmployee($_GET["id"]);
            $employees = $this->service->listerEmployee();
            $stmt = $this->service->listerColumn(); 
            $view = new View("Vues/lister_employee.php", ['msg' => 'Votre employé a bien été supprimé', "employees" => $employees, "stmt" => $stmt]);
            $view->render();
        } catch (\Exception $e) {
            (new View("Vues/erreur.php", ['error' => $e->getMessage()]))->render();
        }

    }




















}


























?>