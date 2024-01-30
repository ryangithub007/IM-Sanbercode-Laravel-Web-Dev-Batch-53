<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form SanberBook</title>
</head>
<body>
    
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>

    <form action="/welcome" method="post">
        @csrf
        <label>First name:</label>
        <br><br>
        <input type="text" name="fname">
        <br><br>

        <label>Last name:</label>
        <br><br>
        <input type="text" name="lname">
        <br><br>

        <radio>Gender:</radio>
        <br><br>
        <input type="radio" name="status" value="male">Male
        <br>
        <input type="radio" name="status" value="female">Female
        <br>
        <input type="radio" name="status" value="other">Other
        <br><br>

        <label>Nasionality:</label>
        <br><br>
            <select name="skill">
                <option value="indoensia">Indonesia</option>
                <option value="malaysia">Malaysia</option>
                <option value="singapura">Singapura</option>
            </select>
        <br><br>

        <label>Language Spoken:</label>
        <br><br>
        <input type="checkbox" name="skill" value="bahasa indoensia">Bahasa indonesia
        <br>
        <input type="checkbox" name="skill" value="english">English
        <br>
        <input type="checkbox" name="skill" value="other">Other
        <br><br>

        <label>Bio:</label>
        <br><br> 
        <textarea name="bio" rows="10" cols="30"></textarea>
        <br>
        
        <button type="submit">Sign Up</button>
    </form>
</body>
</html>