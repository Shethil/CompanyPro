<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\companyRepositoryInterface;

class CompanyController extends Controller
{

    private $companyRepository;

    public function __construct(companyRepositoryInterface $companyRepository){
        $this->companyRepository = $companyRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $companies = Company::all();
        $companies = $this->companyRepository->all();
        return view('company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('company/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = request()->validate([
            'name'    =>'required',
            'email'   => 'required|email',
            'logo'    => 'required',
            'website' => 'required|url'
        ]);
        // $company = Company::create($request->except('logo'));

        // if ($request->hasFile('logo')) {
        //     $destinationPath = 'public/logo/';
        //     $logo = $request->file('logo');
        //     $fileName = time() . $request->id . '.' . $logo->getClientOriginalExtension();
        //     $logo->storeAs($destinationPath, $fileName);
        // }

        // $company->logo = $fileName;
        // $company->save();

        $this->companyRepository->store($request);
        return redirect()->route('company.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $company = Company::findOrfail($id);
        $company = $this->companyRepository->findById($id);
        // dd($data);
        return view('company.show', compact("company"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // $company = Company::findOrfail($id);
        $company = $this->companyRepository->findById($id);
        return view('company.edit', compact("company"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $data = Company::find($id);
        // $data->email = $request->email;
        // $data->website = $request->website;


        // if ($request->hasFile('logo')) {
        //     $destinationPath = 'public/logo/';
        //     $logo = $request->file('logo');
        //     $fileName = time() . $request->id . '.' . $logo->getClientOriginalExtension();
        //     $logo->storeAs($destinationPath, $fileName);
        //     $data->logo = $fileName;
        // }


        // $data->update();
        $this->companyRepository->update($request,$id);
        return redirect()->route('company.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        // $data = Company::find($id);
        // $data->delete();
        // dd($data);

        $this->companyRepository->delete($id);
        return redirect()->route('company.index');
    }
}
