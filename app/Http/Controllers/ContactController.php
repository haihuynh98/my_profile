<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function saveContact(Request $request)
    {
        Contact::create($request->all());
//
        return response()->json('The contact successfully added');
    }
}
