<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ApplicationController extends Controller
{
    public function createApplication(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|exists:services,id',
            'description' => 'required',
        ]);

        Application::create([
            'user_id' => Auth::user()->id,
            'service_id' => $request->id,
            'description' => $request->description,
            'status' => 'pending',
        ]);
        return redirect('/home');
    }

    public function updateApplication(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|exists:applications,id',
            'job_id' => 'required|exists:jobs,id',
            'application_letter' => 'required',
        ]);

        $application = Application::find($request->input('id'));
        $application->job_id = $request->input('job_id');
        $application->application_letter = $request->input('application_letter');
        $application->save();
    }

    public function updateStatus(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|exists:applications,id',
            'status' => 'required|in:pending,accepted,expired',
        ]);

        $application = Application::find($request->input('id'));
        $application->status = $request->input('status');
        $application->save();
    }

    public function deleteApplication(Request $request)
    {
        Application::destroy($request->input('id'));
    }
}
