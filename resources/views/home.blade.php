<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GPIB MARTURIA</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/1731470281745.png') }}" type="image/x-icon">
</head>
<body>
    @include('partials.header')

    <section class="welcome-section" id="home">
        <div class="welcome-content">
            <h2>GPIB JEMAAT MARTURIA</h2>
            <h1>Gereja Yang Mewujudkan</h1>
            <h1>Damai Sejahtera Bagi Seluruh</h1>
            <h1>Ciptaan-Nya</h1>
            <a href="#about" class="btn">Mulai</a>
        </div>
    </section>
    
    <section id="about">
        <h2>Tentang GPIB Marturia</h2>
        <p> GPIB Marturia adalah tempat ibadah yang penuh kasih dan kebersamaan, melayani dan menyambut seluruh jemaat dalam semangat cinta kasih Kristus. Kami berkomitmen untuk membangun komunitas yang kuat melalui pelayanan rohani dan sosial, kegiatan ibadah mingguan, dan berbagai program pembinaan iman yang bertujuan untuk menumbuhkan kedewasaan rohani setiap anggota jemaat.</p>
    </section>
    
    <section id="jadwal">
        <h2>Jadwal Pelayanan Ibadah</h2>
        <table>
            <thead>
                <tr>
                    <th>Ibadah Pelayanan</th>
                    <th>Waktu</th>
                    <th>Hari</th>
                    <th>Tempat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ibadah Minggu</td>
                    <td>08:00 - 10:00</td>
                    <td>Minggu</td>
                    <td>Gereja GPIB Marturia</td>
                </tr>
                <tr>
                    <td>Ibadah Keluarga</td>
                    <td>19:00 - 20:30</td>
                    <td>Rabu</td>
                    <td>Rumah Jemaat</td>
                </tr>
                <tr>
                    <td>Ibadah Gerakan Pemuda</td>
                    <td>19:00 - 20:30</td>
                    <td>Jumat</td>
                    <td>Ruang Pemuda</td>
                </tr>
                <tr>
                    <td>Ibadah Persekutuan Kaum Bapak</td>
                    <td>19:00 - 20:30</td>
                    <td>Jumat</td>
                    <td>Gereja GPIB Marturia</td>
                </tr>
                <tr>
                    <td>Ibadah Persekutuan Kaum Perempuan</td>
                    <td>19:00 - 20:30</td>
                    <td>Jumat</td>
                    <td>Ruang Serba Guna</td>
                </tr>
                <tr>
                    <td>Ibadah Doa Subuh</td>
                    <td>05.30 - 6.30</td>
                    <td>Sabtu</td>
                    <td>Online</td>
                </tr>
                <tr>
                    <td>Ibadah Persekutuan Kaum Lanjut Usia</td>
                    <td>17:00 - 28:30</td>
                    <td>Sabtu</td>
                    <td>Ruang Serba Guna</td>
                </tr>
                <tr>
                    <td>Ibadah Persekutuan Anak</td>
                    <td>10:00 - 12:00</td>
                    <td>Minggu</td>
                    <td>Ruang Serba Guna</td>
                </tr>
                <tr>
                    <td>Ibadah Persekutuan Teruna</td>
                    <td>10:00 - 12:00</td>
                    <td>Minggu</td>
                    <td>Ruang Teruna</td>
                </tr>
            </tbody>
        </table>
    </section>

    <form id="form">
        <h2>Feedback</h2>
        <div class = "form-group">
            <label for = "nama">Nama:</label>
            <input type="text" id="nama" placeholder="Masukkan nama">
            <div class="error" id="namaError"></div>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Masukkan email">
            <div class="error" id="emailError"></div>
        </div>
        <div class="form-group">
            <label for="feedback">Feedback:</label>
            <textarea id="feedback" name="feedback" placeholder="Masukkan feedback" rows="3" required></textarea>
            <div class="error" id="feedbackError"></div>
        </div>
        <div class="form-buttons">
            <button type="submit">Submit</button>
            <button type="reset">Reset</button>
        </div>
    </form>
    <script src="{{ asset('js/script.js') }}"></script>
    
    <div id="success-message" class="success-message" style="display: none;">
        Terima kasih! Formulir Anda berhasil dikirim.
    </div>

    @include('partials.contact')

    @include('partials.footer')
</body>
</html>
