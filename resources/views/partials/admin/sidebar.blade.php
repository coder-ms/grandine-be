

<nav id="sidebar" class="side-bar">
    <ul class="nav flex-column">
        <li class="dashboard-link title"><a href="{{ url('admin') }}">DASHBOARD</a></li>

        <li class="nav-item"><a class="nav-link text-white" href="{{route('admin.practices.index')}}">
            <span><i class="fa-solid fa-list"></i></span>
            <span>PRATICHE</span>
            </a>
        </li> 
        <li class="nav-item"><a class="nav-link text-white" href="{{route('admin.practices.create')}}">
            <span><i class="fa-solid fa-warehouse"></i></span>
            <span>OFFICINE</span>
            </a>
        </li> 

    </ul>
</nav>

