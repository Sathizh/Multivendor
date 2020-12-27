<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Dashboard()
    {
        return \view('admin.admin_dashboard');
    }

    public function admin_profile()
    {
        $id=auth()->user()->id;
        $details=User::findOrfail($id);
        // dd($details->name);
        return \view('admin.admin_profile')->with('details',$details);

    }
    public function customer_active_status_change($id)
    {
        $user=User::findOrfail($id);
        if($user->is_active)
            $user->is_active=!$user->is_active;
        else
            $user->is_active=!$user->is_active;
        $user->save();
        return back();
    }
}

