<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
        return view('components.index', compact('employees'));
    }

    public function create()
    {
        return view('components.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'employee_id' => 'required|unique:employees|max:255',
            'name' => 'required|regex:/^[^\d]+$/|max:255', 
            'position' => 'required|regex:/^[^\d]+$/|max:255', 
            'department' => 'required|regex:/^[^\d]+$/|max:255', 
            'contact_information' => 'required|email|max:255', 
        ]);

        Employee::create($request->all());

        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('components.show', compact('employee'));
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('components.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        
        $request->validate([
            'name' => 'required|regex:/^[^\d]+$/|max:255', 
            'position' => 'required|regex:/^[^\d]+$/|max:255', 
            'department' => 'required|regex:/^[^\d]+$/|max:255', 
            'contact_information' => 'required|email|max:255', 
        ]);

        $employee->update($request->all());

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    public function destroy($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}
