<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Company;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $employees = Employee::get();
      return view('employee.index',compact('employees'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = Company::get(['id','name']);
        return view('employee.create',compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'company_id' =>  'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' =>  'required',
        ]);

        $employee = Employee::create($input);
        flashSuccess('Employee Created Successfully');
        return redirect()->route('employee.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $companies = Company::get(['id','name']);
        $employee = Employee::find($id);
        return view('employee.edit',compact('companies','employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $input = $request->validate([
            'company_id' =>  'required',
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' =>  'required',
        ]);

        $employee = Employee::find($id)->update($input);
        flashSuccess('Employee Updated Successfully');
        return redirect()->route('employee.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Employee::find($id)->delete();
        flashSuccess('Employee Deleted Successfully');
        return redirect()->route('employee.index');
    }
}
