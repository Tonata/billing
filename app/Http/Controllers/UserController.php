<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use \Spatie\Permission\Models\Permission;
use \Spatie\Permission\Models\Role;
use Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $id = Auth::user()->id;
        $current_user = User::find($id);
//        $permissions = Permission::pluck('name', 'id')->toarray();

        $users = User::where('company_id', '=', $current_user->company_id )->get();

        return view('users.index', compact('users'))->with('tab', 'view_users');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $permissions = Permission::all();
//        //implode($permissions);
//        return view ('users.create', compact('permissions'));
        return view ('users.create', ['permissions'=> $permissions]);
//        return view ('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::user()->id;
        $current_user = User::find($id);
        $company_id = $current_user->company_id;

        // Validate
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:300',
            'email' => 'required|string|max:300',
            'permissions' => 'required'
        ]);

        if ($validator->fails()){
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput()
                ->with('users.create');
        }

        $name = $request['name'];
        $email = $request['email'];
        $permissions[] = $request['permissions'];

//        dd($permissions[]);

        $user = User::create(["name"=> $name, "email"=> $email, "company_id"=>$company_id]);

        $role = new Role();
        $role->name = $name;
        $role->guard_name = 'web';
        $role->save();
        foreach($permissions as $permission){
            $role->givePermissionTo($permission);
//            $user->givePermissionTo($permission);
        }

        $user->assignRole($role);


        flash('User, ' .$user->name. ' has been created successfully. ')->success();

        return redirect()->route('users.index');

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
    }
}
