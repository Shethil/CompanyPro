<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Repositories\Interfaces\employeeRepositoryInterface;


class EmployeeController extends Controller
{
    private $employeeRepository;

    public function __construct(employeeRepositoryInterface $employeeRepository){
        $this->employeeRepository = $employeeRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $employees = Employee::all();
        // $employees = Employee::with('company')->get();
        // $employees = Employee::with('company')->paginate(10);
        $employees = $this->employeeRepository->all();
        // dd($employees);
        return view('employee.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companyes = $this->employeeRepository->allCompany();
        return view('employee/create',compact('companyes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'first_name'    =>'required',
            'last_name'    =>'required',
            'email'   => 'required|email',
            'phone'    => 'required',
            'company_id' => 'required'
        ]);

        $name = $request->email;
        // dd($name);

        Mail::send('employee.mail', $data, function($message) use($name){
            $message->to($name);
            $message->subject('Congratulations!');
        });

        // Employee::create($data);
        $this->employeeRepository->store($data);

        return redirect()->route('employee.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $employee = Employee::with('company')->where('id', $id)->first();
        $employee = $this->employeeRepository->findById($id);
        return view('employee.show',compact("employee"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $employee= Employee::findorfail($id);
        $employee= $this->employeeRepository->findById($id);
        // $companyes= Company::all();
        $companyes= $this->employeeRepository->allCompany();
        return view('employee.edit',compact("employee","companyes"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $data = request()->validate([
            'email'   => 'required|email',
            'phone'    => 'required',
        ]);

        // $data = Employee::find($id);
        // $data->email = $request->email;
        // $data->phone = $request->phone;
        // $data->company_id = $request->company_id;
        // $data->update();

        $this->employeeRepository->update($request,$id);
        return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // $data = Employee::find($id);
        // $data->delete();

        $this->employeeRepository->delete($id);
        return redirect()->route('employee.index');
    }
}