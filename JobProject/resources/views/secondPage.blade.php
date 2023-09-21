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

    </table>
</body>
</html>

@php
use Illuminate\Http\request; //CHANGE AS NEEDED
use app\models\application; //CHANGE AS NEEDED

public function store(Request $request)
{
    $validatedData = $request->validate([
        'applicationID' => 'required',
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required|email',
        'address' => 'required',
        'education' => 'required',
        'yearsofexperience' => 'required|numeric',
        'other' => 'nullable',
    ]);

    Application::create($validatedData);

    return redirect('/application_form')->with('success', 'Application submitted successfully');

Application::create($validatedData);

    return redirect('/application_form')->with('success', 'Application submitted successfully');
}
@endphp
