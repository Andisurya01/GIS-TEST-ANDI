<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="text-center">
    <header class="flex justify-around items-center">
        <img class="w-20" src="{{ url('/image/tut-wuri-handayani.png') }}" alt="logo">
        <div>
            <h1 class="font-bold text-xl">GLOBAL INDONESIA SCHOOL</h1>
            <h2 class="font-medium">DINAS PENDIDIKAN KABUPATEN SERANG</h2>
        </div>
        <img src="{{ url('/image/logo.png') }}" alt="logo">
    </header>

    @foreach ($data as $student)
        <h1 class="font-bold text-3xl py-20">STUDENT REPORT CARD</h1>
        <p class="font-semibold pb-3">Student Name</p>
        <p>{{ $student['name'] }}</p>

        <p class="font-semibold pt-5">Student Identity Number</p>
        <p class="italic text-sm pb-3">(NIS)</p>
        <p>{{ $student['nis'] }}</p>

        <p class="font-semibold pt-5">National Student Identity Number</p>
        <p class="italic text-sm pb-3">(NISN)</p>
        <p>{{ $student['nisn'] }}</p>

        <p class="font-semibold pt-5">National School Identity Number</p>
        <p class="italic text-sm pb-3">(NPSN)</p>
        <p>{{ $student['npsn'] }}</p>
    @endforeach

    <footer class="font-semibold text-sm">
        <h2>Address</h2>
        <p>Perumaham Emerald Lake, Jl. Raya Tasikardi</p>
        <p>Pelamunan, Kramatwatu, Serang-Banten, 42161</p>
        <p>Telp. (021)-50106770</p>
    </footer>
</body>

</html>
