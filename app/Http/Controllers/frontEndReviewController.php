<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\message;
use DB;

class frontEndReviewController extends Controller
{
    public function saveFeedback(Request $request){
        $this->validate($request, [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'phoneNumber' => 'required',
            'message' => 'required',
        ]);
        $message = new message();
        $message->firstName = $request->firstName;
        $message->lastName = $request->lastName;
        $message->email = $request->email;
        $message->phoneNumber = $request->phoneNumber;
        $message->message = $request->message;
        $message->save();
        
         return redirect('/feedBack')->with('message', 'FeedBack Sent Successfully');
    }


    public function manageFeedback(){
        $allMessages = message::paginate(10);
        return view('admin.feedBack.feedBack', ['allMessages' => $allMessages]);
    }

    
    public function viewFeedBack($id) {
        $viewMessageById = message::where('id', $id)->first();
        return view('admin.feedBack.viewFeedBack', ['viewMessageById' => $viewMessageById]);
    }
}
