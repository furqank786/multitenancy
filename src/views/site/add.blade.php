@extends('multitenancy::layout.masterc')

@include('layout.clean')

@section('content')
    <div class="header">
        <div class="sidebar-toggler visible-xs">
            <i class="ion ion-navicon"></i>
        </div>
        <span class="uppercase">

            <i class="ion ion-ios-email-outline"></i> Add New Site
        </span>
    </div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">

                <form name="SubscriberForm" class="form-vertical" role="form" action="/add" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                        <div class="form-group">
                            <label>Site Name:</label>
                            <input type="text" name="name">

                        </div>
                        <div class="form-group">
                            <label>URL:</label>
                            <input type="text" name="url">

                        </div>
                        <div class="form-group">
                            <label>Status:</label>
                            <input name="status" type="radio" value="active"> Active &nbsp;
                            <input name="status" type="radio" value="inactive" checked> Disabled

                        </div>
                    </fieldset>

                    <div class="form-group">
                        <div class='btn-group'>
                            <button type="submit" class="btn btn-success">Create Site</button>
                            <button type="button" class="btn btn-warning">Reset</button>
                            <a class="btn btn-default" href="#">{{ trans('forms.cancel') }}</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop