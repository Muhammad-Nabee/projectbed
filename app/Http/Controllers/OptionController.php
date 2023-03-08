<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bedsize;
use App\Models\Fabric;
use App\Models\Beeding;
use App\Models\Addon;
use App\Models\Matching_storage;
use App\Models\Category;
use App\Models\Mattresssize;
use App\Models\SofaOptions;
use App\Models\StoolOptions;
class OptionController extends Controller
{
    public function size(Request $request){
                     $size= new Bedsize;
    $size->name=$request->singlesize;
    $size->price=$request->price;
  
            
    $size->save();
    

        return redirect()->back()->with('success','bed added successfully');
}

public function addstooloptions(Request $request){
    
                     $stool= new StoolOptions;
    $stool->name=$request->stool;
     $stool->price=$request->price;
            
    $stool->save();
    

        return redirect()->back()->with('success','stool added successfully');
}

public function addsofaoptions(Request $request){
    
                     $sofa= new SofaOptions;
    $sofa->name=$request->sofa;
    $sofa->price=$request->price;        
    $sofa->save();
    

        return redirect()->back()->with('success','sofa added successfully');
}
    
    public function fabric(Request $request){
   
        $fabric = new Fabric;

         
         $this->validate($request, [
            'image' => 'required',
         
        ]);



     if($request->file('image')) {
      
            
         $file = $request->file('image');
         $extension = $file->getClientOriginalExtension();
         $filename=  time().'.'. $extension;
           $file->move('upload/img/',$filename);
          $fabric->image = $filename;
        
         
       
             
     }

        $fabric->image=$fabric->image;
       $fabric->name= $request->fabric_co;
       $fabric->price= $request->febric_price;
     
       
        $fabric->save();

   return redirect()->back()->with('success','fabric added successfully');

    }

    public function mattress(Request $request){
       
        $mattress= new Mattresssize();
        
        if($request->hasfile('image')){
         $file = $request->file('image');
         $extension = $file->getClientOriginalExtension();
         $filename=  time().'.'. $extension;
       $file->move('upload/img/',$filename);
       $mattress->image= $filename;
  }
  
  
  $mattress->image=$mattress->image;
      $mattress->name=$request->mattresssize;
      $mattress->price=$request->mattress_price;
      $mattress->save();
     return redirect()->back()->with('success','Mattress added successfully');
     }

    public function beeding(Request $request){
        $beeding= new Beeding();
       
        
        if($request->hasfile('image')){
         $file = $request->file('image');
         $extension = $file->getClientOriginalExtension();
         $filename=  time().'.'. $extension;
       $file->move('upload/img/',$filename);
       $beeding->image= $filename;
  }
  
  $beeding->image=$beeding->image;
      $beeding->name=$request->beeding_name;
      $beeding->price=$request->beeding_price;
      $beeding->save();
     return redirect()->back()->with('success','Beeding added successfully');

    }
    public function addon(Request $request){
        $addon= new Addon();
       
       if($request->hasfile('image')){
         $file = $request->file('image');
         $extension = $file->getClientOriginalExtension();
         $filename=  time().'.'. $extension;
       $file->move('upload/img/',$filename);
       $addon->image= $filename;
  }
  
  $addon->image=$addon->image;
      $addon->name=$request->add;
      $addon->price=$request->addon_price;
      $addon->save();
     return redirect()->back()->with('success','Addon added successfully');

    }
    public function matching_storage_box(Request $request){
        
        $matching= new Matching_storage();
       if($request->hasfile('image')){
         $file = $request->file('image');
         $extension = $file->getClientOriginalExtension();
         $filename=  time().'.'. $extension;
       $file->move('upload/img/',$filename);
       $matching->image= $filename;
  }
  
  $matching->image=$matching->image;
   $matching->name=$request->matching_name;
      $matching->size=$request->matching_size;
      $matching->price=$request->matching_price;
      $matching->save();
     return redirect()->back()->with('success','matching_storagebox added successfully');

    }
}