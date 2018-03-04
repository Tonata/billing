<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Validator;
use \Monolog\Handler\mail;


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
        //$companies = Company::all();
        //  dd(value($companies));
        return view('companies.create');
       // return view('companies.edit');
    }

//    public function sendEmail($email, $subject , $header, $message){
//        mail($email, $subject,$message,$header);
//
//    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:300',
            'registration' => 'required|string|max:100',
            'email' => 'required|string|min:0',
            'license_expiry'  => 'date|min:0'
        ]);

        if ($validator->fails()){
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput()
                ->with('companies.create');
        }

        $name = $request['name'];
        $registration = $request['registration'];
        $email = $request['email'];
        $license_expiry = $request['license_expiry'];

        $company = Company::create($request->only('name', 'registration', 'email', 'license_expiry'));

        flash('Company, ' .$company->name. ' has been created successfully. ')->success();

        return redirect()->route('companies.index');

//      mail ($email, 'Company Registration', 'Welcome to our invoicing software. Please click on this link to set your password. Your username is this email address. Thank You.', 'From: info@invoicing.com');

        // url need to be an store of a new user
//        return view('auth.register', compact('name','email'));
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
       // dd($company);
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
            'license_expiry'=>'date',
            'email'=>'required'

        ]);

        $input = $request->only(['name', 'registration', 'license_expiry', 'email']);

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

        flash('<div> Company, <strong>'. $company->name . '</strong> deleted. </div>');
        return redirect()->route('companies.index');

    }
}
