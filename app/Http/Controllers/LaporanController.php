<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Barryvdh\DomPDF\Facade\Pdf;

class LaporanController extends Controller
{
    public function cetak()
    {
        $projects = Project::all();

        $pdf = Pdf::loadView('laporan.pdf', [
            'projects' => $projects,
            'totalProject' => $projects->count(),
        ])->setPaper('a4', 'portrait');

        return $pdf->stream('laporan-portfolio.pdf');
    }
}
