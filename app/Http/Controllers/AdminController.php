<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\Alumni;

class AdminController extends Controller
{
    public function addview()
    {
      return view('admin.add_alumni');
    }

    public function upload(Request $request)
    {
      $alumni=new alumni;

      $image=$request->file;

  $imagename=time().'.'.$image->getClientoriginalExtension();

  $request->file->move('alumniimage',$imagename);

  $alumni->image=$imagename;

  $alumni->name=$request->name;

  $alumni->phone=$request->number;

  $alumni->branch=$request->branch;

  $alumni->specialisation=$request->specialisation;

  $alumni->save();

  return redirect()->back();


    }
}
