<?php

namespace App\Http\Controllers\import;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;
use PhpOffice\PhpSpreadsheet\IOFactory;
use App\Imports\UsersImport;

class ImportUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            $request->validate([
                'csv_file' => 'required|mimes:csv,txt',
            ]);

            if ($request->hasFile('csv_file')) {
                $file = $request->file('csv_file');

                try {
                    Excel::import(new UsersImport, $file);

                    return redirect()->back()->with('success', 'CSV file imported successfully.');
                } catch (\Exception $e) {
                    return redirect()->back()->with('error', 'Error importing CSV file: ' . $e->getMessage());
                }
            }

            return redirect()->back()->with('error', 'Please upload a valid CSV file.');
        }
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
