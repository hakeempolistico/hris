@extends('layouts.template', ['module' => 'Dashboard'])

@section('title', 'Dashboard')

@section('content')
    <!--Page content-->
        <!--===================================================-->
        <div id="page-content">
            <div class="row">
                <div class="col-lg-8">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title text-bold text-primary">What's Out?</h3>
                        </div>
                        <div class="panel-body">
                            <div id='calendar'></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="panel pos-rel">
                        <div class="panel-heading">
                            <h3 class="panel-title text-bold text-primary">Who's New?</h3>
                        </div>
                        <div class="widget-control text-right">
                            <a href="#" class="add-tooltip btn btn-trans" data-original-title="Favorite"><span class="favorite-color"><i class="demo-psi-star icon-lg"></i></span></a>
                            <div class="btn-group dropdown">
                                <a href="#" class="dropdown-toggle btn btn-trans" data-toggle="dropdown" aria-expanded="false"><i class="demo-psi-dot-vertical icon-lg"></i></a>
                                <ul class="dropdown-menu dropdown-menu-right" style="">
                                    <li><a href="#"><i class="icon-lg icon-fw demo-psi-pen-5"></i> Edit</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-recycling"></i> Remove</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-mail"></i> Send a Message</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-calendar-4"></i> View Details</a></li>
                                    <li><a href="#"><i class="icon-lg icon-fw demo-pli-lock-user"></i> Lock</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="pad-all bord-top">
                            <div class="media pad-ver">
                                <div class="media-left">
                                    <a href="#" class="box-inline"><img alt="Profile Picture" class="img-md img-circle" src="{{ asset('assets') }}/img/profile-photos/8.png"></a>
                                </div>
                                <div class="media-body pad-top">
                                    <a href="#" class="box-inline">
                                        <span class="text-lg text-semibold text-main">Lucy Moon</span>
                                        <p class="text-sm">Designer</p>
                                    </a>
                                </div>
                            </div>
                            <p class="pad-btm bord-bt text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean massa.</p>
                            <div class="text-center pad-to">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-sm btn-default"><i class="demo-pli-consulting icon-lg icon-fw"></i> Call</a>
                                    <a href="#" class="btn btn-sm btn-default"><i class="demo-pli-mail icon-lg icon-fw"></i> Email</a>
                                    <a href="#" class="btn btn-sm btn-default"><i class="demo-pli-pen-5 icon-lg icon-fw"></i> Edit</a>
                                </div>
                            </div>
                        </div>
                        <div class="pad-all bord-top">
                            <div class="media pad-ver">
                                <div class="media-left">
                                    <a href="#" class="box-inline"><img alt="Profile Picture" class="img-md img-circle" src="{{ asset('assets') }}/img/profile-photos/8.png"></a>
                                </div>
                                <div class="media-body pad-top">
                                    <a href="#" class="box-inline">
                                        <span class="text-lg text-semibold text-main">Lucy Moon</span>
                                        <p class="text-sm">Designer</p>
                                    </a>
                                </div>
                            </div>
                            <p class="pad-btm bord-bt text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean massa.</p>
                            <div class="text-center pad-to">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-sm btn-default"><i class="demo-pli-consulting icon-lg icon-fw"></i> Call</a>
                                    <a href="#" class="btn btn-sm btn-default"><i class="demo-pli-mail icon-lg icon-fw"></i> Email</a>
                                    <a href="#" class="btn btn-sm btn-default"><i class="demo-pli-pen-5 icon-lg icon-fw"></i> Edit</a>
                                </div>
                            </div>
                        </div>
                        <div class="pad-all bord-top">
                            <div class="media pad-ver">
                                <div class="media-left">
                                    <a href="#" class="box-inline"><img alt="Profile Picture" class="img-md img-circle" src="{{ asset('assets') }}/img/profile-photos/8.png"></a>
                                </div>
                                <div class="media-body pad-top">
                                    <a href="#" class="box-inline">
                                        <span class="text-lg text-semibold text-main">Lucy Moon</span>
                                        <p class="text-sm">Designer</p>
                                    </a>
                                </div>
                            </div>
                            <p class="pad-btm bord-bt text-sm">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean massa.</p>
                            <div class="text-center pad-to">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-sm btn-default"><i class="demo-pli-consulting icon-lg icon-fw"></i> Call</a>
                                    <a href="#" class="btn btn-sm btn-default"><i class="demo-pli-mail icon-lg icon-fw"></i> Email</a>
                                    <a href="#" class="btn btn-sm btn-default"><i class="demo-pli-pen-5 icon-lg icon-fw"></i> Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title text-bold text-primary">What's Up?</h3>
                        </div>
                    
                        <!--Data Table-->
                        <!--===================================================-->
                        <div class="panel-body">
                            <div class="pad-btm form-inline">
                                <div class="row">
                                    <div class="col-sm-6 table-toolbar-left">
                                        <button id="btn-addrow" class="btn btn-purple"><i class="pli-add"></i> Add</button>
                                        <button class="btn btn-default"><i class="pli-printer"></i></button>
                                        <div class="btn-group">
                                            <button class="btn btn-default"><i class="pli-exclamation"></i></button>
                                            <button class="btn btn-default"><i class="pli-recycling"></i></button>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 table-toolbar-right">
                                        <div class="form-group">
                                            <input id="input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off">
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-default"><i class="pli-download-from-cloud"></i></button>
                                            <div class="btn-group dropdown">
                                                <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
                                                    <i class="pli-gear"></i>
                                                    <span class="caret"></span>
                                                </button>
                                                <ul role="menu" class="dropdown-menu dropdown-menu-right">
                                                    <li><a href="#">Action</a></li>
                                                    <li><a href="#">Another action</a></li>
                                                    <li><a href="#">Something else here</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Separated link</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped table-vcenter">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Type</th>
                                            <th>Announcement</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="text-muted"></i> Oct 22, 2014</span></td>
                                            <td><i class="pli-monitor-2 icon-3x"></i></td>
                                            <td>NO WORK ON THIS DAY! PLEASE SEE EMAIL</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--===================================================-->
                        <!--End Data Table-->

                    </div>
                </div>
            </div>
            
         
            
                    
        </div>
        <!--===================================================-->
        <!--End page content-->

@endsection

@push('css')
    <!--Full Calendar [ OPTIONAL ]-->
    <link href="{{ asset('assets') }}/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet">
    <link href="{{ asset('assets') }}/plugins/fullcalendar/nifty-skin/fullcalendar-nifty.min.css" rel="stylesheet">
@endpush

@push('javascript')
    <!--Full Calendar [ OPTIONAL ]-->
    <script src="{{ asset('assets') }}/plugins/fullcalendar/lib/moment.min.js"></script>
    <script src="{{ asset('assets') }}/plugins/fullcalendar/lib/jquery-ui.custom.min.js"></script>
    <script src="{{ asset('assets') }}/plugins/fullcalendar/fullcalendar.min.js"></script>


    <script>
        $('#calendar').fullCalendar()
    </script>
@endpush
