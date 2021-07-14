<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manu;

class Manucontroller extends Controller
{
    public function list ()
    {
        $title='Category List';
        //dd($manus);
        $manu_create=Manu::all();//select from * manu;
        //dd($manu_list);
        

        return view( 'backend.layouts.manu.manu-list',compact( 'manu_create','title'));
    }
  



    public function create(Request $request)

      

{
    
    Manu::create([
        'Name'=>$request->Name,
        'description'=>$request->description,
        
    ]);
    return redirect()->back();

}
public function deletecatagory($id)
{

$catagory=Manu::find($id);
if($catagory)
{
$catagory->delete();

}

return redirect()->back()->with('success','catagory deleted successfully.');


}

public function editcategory($id)
         {

           
            $category=Manu::find($id);
            //dd($Manu);
           //get all data of for this id
           //pass data to a view

           return view('backend.layouts.manu.category_edit',compact('category'));
         }
         
         public function updatcategory(Request $request,$id)

         {

        Manu::find($id)->update([
            'Name'=>$request->Name,
                 'description'=>$request->description,
                 

        ]);
        return redirect()->route('manu.list')->with('success','Updated successfully.');
           // return view
         }








}
