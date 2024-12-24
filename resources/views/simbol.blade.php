<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simbol Tahun GPIB</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/1731470281745.png') }}" type="image/x-icon">
</head>
<body>
    @include('partials.header')

    <section class="galeri">
        <h2>SIMBOL-SIMBOL TAHUN GPIB</h2>
        <div class="gallery-grid">
            <img src="{{ asset('images/Jangkar-300x300.jpg') }}" alt="Simbol Jangkar GPIB" class="symbol-image">
            <img src="{{ asset('images/palungan-300x300.jpg') }}" alt="Simbol Palungan GPIB" class="symbol-image">
            <img src="{{ asset('images/bintang-300x300.jpg') }}" alt="Simbol Bintang GPIB" class="symbol-image">
            <img src="{{ asset('images/PASKAH-300x300.jpg') }}" alt="Simbol Paskah GPIB" class="symbol-image">
            <img src="{{ asset('images/salib-300x300.jpg') }}" alt="Simbol Salib GPIB" class="symbol-image">
            <img src="{{ asset('images/bunga-lily-300x300.jpg') }}" alt="Simbol Bunga Lily GPIB" class="symbol-image">
            <img src="{{ asset('images/MAHKOTA-300x300.jpg') }}" alt="Simbol Mahkota GPIB" class="symbol-image">
            <img src="{{ asset('images/api-300x300.jpg') }}" alt="Simbol Api GPIB" class="symbol-image">
            <img src="{{ asset('images/trinitas-300x300.jpg') }}" alt="Simbol Trinitas GPIB" class="symbol-image">
            <img src="{{ asset('images/perahu-768x768.jpg') }}" alt="Simbol Perahu GPIB" class="symbol-image">
        </div>
    </section>

    @include('partials.contact')

    @include('partials.footer')
</body>

</html>
