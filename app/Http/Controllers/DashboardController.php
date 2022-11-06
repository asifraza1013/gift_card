<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function userDashboard()
    {
        $title = 'User Dashboard';
        return view('dashboards.user_dashbaord', compact([
            'title',
        ]));
    }

    public function inspectorDashboard()
    {
        $title = 'Admin Dashboard';
        $lastestUsers = User::where('type', 2)->orderBy('updated_at')->limit(10)->get();
        $totalUser = User::where('type', 2)->count();
        $lastMonthCount = User::where('type', 2)->whereDate('updated_at', '>=', date('Y-m-d H:i:s',strtotime('-30 days')))->count();
        return view('dashboards.admin_dashboard', compact([
            'lastMonthCount',
            'lastestUsers',
            'title',
            'totalUser',
        ]));
    }
}
