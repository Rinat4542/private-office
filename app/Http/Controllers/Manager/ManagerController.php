<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class ManagerController extends Controller
{
    public function index()
    {
        return view('manager');
    }

    public function show()
    {
        $applications = Application::all();
        return view('manager', [
            'applications' => $applications
        ]);
    }

    public function showApp($application)
    {
        $appItem = Application::query()->find($application);

        if (is_null($application)) {
            return abort(404);
        }
        return view('appshow', ['application' => $appItem]);
    }

    public function updateApp(Application $application)
    {
        return view('editapp', ['application' => $application]);
    }
}
