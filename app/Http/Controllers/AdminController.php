<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services;
use App\Models\Programs;

class AdminController extends Controller
{
    

    public function view_services(){
        
        return view('admin.services');
    }

    public function add_services(Request $request){
        $services = new services;
        $services->name=$request->name;
        $services->detail=$request->detail;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('image',$imagename);
        $services->image=$imagename;

        $services->save();
        return redirect()->back()->with('message','services added');
    }

    public function show_services(){
        $services=services::all();
        return view('admin.show_services',compact('services'));
    }

    public function delete_services($id){
        $services=services::find($id);
        $services->delete();
        return redirect()->back()->with('message','services deleted sucessfully');
    }

    public function update_services($id){
        $services=services::find($id);

        return view('admin.update_services',compact('services'));
    }

    public function update_services_confirm(Request $request, $id){

        $services = services::find($id);
        $services->name=$request->name;
        $services->detail=$request->detail;
        $image=$request->image;
        if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('image',$imagename);
        $services->image=$imagename;
        }

        
        $services->save();
        return redirect()->back()->with('message','services updated sucessfully');
    }





    public function view_programs(){
        
        return view('admin.programs');
    }

    public function add_programs(Request $request){
        $programs = new programs;
        $programs->name=$request->name;
        $programs->detail=$request->detail;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('image',$imagename);
        $programs->image=$imagename;

        $programs->save();
        return redirect()->back()->with('message','Programs added');
    }

    public function show_programs(){
        $programs=programs::all();
        return view('admin.show_programs',compact('programs'));
    }

    public function delete_programs($id){
        $programs=programs::find($id);
        $programs->delete();
        return redirect()->back()->with('message','Programs deleted sucessfully');
    }

    public function update_programs($id){
        $programs=programs::find($id);

        return view('admin.update_programs',compact('programs'));
    }

    public function update_programs_confirm(Request $request, $id){

        $programs = programs::find($id);
        $programs->name=$request->name;
        $programs->detail=$request->detail;
        $image=$request->image;
        if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('image',$imagename);
        $programs->image=$imagename;
        }

        
        $programs->save();
        return redirect()->back()->with('message','Programs updated sucessfully');
    }
}
