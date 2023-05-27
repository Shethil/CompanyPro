<?php 
namespace App\Repositories\Interfaces;

Interface companyRepositoryInterface{
    public function all();
    public function logo($request, $data);
    public function store($request);
    public function findById($id);
    public function update($request,$id);
    public function delete($id);
}