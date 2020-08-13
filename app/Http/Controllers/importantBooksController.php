<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\importantBook;

class importantBooksController extends Controller
{
    public function createImportantBooks(){
        return view('admin.importantBooks.createImportantBooks');
    }


    public function saveImportantBooks(Request $request){
        $this->validate($request, [
            'entryType' => 'required',
            'bookName' => 'required',
            'writerName' => 'required',
            'bookShortDescription' => 'required',
            'bookImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:500',
            'uploadFile' => 'required|mimes:pdf|max:10000',
            'publicationStatus' => 'required',
        ]);
        if($request->file('bookImage')){
        $bookImage=$request->file('bookImage');
        $name=$bookImage->getClientOriginalName();
        $uploadPath='public/bookImage/';
        $bookImage->move($uploadPath,$name);
        $imageUrl=$uploadPath.$name;
        }
        if($request->file('uploadFile')){
        $uploadFile=$request->file('uploadFile');
        $name=$uploadFile->getClientOriginalName();
        $uploadPath='public/importantBook/';
        $uploadFile->move($uploadPath,$name);
        $fileUrl=$uploadPath.$name;    
        //$fileUrl=$name;(file upload with path and file name)
        }
        $importantBook = new importantBook();
        $importantBook->entryType = $request->entryType;
        $importantBook->bookName = $request->bookName;
        $importantBook->writerName = $request->writerName;
        $importantBook->bookShortDescription = $request->bookShortDescription;
        $importantBook->bookImage = $imageUrl;
        $importantBook->uploadFile = $fileUrl;
        $importantBook->publicationStatus = $request->publicationStatus;
        $importantBook->save();
        return redirect('/importantBooks/add')->with('message', 'Important Books Info Save Successfully');
    }


    public function manageImportantBooks() {
        $importantBooks = importantBook::paginate(10);
        return view('admin.importantBooks.manageImportantBooks', ['importantBooks' => $importantBooks]);
    }



    public function editImportantBooks($id) {
        $importantBookById = importantBook::where('id', $id)->first();
        return view('admin.importantBooks.editImportantBooks', ['importantBookById' => $importantBookById]);
    }



    public function updateImportantBooks(Request $request ,$id) {
        $this->validate($request, [
            'publicationStatus' => 'required',
        ]);
        $imageUrl=$this->imageExistStatus($request);
        $fileUrl=$this->fileExistStatus($request);

        
        $importantBook= importantBook::find($id);
        $importantBook->entryType=$request->input('entryType');
        $importantBook->bookName=$request->input('bookName');
        $importantBook->writerName=$request->input('writerName');
        $importantBook->bookShortDescription=$request->input('bookShortDescription');
        $importantBook->bookImage = $imageUrl;
        $importantBook->uploadFile = $fileUrl;
        $importantBook->publicationStatus=$request->input('publicationStatus');
        $importantBook->save();
        return redirect('/importantBooks/manage')->with('message', 'Important Books update successfully');
    
    }



    private function imageExistStatus($request){
        $importantBookById=  importantBook::where('id',$request->importantBookId)->first();
        $bookImage=$request->file('bookImage');
        if($bookImage){
            unlink($importantBookById->bookImage);
            $name=$bookImage->getClientOriginalName();
            $uploadPath='public/bookImage/';
            $bookImage->move($uploadPath,$name);
            $imageUrl=$uploadPath.$name;
        }
        else{
            $imageUrl=$importantBookById->bookImage;
        }
        return $imageUrl;
    }

    

    private function fileExistStatus($request){
        $importantBookById= importantBook::where('id',$request->importantBookId)->first();
        $uploadFile=$request->file('uploadFile');
        if($uploadFile){
            unlink($importantBookById->uploadFile);
            $name=$uploadFile->getClientOriginalName();
            $uploadPath='public/importantBook/';
            $uploadFile->move($uploadPath,$name);
            $fileUrl=$uploadPath.$name;
        }
        else{
            $fileUrl=$importantBookById->uploadFile;
        }
        return $fileUrl;
    }


    public function deleteImportantBooks($importantBookId) {
        $importantBook = importantBook::find($importantBookId);
        $importantBook->delete();
        return redirect('/importantBooks/manage')->with('message', 'Important Books Info Delete Successfully');
    }
}
