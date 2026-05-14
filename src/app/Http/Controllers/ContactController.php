<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $inputs = $request->all();

        return view('confirm', compact('inputs'));
    }

    public function store(Request $request)
    {
        Contact::create($request->all());

        return view('thanks');
    }
}