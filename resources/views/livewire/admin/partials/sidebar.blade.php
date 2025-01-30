<aside class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="dark">
    <div class="container-fluid">
        <h1 class="navbar-brand navbar-brand-autodark">
            OPEN RMS
        </h1>
        <div class="collapse navbar-collapse" id="sidebar-menu">
            <ul class="navbar-nav pt-lg-3">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}" wire:navigate>
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="icon icon-tabler icons-tabler-outline icon-tabler-dashboard"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path
                            d="M12 13m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M13.45 11.55l2.05 -2.05" /><path d="M6.4 20a9 9 0 1 1 11.2 0z" /></svg>
                  </span>
                        <span class="nav-link-title">
                    Dashboard
                  </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('user-management')}}"  wire:navigate.hover>
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="icon icon-tabler icons-tabler-outline icon-tabler-user"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path
                            d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" /><path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" /></svg>
                  </span>
                        <span class="nav-link-title">
                    User Management
                  </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./">
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="icon icon-tabler icons-tabler-outline icon-tabler-sort-ascending-shapes"><path stroke="none" d="M0 0h24v24H0z"
                                                                                                               fill="none" /><path
                            d="M4 15l3 3l3 -3" /><path d="M7 6v12" /><path
                            d="M14 5a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v4a1 1 0 0 1 -1 1h-4a1 1 0 0 1 -1 -1v-4z" /><path d="M17 14l-3.5 6h7z" /></svg>
                  </span>
                        <span class="nav-link-title">
                    Manage Order
                  </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./">
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon icon-tabler icons-tabler-outline icon-tabler-bookmarks"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path
                           d="M15 10v11l-5 -3l-5 3v-11a3 3 0 0 1 3 -3h4a3 3 0 0 1 3 3z" /><path d="M11 3h5a3 3 0 0 1 3 3v11" /></svg>
                  </span>
                        <span class="nav-link-title">
                    Reservation
                  </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./">
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="icon icon-tabler icons-tabler-outline icon-tabler-burger"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path
                            d="M4 15h16a4 4 0 0 1 -4 4h-8a4 4 0 0 1 -4 -4z" /><path
                            d="M12 4c3.783 0 6.953 2.133 7.786 5h-15.572c.833 -2.867 4.003 -5 7.786 -5z" /><path d="M5 12h14" /></svg>
                  </span>
                        <span class="nav-link-title">
                    Food Management
                  </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./">
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="icon icon-tabler icons-tabler-outline icon-tabler-clipboard-text"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path
                            d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2" /><path
                            d="M9 3m0 2a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v0a2 2 0 0 1 -2 2h-2a2 2 0 0 1 -2 -2z" /><path d="M9 12h6" /><path
                            d="M9 16h6" /></svg>
                  </span>
                        <span class="nav-link-title">
                    Report
                  </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="./">
                  <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="icon icon-tabler icons-tabler-outline icon-tabler-message"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path
                            d="M8 9h8" /><path d="M8 13h6" /><path
                            d="M18 4a3 3 0 0 1 3 3v8a3 3 0 0 1 -3 3h-5l-5 3v-3h-2a3 3 0 0 1 -3 -3v-8a3 3 0 0 1 3 -3h12z" /></svg>
                  </span>
                        <span class="nav-link-title">
                    Campaign
                  </span>
                    </a>
                </li>

                <li class="nav-item">
                    <button class="nav-link" wire:click="logout">
                            <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                 class="icon icon-tabler icons-tabler-outline icon-tabler-logout"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path
                                    d="M14 8v-2a2 2 0 0 0 -2 -2h-7a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h7a2 2 0 0 0 2 -2v-2" /><path d="M9 12h12l-3 -3" /><path
                                    d="M18 15l3 -3" /></svg>
                          </span>
                        <span class="nav-link-title">
                            Logout
                          </span>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</aside>
