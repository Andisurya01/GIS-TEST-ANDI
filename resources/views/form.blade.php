<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')
    <title>Dynamic Form</title>
</head>

<body class="max-w-screen-xl mx-auto">
    <section class="">
        <form action="/" method="post">
            @csrf
            <H1 class="font-bold text-4xl text-center py-20">From pengisian cover student report</H1>
            <div class="flex flex-col gap-10 py-10">
                <div class="flex flex-col">
                    <label class="text-sm" for="name">Student Name</label>
                    <input class="py-2 px-3 border" type="text" name="name[]" placeholder="Name">
                </div>
                <div class="flex flex-col">
                    <label class="text-sm" for="nis">Student Identity Number</label>
                    <input class="py-2 px-3 border" type="number" name="nis[]" placeholder="nis">
                </div>
                <div class="flex flex-col">
                    <label class="text-sm" for="nisn">National Student Identity Number</label>
                    <input class="py-2 px-3 border" type="number" name="nisn[]" placeholder="nisn">
                </div>
                <div class="flex flex-col">
                    <label class="text-sm" for="npsn">National School Identity Number</label>
                    <input class="py-2 px-3 border" type="number" name="npsn[]" placeholder="npsn">
                </div>
            </div>
            <button class="py-3 px-4 rounded bg-green-400 text-white font-bold my-10" type="submit">Submit</button>
        </form>
    </section>
</body>

</html>
