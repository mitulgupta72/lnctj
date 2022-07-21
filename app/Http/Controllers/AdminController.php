<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitors;
use App\Notifications\SendEmailNotification;
use Illuminate\Support\Facades\Notification;


class AdminController extends Controller
{
    public function admin()
    {
        return view('admin');
    }
    public function visitors()
    {
        $data = Visitors::all();
        // ->First()
        return view('visitors', ['data' => $data]);
    }

    public function emailview($id)
    {
        $data = Visitors::find($id);
        return view('email_view', compact('data'));
    }

    public function sendemail(Request $request, $id)
    {
        $data = Visitors::find($id);
        $details = [
            'greeting' => $request->greeting,
            'body' => $request->body,
            'actiontext' => $request->actiontext,
            'actionurl' => $request->actionurl,
            'endpart' => $request->endpart
        ];
        Notification::send($data,new SendEmailNotification($details));

        return redirect()->back();
    }
}
