<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Application Form</title>
    <style>
        body {
            color: black;
            background-color: steelblue;
        }
        input, select, textarea, button {
            color: white;
            background-color: limegreen;
            border-style: ridge;
            border-radius: 5px;
            border-color: white;
            margin: 5px;
        }
        select {
            padding-left: 10px;
            padding-right: 5px;
        }
        .yoe {
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .yoe input {
            width: 50px;
            padding-top: 5px;
            padding-bottom: 5px;
        }
        .other {
            width: 50%;
        }
    </style>
</head>
<body>
    <form action="{{ route('store_application') }}" method="post">
        @csrf
        <div>
            <label for="applicationID">Application ID:</label>
            <input type="text" id="applicationID" name="applicationID" value="{{ rand() }}" readonly>
        </div>
        <div>
            <label for="firstname">First Name:</label>
            <input type="text" id="firstname" name="firstname" required>
        </div>
        <div>
            <label for="lastname">Last Name:</label>
            <input type="text" id="lastname" name="lastname" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div>
            <label for="address">Address:</label>
            <input type="text" id="address" name="address" required>
        </div>
        <div>
            <label for="education">Education:</label>
            <select id="education" name="education" required>
                <option value="Undergraduate">Undergraduate</option>
                <option value="Graduate">Graduate</option>
            </select>
        </div>
        <div>
            <label for="yearsofexperience">Years of Experience:</label>
            <input type="number" id="yearsofexperience" name="yearsofexperience" required>
        </div>
        <div>
            <label for="other">Other:</label>
            <textarea id="other" name="other" rows="4" cols="50"></textarea>
        </div>
        <button type="submit">Submit Application</button>
    </form>
</body>
</html>
