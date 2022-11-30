<div class="row border-bottom">
    <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0;background-color: blue;">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li>
                <a href="" onclick="event.preventDefault(); document.getElementById('logout_form').submit()" style="color: white;">
                    <i class="fa fa-sign-out" style="color: white;"></i> Log out
                </a>

                <form id="logout_form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>

        </ul>

    </nav>
</div>


