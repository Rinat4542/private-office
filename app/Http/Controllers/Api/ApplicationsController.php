<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
    public function list() //список заявок
    {
        $applications =  Application::all();

        return $applications;
    }

    public function createApp(Request $request) //создание зяавки
    {
        $applications =  Application::query()->create([
            'user' => $request->input('user'),
            'topic' => $request->input('topic'),
            'message' => $request->input('message'),
            'status' => $request->input('status'),
        ]);
        return $this->list($applications);
    }
}
