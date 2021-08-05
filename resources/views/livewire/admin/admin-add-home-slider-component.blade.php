<div class="right_col" role="main">
    <div class="">
      <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content">
                        <div>
                            <div class="container" style="padding: 30px 0px">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        Add New Slides
                                                    </div>
                                                    <div class="col-md-6">
                                                        <a href="{{route('admin.homeslider')}}" class="btn btn-primary pull-right">All Slider</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-body">
                                                @if(Session::has('message'))
                                                <div class="alert alert-success" role="alert">
                                                    {{Session::get('message')}}
                                                </div>
                                                @endif
                                                <form  class="form form-horizontal" wire:submit.prevent="addSlide">
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label">Title</label>
                                                        <div class="col-md-4">
                                                            <input type="text" placeholder="Title" class="form-control input-md" wire:model="title">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label">Subtitle</label>
                                                        <div class="col-md-4">
                                                            <input type="text" placeholder="Subtitle" class="form-control input-md" wire:model="subtitle">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label">Price</label>
                                                        <div class="col-md-4">
                                                            <input type="text" placeholder="Price" class="form-control input-md" wire:model="price">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label">link</label>
                                                        <div class="col-md-4">
                                                            <input type="text" placeholder="link" class="form-control input-md" wire:model="link">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label">Image</label>
                                                        <div class="col-md-4">
                                                            <input type="file"  class="form-control input-file" wire:model="image">
                                                            @if ($image)
                                                                <img src="{{$image->temporaryUrl()}}" alt="" width="120">
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label">Status</label>
                                                        <div class="col-md-4">
                                                            <select name="" id="" class="form-control" wire:model="status">
                                                                <option value="0">Inactive</option>
                                                                <option value="1">Active</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-4 control-label"></label>
                                                        <div class="col-md-4">
                                                            <button class="btn btn-primary" type="submit">Submit</button>
                                                        </div>
                                                    </div>
                                                </form>
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

