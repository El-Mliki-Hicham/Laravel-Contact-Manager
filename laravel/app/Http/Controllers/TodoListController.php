<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Data = TodoList::all();
        return view('index',compact('Data'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nom = $request->input('Nom_Tach');
        $Desciption= $request->input('Description');
       

        $contacts = TodoList::create([
            "Nom_Tach" => $nom,
            "Description" => $Desciption
           
           
            ]);
            if($contacts){
                return redirect('index');
                
               }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Data = TodoList::select("*")->where('id',$id)->get();
        
        return view("show",compact('Data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Data = TodoList::select('*')->where("id",$id)->get();
        
        return view("edit",compact('Data'));
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
        $nom = $request->input('Nom_Tach');
        $Desciption= $request->input('Description');

        $Data = TodoList::where("id",$id)
    ->update([
             "Nom_Tach" => $nom,
            "Description" => $Desciption
    
    ]);
    if($Data){
        return redirect('index');
        
       }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = TodoList::where('id',$id)->delete();

        if ($delete) {
          return  redirect("index");
        }
    }
}
