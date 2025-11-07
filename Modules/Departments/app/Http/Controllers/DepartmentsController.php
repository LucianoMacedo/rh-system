<?php

namespace Modules\Departments\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Departments\Models\Department;

class DepartmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments = Department::all();
        return view('departments::index', compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('departments::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'manager_id' => 'nullable|exists:employees,id',
        ]);

        $department = Department::create($data);

        return response()->json($department, 201);
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return response()->json(Department::findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('departments::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $department = Department::findOrFail($id);

        $department->update($request->all());

        return response()->json($department);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Department::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}
