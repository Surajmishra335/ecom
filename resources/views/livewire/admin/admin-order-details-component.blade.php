<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <style>
            .p-2 {

                padding: 5px;
            }
        </style>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <div class="container" style="padding: 30px 0px">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    Order Details
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="{{route('admin.orders')}}"
                                                        class="btn btn-success pull-right">All
                                                        Orders</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <table class="table">
                                                <tr>
                                                    <th>Order Id:</th>
                                                    <td>{{$order->id}}</td>
                                                    <th>Order Date:</th>
                                                    <td>{{$order->created_at}}</td>
                                                    <th>Order Status:</th>
                                                    <td>{{$order->status}}</td>
                                                    @if ($order->status == 'delivered')
                                                    <th>Delivery Date:</th>
                                                    <td>{{$order->delivered_date}}</td>
                                                    @elseif($order->status == 'canceled')
                                                    <th>Cancalation Date:</th>
                                                    <td>{{$order->canceled_date}}</td>
                                                    @endif

                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    Order Item
                                                </div>
                                                <div class="col-md-6">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <h2 class="bold">Product Name</h2>
                                            <hr>
                                            @foreach ($order->orderItems as $item)
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <img src="{{asset('assets/images/products')}}/{{$item->product->image}}"
                                                        alt="" style="height: 70px; width: auto;">
                                                </div>
                                                <div class="col-md-4">
                                                    <h4 class="text-bold">
                                                        <a
                                                            href="{{route('product.details',['slug'=>$item->product->slug])}}">{{$item->product->name}}</a>
                                                    </h4>
                                                </div>
                                                <div class="col-md-2">
                                                    <h4>
                                                        ₹ {{$item->price}}
                                                    </h4>
                                                </div>
                                                <div class="col-md-2">
                                                    <h4 class="quanity">
                                                        {{$item->quantity}}
                                                    </h4>
                                                </div>
                                                <div class="col-md-2">
                                                    <h4 class="total-price">
                                                        ₹ {{$item->price * $item->quantity}}
                                                    </h4>
                                                </div>
                                            </div>
                                            <hr>
                                            @endforeach

                                            <div class="row" style="padding: 30px">
                                                <div class="title-box">
                                                    <h2 class="bold">Order Summary</h2>
                                                    <hr>
                                                    <p class="h4 p-2"><span class="subtotal">Subtotal</span><b
                                                            class="pull-right">₹ {{$order->subtotal}}</b></p>
                                                    <p class="h4 p-2"><span class="subtotal">Tax</span><b
                                                            class="pull-right">₹ {{$order->tax}}</b></p>
                                                    <p class="h4 p-2"><span class="subtotal">Discount</span><b
                                                            class="pull-right">₹ {{$order->discount}}</b></p>
                                                    <p class="h4 p-2"><span class="subtotal">Total</span><b
                                                            class="pull-right">₹ {{$order->total}}</b></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Billing Details
                                        </div>
                                        <div class="panel-body">
                                            <table class="table">
                                                <tr>
                                                    <th>First Name</th>
                                                    <td>{{$order->firstname}}</td>
                                                    <th>Last Name</th>
                                                    <td>{{$order->lastname}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Phone</th>
                                                    <td>{{$order->mobile}}</td>
                                                    <th>Email</th>
                                                    <td>{{$order->email}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Line 1</th>
                                                    <td>{{$order->line1}}</td>
                                                    <th>line2</th>
                                                    <td>{{$order->line2}}</td>
                                                </tr>
                                                <tr>
                                                    <th>City</th>
                                                    <td>{{$order->city}}</td>
                                                    <th>Province</th>
                                                    <td>{{$order->province}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Country</th>
                                                    <td>{{$order->country}}</td>
                                                    <th>Zipcode</th>
                                                    <td>{{$order->zipcode}}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Shipping Details
                                        </div>
                                        <div class="panel-body">
                                            <table class="table">
                                                <tr>
                                                    <th>First Name</th>
                                                    <td>{{$order->shipping->firstname}}</td>
                                                    <th>Last Name</th>
                                                    <td>{{$order->shipping->lastname}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Phone</th>
                                                    <td>{{$order->shipping->mobile}}</td>
                                                    <th>Email</th>
                                                    <td>{{$order->shipping->email}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Line 1</th>
                                                    <td>{{$order->shipping->line1}}</td>
                                                    <th>line2</th>
                                                    <td>{{$order->shipping->line2}}</td>
                                                </tr>
                                                <tr>
                                                    <th>City</th>
                                                    <td>{{$order->shipping->city}}</td>
                                                    <th>Province</th>
                                                    <td>{{$order->shipping->province}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Country</th>
                                                    <td>{{$order->shipping->country}}</td>
                                                    <th>Zipcode</th>
                                                    <td>{{$order->shipping->zipcode}}</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            Transaction Details
                                        </div>
                                        <div class="panel-body">
                                            <table class="table">
                                                <tr>
                                                    <th>Transaction Mode</th>
                                                    <td>{{$order->transaction->mode}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Status</th>
                                                    <td>{{$order->transaction->status}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Transaction Date</th>
                                                    <td>{{$order->transaction->created_at}}</td>
                                                </tr>

                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>