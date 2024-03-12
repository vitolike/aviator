<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gameresult;
use App\Models\Userbit;
use App\Models\User;
use App\Models\Bank_detail;
use Carbon\Carbon;

class Pages extends Controller
{
    public function aviator() {
        $allresults = Gameresult::where('created_at', '>=', Carbon::today()->toDateString())->orderBy('id','desc')->get();
        $mybets = Userbit::where('userid',user('id'))->where('created_at', '>=', Carbon::today()->toDateString())->orderBy('id','desc')->get();
        // return $allresults;
        return view('crash',compact("allresults","mybets"));
    }

    public function deposit() {
        $bank = Bank_detail::where('userid',user('id'))->first();
        if (!$bank) {
            $bank = array();
        }
        return view('deposite',compact('bank'));
    }

    public function amount_transfer()
    {
        $specificdata = null;
        $title = 'Amount Transfer';
        return view('amount_transfer', [
            'title' => $title,
        ]);
    }

    public function level_management() {
        $mypromocode = user('id');
        $level1users = User::where('promocode',$mypromocode)->get();
        $users = count($level1users);
        $level1 = $level1users;
        $level2 = array();
        $level3 = array();
        foreach ($level1users as $key2) {
            $level2users = User::where('promocode',$key2->id)->get();
            $users += count($level2users);
            if (count($level2users) > 0) {
                array_push($level2,$level2users);
            }
            foreach ($level2users as $key3) {
                $level3users = User::where('promocode',$key3->id)->get();
                $users += count($level3users);
                array_push($level3,$level3users);
            }
        }
        return view('level_management',compact('users','level1','level2','level3'));
    }
}
