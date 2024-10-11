<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Javascript;

class ReactjsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
   {
      $javascripts = Javascript::where('category_id', 28)->paginate(12);
      return view('reactjs.index', compact('javascripts'));
   }

   /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
      //
   }

   /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
      $request->validate([
         'user_id' => 'required|exists:users,id',
         'category_id' => 'required',
         'name' => 'required',
         'description' => 'required',
         'image' => 'required',
         'code' => 'required',
         'link' => 'required',
      ]);
   
      if ($request->hasFile('image')) {
         $image = $request->file('image');
         $filename = time() . '_' . $image->getClientOriginalName();
         $imagePath = $image->move(public_path('assets/images'), $filename);
         $relativePath = $filename;
      }
   
      Javascript::create([
         'user_id' => $request->user_id,
         'category_id' => $request->category_id,
         'name' => $request->name,
         'description' => $request->description,
         'image' => $relativePath,
         'code' => $request->code,
         'link' => $request->link,
      ]);
      return redirect()->route('reactjs.index')->with('success', __('messages.Create_success'));
   }

   /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      $javascripts = Javascript::findOrFail($id);
      return response()->json($javascripts);
   }

   /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
      //
   }

   /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function update(Request $request, $id)
   {
      
   }

   /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
      $javascripts = Javascript::findOrFail($id);
      $javascripts->delete();
      return redirect()->back()->with('success', 'Deleted successfully');
   }
}
