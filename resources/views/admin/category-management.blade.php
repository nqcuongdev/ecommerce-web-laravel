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
                                        <h4>Editable Table</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">                        
                            <div class="card-header">
                            <h5>Category Management</h5>
                            <button type="button" class="btn btn-primary waves-effect waves-light f-right d-inline-block md-trigger" data-modal="modal_category"><i class="icofont icofont-plus m-r-5"></i> Add
                                        </button>
                        </div>
                            <div class="card-block">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <form action="" method="POST">
                                            {{csrf_field()}}
                                        @foreach($category as $key => $item)
                                    <tr class="tables">
                                        <td class="view-mode">                                         
                                            <input class="fr_id form-control d-none" disabled type="text" name="id"
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
                                            <button type="button" id="disable" class="btn btn-danger waves-effect waves-light" style="float: none;margin: 5px;">
                                                <i class="icofont icofont-ui-block"></i>
                                            </button>
                                            <button type="button" id="save" class="btn btn-success waves-effect waves-light d-none" style="float: none;margin: 5px;">
                                                Save
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                    </form>
                                </table>
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
                                        <button type="submit" class="btn btn-primary waves-effect m-r-20 f-w-600 d-inline-block save_btn">
                                                Add
                                            </button>
                                        <button type="button" class="btn btn-primary waves-effect m-r-20 f-w-600 md-close d-inline-block close_btn">
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
    <script>
        $(document).ready(function($) {
            $('body').on('click', '#edit', function(event) {
                $(this).parent().find('#disable').addClass('d-none');
                $(this).parent().find('#save').removeClass('d-none');
                $(this).parent().find('#edit').addClass('d-none');
                
                $(this).closest('.table').find('.view-mode').find('.fr_id').removeClass('d-none');
                $(this).closest('.table').find('.view-mode').find('.fr_name').removeClass('d-none');
                $(this).closest('.table').find('.view-mode').find('.text_id').addClass('d-none');
                $(this).closest('.table').find('.view-mode').find('.text_name').addClass('d-none');

                $('body').on('click', '#save', function(event) {
                    var token = $("input[name='_token']").val()
                    var id = $(this).closest('.table').find('.view-mode').find('.fr_id').val();
                    var name = $(this).closest('.table').find('.view-mode').find('.fr_name').val();

                    $(this).closest('.table').find('.view-mode').find('.fr_id').addClass('d-none');
                    $(this).closest('.table').find('.view-mode').find('.fr_name').addClass('d-none');
                    $(this).closest('.table').find('.view-mode').find('.text_id').removeClass('d-none');
                    $(this).closest('.table').find('.view-mode').find('.text_name').removeClass('d-none');
                    $(this).parent().find('#disable').removeClass('d-none');
                    $(this).parent().find('#save').addClass('d-none');
                    $(this).parent().find('#edit').removeClass('d-none');

                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    }); 

                   $.ajax({
                       url: 'ajax-editcategory',
                       type: 'POST',
                       data: {"_token": token,"id": id,"name": name},
                   })
                   .done(function(res) {
                        // $('.text_name').html(res.name_category);
                        // console.log(res);
                        var xxx = "";
                        $.each(res, function(index, val) {
                            // xxx += '<tr class="table">';
                            // xxx += '<td class="view-mode">';
                            // xxx += '<input class="fr_name form-control d-none" type="text" name="name" value="'+val.id+'">';
                            // xxx += '<span class="text_name">'+val.id+'</span>';
                            // xxx += '</td>';
                            // xxx += '<td class="view-mode">';
                            // xxx += '<input class="fr_name form-control d-none" type="text" name="name" value="'+val.name_category+'">';
                            // xxx += '<span class="text_name">'+val.name_category+'</span>';
                            // xxx += '</td>';
                            // xxx += '</tr>';
                            $('.text_name').html(val.name_category);
                            $('.tables').append(xxx);
                            console.log(xxx);
                        });
                        
                   })
                   .fail(function() {
                   })
                   .always(function() {
                   });
                   
                });
            });
        });
    </script>
@endsection
