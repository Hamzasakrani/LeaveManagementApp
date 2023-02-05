<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getLeave()
    {
        $leaves = Leave::join('users', 'leaves.user_id', '=', 'users.id')->select("leaves.*", "users.name")->where("status", 1)->get();
        return view('admin.leaves')->with('leaves', $leaves);
    }
    public function acceptLeave($id)
    {
        $leave = Leave::find($id);

        $leave->status = 2;

        $leave->save();
        return redirect("getAllEmployees");
    }
    public function refuseLeave($id)
    {
        $leave = Leave::find($id);

        $leave->status = 3;

        $leave->save();
        return redirect("getAllEmployees");
    }
    public function getAllEmployees()
    {
        $users = User::where('role', '<>', "admin")->get();
        return view('admin.employees')->with('users', $users);
    }
    public function getLeavesByUser($id)
    {
        $leaves = Leave::where('user_id', $id)->get();
        return view("admin.leavesbyuser")->with("leaves", $leaves);
    }
}