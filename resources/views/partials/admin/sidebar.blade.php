<div id="sidebar" class="side-bar">
    <i id="close" class="fa-solid fa-xmark"></i>
    <ul>
        {{-- @if (Auth::user()->isAdmin) --}}
        <li class="dashboard-link"><a href="{{ url('admin') }}">DASHBOARD</a></li>
        <div class="dropdown-btn text-left">
            <i class="fa-solid fa-atom m-3"></i>PRATICHE 
        </div>
        <div class="dropdown-container">
            <ul>
                <li><a href="{{ route('admin.practices.index') }}">
                    <span><i class="fa-solid fa-list"></i></span>
                    <span>Elenco</span>
                    </a>
                </li>
                <li><a href="{{ route('admin.practices.create') }}">
                    <span><i class="fa-solid fa-plus"></i></span>
                    <span>Aggiungi</span>
                    </a>
                </li>
            </ul>
        </div>

        {{-- <div class="dropdown-btn  text-left">
            <i class="fa-solid fa-car m-3"></i>OFFICINE 
        </div>
        <div class="dropdown-container">
            <ul>
                <li><a href="{{ route('admin.garages.index') }}">
                    <span><i class="fa-solid fa-list"></i></span>
                    <span>Elenco</span>
                    </a>
                </li>
                <li><a href="{{ route('admin.garages.create') }}">
                    <span><i class="fa-solid fa-plus"></i></span>
                    <span>Aggiungi</span>
                    </a>
                </li>
            </ul>
        </div>

        <li><a href="{{route('admin.statuspractices.index')}}">
            <span><i class="fa-solid fa-spinner"></i></span>
            <span>STATUS PRATICHE</span>
            </a>
        </li> 
        <li><a href="{{route('admin.categories.index')}}">
            <span><i class="fa-solid fa-diagram-project"></i></span>
            <span>CATEGORIE VEICOLI</span>
            </a>
        </li>
        <li><a href="{{route('admin.insurances.index')}}">
            <span><i class="fa-solid fa-car-burst"></i></span>
            <span>ASSICURAZIONI</span>
            </a>
        </li> 
        <div class="dropdown-btn text-left">            
            <i class="fa fa-computer m-3"></i>TECNICI 
        </div>
        <div class="dropdown-container">
            <ul>
                <li><a href="{{ route('admin.technicians.index') }}">
                    <span><i class="fa-solid fa-list"></i></span>
                    <span>Elenco</span>
                    </a>
                </li>
                <li><a href="{{ route('admin.technicians.create') }}">
                    <span><i class="fa-solid fa-plus"></i></span>
                    <span>Aggiungi</span>
                    </a>
                </li>
            </ul>
        </div> --}}
        {{-- @endif --}}
    </ul>
</div>

