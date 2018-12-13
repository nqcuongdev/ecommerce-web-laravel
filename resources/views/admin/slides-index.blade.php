@extends('master-admin')
@section('content')
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <!-- Main-body start -->
            <div class="main-body">
                <div class="page-wrapper">
                    <!-- Page-header start -->
                    <div class="page-header">
                        <div class="row align-items-end">
                            <div class="col-lg-8">
                                <div class="page-header-title">
                                    <div class="d-inline">
                                        <h4>Edit Slide</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page-body">
                        <div class="card">
                            @if($slides->count()<3)
                                <div class="card-header">
                                    <button type="button"
                                            class="btn btn-primary waves-effect waves-light f-right d-inline-block md-trigger"
                                            data-modal="modal-13">
                                        <i class="icofont icofont-plus m-r-5"></i>Add New Slides
                                    </button>
                                </div>
                            @endif
                            <div class="card-block table-border-style">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Small Title</th>
                                            <th>Title</th>
                                            <th>Small Text</th>
                                            <th>Price</th>
                                            <th>Link</th>
                                            <th>Image</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($slides as $values)
                                            <tr>
                                                <th scope="row">{{$values->id}}</th>
                                                <td>{{$values->small_title}}</td>
                                                <td>{{$values->title}}</td>
                                                <td>{{$values->small_text}}</td>
                                                <td>{{$values->price}}</td>
                                                <td>{{$values->btn_link}}</td>
                                                <td>
                                                    <img src="{{url($values->image)}}" alt="{{$values->id}}" width="200px" height="100px" class="img-responsive" style="display:block;">
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="md-modal md-effect-1 addcontact" id="modal-13">
                            <form action="{{route('postslides')}}" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="md-content">
                                    <h3 class="f-26">Add New Slides</h3>
                                    <div>
                                        <div class="input-group">
                                    <span class="input-group-addon"><i
                                            class="icofont icofont-ui-add"></i></span>
                                            <input type="text" class="form-control" name="small_title">
                                        </div>
                                        <div class="input-group">
                                    <span class="input-group-addon"><i
                                            class="icofont icofont-ui-add"></i></span>
                                            <input type="text" class="form-control" name="title">
                                        </div>
                                        <div class="input-group">
                                    <span class="input-group-addon"><i
                                            class="icofont icofont-ui-add"></i></span>
                                            <input type="text" class="form-control" name="small_text">
                                        </div>
                                        <div class="input-group">
                                    <span class="input-group-addon"><i
                                            class="icofont icofont-ui-add"></i></span>
                                            <input type="text" class="form-control" name="price">
                                        </div>
                                        <div class="input-group">
                                    <span class="input-group-addon"><i
                                            class="icofont icofont-ui-add"></i></span>
                                            <input type="text" class="form-control" name="btn_link">
                                        </div>
                                        <div class="input-group">
                                    <span class="input-group-addon"><i
                                            class="icofont icofont-file-image"></i></span>
                                            <input type="file" class="form-control" name="image">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit"
                                                    class="btn btn-primary waves-effect m-r-20 f-w-600 d-inline-block save_btn">
                                                Add
                                            </button>
                                            <button type="button"
                                                    class="btn btn-primary waves-effect m-r-20 f-w-600 md-close d-inline-block close_btn">
                                                Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
