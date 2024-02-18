<?php

namespace App\Http\Controllers\MassCommunication;

use App\Models\MassCommunication\Newspaper;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassCommunication\StoreNewspaperRequest;
use App\Http\Requests\MassCommunication\UpdateNewspaperRequest;
use Illuminate\Http\Request;

class NewspapersController extends Controller
{

    public function index()
    {
       $newspapers = Newspaper::all();
       return view('admin.newspaper.index', compact('newspapers'));
    }

    public function create()
    {
        return view('admin.newspaper.create');
    }

    public function store(StoreNewspaperRequest $request)
    {
        Newspaper::create($request->validated());
        toast('पत्रपत्रिका सफलतापूर्वक थपियो', 'success');
        return redirect()->route('admin.mass-communication.newspaper.index');
    }


    public function edit(Newspaper $newspaper)
    {
        return view('admin.newspaper.edit', compact('newspaper'));
    }

    public function update(UpdateNewspaperRequest $request, Newspaper $newspaper)
    {
        $newspaper->update($request->validated());
        toast('पत्रपत्रिका सफलतापूर्वक अद्यावधिक गरियो', 'success');
        return redirect()->route('admin.mass-communication.newspaper.index');
    }

    public function destroy(Newspaper $newspaper)
    {
        $newspaper->delete();
        toast('पत्रपत्रिका सफलतापूर्वक मेटियो', 'success');
        return redirect()->route('admin.mass-communication.newspaper.index');
    }
}
