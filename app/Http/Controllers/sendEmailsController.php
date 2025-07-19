<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Mail\sendEmails;

class sendEmailsController extends Controller
{
    // public function index()
    // {
    //     Mail::to('ilhamrafli732@gmail.com')->send(new sendEmails());
    //     redirect('/index');
    // }
    public function send(Request $request)
    {
        $rules = [
            'title' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ];
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Isi Data dengan benar',
                'data' => $validator->errors()
            ], 401);
        }

        $data = [
            'title' => $request->title,
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];

        if ($request->title == 'programmer') {
            Mail::to('ilhamrafli732@gmail.com')->send(new sendEmails($data));
        } else {
            Mail::to('tedyhermawanto@gmail.com')->send(new sendEmails($data));
        }



        return response()->json([
            'status' => true,
            'message' => 'Kamu Berhasil Mengirimkan Pesan'
        ], 200);
    }
}
