<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\programsSearchService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __construct(private programsSearchService $programsSearchService) {
    }
    
    public function index()
    {
        return view('home.index');
    }

    public function search(Request $request) : View {
        // todo:validateRequest  
        $tripsData = $this->programsSearchService->searchTrips($request->all());
        return view('home.programs', compact('tripsData'));
    }
}
