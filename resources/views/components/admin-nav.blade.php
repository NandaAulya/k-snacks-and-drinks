<nav class="mt-6 space-y-1 font-semibold text-lg">
    <nav class="mt-6 space-y-1">
        <a href="{{ route('home') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:text-background">Home</a>
        <a href="{{route('nadmn.tampilSnack')}}" class="block py-2.5 px-4 rounded transition duration-200 hover:text-background">Kelola Snack</a>
        <a href="{{ route('nadmn.tampil') }}" class="block py-2.5 px-4 rounded transition duration-200 hover:text-background">Kelola Drinks</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="block py-2.5 px-4 rounded transition duration-200 hover:text-background">
            Logout
        </a>        
    </nav>
</nav>