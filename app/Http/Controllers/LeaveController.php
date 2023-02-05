<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeaveController extends Controller
{
    public function addLeave()
    {
        return view("leave.add");
    }
    public function createLeave(Request $request)
    {
        $leave = new Leave();
        $leave->start_date = $request->start_date;
        $leave->end_date = $request->end_date;
        $leave->user_id = Auth::id();
        $leave->comment = $request->comment;
        $leave->status = 1;
        $leave->save();
        return redirect("getLeavesByUser");
    }

    public function getLeavesByUser()
    {
        $leaves = Leave::where('user_id', Auth::id())->get();
        return view("leave.index")->with("leaves", $leaves);
    }
}