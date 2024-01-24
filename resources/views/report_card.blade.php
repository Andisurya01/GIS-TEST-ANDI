<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 12px;
            max-width: 1280px;
            margin: 0 auto;
            text-align: center;
        }

        header {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .header-p{
            font-size: 20px;
            font-weight: 500;
            margin-bottom: -5px
        }
        header p{
            font-size: 18px;
        }
        footer {
            padding-top: 240px;
        }

        .judul {
            padding-top: 70px;
            padding-bottom: 70px;
        }

        .judul-p {
            font-size: 16px;
            margin-bottom: -5px
        }

        .judul-p_sub {
            font-style: italic;
        }

        .judul-p_isi {
            padding-bottom: 15px;
        }

        .footer-head {
            font-size: 16px;
            margin-bottom: -5px;
        }

        .footer-isi {
            margin-bottom: -10px
        }
    </style>
</head>

<body>
    <header>
        {{-- <img style="width: 100px; height: 100px;" src="{{ url('/image/tut-wuri-handayani.png') }}" alt="logo"> --}}
        <div>
            <p class="header-p">GLOBAL INDONESIA SCHOOL</p>
            <p>DINAS PENDIDIKAN KABUPATEN SERANG</p>
        </div>
        {{-- <img style="width: 100px; height: 100px;" src="{{ url('/image/logo.png') }}" alt="logo"> --}}
    </header>

    @foreach ($formData as $student)
        <div>
            <h1 class="judul">STUDENT REPORT CARD</h1>
            <p class="judul-p">Student Name</p>
            <p class="judul-p_isi">{{ $student['name'] }}</p>

            <p class="judul-p">Student Identity Number</p>
            <p class="judul-p_sub">(NIS)</p>
            <p class="judul-p_isi">{{ $student['nis'] }}</p>

            <p class="judul-p">National Student Identity Number</p>
            <p class="judul-p_sub">(NISN)</p>
            <p class="judul-p_isi">{{ $student['nisn'] }}</p>

            <p class="judul-p">National School Identity Number</p>
            <p class="judul-p_sub">(NPSN)</p>
            <p class="judul-p_isi">{{ $student['npsn'] }}</p>
        </div>
    @endforeach

    <footer>
        <p class="footer-head">Address</p>
        <p class="footer-isi">Perumaham Emerald Lake, Jl. Raya Tasikardi</p>
        <p class="footer-isi">Pelamunan, Kramatwatu, Serang-Banten, 42161</p>
        <p class="footer-isi">Telp. (021)-50106770</p>
    </footer>
</body>

</html>
