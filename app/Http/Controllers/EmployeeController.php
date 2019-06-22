<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    protected $employeeRoles=['admin','serveur','cuisinier','RC','caissier','livreur'];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('employee.list')->with('employees',Employee::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     private function validateEmployeeInput($dataArray)
     {
        $this->validate($dataArray,[
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required|email',
            'role'=>'required'
        ]);
     }

    public function store(Request $request)
    {
       $this->validateEmployeeInput($request);
        
       $this->validate($request,['password'=>'required|min:6',]);
        Employee::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'role'=>$this->employeeRoles[$request->role]
        ]);

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($employee)
    {
        $employeeOdj=Employee::find($employee);

        return view('employee.edit')->with('employee',$employeeOdj);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $employee)
    {
        //

        $this->validateEmployeeInput($request);


        

        $employeeOdj = Employee::find($employee);

        $employeeOdj->name=$request->name;
        $employeeOdj->email=$request->email;
        $employeeOdj->phone=$request->phone;
        $employeeOdj->role=$this->employeeRoles[$request->role];

        if($request->password)
        {
            $this->validate($request,['password'=>'required|min:6',]);
            $employeeOdj->password=bcrypt($request->password);
        }

        $employeeOdj->update();


        return redirect()->back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($employee)
    {
        //
        $employeeOdj = Employee::find($employee);
        $employeeOdj->destroy();

        return redirect()->back();
    }
}
