<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::get();
        return view('company.index',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:companies',
            'website' =>  'required',
        ]);
        $company = Company::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'website' => $request->website,
                ]);
        if ($request->hasFile('logo')) {
            $attachment = $request->file('logo');
            
            $path = 'images/';
            $attachmentPath = uploadImage($attachment,$path);
            $company->logo = $attachmentPath;
        }
        $company->save();

        flashSuccess('Company Created Successfully');
        return redirect()->route('company.index');
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
        //
        $company = Company::find($id);
        return view('company.edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $input = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'website' =>  'required',
        ]);

        $company = Company::find($id)->update($input);

        if ($request->hasFile('logo')) {
            $attachment = $request->file('logo');
            
            $path = 'images/';
            $attachmentPath = uploadImage($attachment,$path);
            $company->logo = $attachmentPath;
            $company->save();
        }
        

        flashSuccess('Company Updated Successfully');
        return redirect()->route('company.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        Company::find($id)->delete();

        flashSuccess('Company Removed Successfully');
        return redirect()->route('company.index');
    }
}
