<?php 

namespace App\Repositories;

use App\Repositories\Interfaces\companyRepositoryInterface;
use App\Models\Company;

class companyRepository implements companyRepositoryInterface{
 
    public function all(){

        return Company::all();
    }

    public function logo($request, $data){

        if ($request->hasFile('logo')) {
            $destinationPath = 'public/logo/';
            $logo = $request->file('logo');
            $fileName = time() . $request->id . '.' . $logo->getClientOriginalExtension();
            $logo->storeAs($destinationPath, $fileName);
            $data->logo = $fileName;
        }

    }
    public function store($request){

        $data = new Company([
            'name' => $request->name,
            'email' => $request->email,
            'website' => $request->website,
        ]);

        $this->logo($request, $data);
        $data->save();

    }

    public function findById($id){
        return Company::findOrfail($id);
    }

    public function update($request,$id){
        
        $data = $this->findById($id);
        $data->email = $request->email;
        $data->website = $request->website;
        $this->logo($request, $data);
        $data->update();
    }

    public function delete($id){
        $data = $this->findById($id);
        $data->delete();
    }
    
}