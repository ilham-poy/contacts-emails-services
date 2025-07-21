<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Mail\sendEmails;
use Illuminate\Support\Env;

class sendEmailsController extends Controller
{

    public function send(Request $request)
    {
        $rules = [
            'title' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ];
        $data = [
            'title' => $request->title,
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        ];


        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => $data,
                'message' => 'Isi Data dengan benar',
                'data' => $validator->errors()
            ], 422);
        }


        if ($request->title == 'programmer') {
            Mail::to(env('EMAIL_PROGRAMMER'))->send(new sendEmails($data));
        } elseif ($request->title == 'uiux') {
            Mail::to(env('EMAIL_UIUX'))->send(new sendEmails($data));
        }


        return response()->json([
            'status' => true,
            'message' => 'Kamu Berhasil Mengirimkan Pesan'
        ], 200);
    }
}
