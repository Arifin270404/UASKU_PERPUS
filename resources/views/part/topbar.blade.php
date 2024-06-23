<style>
    .switch-mode {
	display: block;
	min-width: 20px;
	height: 25px;
	border-radius: 25px;
	background: var(--grey);
	cursor: pointer;
	position: relative;
}

.switch-mode::before {
	content: "";
	position: absolute;
	top: 2px;
	left: 20px;
	bottom: 2px;
	width: calc(25px - 4px);
	background: var(--blue);
	border-radius: 50%;
	transition: 0.3s ease;
}

#switch-mode:checked + .switch-mode::before {
	left: calc(100% - (25px - 4px) - 2px);
}
</style>

<nav class="navbar navbar-expand navbar-light bg-success topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
          <input type="checkbox" hidden id="switch-mode" />
			<label for="switch-mode" class="switch-mode"></label>
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                @if ($profile->photoProfile != null )
                <img  class="img-profile rounded-circle" src="{{asset('/images/photoProfile/'.$profile->photoProfile)}}" style="max-width: 60px">
                @else
                <img class="img-profile rounded-circle" src="{{ asset('template/img/boy.png') }}" style="max-width: 60px">
                @endif
                <span class="ml-2 d-none d-lg-inline text-white small">{{Auth::user()->name}}</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="/profile">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{route('logout')}}" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
