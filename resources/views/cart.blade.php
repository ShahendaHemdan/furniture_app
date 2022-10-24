@extends('all')
@section('content')

        <!-- Header Area End -->

        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="cart-title mt-50">
                            <h2>Shopping Cart</h2>
                        </div>

                        <div class="cart-table clearfix">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>jh</th>
                                        

                                    </tr>
                                </thead>
                                <tbody>
        @foreach ($data as $d)
            
       
                                    <tr>
                                        <td class="cart_product_img">
                                            <a href="#"><img src="{{$d['image']}}" alt="Product"></a>
                                        </td>
                                        <td class="cart_product_desc">
                                            <h5>{{$d->name}}</h5>
                                        </td>
                                        <td class="price">
                                            <span>${{$d->price}}</span>
                                        </td>
                                        <td>
                                            {{$d->quantity}}
                                            <a href="cart/{{$d->id}}" class="btn btn-danger " >Delete</a>
                                        </td>
                                         

                                    
                                    </tr>

               
                                @endforeach
                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="cart-summary">
                            <h5>Cart Total</h5>
                            <ul class="summary-table">
                 
            
                                <li><span>subtotal:</span> <span>${{$total}}</span></li>
                                <li><span>delivery:</span> <span>200</span></li>
                                <li><span>total:</span> <span>${{$total+200}}</span></li>
                             </ul>
                            <div class="cart-btn mt-100">
                                <a href="check" class="btn amado-btn w-100">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Main Content Wrapper End ##### -->
@endsection 
