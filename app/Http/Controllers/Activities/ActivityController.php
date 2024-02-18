<?php

namespace App\Http\Controllers\Activities;

use App\Http\Controllers\Controller;
use App\Http\Requests\Activities\StoreActivitiesRequest;
use App\Http\Requests\Activities\UpdateActivitiesRequest;
use App\Models\Activities\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{

    public function index()
    {
      
        $activities = Activity::get();
        return view('admin.Activities.Activity.index', compact('activities'));
    }

    public function create()
    {
        return view('admin.Activities.Activity.create');
    }

    public function store(StoreActivitiesRequest $request)
    {
        Activity::create($request->validated());
        toast('Activites Added Successfully', 'success');
        return redirect()->route('admin.activity.index');
    }

    public function edit(Activity $activity)
    {
        return view('admin.Activities.Activity.edit', compact('activity'));
    }

    public function update(UpdateActivitiesRequest $request, Activity $activity)
    {
        if ($activity->photo && $request->hasFile('photo')){
            $this->deleteFile($activity->getRawOriginal('photo'));
        }
        $activity->update($request->validated());
        toast('Activites Updated Successfully', 'success');
        return redirect()->route('admin.activity.index');
    }

    public function destroy(Activity $activity)
    {
        if ($activity->photo){
            $this->deleteFile($activity->getRawOriginal('photo'));
        }
        $activity->delete();
        toast('Activites Deleted Successfully', 'success');
        return redirect()->route('admin.activity.index');
    }
}
