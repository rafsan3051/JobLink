<!--====== Start Header Section======-->
<header>
    <div class="header">


      <div class="navigation">
        <nav class="navbar navbar-expand-lg navbar-bg">
          
          <div class="brand-logo">
            <a class="navbar-brand" href="{{ url('/') }}" id="menu-action">
              {{-- <div class="user-photo d-desktop">
                <img src="data:image/jpeg;base64,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" alt="">
              </div> --}}
              <span>{{ config('app.adminName', 'JobBoard Admin Pannel') }}</span>
            </a>    

           

            <div id="nav-toggle">
                <div class="cta">
                    <div class="toggle-btn type1"></div>
                </div>
            </div>     
          </div>
        <!--   For Toggle Mobile Nav icon -->
          <div class="for-mobile d-mobile">
              <div class= "toggle-button" id = "toggle-button">
                <span class="material-icons">
                menu
                </span>
              </div>

          </div>
              <!--   For Toggle Mobile Nav Icon -->

          <div class="collapse navbar-collapse pr-3" id="#">
            @if (Auth::check())
            <ul class="navbar-nav user-info ml-auto mt-2 mt-lg-0">
              <li class="nav-item dropdown show">
                <a href="#" class="navbar-nav-link dropdown-toggle text-light" data-toggle="dropdown" aria-expanded="true">
                  <div class="user-photo">
                    <img src="data:image/jpeg;base64,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" alt="">
                  </div>

                  
                      {{ Str::ucfirst(Auth::user()->name) }}
                  
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a href="" class="dropdown-item"> 
                    <i class="material-icons">
                      person_pin
                    </i>
                  Account Settings</a>
                  <div class="menu-dropdown-divider"></div>
                 


                  <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i class="material-icons">exit_to_app</i>{{ __('Logout') }}</a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                </div>
              </li>
            </ul>
            @endif
          </div>


        </nav>
        
      </div>
    <!--   For Toggle Mobile Nav -->
     <div class="toggle-user-menu" id = "toggle-user-menu">
        <ul>
          <li><a href="#"><div class="user-photo"><img src="https://dw3i9sxi97owk.cloudfront.net/uploads/thumbs/db9c4e1327eb8fe5e9395a4b04e1ea4a_70x70.jpg" alt=""></div>admin@admin.com</a></li>
          <li><a href="">
            <i class="material-icons mr-2">
                    supervisor_account
                    </i>
                  Account Settings
                </a></li>
          <li><a href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();"><i class="material-icons mr-2">exit_to_app</i>Logout</a></li>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
        </ul>
      </div>
    <!--   For Toggle Mobile Nav -->
    </div>  
</header>
<!--====== End Header Section======-->