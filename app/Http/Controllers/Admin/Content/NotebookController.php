<?php

namespace App\Http\Controllers\Admin\Content;

use App\Model\Notebook;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotebookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Notebook[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
//        return "<form action='/admin/content/notebook' method='post'><input type='text' name='name'> <input type='text' name='description'><input type='text' name='_token' value='".csrf_token()."'><button type='submit'>提交</button></form>";
//        return Notebook::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return Notebook
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:notebooks|max:255',
            'description' => 'required|max:255',
        ]);

        $notebook = new Notebook();
        $notebook->name = $request->input('name');
        $notebook->description = $request->input('description');
        $notebook->user_id = \Auth::user()->id;
        $notebook->save();

        return $notebook;
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
