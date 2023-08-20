<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        return view('private');
    }


    public function create(Request $request)
    {

        $application = new Application();
        $application->user = $request->input('user');
        $application->topic = $request->input('topic');
        $application->message = $request->input('message');
        $application->status = $request->input('status');
        $application->comment = $request->input('comment');
        $application->save();

        return redirect()->route('allapp.show', [
            'applications' => $application->id
        ]);
    }

    public function update(Request $request, Application $application)
    {
        $application->user = $request->input('user');
        $application->topic = $request->input('topic');
        $application->message = $request->input('message');
        $application->status = $request->input('status');
        $application->comment = $request->input('comment');
        $application->save();

        return redirect()->route('manager.panel');
    }


    public function show()
    {
        $applications = Application::all();
        return view('components.allapp', [
            'applications' => $applications
        ]);
    }
}
