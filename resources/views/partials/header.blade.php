<header>

    <div class="container">
        <h1>- SUPERMOVIES -</h1>
        <ul>
            <li>
                <a class="{{ Route::currentRouteName() === 'home' ? 'active' : '' }}" href="{{ route('home') }}">HOME</a>
            </li>

            <li>
                <a class="{{ Route::currentRouteName() === 'shop' ? 'active' : '' }}" href="{{ route('shop') }}">SHOP</a>
            </li>

            <li>
                <a class="{{ Route::currentRouteName() === 'contacts' ? 'active' : '' }}"
                    href="{{ route('contacts') }}">CONTACTS</a>
            </li>
        </ul>
    </div>

</header>
