<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function genpdf(){
        

        $pdf = Pdf::loadView('pdf.genpdf');
        return $pdf->stream('class-pdf');
    }
    public function gensyllabus(){
        

        $pdf = Pdf::loadView('pdf.gensyllabus');
        return $pdf->stream('routine-pdf');
    }
    public function downpdf(){
      

        $pdf = Pdf::loadView('pdf.genpdf');
        return $pdf->download('class-pdf');
    }
    public function downsyllabus(){
      

        $pdf = Pdf::loadView('pdf.gensyllabus');
        return $pdf->download('routine-pdf');
    }
}
