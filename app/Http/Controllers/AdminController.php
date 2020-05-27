<?php

namespace App\Http\Controllers;
use DB;
use Carbon\Carbon;
use App\Game;
use App\User;
use App\Bill;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function panel() {
        $data = [
            "membersCount" => User::count(),
            "saleCount" => DB::table('game_user')->count(),
            "sale7Days" => DB::table('game_user')->whereDate('created_at', ">",  Carbon::now()->subDays(7))->count(),
            "totalGain" => Bill::sum('total'),
            "totalGain7Days" => DB::table('game_user')->whereDate('created_at', ">",  Carbon::now()->subDays(7))->sum('price'),
            "bills" => Bill::with('user')->paginate(10, ['*'], 'bill_page')
        ];
        return view('admin.panel', $data);
    }
}
