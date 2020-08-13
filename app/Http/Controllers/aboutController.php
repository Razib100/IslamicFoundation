<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\about;
use DB;

class aboutController extends Controller
{
    public function createAbout(){
        return view('admin.about.createAbout');
    }

    public function saveAbout(Request $request){
        $this->validate($request, [
            'entryType' => 'required',
            'aboutDescription' => 'required',
            'publicationStatus' => 'required',
        ]);
        $about = new about();
        $about->entryType = $request->entryType;
        $about->aboutDescription = $request->aboutDescription;
        $about->publicationStatus = $request->publicationStatus;
        $about->save();
        return redirect('/about/add')->with('message', 'About info save successfully');
    }



    public function manageAbout() {
        $abouts = about::paginate(10);
        return view('admin.about.manageAbout', ['abouts' => $abouts]);
    }



     public function viewAbout($id) {
        $viewAboutById = about::where('id', $id)->first();
        return view('admin.about.viewAbout', ['viewAboutById' => $viewAboutById]);
    }



    public function editAbout($id) {
        $aboutById = about::where('id', $id)->first();
        return view('admin.about.editAbout', ['aboutById' => $aboutById]);
    }



    public function updateAbout(Request $request ,$id) {
        $this->validate($request, [
            'entryType' => 'required',
            'aboutDescription' => 'required',
            'publicationStatus' => 'required',
        ]);
        $about= about::find($id);
        $about->entryType=$request->input('entryType');
        $about->aboutDescription=$request->input('aboutDescription');
        $about->publicationStatus=$request->input('publicationStatus');
        $about->save();
        
        return redirect('/about/manage')->with('message', 'About update save successfully');
    }
    

    
    public function deleteCategory($aboutId) {
        $about = about::find($aboutId);
        $about->delete();
        return redirect('/about/manage')->with('message', 'About Info Delete Successfully');
    }
}

