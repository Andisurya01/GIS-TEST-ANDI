<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body style="text-align: center">
    <header style="display: flex; justify-content: space-around; align-items: center">
        {{-- <img style="width: 100px; height: 100px;" src="{{ url('/image/tut-wuri-handayani.png') }}" alt="logo"> --}}
        <div>
            <h1 class="font-bold text-xl">GLOBAL INDONESIA SCHOOL</h1>
            <h2 >DINAS PENDIDIKAN KABUPATEN SERANG</h2>
        </div>
        {{-- <img style="width: 100px; height: 100px;" src="{{ url('/image/logo.png') }}" alt="logo"> --}}
    </header>

    @foreach ($formData as $student)
        <h1 >STUDENT REPORT CARD</h1>
        <p >Student Name</p>
        <p>{{ $student['name'] }}</p>

        <p >Student Identity Number</p>
        <p >(NIS)</p>
        <p>{{ $student['nis'] }}</p>

        <p >National Student Identity Number</p>
        <p >(NISN)</p>
        <p>{{ $student['nisn'] }}</p>

        <p >National School Identity Number</p>
        <p >(NPSN)</p>
        <p>{{ $student['npsn'] }}</p>
    @endforeach

    <footer >
        <h2>Address</h2>
        <p>Perumaham Emerald Lake, Jl. Raya Tasikardi</p>
        <p>Pelamunan, Kramatwatu, Serang-Banten, 42161</p>
        <p>Telp. (021)-50106770</p>
    </footer>
</body>

</html>
