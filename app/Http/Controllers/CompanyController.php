<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware(['auth','isAdmin']);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $companies = Company::all();

        return view('companies.index', compact('companies'))->with('tab', 'view_companies');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $companies = Company::all();
     //  dd(value($companies));
        return view('companies.create',['companies'=>$companies]);
       // return view('companies.edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $company = Company::findOrFail($id);
        return view('companies.edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $company = Company::findOrFail($id);

        //Validate name, email, email and license_expiry_date fields
        $this->validate($request, [
            'name'=>'required|max:200',
            'registration'=>'required',
            'email'=>'required'

        ]);

        $input = $request->only(['name', 'registration', 'email']);

        $company->fill($input)->save();

        flash('Company '. $company->name . ' updated.');
//        flash()->overlay('Company '. $company->name . ' updated.', 'Success');

        return redirect()->route('companies.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $company = Company::findOrFail($id);
        $company->delete();

        flash('<div Company, <strong>'. $company->name . '</strong> deleted. </div>');
        return redirect()->route('companies.index');

    }
}
