<?php 

namespace App\Repositories;

use App\Repositories\Interfaces\employeeRepositoryInterface;
use App\Models\Employee;
use App\Models\Company;

class employeeRepository implements employeeRepositoryInterface{
 
    public function all(){
        return Employee::with('company')->paginate(13);
    }

    public function allCompany(){
        return Company::all();
    }

    public function store($request){
        return Employee::create($request);
    }

    public function findById($id){
        return Employee::with('company')->where('id', $id)->first();
    }

    public function update($request,$id){
        
        $data = Employee::find($id);
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->company_id = $request->company_id;
        $data->update();
        
    }

    public function delete($id){
        $data = $this->findById($id);
        $data->delete();
    }
    
}