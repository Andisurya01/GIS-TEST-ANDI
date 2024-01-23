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
        <form action="/si" method="post">
            @csrf
            <H1 class="font-bold text-4xl text-center py-20">From student identity</H1>
            <div class="flex flex-col gap-5 py-10">
                <div class="flex flex-col">
                    <label class="text-sm" for="name">Student Name</label>
                    <input class="py-2 px-3 border" type="text" name="name[]" placeholder="name">
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
                    <label class="text-sm" for="potb">Place of the birth</label>
                    <input class="py-2 px-3 border" type="date" name="potb[]" placeholder="">
                </div>
                <div class="flex flex-col">
                    <label class="text-sm" for="gender">Gender</label>
                    <input class="py-2 px-3 border" type="number" name="gender[]" placeholder="gender">
                </div>
                <div class="flex flex-col">
                    <label class="text-sm" for="religion">religion</label>
                    <input class="py-2 px-3 border" type="number" name="religion[]" placeholder="religion">
                </div>
                <div class="flex flex-col">
                    <label class="text-sm" for="fbo">Family Birth Order</label>
                    <input class="py-2 px-3 border" type="number" name="fbo[]" placeholder="example = 1">
                </div>
                <div class="flex flex-col">
                    <label class="text-sm" for="npsn">Number of Siblings</label>
                    <input class="py-2 px-3 border" type="number" name="npsn[]" placeholder="example = 1">
                </div>
                <div class="flex flex-col">
                    <label class="text-sm" for="studentAddress">Student's Address</label>
                    <input class="py-2 px-3 border" type="text" name="studentAddress[]"
                        placeholder="Student's Address">
                </div>
                <div class="flex flex-col">
                    <label class="text-sm" for="phone">Telp/Phone Number</label>
                    <input class="py-2 px-3 border" type="number" name="phone[]" placeholder="phone">
                </div>

                <h5><b>Admission in</b></h5>
                <div class="flex flex-col">
                    <label class="text-sm" for="class">Class</label>
                    <input class="py-2 px-3 border" type="text" name="class[]"
                        placeholder="example = 'Class VI'">
                </div>
                <div class="flex flex-col">
                    <label class="text-sm" for="year">Year</label>
                    <input class="py-2 px-3 border" type="number" name="year[]" placeholder="example = 2024">
                </div>
                <div class="flex flex-col">
                    <label class="text-sm" for="semester">Semester</label>
                    <input class="py-2 px-3 border" type="number" name="semester[]" placeholder="example = 1">
                </div>

                <h5><b>Previous School</b></h5>
                <div class="flex flex-col">
                    <label class="text-sm" for="namePS">Name</label>
                    <input class="py-2 px-3 border" type="text" name="namePS[]"
                        placeholder="Name Previous School">
                </div>
                <div class="flex flex-col">
                    <label class="text-sm" for="addressPS">Adress</label>
                    <input class="py-2 px-3 border" type="text" name="addressPS[]"
                        placeholder="Adress Previous School">
                </div>

                <h5><b>Last Academic Level Achieved</b></h5>
                <div class="flex flex-col">
                    <label class="text-sm" for="yearLA">Year</label>
                    <input class="py-2 px-3 border" type="number" name="yearLA[]" placeholder="npsn">
                </div>
                <div class="flex flex-col">
                    <label class="text-sm" for="certificateNumber">Certificate Number</label>
                    <input class="py-2 px-3 border" type="number" name="certificateNumber[]" placeholder="Name">
                </div>

                <h5><b>Parents</b></h5>
                <div class="flex flex-col">
                    <label class="text-sm" for="nameFather">Father</label>
                    <input class="py-2 px-3 border" type="text" name="nameFather[]" placeholder="Name Father">
                </div>
                <div class="flex flex-col">
                    <label class="text-sm" for="PhoneFather">Telp/Phone Number</label>
                    <input class="py-2 px-3 border" type="number" name="PhoneFather[]"
                        placeholder="Number Phone Father">
                </div>
                <div class="flex flex-col">
                    <label class="text-sm" for="occupationFather">Occupation</label>
                    <input class="py-2 px-3 border" type="text" name="occupationFather[]"
                        placeholder="Occupation Father">
                </div>
                <div class="flex flex-col">
                    <label class="text-sm" for="nameMother">Mother</label>
                    <input class="py-2 px-3 border" type="text" name="nameMother[]" placeholder="Name Mother">
                </div>
                <div class="flex flex-col">
                    <label class="text-sm" for="PhoneMother">Telp/Phone Number</label>
                    <input class="py-2 px-3 border" type="number" name="PhoneMother[]" placeholder="Phone Mother">
                </div>
                <div class="flex flex-col">
                    <label class="text-sm" for="occupationMother">Occupation</label>
                    <input class="py-2 px-3 border" type="text" name="occupationMother[]"
                        placeholder="Occupation Mother">
                </div>
                <div class="flex flex-col">
                    <label class="text-sm" for="addressParents">Address</label>
                    <input class="py-2 px-3 border" type="number" name="addressParents[]"
                        placeholder="Address Parents">
                </div>

                <h5><b>Guardian (if any)</b></h5>
                <div class="flex flex-col">
                    <label class="text-sm" for="nameGuardian">Name</label>
                    <input class="py-2 px-3 border" type="text" name="nameGuardian[]"
                        placeholder="Name Guardian">
                </div>
                <div class="flex flex-col">
                    <label class="text-sm" for="guardianAddress">Address</label>
                    <input class="py-2 px-3 border" type="text" name="guardianAddress[]"
                        placeholder="Guardian Address">
                </div>
                <div class="flex flex-col">
                    <label class="text-sm" for="GuardianPhone">Telephone NUmber</label>
                    <input class="py-2 px-3 border" type="number" name="GuardianPhone[]" placeholder="Guardian Phone">
                </div>
                <div class="flex flex-col">
                    <label class="text-sm" for="guardianOccupation">Occupation</label>
                    <input class="py-2 px-3 border" type="text" name="guardianOccupation[]"
                        placeholder="Guardian Occupation">
                </div>
            </div>
            <button class="py-3 px-4 rounded bg-green-400 text-white font-bold my-10" type="submit">Submit</button>
        </form>
    </section>
</body>

</html>
