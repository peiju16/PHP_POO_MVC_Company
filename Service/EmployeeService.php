<?php

namespace Service;

class EmployeeService implements \Interfaces\IEmployeeService {

    private $repository;

    public function __construct(\Repository\IRepository $iRepository) {
    $this->repository = $iRepository;
    }

    public function listerEmployee() {
        return $this->repository->selectAll();
    }

    public function listerColumn() {
        return $this->repository->selectAllColumn();
    }

    public function ficheEmployee($id) {
        return $this->repository->selectById($id);

    }

    public function ajouterEmployee() {
        $this->repository->add();

    }

    public function modifyEmployee($id) {
        $this->repository->update($id);

    }

    public function deleteEmployee($id) {
        $this->repository->delete($id);

    }
































}





















?>