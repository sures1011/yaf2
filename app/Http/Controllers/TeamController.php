<?php

namespace App\Http\Controllers;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();
        return view('admin.team.show',compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $teams = new team;
        $teams->name=$request->name;
        $teams->designation=$request->designation;
        $teams->message = $request->message;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('image',$imagename);
        $teams->image=$imagename;
        $teams->save();
      
        return redirect()->back()->with('message','services added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $teams)
    {
        $teams = Team::all();
        return view('admin.team.show')->with('teams', $teams);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $teams,$id)
    {
        $teams = Team::find($id); 
        return view('admin.team.update', compact('teams'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id){
        $teams=Team::find($id);

        return view('admin.team.update',compact('teams'));
    }
    public function update_confirm(Request $request, $id)
    {
        $teams=Team::find($id);
        $teams->name=$request->name;
        $teams->designation=$request->designation;
        $teams->message=$request->message;
        $image=$request->image;
        if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('image',$imagename);
        $teams->image=$imagename;
        }

        
        $teams->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id){
        $teams=Team::find($id);
        $teams->delete();
        return redirect()->back()->with('message','services deleted sucessfully');
}

}