<?php

namespace Repository;

interface IRepository {

    public function getDb();
    public function selectAll();
    public function selectAllColumn();
    public function selectById($id);
    public function add();
    public function update($id);
    public function delete($id);








}














?>