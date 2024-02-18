<?php

namespace App\Http\Controllers\Contact;

use App\Models\Contact\Contact;
use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\StoreContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts'));
    }


    public function store(StoreContactRequest $request)
    {
        Contact::create($request->validated());
        return redirect()->route('admin.contact.index');
    }

    public function show(Contact $contact)
    {
        return view('admin.contact.show', compact('contact'));
    }

}
