<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\bookList;
use DB;

class bookListController extends Controller
{
     public function createBookList(){
         $categories=category::where('publicationStatus',1)->get();
        return view('admin.bookList.createBookList',['categories'=>$categories]);
    }


    public function saveBookList(Request $request){
        $this->validate($request, [
            'entryType' => 'required',
            'bookName' => 'required',
            'authorName' => 'required',
            'isbnNumber' => 'required',
            'edition' => 'required',
            'volume' => 'required',
            'publisherName' => 'required',
            'bookShortDescription' => 'required',
            'uploadFile' => 'required|mimes:pdf|max:10000',
            'publicationStatus' => 'required',
        ]);
        if($request->file('uploadFile')){
        $uploadFile=$request->file('uploadFile');
        $name=$uploadFile->getClientOriginalName();
        $uploadPath='public/download/';
        $uploadFile->move($uploadPath,$name);
        // $fileUrl=$uploadPath.$name;    (file upload with path and file name)
        $fileUrl=$uploadPath.$name;
        }
        $bookList = new bookList();
        $bookList->entryType = $request->entryType;
        $bookList->bookName = $request->bookName;
        $bookList->authorName = $request->authorName;
        $bookList->categoryId = $request->categoryId;
        $bookList->isbnNumber = $request->isbnNumber;
        $bookList->edition = $request->edition;
        $bookList->volume = $request->volume;
        $bookList->publisherName = $request->publisherName;
        $bookList->bookShortDescription = $request->bookShortDescription;
        $bookList->uploadFile = $fileUrl;
        $bookList->publicationStatus = $request->publicationStatus;
        $bookList->save();
        return redirect('/bookList/add')->with('message', 'Books Info Save Successfully');
    }


    public function manageBookList() {
        $bookLists = DB::table('book_lists')
                    ->join('categories', 'book_lists.categoryId', '=', 'categories.id')
                    ->select('book_lists.id','book_lists.entryType', 'book_lists.bookName', 'book_lists.authorName','categories.categoryName','book_lists.isbnNumber','book_lists.edition','book_lists.volume','book_lists.publisherName','book_lists.bookShortDescription','book_lists.uploadFile','book_lists.publicationStatus')
                    ->get();
        return view('admin.bookList.manageBookList', ['bookLists' => $bookLists]);
    }


    public function viewBookList($id) {
        $viewBookListById = DB::table('book_lists')
                                ->join('categories', 'book_lists.categoryId', '=', 'categories.id')
                                ->select('book_lists.id','book_lists.entryType', 'book_lists.bookName', 'book_lists.authorName','categories.categoryName','book_lists.isbnNumber','book_lists.edition','book_lists.volume','book_lists.publisherName','book_lists.bookShortDescription','book_lists.uploadFile','book_lists.publicationStatus')
                                ->where('book_lists.id',$id)
                                ->first();
        return view('admin.bookList.viewBookList', ['viewBookListById' => $viewBookListById]);
    }


    public function editBookList($id) {
        $categories=category::where('publicationStatus',1)->get();
        $bookListById = DB::table('book_lists')
                                ->join('categories', 'book_lists.categoryId', '=', 'categories.id')
                                ->select('book_lists.id','book_lists.entryType', 'book_lists.bookName', 'book_lists.authorName','categories.categoryName','book_lists.isbnNumber','book_lists.edition','book_lists.volume','book_lists.publisherName','book_lists.bookShortDescription','book_lists.uploadFile','book_lists.publicationStatus')
                                ->where('book_lists.id',$id)
                                ->first();
        return view('admin.bookList.editBookList', ['bookListById' => $bookListById,'categories'=>$categories]);
    }


    public function updateBookList(Request $request ,$id) {
        $this->validate($request, [
            'publicationStatus' => 'required',
        ]);
        $fileUrl=$this->fileExistStatus($request);
        $bookList= bookList::find($id);
        $bookList->entryType = $request->entryType;
        $bookList->bookName = $request->bookName;
        $bookList->authorName = $request->authorName;
        $bookList->categoryId = $request->categoryId;
        $bookList->isbnNumber = $request->isbnNumber;
        $bookList->edition = $request->edition;
        $bookList->volume = $request->volume;
        $bookList->publisherName = $request->publisherName;
        $bookList->bookShortDescription = $request->bookShortDescription;
        $bookList->uploadFile = $fileUrl;
        $bookList->publicationStatus = $request->publicationStatus;
        $bookList->save();
        return redirect('/bookList/manage')->with('message', 'Book List update successfully');
    
    }


    private function fileExistStatus($request){
        $bookListById= bookList::where('id',$request->bookListId)->first();
        $uploadFile=$request->file('uploadFile');
        if($uploadFile){
            unlink($bookListById->uploadFile);
            $name=$uploadFile->getClientOriginalName();
            $uploadPath='public/download/';
            $uploadFile->move($uploadPath,$name);
            $fileUrl=$uploadPath.$name;
        }
        else{
            $fileUrl=$bookListById->uploadFile;
        }
        return $fileUrl;
    }

    
    public function deleteBookList($bookListId) {
        $bookList = bookList::find($bookListId);
        $bookList->delete();
        return redirect('/bookList/manage')->with('message', 'Book List Info Delete Successfully');
    }
}
