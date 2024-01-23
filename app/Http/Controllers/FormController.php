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
        $formData = [];
        foreach ($request->input('name') as $key => $name) {
            $formData[] = [
                'name' => $name,
                'nis' => $request->input('nis')[$key],
                'nisn' => $request->input('nisn')[$key],
                'npsn' => $request->input('npsn')[$key],
            ];
        }
        $html = view('report_card', compact('formData'));
        $pdf = Pdf::loadHTML($html);
        $dwnload = $pdf->download('report_card.pdf');
        return $html;
    }
}
