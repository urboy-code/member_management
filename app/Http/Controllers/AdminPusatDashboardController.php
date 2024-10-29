<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AdminPusatDashboardController extends Controller
{
    public function index(){
        
        $totalToday = Member::whereDate('created_at', Carbon::today())->count();
        $totalMembers = Member::count();

        $dataPoints = [];
        $currentTime = Carbon::now();

        for ($i=0; $i < 30; $i++) { 
            $dataPoints[] = [
                'x' => $currentTime->subDays($i)->format('Y-m-d'),
                'y' => Member::whereDate('created_at', $currentTime->subDays($i)->format('Y-m-d'))->count()
            ];
        }

        return view('dashboard.admin',compact('totalToday', 'dataPoints', 'totalMembers'));
    }


}
