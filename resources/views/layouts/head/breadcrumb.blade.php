
<div id="page-head">
    
    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="page-title">
        <h1 class="page-header text-overflow">{{ $module }}</h1>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->


    <!--Breadcrumb-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    @if($breadcrumb)
        <ol class="breadcrumb">
            <li><a href="#"><i class="pli-home"></i></a></li>
            @foreach($breadcrumb as $link)
                <li class="{{ $loop->last ? 'active' : '' }}"><a href="#">{{ $link }}</a></li>
            @endforeach
        </ol>
    @endif
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End breadcrumb-->


</div>