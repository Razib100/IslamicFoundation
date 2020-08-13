<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\importantBook;
use App\bookList;
use App\about;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Redirect;

class welcomeController extends Controller
{
    public function index(){
        $publishedCategories=category::where('publicationStatus',1)->get();
        $publishedImportantBooks=  importantBook::where('publicationStatus',1)->get();
        return view('frontEnd.home.homeContent',['publishedCategories'=>$publishedCategories],['publishedImportantBooks'=>$publishedImportantBooks]);
    }

    public function about(){
        $publishedAbouts=about::where('publicationStatus',1)->get();
        return view('frontEnd.home.about',['publishedAbouts'=>$publishedAbouts]);
    }

    public function book(){
        $publishedCategories=category::where('publicationStatus',1)->get();
        return view('frontEnd.home.book',['publishedCategories'=>$publishedCategories]);
    }

    public function feedBack(){
        return view('frontEnd.home.feedBack');
    }

    public function contact(){
        return view('frontEnd.home.contact');
    }

    public function quranBookList($id){
//        $publishedBookLists=  bookList::where('publicationStatus',1)->get();
        $reader_id=Session::get('id');
        if($reader_id !=NULL){
             $publishedBookListWithCategories =  bookList::where('categoryId',$id)
                                                    ->where('publicationStatus',1)
                                                    ->get();
                                           
              return view('frontEnd.home.quranBookList',['publishedBookListWithCategories'=>$publishedBookListWithCategories]);
             }

             else{
                return Redirect('/user-login');
            }
        
    }

    public function readPdf($id) {
        // $reader_id=Session::get('id');
        // if($reader_id !=NULL){
        //      $publishedBookListForReads = bookList::find($id);
        //      $files=$publishedBookListForReads->uploadFile;
        //      return Response::file($files);
        //      }

        //      else{
        //         return Redirect('/user-login');
        //     }
    $publishedBookListForReads = bookList::find($id);
             $files=$publishedBookListForReads->uploadFile;
             return Response::file($files);
    }


    public function readImportantBook($id) {
        $reader_id=Session::get('id');
        if($reader_id !=NULL){
             $publishedImportantBookForReads = importantBook::find($id);
             $files=$publishedImportantBookForReads->uploadFile;
             return Response::file($files);
             }

             else{
                return Redirect('/user-login');
            }
         
    }

     public function download($id) {
        // $reader_id=Session::get('id');
        // if($reader_id !=NULL){
        //      $publishedBookListForReads = bookList::find($id);
        //      $files=$publishedBookListForReads->uploadFile;
        //      return Response::download($files);
        //      }

        //      else{
        //         return Redirect('/user-login');
        //     }
         $publishedBookListForReads = bookList::find($id);
         $files=$publishedBookListForReads->uploadFile;
         return Response::download($files);
    }

}
