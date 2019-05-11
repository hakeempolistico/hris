@extends('layouts.template', ['module' => 'User', 'breadcrumb' => ['User Management', 'Add'] ])

@section('title', 'Dashboard')

@section('content')
    <div id="page-content">
        
        <div class="row">
            <div class="col-lg-12">
                <div class="panel">
                    @include('user.inc.create-form')        
                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')

    <!--Bootstrap Validator [ OPTIONAL ]-->
    <link href="{{ asset('assets') }}/plugins/bootstrap-validator/bootstrapValidator.min.css" rel="stylesheet">
        
    <!--Switchery [ OPTIONAL ]-->
    <link href="{{ asset('assets') }}/plugins/switchery/switchery.min.css" rel="stylesheet">

    <style>
        .col-xs-20 {
            width: 20%;
            padding-left: 10px;
            padding-right: 10px;
            float: left;
            position: relative;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
        }
    </style>

@endpush

@push('javascript')

    <!--Switchery [ OPTIONAL ]-->
    <script src="{{ asset('assets') }}/plugins/switchery/switchery.min.js"></script>

    <!--Bootstrap Wizard [ OPTIONAL ]-->
    <script src="{{ asset('assets') }}/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>


    <!--Bootstrap Validator [ OPTIONAL ]-->
    <script src="{{ asset('assets') }}/plugins/bootstrap-validator/bootstrapValidator.min.js"></script>

    <script>

    $(document).on('nifty.ready', function() {

        // SWITCHERY INITIALIZED
        new Switchery(document.getElementById('sw-checked'));

        // CLASSIC STYLE
        // =================================================================
        $('#demo-cls-wz').bootstrapWizard({
            tabClass        : 'wz-classic',
            nextSelector    : '.next',
            previousSelector    : '.previous',
            onTabClick: function(tab, navigation, index) {
                return false;
            },
            onInit : function(){
                $('#demo-cls-wz').find('.finish').hide().prop('disabled', true);
            },
            onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                var wdt = 100/$total;
                var lft = wdt*index;
                $('#demo-cls-wz').find('.progress-bar').css({width:$percent+'%'});

                // If it's the last tab then hide the last button and show the finish instead
                if($current >= $total) {
                    $('#demo-cls-wz').find('.next').hide();
                    $('#demo-cls-wz').find('.finish').show();
                    $('#demo-cls-wz').find('.finish').prop('disabled', false);
                } else {
                    $('#demo-cls-wz').find('.next').show();
                    $('#demo-cls-wz').find('.finish').hide().prop('disabled', true);
                }
            },
            // onNext: function(){
            //     isValid = null;
            //     $('#demo-cls-wz-form').bootstrapValidator('validate');


            //     if(isValid === false)return false;
            // }
        });

        // FORM VALIDATION
        // =================================================================
        // Require Bootstrap Validator
        // http://bootstrapvalidator.com/
        // =================================================================

        var isValid;
        $('#demo-cls-wz-form').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
            valid: 'fa fa-check-circle fa-lg text-success',
            invalid: 'fa fa-times-circle fa-lg',
            validating: 'fa fa-refresh'
            },
            fields: {
                email: {
                    validators: {
                        notEmpty: {
                            message: 'The email address is required and can\'t be empty'
                        },
                        emailAddress: {
                            message: 'The input is not a valid email address'
                        }
                    }
                },
                password: {
                    validators: {
                        notEmpty: {
                            message: 'The password is required and cannot be empty'
                        }
                    }
                },
                confirm_password: {
                    validators: {
                        notEmpty: {
                            message: 'The password is required and cannot be empty'
                        },
                        identical: {
                            field: 'password',
                            message: 'The password and its confirm are not the same'
                        }
                    }
                },
            }
        }).on('success.field.bv', function(e, data) {
            // $(e.target)  --> The field element
            // data.bv      --> The BootstrapValidator instance
            // data.field   --> The field name
            // data.element --> The field element

            var $parent = data.element.parents('.form-group');

            // Remove the has-success class
            $parent.removeClass('has-success');


            // Hide the success icon
            //$parent.find('.form-control-feedback[data-bv-icon-for="' + data.field + '"]').hide();
        }).on('error.form.bv', function(e) {
            isValid = false;
        });
    })


    </script>
@endpush