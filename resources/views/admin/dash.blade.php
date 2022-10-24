@extends('admin/lay.all')
@section('content')
    

            <!-- Sale & Revenue Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                     
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2"> CATEGORY</p>
                                <h6 class="mb-0">{{$cat}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2"> PRODUCT</p>
                                <h6 class="mb-0">{{$product}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2"> BRAND</p>
                                <h6 class="mb-0">{{$brand}}</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2"> USERS</p>
                                <h6 class="mb-0">{{ Auth::user()->count() }}</h6>
                            </div>
                        </div>
                    </div>
                    
                     
                </div>
            </div>
            <!-- Sale & Revenue End -->

  


            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4 mb-5">
                <div class="row g-4 bg-secondary mt-5 p-4">
                    <div class="col-sm-12 col-md-6 col-xl-12">
                        <div class="h-100 bg-secondary rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="mb-0">Messages</h6>
                                <a href="">Show All</a>
                            </div>
                
                        
                        @foreach ($message as $m)
                         
                            <div class="d-flex align-items-center pt-3">
                                 <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">{{$m->fname}}  {{$m->lname}}</h6>
                                        <small>{!! date('d/M/y', strtotime($m->created_at)) !!} </small>
                                    </div>
                                    <span>{{$m->message}}</span>
                                </div>
                            </div>

                    @endforeach
                        </div>
                    </div>
                     
            </div>
            <!-- Widgets End -->


           
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    @endsection