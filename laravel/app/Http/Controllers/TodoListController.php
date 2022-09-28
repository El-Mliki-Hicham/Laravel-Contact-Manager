<?php

namespace App\Http\Controllers;

use App\Models\TodoList;
use Illuminate\Http\Request;

class TodoListController extends Controller
{
   
    public function index()
    {
        $Data = TodoList::all();
        return view('index',compact('Data'));


    }

    
    public function create()
    {
        return view('insert');
    }

   
    public function store(Request $request)
    {
        $nom = $request->input('Nom_Tach');
        $Desciption= $request->input('Description');
       

        $data = TodoList::create([
            "Nom_Tach" => $nom,
            "Description" => $Desciption
           
           
            ]);
            if($data){
                return redirect('index');
                
               }
    }

   
    public function edit($id)
    {
        $Data = TodoList::select('*')->where("id",$id)->get();
        
        
        return view("edit",compact('Data'));
    }

   
    public function update(Request $request, $id)
    {
        $nom = $request->input('Nom_Tach');
        $Desciption= $request->input('Description');

        $Data = TodoList::where("id",$id)
        // update : modifier
    ->update([
             "Nom_Tach" => $nom,
            "Description" => $Desciption
    
    ]);
    if($Data){
        return redirect('index');
        
       }
    }

    
    public function destroy($id)
    {
        $delete = TodoList::where('id',$id)->delete();

        if ($delete) {
          return  redirect("index");
        }
    }
}
