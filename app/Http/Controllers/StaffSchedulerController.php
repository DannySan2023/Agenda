<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Scheduler;

class StaffSchedulerController extends Controller
{
    public function index()
    {
        $date = Carbon::parse(request()->input('date'));

        $dayScheduler = Scheduler::where('staff_user_id', auth()->id())
            ->whereDate('from', $date->format('Y-m-d')) 
            ->orderBy('from', 'ASC')
            ->get();

        return view('staff-scheduler.index')
            ->with([
                'date' => $date,
                'dayScheduler' => $dayScheduler,
            ]);
    }

}
