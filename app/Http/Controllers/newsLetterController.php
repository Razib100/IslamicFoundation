<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\subscribe;

class newsLetterController extends Controller
{
    public function saveNewsLetter(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
        ]);
        $subscribe = new subscribe();
        $subscribe->name = $request->name;
        $subscribe->email = $request->email;
        $subscribe->save();
        
         return back()->with('message', 'newsLetter Sent Successfully');
    }


    public function manageNewsLetter(){
        $allSubscribes = subscribe::paginate(10);
        return view('admin.newsLetter.newsLetter', ['allSubscribes' => $allSubscribes]);
    }

    
    public function viewNewsLetter($id) {
        $viewSubscribeById = subscribe::where('id', $id)->first();
        return view('admin.newsLetter.viewNewsLetter', ['viewSubscribeById' => $viewSubscribeById]);
    }
}
