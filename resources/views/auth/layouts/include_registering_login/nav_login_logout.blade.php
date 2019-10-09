<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
    <div class="container">
        <div class="navbar-wrapper">
            <a class="navbar-brand" href="#">{{ __('Dashboard') }}</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">{{ __('Toggle navigation') }}</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">

                <li class="nav-item {{ Request::routeIs('register') ? 'active' : '' }}">
                    <a href="{{ route('register') }}" class="nav-link">
                        <i class="material-icons">{{__('person_add')}}</i> {{ __('Register') }}
                    </a>
                </li>

                <li class="nav-item {{ Request::routeIs('login') ? 'active' : '' }}">
                    <a href="{{ route('login') }}" class="nav-link">
                        <i class="material-icons">{{__('fingerprint')}}</i> {{ __('Login') }}
                    </a>
                </li>

                <li class="nav-item {{ Request::routeIs('password.request') ? 'active' : '' }}">
                    <a href="{{ route('password.request') }}" class="nav-link">
                        <i class="material-icons">{{__('lock_open')}}</i> {{ __('Forgot Password ?') }}
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>
