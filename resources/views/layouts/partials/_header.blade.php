<nav class="navbar navbar-default navbar-fixed-top hf-Background-DarkGray verticalAligmentParentHeader clearfix">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <span class="pull-left pt-4">
            <img src="/images/HFIC_Port_Elements-03.png">
        </span>
        <span class="pull-right pt-5">
            <ul class="list-inline">
                @if(Auth::check())
                <li>
                    <label class="hf-Color-White">Hi, Name</label>
                </li>
                @endif
                <li> <img src="/images/HFIC_Home_Icon.png" onclick="spinner(true);showDashboardAction();" /></li>
                @if(Auth::check())
                <li><a href="/logout">Log Out</a></li>
                @endif
            </ul>
        </span>
    </div>
    <div class="col-md-2"></div>
</nav>

@include('layouts.partials._steps')