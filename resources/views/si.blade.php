<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student's Identity</title>
    <style>
        /* Gaya untuk header */
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
            max-width: 1280px;
            margin: 0 auto;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .header-sub {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-end;
            line-height: 10px
        }
        header div {
            margin-right: 20px;
        }

        /* Gaya untuk daftar ol */
        ol {
            margin-top: 20px;
            padding-left: 20px;
        }

        /* Gaya untuk elemen li di dalam daftar ol */
        ol li {
            margin-bottom: 10px;
        }

        /* Gaya untuk elemen ul di dalam elemen li */
        ul {
            list-style-type: lower-alpha;
            margin-top: 5px;
            margin-left: 20px;
        }

        /* Gaya khusus untuk elemen tertentu jika diperlukan */
        h1 {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <header style="display: flex; justify-items: center">
        <div style="">
            {{-- <img src="{{ url('/image/logo.png') }}" alt=""> --}}
            <h1>GLOBAL INDONESIA SCHOOL</h1>
        </div>
        <div class="header-sub" style="justify-content: start;">
            <p>GLOBAL INDONESIA SCHOOL</p>
            <p>Perumaham Emerald Lake, Jl. Raya Tasikardi</p>
            <p>Pelamunan, Kramatwatu, Serang-Banten, 42161</p>
            <p>Telp. (021)-50106770</p>
        </div>
    </header>
    <h1 style="text-align: center; text-decoration: underline">STUDENT'S IDENTITY</h1>
    @foreach ($formData as $student)
        <ol type="1" style="">
            <li>Student Name: {{ $student['name'] }}</li>
            <li>Student Identity Number: {{ $student['nis'] }}</li>
            <li>NISN: {{ $student['nisn'] }}</li>
            <li>Place of the birth: {{ $student['potb'] }}</li>
            <li>Gender: {{ $student['gender'] }}</li>
            <li>Religion: {{ $student['religion'] }}</li>
            <li>Family Birth Order: {{ $student['fbo'] }}</li>
            <li>Number of Siblings: {{ $student['npsn'] }}</li>
            <li>Student's Address: {{ $student['studentAddress'] }}</li>
            <li>Telp/Phone Number: {{ $student['phone'] }}</li>
            <li>
                Admission in:
                <ul style="list-style-type: lower-alpha;">
                    <li>Class: {{ $student['class'] }}</li>
                    <li>Year: {{ $student['year'] }}</li>
                    <li>Semester: {{ $student['semester'] }}</li>
                </ul>
            </li>
            <li>
                Previous School:
                <ul style="list-style-type: lower-alpha;">
                    <li>Name: {{ $student['namePS'] }}</li>
                    <li>Address: {{ $student['addressPS'] }}</li>
                </ul>
            </li>
            <li>
                Last Academic Level Achieved:
                <ul style="list-style-type: lower-alpha;">
                    <li>Year: {{ $student['yearLA'] }}</li>
                    <li>Certificate Number: {{ $student['certificateNumber'] }}</li>
                </ul>
            </li>
            <li>
                Parents:
                <ul style="list-style-type: lower-alpha;">
                    <li style="">Father:
                        <div>Name: {{ $student['nameFather'] }}</div>
                        <div>Occupation: {{ $student['occupationFather'] }}</div>
                        <div>Phone: {{ $student['PhoneFather'] }}</div>
                    </li>
                    <li style="">Mother:
                        <div style="list-style-type: none">Name: {{ $student['nameMother'] }}</div>
                        <div>Occupation: {{ $student['occupationMother'] }}</div>
                        <div>Phone: {{ $student['PhoneMother'] }}</div>
                    </li>
                    <li style="">
                        Address :
                    </li>
                </ul>
            </li>
            <li>
                Guardian:
                <ul style="list-style-type: lower-alpha;">
                    <li>Name: {{ $student['nameGuardian'] }}</li>
                    <li>Adress : {{ $student['guardianAddress'] }}</li>
                    <li>Telephone Number: {{ $student['GuardianPhone'] }}</li>
                    <li>Occupation: {{ $student['guardianOccupation'] }}</li>
                </ul>
            </li>
        </ol>
    @endforeach
    <section style="display: flex; align-items: flex-end">
        <div style="width: 38.1mm; height: 55.9mm; background-color: beige;"></div>
        <div style="text-align: center; line-height: 20px">
            <p>Serang, <?php echo date("d F, Y") ?></p>
            <p>Principal</p>
            <p>Nama tertera</p>
        </div>
    </section>
</body>

</html>
