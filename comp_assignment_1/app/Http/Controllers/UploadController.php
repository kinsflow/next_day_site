<?php

namespace App\Http\Controllers;


use App\Imports\UsersImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UploadController extends Controller
{

    public function importData(Request $request)
    {
        ini_set('memory_limit', '512MB');
        ini_set('max_execution_time', '120');

        try {
            Excel::import(new UsersImport, $request->file('file'));

            return redirect()->back()->with('success', 'Record Imported Successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }

    }
}
