<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <div>
                            <div class="container" style="padding: 30px 0px">
                                <style>
                                    nav svg {
                                        height: 20px;
                                    }

                                    nav .hidden {
                                        display: block !important;
                                    }
                                </style>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                Conatct Messages
                                            </div>
                                            <div class="panel-body">
                                                <table class="table table-stripped">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Phone</th>
                                                            <th>Messages</th>
                                                            <th>Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @php
                                                        $i = 1;
                                                        @endphp
                                                        @foreach ($contacts as $contact)
                                                        <tr>
                                                            <td>{{$i++}}</td>
                                                            <td>{{$contact->name}}</td>
                                                            <td>{{$contact->email}}</td>
                                                            <td>{{$contact->phone}}</td>
                                                            <td>{{$contact->comment}}</td>
                                                            <td>{{$contact->created_at}}</td>

                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                                {{$contacts->links()}}
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
</div>