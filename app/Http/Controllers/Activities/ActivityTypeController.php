<?php

namespace App\Http\Controllers\Activities;

use App\Http\Controllers\Controller;
use App\Http\Requests\Activities\StoreActivityTypeRequest;
use App\Http\Requests\Activities\UpdateActivityTypeRequest;
use App\Models\Activities\ActivityType;
use Illuminate\Http\Request;

class ActivityTypeController extends Controller
{

    public function index()
    {
        $activityTypes = ActivityType::all();
        return view('admin.Activities.ActivityType.index', compact('activityTypes'));
    }

    public function store(StoreActivityTypeRequest $request)
    {
        ActivityType::create($request->validated());
        toast('Activity Type Added Succesfully', 'success');
        return redirect()->route('admin.activityType.index');
    }


    public function edit(ActivityType $activityType)
    {

        return view('admin.Activities.ActivityType.edit', compact('activityType'));
    }


    public function update(UpdateActivityTypeRequest $request, ActivityType $activityType)
    {
        $activityType->update($request->validated());
        toast('Activity Type Updated Succesfully', 'success');
        return redirect()->route('admin.activityType.index');
    }

    public function destroy(ActivityType $activityType)
    {
        $activityType->delete();
        toast('Activity Type Deleted Succesfully', 'success');
        return redirect()->route('admin.activityType.index');
    }
}
