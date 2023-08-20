<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Application;

class ManagersController extends Controller
{
    public function list()
    {
        $applications =  Application::all();

        return $applications;
    }

    public function showApp(Application $application)
    {
        return $application;
    }

    public function update(Request $request, Application $application)
    {
        $application->update([
            'user' => $request->input('user'),
            'topic' => $request->input('topic'),
            'message' => $request->input('message'),
            'status' => $request->input('status'),
        ]);
        return $application;
    }
}
