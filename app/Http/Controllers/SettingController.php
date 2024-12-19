<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($itemId)
    {
        $settings = Setting::with(['user'])->where('user_id', $itemId)->get();
        return view('setting.index', compact('settings'));
    }

    public function updateSetting($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->setting = $request->has('setting') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }

    public function updateissue($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->issue = $request->has('issue') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }

    public function updateposts($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->posts = $request->has('posts') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }

    public function updatechat($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->chat = $request->has('chat') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }

    public function updatetask($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->task = $request->has('task') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }

    public function updateWorkflow($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->workflow = $request->has('workflow') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }

    public function update_salary($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->salary = $request->has('salary') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }
    public function update_expense($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->expense = $request->has('expense') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }

    public function update_add_japanese($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->add_japanese = $request->has('add_japanese') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }

    public function update_japanese($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->japanese = $request->has('japanese') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }

    public function update_learn_japanese($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->learn_japanese = $request->has('learn_japanese') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }

    public function update_add_english($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->add_english = $request->has('add_english') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }

    public function update_english($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->english = $request->has('english') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }
    
    public function update_learn_english($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->learn_english = $request->has('learn_english') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }

    public function update_question($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->question = $request->has('question') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }
    
    public function update_word($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->word = $request->has('word') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }

    public function update_excel($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->excel = $request->has('excel') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }

    public function update_test_code($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->test_code = $request->has('test_code') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }

    public function update_component($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->component = $request->has('component') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }

    public function update_color($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->color = $request->has('color') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }

    public function update_html($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->html = $request->has('html') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }
    public function update_js($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->js = $request->has('js') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }
    public function update_vue($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->vue = $request->has('vue') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }


    public function update_react($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->react = $request->has('react') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }
    public function update_jquery($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->jquery = $request->has('jquery') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }
    public function update_angular($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->angular = $request->has('angular') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }

    public function update_php($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->php = $request->has('php') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }
    public function update_laravel($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->laravel = $request->has('laravel') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }
    public function update_node($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->node = $request->has('node') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }

    public function update_cshap($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->cshap = $request->has('cshap') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }
    public function update_java($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->java = $request->has('java') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }
    public function update_javascript($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->javascript = $request->has('javascript') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }

    public function update_ftp($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->ftp = $request->has('ftp') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }
    public function update_ubuntu($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->ubuntu = $request->has('ubuntu') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }
    public function update_mysql($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->mysql = $request->has('mysql') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }
    public function update_sqlsever($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->sqlsever = $request->has('sqlsever') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }


    public function update_mongo($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->mongo = $request->has('mongo') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }
    public function update_mysqlworkbench($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->mysqlworkbench = $request->has('mysqlworkbench') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }
    public function update_postgreSQL($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->postgreSQL = $request->has('postgreSQL') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
    }
    public function update_error($id, Request $request)
    {
        $setting = Setting::findOrFail($id);
        $setting->error = $request->has('error') ? 1 : 0;
        $setting->save();
        return redirect()->back()->with('success', 'Setting updated successfully');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
