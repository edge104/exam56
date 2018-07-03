<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">

                <!-- Authentication Links -->
                <!-- 來賓選項 -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>

                {{-- 會員選項 --}}
                @else


                <!-- 
                    自訂scetion並直接塞入內容，
                    放入一個登入後才看得到的自訂選項home 
                    以(at)show結尾
                -->
                {{-- @section('my_menu')
                    <li><a class="nav-link" href="/home">{{ __('Home') }}</a></li>
                @show --}}


                <!--
                    加入管理按鈕，使用角色判別
                -->
                {{-- @section('admin_item')
                    @role('管理員')
                        <li><a class="nav-link" href="/admin">{{ __('Admin') }}</a></li>
                    @endrole
                @show --}}


                <!--
                    加入管理按鈕，使用權限判別﹙比較準確，因為角色不見得有權限﹚
                    使用section是保留區塊在子樣板有可以被變動/替代的空間
                -->
                @section('admin_item')
                    @can('後台管理')
                        <li><a class="nav-link" href="/admin">{{ __('Admin') }}</a></li>
                    @endcan
                    
                    @can('建立測驗')
                        <li><a class="nav-link" href="/exam/create">{{ __('Create Exam') }}</a></li>
                    @endcan
                @show



                
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>