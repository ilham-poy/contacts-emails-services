<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendEmailsEcommerce;

class sendEmailsEcommerceController extends Controller
{
    //
    public function send(Request $request)
    {
        $rules = [
            'title' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'quantity' => 'required',
            'image' => 'required'
        ];
        $data = [
            'title' => $request->title,
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'quantity' => $request->quantity,
            'image' => $request->image,
        ];


        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => $data,
                'message' => 'Isi Data dengan benar',
                'data' => $validator->errors()
            ], 422);
        }


        if ($request->title === 'buyyer') {
            // Mail::to(env('EMAIL_PROGRAMMER'))->send(new sendEmailsEcommerce($data));
            Mail::to(env('EMAIL_SELLER'))->send(new sendEmailsEcommerce($data));
        }


        return response()->json([
            'status' => true,
            'message' => 'Kamu Berhasil Mengirimkan Pesan'
        ], 200);
    }
}
