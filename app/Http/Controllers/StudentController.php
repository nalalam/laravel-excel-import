<?php

namespace App\Http\Controllers;


use App\Imports\StudentImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function importExcel()
    {
        return view('index');
    }
    // public function uploadExcel(Request $request)
    // {
    //     Excel::import(new UsersImport, $request->file);
    //     return Redirect()->route('backend.crm.import')->with('success', 'Child Admin Inserted Successfully!');
    // }

    public function uploadExcel(Request $request)
    {

        // Excel::import(new UsersImport, $request->file);
        Excel::import(new StudentImport, $request->file);
        return ('success');
    }

    // public function uploadExcel(Request $request)
    // {
    //     if ($request->hasFile('file')) {
    //         try {
    //             $file = $request->file('file');
    //             $extension = $file->getClientOriginalExtension();

    //             if (
    //                 $extension == 'xlsx'
    //             ) { // Modify this condition if you're accepting other file types
    //                 Excel::import(new StudentImport, $file);
    //                 return redirect()->route('student')->with('success', 'Child Admin Inserted Successfully!');
    //             } else {
    //                 return redirect()->route('student')->with('error', 'Invalid file type. Please upload an Excel file with the .xlsx extension.');
    //             }
    //         } catch (\Exception $e) {
    //             return redirect()->route('student')->with('error', 'An error occurred while processing the Excel file: ' . $e->getMessage());
    //         }
    //     } else {
    //         return redirect()->route('student')->with('error', 'Please choose a valid Excel file to upload.');
    //     }
    // }
}
