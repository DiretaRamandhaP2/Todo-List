<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListController extends Controller
{
    //view
    public function view()
    {
        $user = Auth::user();
        $list = TodoList::with('user')->where('create_by', $user->id)->get();
        return view('crud.home', compact('list'));
    }
    public function view_create()
    {
        return view('crud.create');
    }
    public function view_update(Request $request)
    {
        $list = TodoList::where('id', $request->id_list)->first();
        return view('crud.update', compact('list'));
    }

    //fitur
    public function create(Request $request)
    {
        $validate = $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'date' => ['required'],
            'duedate' => ['required'],
            'priority' => ['required'],
        ]);

        if (!$validate) {
            alert()->error('Oops', 'Something went wrong!');
            return redirect()->back();
        }
        $user = Auth::user();
        $list = new TodoList();
        $list->name = $request->name;
        $list->description = $request->description;
        $list->date = $request->date;
        $list->duedate = $request->duedate;
        $list->priority = $request->priority;
        $list->status = 'unfinished';
        $list->create_by = $user->id;
        $list->save();

        alert()->success('Success', 'Successfully added a list');
        return redirect('/home');
    }
    public function update(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'duedate' => ['required'],
            'priority' => ['required'],
        ]);

        $list = TodoList::where('id', $request->id_list)->first();
        $list->name = $request->name;
        $list->description = $request->description;
        $list->duedate = $request->duedate;
        $list->priority = $request->priority;
        $list->save();

        alert()->success('Success', 'Successfully changed the list');
        return redirect('/home');
    }
    public function delete(Request $request)
    {
        TodoList::where('id', $request->id_list)->delete();
        alert()->success('Success', 'Successfully delete the list');
        return redirect()->back();
    }
    public function list_done(Request $request)
    {
        $list = TodoList::where('id', $request->id_list)->first();
        $list->status = 'finished';
        $list->save();
        alert()->success('Success', 'successfully completed it');
        return redirect()->back();
    }
}
