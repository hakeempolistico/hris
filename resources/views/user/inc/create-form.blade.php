
<div id="demo-cls-wz">

    <!--Nav-->
    <ul class="wz-nav-off wz-icon-inline">
        <li class="col-xs-20 bg-mint">
            <a data-toggle="tab" href="#demo-cls-tab1">
                <span class="icon-wrap icon-wrap-xs"><i class="pli-information icon-lg"></i></span> Account
            </a>
        </li>
        <li class="col-xs-20 bg-mint">
            <a data-toggle="tab" href="#demo-cls-tab2">
                <span class="icon-wrap icon-wrap-xs"><i class="pli-male icon-lg"></i></span> Profile
            </a>
        </li>
        <li class="col-xs-20 bg-mint">
            <a data-toggle="tab" href="#demo-cls-tab3">
                <span class="icon-wrap icon-wrap-xs"><i class="pli-first-aid icon-lg"></i></span> Emergency Contact
            </a>
        </li>
        <li class="col-xs-20 bg-mint">
            <a data-toggle="tab" href="#demo-cls-tab4">
                <span class="icon-wrap icon-wrap-xs"><i class="pli-suitcase icon-lg"></i></span> Job Details
            </a>
        </li>
        <li class="col-xs-20 bg-mint">
            <a data-toggle="tab" href="#demo-cls-tab5">
                <span class="icon-wrap icon-wrap-xs"><i class="pli-suitcase icon-lg"></i></span> Summary
            </a>
        </li>
    </ul>

    <!--Progress bar-->
    <div class="progress progress-xs progress-striped active">
        <div class="progress-bar progress-bar-dark"></div>
    </div>


    <!--Form-->
    <form id="demo-cls-wz-form" class="form-horizontal mar-top">
        <div class="panel-body">
            <div class="tab-content">
                <!--Tab Content-->
                @include('user.inc.tab-1')
                @include('user.inc.tab-2')
                @include('user.inc.tab-3')
                @include('user.inc.tab-4')
                @include('user.inc.tab-5')
            </div>
        </div>
        <!--Footer button-->
        <div class="panel-footer text-right">
            <div class="box-inline">
                <button type="button" class="previous btn btn-mint">Previous</button>
                <button type="button" class="next btn btn-mint">Next</button>
                <button type="button" class="finish btn btn-mint" disabled>Finish</button>
            </div>
        </div>
    </form>
</div>