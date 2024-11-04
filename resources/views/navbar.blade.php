<nav id="navmenu" class="navmenu">
    <ul class="d-flex justify-content-end">
        <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}"><i class="bi bi-house"></i> Home</a></li>
        <li><a href="{{ route('review') }}" class="{{ request()->routeIs('review') ? 'active' : '' }}"><i class="bi bi-star"></i> Review</a></li>
        <li><a href="{{ route('login') }}" class="{{ request()->routeIs('login') ? 'active' : '' }}"><i class="bi bi-lock"></i> Login</a></li>
        <li><a href="{{ route('register') }}" class="{{ request()->routeIs('register') ? 'active' : '' }}"><i class="bi bi-person-plus"></i> Register</a></li>
    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>

<style>
    .navmenu {
        background-color: transparent; /* Navbar background is transparent */
        padding: 10px 20px;
        position: fixed;
        top: 0;
        right: 0;
        width: auto;
        z-index: 1000;
    }
    .navmenu ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    .navmenu li {
        display: inline;
        margin-left: 20px;
    }
    .navmenu a {
        text-decoration: none;
        color: black; /* Default text color */
        padding: 10px 15px;
        transition: background-color 0.3s, color 0.3s;
        font-family: 'Arial', sans-serif;
        font-weight: bold;
    }
    .navmenu a:hover {
        background-color: rgba(255, 255, 255, 0.2); /* Background color on hover */
        color: white;
    }
    .navmenu .active {
        background-color: #ff4081; /* Pink background for active menu */
        color: white; /* Text color for active menu */
    }
</style>