@extends('master-admin')
@section('content')
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Add New Products</h5>
                                </div>
                                <div class="card-block">
                                    <form action="{{route('admin.postproducts')}}" method="POST" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Product Name</label>      
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Product Type</label>
                                            <div class="col-sm-10">
                                                <select id="hello-single" class="form-control" name="products_type">
                                                    <option value="">---- Select Type ----</option>
                                                    @foreach($product_type as $type)
                                                        <option value="{{$type->id}}">{{$type->name_type}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Technical Description</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="technical_description"></textarea>
                                            </div>                                                    
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Description</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="description"></textarea>
                                            </div>                                                    
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Price</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="price">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Sale</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="sale_price">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Available</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="available">
                                                    <option value="">---- Select Type ----</option>
                                                    <option value="0">Out of Stock</option>
                                                    <option value="1">In Stock</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Images</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" name="image">
                                            </div>
                                        </div>          
                                        <div class="form-group row">
                                            <button type="submit" class="btn btn-primary waves-effect form-control">
                                                Add
                                            </button>
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
@endsection
@section('ckeditor')
    <script src="/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description', {
            filebrowserBrowseUrl: '{{ url('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ url('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ url('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ url('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ url('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ url('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
        });
    </script>
    <script>
        CKEDITOR.replace('technical_description', {
            filebrowserBrowseUrl: '{{ url('ckfinder/ckfinder.html') }}',
            filebrowserImageBrowseUrl: '{{ url('ckfinder/ckfinder.html?type=Images') }}',
            filebrowserFlashBrowseUrl: '{{ url('ckfinder/ckfinder.html?type=Flash') }}',
            filebrowserUploadUrl: '{{ url('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
            filebrowserImageUploadUrl: '{{ url('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
            filebrowserFlashUploadUrl: '{{ url('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
        });
    </script>
    <script type="text/javascript"
            src="{{url('ckfinder/ckfinder-laravel-package/public/ckfinder/ckfinder.js')}}"></script>
@endsection
