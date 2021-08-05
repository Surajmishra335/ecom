<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    @if(Session::has('message'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('message')}}
                    </div>
                    @endif
                    <div class="panel-heading">
                        Sale Setting
                    </div>
                    <div class="panel-body">
                        <form action="" class="form form-horizontal" wire:submit.prevent="updateSale">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Status</label>
                                <div class="col-md-4">
                                    <select name="" id="" class="form-control" wire:model="status">
                                        <option value="0">Inavtive</option>
                                        <option value="1">Avtive</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Sale Date</label>
                                <div class="col-md-4">
                                    <input type="text" id="sale-date" placeholder="YYYY/MM/DD H:M:S" class="form-control imput-md" wire:model="sale_date">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $(function(){
            $('#sale-date').datetimepicker({
                format : 'Y-MM-DD h:m:s', 
            })
            .on('dp.hide', function(ev){
                var data = $('#sale-date').val();
                @this.set('sale_date',data);
            });
        });
    </script>
@endpush
