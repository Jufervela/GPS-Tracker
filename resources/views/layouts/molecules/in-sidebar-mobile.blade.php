<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="javascript:;" id="mobile-menu-toggler">
            @icon('bar-chart-2', 'w-8 h-8 text-white transform -rotate-90')
        </a>
    </div>

    <ul class="border-t border-theme-21 py-5 hidden">
        <li>
            <a href="{{ route('dashboard.index') }}" class="menu {{ str_starts_with($ROUTE, 'dashboard.') ? 'menu--active' : '' }}">
                <div class="menu__icon">@icon('home')</div>
                <div class="menu__title">{{ __('in-sidebar.dashboard') }}</div>
            </a>
        </li>

        <li>
            <a href="{{ route('trip.index') }}" class="menu {{ str_starts_with($ROUTE, 'trip.') ? 'menu--active' : '' }}">
                <div class="menu__icon">@icon('map')</div>
                <div class="menu__title">{{ __('in-sidebar.trips') }}</div>
            </a>
        </li>

        <li>
            <a href="{{ route('refuel.index') }}" class="menu {{ str_starts_with($ROUTE, 'refuel.') ? 'menu--active' : '' }}">
                <div class="menu__icon">@icon('battery-charging')</div>
                <div class="menu__title">{{ __('in-sidebar.refuel') }}</div>
            </a>
        </li>

        <li>
            <a href="{{ route('device.index') }}" class="menu {{ str_starts_with($ROUTE, 'device.') ? 'menu--active' : '' }}">
                <div class="menu__icon">@icon('cpu')</div>
                <div class="menu__title">{{ __('in-sidebar.devices') }}</div>
            </a>
        </li>

        <li>
            <a href="{{ route('user.profile') }}" class="menu {{ ($ROUTE === 'user.profile') ? 'menu--active' : '' }}">
                <div class="menu__icon">@icon('user')</div>
                <div class="menu__title">{{ __('in-sidebar.profile') }}</div>
            </a>
        </li>

        @if ($AUTH->admin)

        <li>
            <a href="{{ route('configuration.index') }}" class="menu {{ str_starts_with($ROUTE, 'configuration.') ? 'menu--active' : '' }}">
                <div class="menu__icon">@icon('settings')</div>
                <div class="menu__title">{{ __('in-sidebar.configuration') }}</div>
            </a>
        </li>

        <li>
            <a href="{{ route('user.index') }}" class="menu {{ (str_starts_with($ROUTE, 'user.') && ($ROUTE !== 'user.profile')) ? 'menu--active' : '' }}">
                <div class="menu__icon">@icon('users')</div>
                <div class="menu__title">{{ __('in-sidebar.users') }}</div>
            </a>
        </li>

        <li>
            <a href="{{ route('socket.index') }}" class="menu {{ str_starts_with($ROUTE, 'socket.') ? 'menu--active' : '' }}">
                <div class="menu__icon">@icon('radio')</div>
                <div class="menu__title">{{ __('in-sidebar.sockets') }}</div>
            </a>
        </li>

        <li>
            <a href="{{ route('server.log') }}" class="menu {{ str_starts_with($ROUTE, 'server.log') ? 'menu--active' : '' }}">
                <div class="menu__icon">@icon('file')</div>
                <div class="menu__title">{{ __('in-sidebar.logs') }}</div>
            </a>
        </li>

        @endif

        <li>
            <a href="{{ route('user.logout') }}" class="menu">
                <div class="menu__icon">@icon('toggle-right')</div>
                <div class="menu__title">{{ __('in-sidebar.logout') }}</div>
            </a>
        </li>
    </ul>
</div>
