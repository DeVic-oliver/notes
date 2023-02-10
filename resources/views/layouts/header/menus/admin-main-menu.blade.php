<header>
    <div clas="">
        <a href="/dashboard">
            <img src="/img/post-it-logo.png" alt="Post it icons created by Freepik - Flaticon" srcset="" class="w-14">
        </a>
    </div>
    <nav>
        <ul>
            <li>
                <a href="/dashboard">Dashboard</a>
            </li>
            <li>
                <a href="/note/create">Add note</a>
            </li>
            <li>
                <a href="/profile">Profile</a>
            </li>
            <li>
                <a href="/admin/users">View users</a>
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <input type="submit" value="Logout">
                </form>
            </li>
        </ul>
    </nav>
</header>