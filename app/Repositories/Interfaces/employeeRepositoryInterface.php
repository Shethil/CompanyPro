<?php 
namespace App\Repositories\Interfaces;

Interface employeeRepositoryInterface{
    public function all();
    public function allCompany();
    public function store($data);
    public function findById($id);
    public function update($request,$id);
    public function delete($id);
}