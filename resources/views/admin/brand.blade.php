@extends('admin/lay.all')
@section('content')
    
            <!-- Form Start -->
            <div class="container-fluid p-5 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-12">
                        <div class="bg-secondary rounded h-100 p-5">
                            <h6 class="mb-4">Brand</h6>
                            <form action="brand" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="name">
                                     
                                </div>
                                <div class="mb-3 ">
                                    <label for="exampleInputPassword1" class="form-label">Brand img</label>
                                    <input type="file" class="form-control" id="exampleInputPassword1" name="image" style="background-color:black ;">
                                </div>
                                 
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                        </div>
                    </div>

                    <div class="container-fluid p-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Brand</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">
                                     <th scope="col">Name</th>
                                    <th scope="col">Image</th>
                                     <th scope="col">Date</th>
                                     <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                    @foreach ($data as $d)
                        
                              <tr>
                                  <td>{{$d->name}}</td>
                                  <td><img src="{{$d->image}}" alt="image" width="70" height="50"></td>
                                  <td>{{$d->created_at}}</td>
                                    <td><a class="btn btn-sm btn-primary" href="/brand/{{$d->id}}">Delete</a></td>
                                  </tr>
                               
                    @endforeach     
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                </div>
               
                
            </div>
            <!-- Form End -->
            
            
          
            
         <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
@endsection