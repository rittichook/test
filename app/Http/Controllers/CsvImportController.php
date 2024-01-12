<?php

namespace App\Http\Controllers;

// CsvImportController.php

use App\Imports\MembersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Members;
use Illuminate\Support\Facades\Http;

class CsvImportController extends Controller
{
    public function showForm()
    {
        return view('csv_upload_form');
    }

    public function import(Request $request)
    {
        $request->validate([
            'csv_file' => 'required|mimes:csv,txt',
        ]);

        if ($request->hasFile('csv_file')) {
            try {
                Excel::import(new MembersImport, $request->file('csv_file'));
                return redirect()->back()->with('success', 'CSV data imported and processed successfully.');
            } catch (\Exception $e) {
                return redirect()->back()->with('error', 'Error importing CSV data: ' . $e->getMessage());
            }
        }

        return redirect()->back()->with('error', 'Please upload a valid CSV file.');
    }
}

