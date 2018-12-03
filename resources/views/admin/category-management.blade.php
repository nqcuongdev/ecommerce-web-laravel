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
                                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="page-header-breadcrumb">
                                    <ul class="breadcrumb-title">
                                        <li class="breadcrumb-item">
                                            <a href="index-2.html"> <i class="feather icon-home"></i> </a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Editable Table</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h5>Edit With Button</h5>
                            <span>Click on buttons to perform actions</span>

                        </div>
                        <div class="card-block">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered" id="example-2">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First</th>
                                        <th>Last</th>
                                        <th>Nickname</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td class="tabledit-view-mode"><span class="tabledit-span">Mark</span>
                                            <input class="tabledit-input form-control input-sm" type="text" name="First"
                                                   value="Mark">
                                        </td>
                                        <td class="tabledit-view-mode"><span class="tabledit-span">Otto</span>
                                            <input class="tabledit-input form-control input-sm" type="text" name="Last"
                                                   value="Otto">
                                        </td>
                                        <td class="tabledit-view-mode"><span class="tabledit-span">@mdo</span>
                                            <select class="tabledit-input form-control input-sm" name="Nickname"
                                                    disabled="" style="display:none;">
                                                <option value="1">@mdo</option>
                                                <option value="2">@fat</option>
                                                <option value="3">@twitter</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td class="tabledit-view-mode"><span class="tabledit-span">Jacob</span>
                                            <input class="tabledit-input form-control input-sm" type="text" name="First"
                                                   value="Jacob" disabled="">
                                        </td>
                                        <td class="tabledit-view-mode"><span class="tabledit-span">Thorntonkk</span>
                                            <input class="tabledit-input form-control input-sm" type="text" name="Last"
                                                   value="Thornton" disabled="">
                                        </td>
                                        <td class="tabledit-view-mode"><span class="tabledit-span">@mdo</span>
                                            <select class="tabledit-input form-control input-sm" name="Nickname"
                                                    disabled="" style="display:none;">
                                                <option value="1">@mdo</option>
                                                <option value="2">@fat</option>
                                                <option value="3">@twitter</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td class="tabledit-view-mode"><span class="tabledit-span">Larry</span>
                                            <input class="tabledit-input form-control input-sm" type="text" name="First"
                                                   value="Larry" disabled="">
                                        </td>
                                        <td class="tabledit-view-mode"><span class="tabledit-span">the Bird</span>
                                            <input class="tabledit-input form-control input-sm" type="text" name="Last"
                                                   value="the Bird" disabled="">
                                        </td>
                                        <td class="tabledit-view-mode"><span class="tabledit-span">@mdo</span>
                                            <select class="tabledit-input form-control input-sm" name="Nickname"
                                                    disabled="" style="display:none;">
                                                <option value="1">@mdo</option>
                                                <option value="2">@fat</option>
                                                <option value="3">@twitter</option>
                                            </select>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
