@extends('admin.layouts.app_dashboard')
@section('title', 'Admin')

@section('content')
    <div class="content">
        <div class="content">
            <div class="container-fluid">
                <h3>Danh sách</h3>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-product">
                            <div class="card-header card-header-image" data-header-animation="true">
                                <a href="#pablo">
                                    <img class="img" src="{{ asset('image_display/card-2.jpg') }}">
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="card-actions text-center">
                                    <button type="button" class="btn btn-danger btn-link fix-broken-card">
                                        <i class="material-icons">build</i> Fix Header!
                                    </button>
                                    <button type="button" class="btn btn-default btn-link" rel="tooltip"
                                            data-placement="bottom" title="View">
                                        <i class="material-icons">art_track</i>
                                    </button>
                                    <button type="button" class="btn btn-success btn-link" rel="tooltip"
                                            data-placement="bottom" title="Edit">
                                        <i class="material-icons">edit</i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-link" rel="tooltip"
                                            data-placement="bottom" title="Remove">
                                        <i class="material-icons">close</i>
                                    </button>
                                </div>
                                <h4 class="card-title">
                                    <a href="#pablo">Cozy 5 Stars Apartment</a>
                                </h4>
                                <div class="card-description">
                                    text
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="price">
                                    <h4>$899/night</h4>
                                </div>
                                <div class="stats">
                                    <p class="card-category"><i class="material-icons">place</i> Barcelona, Spain
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-rose card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">assignment</i>
                                </div>
                                <h4 class="card-title">Simple Table</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th>Name</th>
                                            <th>Job Position</th>
                                            <th>Since</th>
                                            <th class="text-right">Salary</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-center">3</td>
                                            <td>Alex Mike</td>
                                            <td>Design</td>
                                            <td>2010</td>
                                            <td class="text-right">€ 92,144</td>
                                            <td class="td-actions text-right">
                                                <button type="button" rel="tooltip" class="btn btn-info btn-link"
                                                        data-original-title="" title="">
                                                    <i class="material-icons">person</i>
                                                </button>
                                                <button type="button" rel="tooltip" class="btn btn-success btn-link"
                                                        data-original-title="" title="">
                                                    <i class="material-icons">edit</i>
                                                </button>
                                                <button type="button" rel="tooltip" class="btn btn-danger btn-link"
                                                        data-original-title="" title="">
                                                    <i class="material-icons">close</i>
                                                </button>
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
    </div>
@endsection
