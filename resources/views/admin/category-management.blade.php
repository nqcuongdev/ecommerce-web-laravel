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
                                    <h4>Editable Category</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h5>Category Management</h5>
                        <button type="button"
                        class="btn btn-primary waves-effect waves-light f-right d-inline-block md-trigger"
                        data-modal="modal_category">
                        <i class="icofont icofont-plus m-r-5"></i> Add
                    </button>
                </div>
                <div class="card-block">
                    <div class="table-responsive">
                        <div class="dt-responsive table-responsive">
                        <form action="" method="POST">
                            {{csrf_field()}}
                        <table id="res-config" class="table table-striped table-bordered nowrap">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach($category as $key => $item)
                                    <tr class="tables">        
                                            <td class="view-mode">
                                                <input class="fr_id form-control d-none" disabled type="text"
                                                name="id"
                                                value="{{$item->id}}">
                                                <span class="text_id">{{$item->id}}</span>
                                            </td>
                                            <td class="view-mode">
                                                <input class="fr_name form-control d-none" type="text" name="name"
                                                value="{{$item->name_category}}">
                                                <span class="text_name">{{$item->name_category}}</span>
                                            </td>
                                            <td>
                                                <button type="button" id="edit" class="btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;">
                                                    <span class="icofont icofont-ui-edit"></span>
                                                </button>
                                                @if($item->status == 1)
                                                    <a href="{{route('disablecategory',$item->id)}}">
                                                        <button type="button" id="disable" class="btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;">
                                                            <i class="icofont icofont-ui-block"></i>
                                                        </button>
                                                    </a>
                                                @else
                                                    <a href="{{route('activecategory',$item->id)}}">
                                                        <button type="button" class="btn btn-info waves-effect waves-light" style="float: none;margin: 5px;">
                                                            <i class="icofont icofont-check"></i>
                                                        </button>
                                                    </a>
                                                @endif
                                                <button type="button" id="save" class="btn btn-success waves-effect waves-light d-none" style="float: none;margin: 5px;">
                                                    Save
                                                </button>
                                                <button type="button" id="back" class="btn btn-warning waves-effect waves-light d-none" style="float: none;margin: 5px;">
                                                    Back
                                                </button>
                                            </td>
                                    </tr>
                                    @endforeach
                                
                            </tbody> 
                        </table>
                        </form>
                        </div>
                    </div>
                </div>
                <div class="md-modal md-effect-1 addcontact" id="modal_category">
                    <form action="{{route('postcategory')}}" method="POST">
                        {{csrf_field()}}
                        <div class="md-content">
                            <h3 class="f-26">Add Categorys</h3>
                            <div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-txt-primary" name="name">
                                    </div>
                                </div>

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
            </form>
        </div>
    </div>
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>Editable Product Type</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h5>Products Type Category</h5>
            <button type="button"
                class="btn btn-success waves-effect waves-light f-right d-inline-block md-trigger"
                data-modal="modal_type">
                <i class="icofont icofont-plus m-r-5"></i> Add
            </button>
        </div>
        <div class="card-block">
        <div class="table-responsive">
            <div class="dt-responsive table-responsive">
                <table id="res-config" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($type as $item)
                            <tr>
                                <td class="table_type">
                                    <input class="type_id form-control d-none" disabled type="text"
                                                value="{{$item->id}}">
                                    <span class="text_id">{{$item->id}}</span>
                                </td>
                                <td class="view-type">
                                    <input class="type_id form-control d-none" disabled type="text"
                                                value="{{$item->name_type}}">
                                    <span class="text_id">{{$item->name_type}}</span>
                                    </td>
                                <td class="view-type">
                                    <span class="text_category">{{$item->name_category}}</span>
                                </td>
                                <td class="view-type">
                                    <button type="button" id="type_edit" class="btn btn-primary waves-effect waves-light" style="float: none;margin: 5px;">
                                        <span class="icofont icofont-ui-edit"></span>
                                    </button>
                                    @if($item->status == 1)
                                        <a href="#">
                                            <button type="button" id="type_disable" class="btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;">
                                                <i class="icofont icofont-ui-block"></i>
                                            </button>
                                        </a>
                                    @else
                                        <a href="#">
                                            <button type="button" class="btn btn-info waves-effect waves-light" style="float: none;margin: 5px;">
                                                <i class="icofont icofont-check"></i>
                                            </button>
                                        </a>
                                    @endif
                                    <button type="button" id="type_save" class="btn btn-success waves-effect waves-light d-none" style="float: none;margin: 5px;">
                                        Save
                                    </button>
                                    <button type="button" id="type_back" class="btn btn-warning waves-effect waves-light d-none" style="float: none;margin: 5px;">
                                        Back
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="md-modal md-effect-1 addcontact" id="modal_type">
                    <form action="{{route('posttype')}}" method="POST">
                        {{csrf_field()}}
                        <div class="md-content">
                            <h3 class="f-26">Add Type</h3>
                            <div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control form-txt-primary" name="name_type">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-10">
                                        <select name="id_category" class="form-control">
                                            <option value="0">Select One Category Only</option>
                                            @foreach($category_all as $item)
                                                <option value="{{$item->id}}">{{$item->name_category}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
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
            </form>
        </div>
    </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<script>
    $(document).ready(function ($) {
        $('body').on('click', '#edit', function (event) {
            $(this).parent().find('#disable').addClass('d-none');
            $(this).parent().find('#save').removeClass('d-none');
            $(this).parent().find('#back').removeClass('d-none');
            $(this).parent().find('#edit').addClass('d-none');

            $(this).closest('.tables').find('.view-mode').find('.fr_id').removeClass('d-none');
            $(this).closest('.tables').find('.view-mode').find('.fr_name').removeClass('d-none');
            $(this).closest('.tables').find('.view-mode').find('.text_id').addClass('d-none');
            $(this).closest('.tables').find('.view-mode').find('.text_name').addClass('d-none');

            $('body').on('click', '#save', function (event) {
                var token = $("input[name='_token']").val()
                var id = $(this).closest('.tables').find('.view-mode').find('.fr_id').val();
                var name = $(this).closest('.tables').find('.view-mode').find('.fr_name').val();
                $(this).closest('.tables').find('.view-mode').find('.fr_id').addClass('d-none');
                $(this).closest('.tables').find('.view-mode').find('.fr_name').addClass('d-none');
                $(this).closest('.tables').find('.view-mode').find('.text_id').removeClass('d-none');
                $(this).closest('.tables').find('.view-mode').find('.text_name').removeClass('d-none');
                $(this).parent().find('#disable').removeClass('d-none');
                $(this).parent().find('#save').addClass('d-none');
                $(this).parent().find('#back').addClass('d-none');
                $(this).parent().find('#edit').removeClass('d-none');

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    url: 'ajax-editcategory',
                    type: 'POST',
                    data: {"_token": token, "id": id, "name": name},
                })
                .done(function (res) {
                    if(res == "success"){
                        //location.reload();
                        swal({
                          title: "Success!",
                          icon: "success",
                        });
                        // .then((value) => {
                        //     location.reload();
                        // });
                    }

                })
                .fail(function () {
                })
                .always(function () {
                });
            });

            $('body').on('click', '#back', function(event) {

                $(this).closest('.tables').find('.view-mode').find('.fr_id').addClass('d-none');
                $(this).closest('.tables').find('.view-mode').find('.fr_name').addClass('d-none');
                $(this).closest('.tables').find('.view-mode').find('.text_id').removeClass('d-none');
                $(this).closest('.tables').find('.view-mode').find('.text_name').removeClass('d-none');
                $(this).parent().find('#disable').removeClass('d-none');
                $(this).parent().find('#save').addClass('d-none');
                $(this).parent().find('#back').addClass('d-none');
                $(this).parent().find('#edit').removeClass('d-none');

            });
        });

        //  $('body').on('click', '#disable', function(event) {
            
        //     $(this).parent().find('#disable').addClass('d-none');
        //     $(this).parent().find('#save').removeClass('d-none');
        //     $(this).parent().find('#edit').addClass('d-none');

        //     var token = $("input[name='_token']").val()
        //     var id = $(this).closest('.tables').find('.view-mode').find('.fr_id').val();
        //     var name = $(this).closest('.tables').find('.view-mode').find('.fr_name').val();


        //     $('body').on('click', '#save', function(event) {

        //         $(this).parent().find('#disable').removeClass('d-none');
        //         $(this).parent().find('#save').addClass('d-none');
        //         $(this).parent().find('#edit').removeClass('d-none');

        //         $.ajaxSetup({
        //             headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         }
        //         });

        //         $.ajax({
        //             url: 'ajax-disablecategory',
        //             type: 'POST',
        //             data: {"_token": token, "id": id, "name": name},
        //         })
        //         .done(function(res) {
        //             //console.log("success");
        //             if(res == "success"){
        //                 swal({
        //                   title: "Success!",
        //                   icon: "success",
        //                 })
        //                 .then((value) => {
        //                     location.reload();
        //                 });
        //             }
        //         })
        //         .fail(function() {
        //             //console.log("error");
        //         })
        //         .always(function() {
        //             //console.log("complete");
        //         });
        //     });
            
        // });

    });
</script>
@endsection
