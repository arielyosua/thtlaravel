<header>
    <img src="{{ asset('images/1731470281745.png') }}" alt="Logo" class="logo">
    <div class="header-text">
        <h1>GPIB MARTURIA</h1>
        <h2>Jakarta Timur</h2>
    </div>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li>
                <a href="#">GPIB</a>
                <ul class="dropdown">
                    <li><a href="{{ route('tentang') }}">Tentang GPIB</a></li>
                    <li><a href="{{ route('visi') }}">Visi Misi Motto GPIB</a></li>
                    <li><a href="{{ route('simbol') }}">Simbol Tahun GPIB</a></li>
                </ul>
            </li>
            <li><a href="#contact">Contact</a></li>
            <li class="sign-in">
                <a href="{{ route('signin') }}">Sign In</a>
            </li>
        </ul>
    </nav>
</header>
