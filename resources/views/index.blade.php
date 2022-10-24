@extends('all')
@section('content')
    
        <!-- Product Catagories Area Start -->
        <div class="products-catagories-area clearfix">
            <div class="amado-pro-catagory clearfix">
@foreach ($items as $item)
    
   <!-- Single Catagory -->
                <div class="single-products-catagory clearfix">
                    <a href="shop">
                        <img src="{{$item->image}}" alt="">
                        <!-- Hover Content -->
                        <div class="hover-content">
                            <div class="line"></div>
                            <p>From ${{$item->price}}</p>
                            <h4>{{$item->name}} </h4>
                        </div>
                    </a>
                </div>
 @endforeach
             

            </div>
        </div>
        <!-- Product Catagories Area End -->
    </div>
    <!-- ##### Main Content Wrapper End ##### -->
 
    @endsection
