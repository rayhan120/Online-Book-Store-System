<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\Manu;


class productcontroller extends Controller


{
    public function list ()
    
    {
        $title='Product List';
        $product=products::with('manuproduct')->paginate(3);
        
        return view('backend.layouts.product.product_list',compact('product','title'));
    } 


//form method

    public function creatfrom()
         {
            $catagory_loop=Manu::all();
            //dd($catagory_loop);

         return view('backend.layouts.product.creat',compact('catagory_loop'));
         }

//creat method

     public function create(request $request)
         { 



            $validated = $request->validate([
                'name' => 'required',
                
            ]);
            //dd($request->all());
            //dd(date('Ymdhmi'));
            //dd($request->file('image')->getClientOriginalExtension());

            //store image into local directory
            $filename='';
            if($request->hasFile('image'))
            {

                //some code here to store into directory
                //image store into file

                $file = $request->file('image');
                //if file is valide
                if ($file->isValid()){

                    //somy & extention(ex-.jpg)
                 $filename = date('Ymdhms').'.'.$file->getClientOriginalExtension();

                 //dd($filename);
                 $file->storeAs('product',$filename);

                }
                   

            }



            //get a unique file name and store into database

            products::create([
     
               

                 'name'=>$request->name,
                 'author'=>$request->author,
                 'price'=>$request->price,
                 'description'=>$request->description,
                  'page'=>$request->page,
                  'quentity'=>$request->quentity,
                
                  'language'=>$request->language,
                  'publised_date'=>$request->publised_date,
                  'catagory_id'=>$request->catagory_id,
                 'image'=>$filename
        
        
            ]);
        
            return redirect()->route('product.list');
         }
//delet

         public function deleteproduct($id)
         {

           
      //first get the product
      $product=products::find($id);
      //then delete the product
      if($product)
      {
        $product->delete();

      }
      
      //products::where('id',$id)->delete();
      
return redirect()->back()->with('success','product deleted successfully.');

      
         }

         public function editproduct($id)
         {

            $catagory_loop=Manu::all();
            $product=products::find($id);
            //dd($product);
           //get all data of for this id
           //pass data to a view

           return view('backend.layouts.product.edit',compact('catagory_loop','product'));
         }
         

         


         
         public function updateproduct(Request $request,$id)

         {

               
        products::find($id)->update([
            'name'=>$request->name,
            'author'=>$request->author,
            'price'=>$request->price,
            'description'=>$request->description,
             'page'=>$request->page,
             'quentity'=>$request->quentity,
             'language'=>$request->language,
             'publised_date'=>$request->publised_date,
             'catagory_id'=>$request->catagory_id,
             //'image'=>$filename
                  


        ]);
        return redirect()->route('product.list')->with('success','Updated successfully.');
           // return view
         }

        

}
