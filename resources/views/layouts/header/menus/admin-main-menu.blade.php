<header>
    <div clas="">
        Logo
    </div>
    <nav>
        <ul>
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="/note/create">Add note</a>
            </li>
            <li>
                <a href="/profile">Profile</a>
            </li>
            <li>
                <a href="/dashboard">Dashboard</a>
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </li>
        </ul>
    </nav>
</header>