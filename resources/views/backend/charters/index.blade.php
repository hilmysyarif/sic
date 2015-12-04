@extends('backend/master')

@section('htmlheader_title')
    Charters
@endsection


@section('main-content')

<!--Page Container Start Here-->
<section class="main-container">
<div class="container-fluid">
<div class="page-header filled full-block light">
    <div class="row">
        <div class="col-md-6">
            <h2>CHARTERS</h2>
            <p></p>
        </div>
        <div class="col-md-6">
            <ul class="list-page-breadcrumb">
                <li><a href="#">Home <i class="zmdi zmdi-chevron-right"></i></a></li>
                <li><a href="#">Dashboard <i class="zmdi zmdi-chevron-right"></i></a></li>
                <li class="active-page"> Charters</li>
            </ul>
        </div>
    </div>
</div>


    <div class="row">
        <div class="col-md-12">
            <div class="widget-wrap material-table-widget">

                <div class="widget-container margin-top-0">
                    <div class="widget-content">
                        <div class="data-action-bar">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="widget-header">
                                        <h3>Show All Charters</h3>
                                        <p>

                                        </p>

@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('message') }}</p>
@endif
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="data-align-right">
                                        <div class="tbl-action-toolbar">
                                            <ul>
                                                <li><a href="#clear" class="clear-filter btn btn-link" title="clear filter">Clear Filter</a></li>
                                                <li class="dropdown">
                                                    <a href="#" class="btn btn-info dropdown-toggle" data-toggle="dropdown"><i class="zmdi zmdi-archive"></i> Export</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#" onclick="$('#charters').tableExport({type:'json',escape:'false'});"> <i class="fa fa-file-o"></i> JSON</a></li>
                                                        <li><a href="#" onclick="$('#charters').tableExport({type:'json',escape:'false',ignoreColumn:'[2,3]'});"> <i class="fa fa-file-o"></i> JSON (ignoreColumn)</a></li>
                                                        <li><a href="#" onclick="$('#charters').tableExport({type:'json',escape:'true'});"> <i class="fa fa-file-o"></i> JSON (with Escape)</a></li>
                                                        <li><a href="#" onclick="$('#charters').tableExport({type:'xml',escape:'false'});"> <i class="fa fa-file-code-o"></i> XML</a></li>
                                                        <li><a href="#" onclick="$('#charters').tableExport({type:'sql'});"> <i class="fa fa-file-code-o"></i> SQL</a></li>
                                                        <li><a href="#" onclick="$('#charters').tableExport({type:'csv',escape:'false'});"> <i class="fa fa-file-code-o"></i> CSV</a></li>
                                                        <li><a href="#" onclick="$('#charters').tableExport({type:'txt',escape:'false'});"> <i class="fa fa-file-text-o"></i> TXT</a></li>
                                                        <li><a href="#" onclick="$('#charters').tableExport({type:'excel',escape:'false'});"> <i class="fa fa-file-excel-o"></i> XLS</a></li>
                                                        <li><a href="#" onclick="$('#charters').tableExport({type:'doc',escape:'false'});"> <i class="fa fa-file-word-o"></i> Word</a></li>
                                                        <li><a href="#" onclick="$('#charters').tableExport({type:'powerpoint',escape:'false'});"> <i class="fa fa-file-powerpoint-o"></i> PowerPoint</a></li>
                                                        <li><a href="#" onclick="$('#charters').tableExport({type:'pdf',pdfFontSize:'7',escape:'false'});"> <i class="fa fa-file-pdf-o"></i> PDF</a></li>


                                                    </ul>
                                                </li>
                                                <li><a href="{{ URL::route('charters.create') }}" class="btn add-row btn-primary">Add New</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-filter-header">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <span class="tfh-label">Search: </span>
                                            <input class="form-control" id="filter" type="text"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table id="charters" class="table foo-data-table-filterable" data-filter="#filter" data-filter-text-only="true" data-page-size="8" data-limit-navigation="3">
                            <thead>
                            <tr>
                                <th data-sort-ignore="true">
                                    ID
                                </th>
                                <th  data-hide="phone">
                                    Image
                                </th>
                                <th  data-hide="phone">
                                   Tour Name
                                </th>
                                <th  data-hide="phone">
                                    Location
                                </th>
                                <th  data-hide="phone">
                                   Yacth Categories
                                </th>
                                <th  data-hide="phone">
                                    Price
                                </th>
                                <th  data-hide="phone">
                                    Headline
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection

