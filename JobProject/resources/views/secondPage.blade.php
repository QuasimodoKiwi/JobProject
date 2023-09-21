<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Second Page</title>
    <style>
        table{
            width: 100%;
        }
        table, th, td {
          border:1px solid black;
        }
        th{
            padding: 5px;
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
            <th>Address</th>
            <th>Education</th>
            <th>Years of Experience</th>
            <th>Other</th>
        </tr>

        @foreach ($jobTable as $key => $data)
        <tr>
            <th>{{$data->applicationID}}</th>
            <th>{{$data->firstname}}</th>
            <th>{{$data->lastname}}</th>
            <th>{{$data->email}}</th>
            <th>{{$data->address}}</th>
            <th>{{$data->education}}</th>
            <th>{{$data->yearsofexperience}}</th>
            <th>{{$data->other}}</th>
    @endforeach
    </table>
    
</body>
</html>


