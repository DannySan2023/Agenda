<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Service;
use Spatie\Permission\Models\Role;
use Barryvdh\DomPDF\Facade\Pdf;

class DatesController extends Controller
{
    public function listDates()
    {
        $users = User::with('services')
            ->role('staff')
            ->get();

        return view('lists.listDates')->with([
            'users' => $users,
        ]);
    }

    public function downloadPdfDates()
    {
        $users = User::with('services')
            ->role('staff')
            ->get();

        $pdf = Pdf::loadView('lists.downloadDates', compact('users'));
        return $pdf->download('Meses-Citas.pdf');
    }

}
