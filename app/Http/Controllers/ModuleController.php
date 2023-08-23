<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public function store_module(Request $request)
    {
        $module = new Module();
        $module->course_id = $request->input('course_id');
        $module->user_id = auth()->user()->id;
        $module->title = $request->input('module_title');
        $module->text_content = $request->input('text_content');
        $module->link_content = $request->input('link_content');
        $module->image_url = $request->input('module_image_url');
        $module->save();

        return redirect('/dashboard');
    }

    public function delete(Request $request)
    {
        $this->validate($request, [
            'module_id' => 'required|exists:modules,id',
        ]);

        $module = Module::find($request->module_id);
        $module->delete();

        return redirect('/dashboard');
    }
}
