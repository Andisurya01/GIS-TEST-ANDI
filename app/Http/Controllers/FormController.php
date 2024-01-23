<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function processForm(Request $request)
    {
        $data = [];

        foreach ($request->input('name') as $key => $name) {
            $data[] = [
                'name' => $name,
                'nis' => $request->input('nis')[$key],
                'nisn' => $request->input('nisn')[$key],
                'npsn' => $request->input('npsn')[$key],
            ];
        }

        $pdf = PDF::loadView('report_card', compact('data'));

        $pdf->save(storage_path('app/public/reports/report_card.pdf'));

        return response()->download(storage_path('app/public/reports/report_card.pdf'));
    }
}
