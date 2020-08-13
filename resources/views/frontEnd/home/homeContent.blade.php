@extends('frontEnd.master')

@section('mainContent')
<section id="icon-box" class="py-3 text-center text-light">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-1 pt-4 mb-5">
                <h1 class="text-dark" id="book"><span class="bookCategory">B</span>ook <span class="bookCategory">C</span>ategory</h1>
                <hr>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach($publishedCategories as $publishedCategory)
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <i class="fa fa-book mb-3" style="color:red"></i>
                        <h3 class="text-dark">{{($publishedCategory->categoryName)}}</h3>
                        <p class="lead text-dark">
                            <!-- {{strip_tags($publishedCategory->shortDescription)}} -->

                            {{ str_limit(strip_tags($publishedCategory->shortDescription), 100) }}
                            @if (strlen(strip_tags($publishedCategory->shortDescription)) > 100)
                                <a href="" data-toggle="modal" data-target="#myModal1" style="text-decoration: none;">
                                    ... <i class="fa fa-angle-double-right" style="font-size: 1em; color: #F7043B  "></i>
                                </a>
                                <!-- Modal -->
                                  <div class="modal fade" id="myModal1" role="dialog">
                                    <div class="modal-dialog">
                                    
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title" style="color: #345E3D  ">{{($publishedCategory->categoryName)}}</h4>
                                        </div>
                                        <div class="modal-body">
                                          <p class="text-dark">{{strip_tags($publishedCategory->shortDescription)}}</p>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                      
                                    </div>
                                  </div>
                            @endif
                        </p>
                        <a href="{{url('/quranBookList/'.$publishedCategory->id)}}" class="btn btn-outline-danger"> See List</a>
                    </div>
                </div>
            </div>
            @endforeach
            <!------------------------------------------->
        </div>
</section>
<!--GET-STARTED-SECTION-->

<section id="blog-post" class="py-5">
    <div class="container">
        <div class="row text-center my-4">
            <div class="col">
                <h2><span class="recentBooks">I</span>mportant  <span class="recentBooks">B</span>ooks</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            @foreach($publishedImportantBooks as $publishedImportantBook)
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <img src="{{asset($publishedImportantBook->bookImage)}}" class="img-fluid card-img-top" alt="img">
                    <div class="card-body">
                        <div class="card-title">
                            <h4>{{($publishedImportantBook->bookName)}}</h4>
                            <small class="text-muted">{{($publishedImportantBook->writerName)}}</small>
                            <hr>
                            <p class="lead">
                                <!-- {{strip_tags($publishedImportantBook->bookShortDescription)}} -->
                                {{ str_limit(strip_tags($publishedImportantBook->bookShortDescription), 100) }}
                            @if (strlen(strip_tags($publishedImportantBook->bookShortDescription)) > 100)
                                <a href="" data-toggle="modal" data-target="#myModal1" style="text-decoration: none;">
                                    ... <i class="fa fa-angle-double-right" style="font-size: 1em; color: #F7043B  "></i>
                                </a>
                                <!-- Modal -->
                                  <div class="modal fade" id="myModal1" role="dialog">
                                    <div class="modal-dialog">
                                    
                                      <!-- Modal content-->
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title" style="color: #345E3D  ">{{($publishedImportantBook->writerName)}}</h4>
                                        </div>
                                        <div class="modal-body">
                                          <p class="text-dark">{{strip_tags($publishedImportantBook->bookShortDescription)}}</p>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                      
                                    </div>
                                  </div>
                            @endif
                            </p>
                            <a href="{{url('/readImportantBook/'.$publishedImportantBook->id)}}" class="btn btn-dark btn-block">Read PDF</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

