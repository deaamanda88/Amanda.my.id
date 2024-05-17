<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        if($request->isMethod('post')){
            $contact = new Contact();
            $contact->nama = $request->nama;
            $contact->email = $request->email;
            $contact->pesan = $request->pesan;
            $contact->save();
            return redirect('/')->with(['berhasil' => 'Pesan Anda Sudah Terkirim']);
        }
        return view('index');
    }
}
