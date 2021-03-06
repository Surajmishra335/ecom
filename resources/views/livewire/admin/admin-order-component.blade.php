<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <style>
            nav svg {
                height: 20px;
            }

            nav .hidden {
                display: block !important;
            }
        </style>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <div class="container" style="padding: 30px 0px;">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        @if(Session::has('order_message'))
                                        <div class="alert alert-success" role="alert">
                                            {{Session::get('order_message')}}
                                        </div>
                                        @endif
                                        <div class="panel-heading">
                                            All Orders
                                        </div>
                                        <div class="panel-body">
                                            <table class="table table-striped">
                                                <thead>
                                                    <tr>
                                                        <th>Id</th>
                                                        <th>Subtotal</th>
                                                        <th>Discount</th>
                                                        <th>Tax</th>
                                                        <th>Total</th>
                                                        <th>FirstNname</th>
                                                        <th>Last Name</th>
                                                        <th>Mobile</th>
                                                        <th>Email</th>
                                                        <th>Zipcode</th>
                                                        <th>Status</th>
                                                        <th>Order Date</th>
                                                        <th colspan="2" class="text-center">Actions</th>

                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($orders as $order)
                                                    <tr>
                                                        <td>{{$order->id}}</td>
                                                        <td>??? {{$order->subtotal}}</td>
                                                        <td>??? {{$order->discount}}</td>
                                                        <td>??? {{$order->tax}}</td>
                                                        <td>??? {{$order->total}}</td>
                                                        <td>{{$order->firstname}}</td>
                                                        <td>{{$order->lastname}}</td>
                                                        <td>{{$order->mobile}}</td>
                                                        <td>{{$order->email}}</td>
                                                        <td>{{$order->zipcode}}</td>
                                                        <td>{{$order->status}}</td>
                                                        <td>{{$order->created_at}}</td>
                                                        <td><a href="{{route('admin.orderdetails',['order_id' => $order->id])}}"
                                                                class="btn btn-info btn-sm">Details
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button data-toggle="dropdown"
                                                                    class="btn btn-success dropdown-toggle"
                                                                    type="button">Status <span class="caret"></span>
                                                                </button>
                                                                <ul role="menu" class="dropdown-menu">
                                                                    <li><a href="#"
                                                                            wire:click.prevent="updateOrderStatus({{$order->id}},'delivered')">Delivered</a>
                                                                    </li>
                                                                    <li><a href="#"
                                                                            wire:click.prevent="updateOrderStatus({{$order->id}},'canceled')">Canceled</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                            {{$orders->links()}}
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