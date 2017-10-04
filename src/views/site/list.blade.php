@extends('multitenancy::layout.masterc')

@include('layout.clean')

@section('content')
    <div class="header fixed">
        <div class="sidebar-toggler visible-xs">
            <i class="ion ion-navicon"></i>
        </div>
    <span class="uppercase">
        <i class="ion ion-ios-email-outline"></i> yyyyyyy
    </span>

        <a class="btn btn-md btn-success pull-right" href="/add">
            Add New Site
        </a>

        <div class="clearfix"></div>
    </div>
    <div class="content-wrapper header-fixed">
        <div class="row">
            <div class="col-sm-12">
                <p class="lead">xxxxxxx</p>

                <div class="striped-list">
                    <div class="row striped-list-item">
                        <div class="col-xs-3">
                            <b>Site Name</b>
                        </div>
                        <div class="col-xs-3">
                            <b> URL</b>
                        </div>
                        <div class="col-xs-1">
                            <b>Status</b>
                        </div>
                        <div class="col-xs-3">
                            <b>Created at</b>
                        </div>
                        <div class="col-xs-1">
                            <b>Action</b>
                        </div>
                    </div>
                    @foreach($sites as $site)
                        <div class="row striped-list-item">
                            <div class="col-xs-3">
                                <p>{{ $site->name }}</p>
                            </div>
                            <div class="col-xs-3">
                                {{$site->url}}
                            </div>
                            <div class="col-xs-1">
                                {{$site->status}}
                            </div>

                            <div class="col-xs-3">
                                {{$site->created_at}}
                            </div>

                            <div class="col-xs-1 text-right">
                                {{--active/inactive--}}
                                <a href="update/id/{{$site->id}}/status/{{ $site->status === "active" ? "inactive" : "active" }}">{{ $site->status === "active" ? "Inactive" : "Active" }}</a>
                                {{--/<a href="update/id/{{$site->id}}/status/{{ $site->status === "active" ? "active" : "inactive" }}">{{ucfirst($site->status)}}</a>--}}
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@stop