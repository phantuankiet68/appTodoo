<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class V1DashboardController extends Controller
{
    public function index()
    {
        return view('pages.dashboard.index');
    }

    public function create()
    {
       
    }


    public function store(Request $request)
    {
        
    }

    public function show($id)
    {
        
    }

   
    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }


    public function destroy($id)
    {
        //
    }
}
