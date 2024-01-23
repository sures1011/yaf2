<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Programs;
use App\Models\Services;
use App\Models\Team;
use App\Models\Menu;
use App\Models\Payment;

class HomeController extends Controller
{
    public function index(){
        $programs = Programs::all();
        $services = Services::all();
        $teams = Team::all();
        $menu = Menu::all();
        $menu = Menu::where('status','Enabled')->get();
        view()->share('menu',$menu);
        return view('home.userpage',compact('programs','services','teams','menu'));
    }

    // public function modal(){
    //     $programs = Programs::all();
    //     return view('home.program_modal',compact('programs'));
    // }


    
    public function redirect()
    {
        $programs = Programs::all();
        $user = User::all()->count();
        $team = Team::all()->count();

        $payment = payment::all();
        $total_payment = 0;
        foreach($payment as $payment){
            $total_payment = $total_payment + $payment->amount;
        }

        $donations = payment::all()->count();
        return view('admin.home',compact('programs','user','team','total_payment','donations'));
        // $programs = Programs::all();
        // $usertype=Auth::user()->usertype;
        // if($usertype=='1')
        // {

        //     return view('admin.home',compact('programs'));
        // }
        // else
        //     {
        //         return view('dashboard',compact('programs'));
        //     }
    }

    
    
};
