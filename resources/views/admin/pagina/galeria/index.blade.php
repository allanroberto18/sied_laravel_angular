@extends('admin.template.base')
@section('breadcrumbs')
    {!! Breadcrumbs::render('admin_sobre_nos') !!}
@endsection
@section('body')
    <script type="text/ng-template" id="modal.tpl.html">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" ng-click="cancel()">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">@{{ title }}</h4>
                </div>
                <div class="modal-body">
                    <p>@{{ message }}</p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary btn-flat" type="button" ng-click="ok()">
                        <i class="fa fa-check"></i>
                        OK
                    </button>
                    <button class="btn btn-warning btn-flat" type="button" ng-click="cancel()">
                        <i class="fa fa-times"></i> Cancel
                    </button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
    </script>
    <div class="row" ng-controller="SobreNosController" ng-init="init()">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <alert-msg ng-show="message" ng-click="closeMessage()" title="Mensagem:">
                @{{ message }}
            </alert-msg>
        </div>
        @include('admin.sobre_nos.form')
        @include('admin.sobre_nos.list')
    </div>
@endsection