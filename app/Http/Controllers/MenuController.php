<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.menu_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Menu::create([
            'name'=> $request->input('name'),
            'status'=> $request->input('status'),
            'link'=> $request->input('link'),
        ]);
        return redirect()->back();

        // $data = new menu;
        // $data->name=$request->name;
        // $data->status=$request->status;
        // $data->link=$request->link;
        // $data->save();
        // return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $menu=menu::all();
        return view('admin.menu_show',compact('menu'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Menu $menu)
    {
     
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id){
        $menu=menu::find($id);

        return view('admin.menu_update',compact('menu'));
    }

    public function update_confirm(Request $request, $id){

       

        $menu = menu::find($id);
        $menu->name=$request->name;
        $menu->status=$request->status;
        $menu->link=$request->link; 
        $menu->save();
        return redirect()->back()->with('message','Menu updated sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $menu=menu::find($id);
        $menu->delete();
        return redirect()->back()->with('message','Menu deleted sucessfully');
    }
}
