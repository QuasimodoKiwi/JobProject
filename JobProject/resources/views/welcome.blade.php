<html>

<head>

</head>


<body>

    <form action={{ url('/') }} method="post">
        @csrf


        <label>firstname</label>
        <input name="firstname">

        <label>lastname</label>
        <input name="lastname">

        <label>email</label>
        <input name="email">

        <label>address</label>
        <input name="address">

        <label>education</label>
        <input name="education">

        <label>years of experince</label>
        <input name="yearsofexperince">

        <label>other</label>
        <input name="other">

        <button type="submit">Enter</button>


    </form>


    <form action={{ url('/customerpage') }} method="get">
        <button> Show all products!</button>
    </form>





</body>

</html>
