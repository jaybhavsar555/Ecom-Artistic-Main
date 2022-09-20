<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;

class DashboardController extends Controller
{
    public function users()
    {
        $users=User::all();
        return view('admin.users.index',compact('users'));
    }
        // public function viewuser($id)
        // {
        //     $users=Order::find($id);
        //     return view('admin.users.view',compact('users'));
        // }   
}



