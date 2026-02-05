<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\programsSeachService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __construct(private programsSeachService $programSeachService) {
    }
    public function index() : View {
        return view('home.index');
    }

    public function search(Request $request) : View {
        // validateRequest  
        $programs = $this->programSeachService->getAvailablePrograms($request->all());
        return view('home.programs', compact('programs'));
    }
}
