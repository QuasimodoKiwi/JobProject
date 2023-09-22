<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Second Page</title>
    <style>
        body {
            background-color: steelblue;
        }
        table{
            width: 100%;
            margin-bottom: 20px;
        }
        table, th, td {
            border:1px solid black;
        }
        th{
            color: white;
            background-color: limegreen;
        }
        </style>
</head>
<body>
    <table>
        <tr>
            <th>Application ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
        </tr>
        <tr>
            <th>Address</th>
            <th>Education</th>
            <th>Years of Experience</th>
            <th>Other</th>
        </tr>
    </table>
        @foreach($emp as $key => $value)
        <tr>
            <th>{{ $value->applicationID}}</th>
            <th>{{ $value->firstname}}</th>
            <th>{{ $value->lastname}}</th>
            <th>{{ $value->email}}</th>
            <th>{{ $value->address}}</th>
            <th>{{ $value->education}}</th>
            <th>{{ $value->yearsofexperience}}</th>
            <th>{{ $value->other}}</th>
        </tr>
        @endforeach
</body>
</html>