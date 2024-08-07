@php use Illuminate\Support\Facades\Auth; @endphp
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- User Profile-->
        <div class="user-profile">
            <div class="user-pro-body">
                <div class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu"
                       data-bs-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu animated flipInY">
                        <!-- text-->
                        <a href="{{ route('admin.profile.index') }}" class="dropdown-item">
                            <i class="ti-user"></i> Profil
                        </a>
                        <!-- text-->
                        <div class="dropdown-divider"></div>
                        <!-- text-->
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="ti-power-off"></i> Çıxış
                            </button>
                        </form>
                        <!-- text-->
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li>
                    <a class="waves-effect waves-dark" href="{{ route('admin.index') }}" aria-expanded="false">
                        <i class="icon-speedometer"></i>
                        <span class="hide-menu">
                            Ana Səhifə
                        </span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="{{ route('admin.settings') }}" aria-expanded="false">
                        <i class="icons-Gears"></i>
                        <span class="hide-menu">
                            Parametrlər
                        </span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="{{ route('admin.about') }}" aria-expanded="false">
                        <i class="mdi mdi-information"></i>
                        <span class="hide-menu">
                            Haqqımızda
                        </span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="{{ route('admin.contact') }}" aria-expanded="false">
                        <i class="mdi mdi-phone"></i>
                        <span class="hide-menu">
                            Əlaqə
                        </span>
                    </a>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="{{ route('admin.messages.index') }}" aria-expanded="false">
                        <i class="mdi mdi-email"></i>
                        <span class="hide-menu">
                            Mesajlar
                        </span>
                    </a>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-account-multiple"></i>
                        <span class="hide-menu">
                            İstifadəçilər
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="{{ route('admin.users.index') }}">
                                İstifadəçilər
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.users.create') }}">
                                Yeni İstifadəçi
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-briefcase"></i>
                        <span class="hide-menu">
                            Xidmətlər
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="{{ route('admin.services.index') }}">
                                Xidmətlər
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.services.create') }}">
                                Yeni Xidmət
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="mdi mdi-star"></i>
                        <span class="hide-menu">
                            Keyfiyyətlər
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="{{ route('admin.qualities.index') }}">
                                Keyfiyyətlər
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.qualities.create') }}">
                                Yeni Keyfiyyət
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false">
                        <i class="icon-people"></i>
                        <span class="hide-menu">
                            Komanda
                        </span>
                    </a>
                    <ul aria-expanded="false" class="collapse">
                        <li>
                            <a href="{{ route('admin.team.index') }}">
                                Komanda
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('admin.team.create') }}">
                                Yeni Üzv
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="waves-effect waves-dark" href="{{ route('admin.privacy') }}" aria-expanded="false">
                        <i class="ti-write"></i>
                        <span class="hide-menu">
                            Privacy Policy
                        </span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
