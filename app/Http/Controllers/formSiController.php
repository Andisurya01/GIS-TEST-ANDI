<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class formSiController extends Controller
{
    public function showForm()
    {
        return view('form_si');
    }

    public function processForm(Request $request)
    {

        $formData = [];
        foreach ($request->input('name') as $key => $name) {
            $formData[] = [
                'name' => $name,
                'nis' => $request->input('nis')[$key],
                'nisn' => $request->input('nisn')[$key],
                'potb' => $request->input('potb')[$key], // Place of the birth
                'gender' => $request->input('gender')[$key],
                'religion' => $request->input('religion')[$key],
                'fbo' => $request->input('fbo')[$key], // Family Birth Order
                'npsn' => $request->input('npsn')[$key],
                'studentAddress' => $request->input('studentAddress')[$key],
                'phone' => $request->input('phone')[$key],
                'class' => $request->input('class')[$key],
                'year' => $request->input('year')[$key],
                'semester' => $request->input('semester')[$key],
                'namePS' => $request->input('namePS')[$key], // Previous School Name
                'addressPS' => $request->input('addressPS')[$key], // Previous School Address
                'yearLA' => $request->input('yearLA')[$key],
                'certificateNumber' => $request->input('certificateNumber')[$key],
                'nameFather' => $request->input('nameFather')[$key],
                'PhoneFather' => $request->input('PhoneFather')[$key],
                'occupationFather' => $request->input('occupationFather')[$key],
                'nameMother' => $request->input('nameMother')[$key],
                'PhoneMother' => $request->input('PhoneMother')[$key],
                'occupationMother' => $request->input('occupationMother')[$key],
                'addressParents' => $request->input('addressParents')[$key],
                'nameGuardian' => $request->input('nameGuardian')[$key],
                'guardianAddress' => $request->input('guardianAddress')[$key],
                'GuardianPhone' => optional($request->input('GuardianPhone'))[$key],
                'guardianOccupation' => $request->input('guardianOccupation')[$key],
            ];
        }

        $html = view('si', compact('formData'));
        $pdf = Pdf::loadHTML($html);
        $dwnload = $pdf->download('si.pdf');
        return $dwnload;
    }
}
