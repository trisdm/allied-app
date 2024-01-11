<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\View\View;

class FamousNamesController extends Controller
{
    //
    public function index() : View {

        $file = File::get(base_path('storage/app/private/famous-names.json'));
        $jsonData = json_decode($file, true);

        return View('famousNames', ['names' => $jsonData]);
    }
}
