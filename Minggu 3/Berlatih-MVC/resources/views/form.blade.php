<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>

    <form action="/welcome">
        <label for="awal">First Name: </label>
        <br>
        <input type="text" id="awal" name="awal" required>
        <br><br>
        <label for="akhir">Last name:</label>
        <br>
        <input type="text" id="akhir" name="akhir" required>
        
        <p>Gender: </p>
        <input type="radio" > Male <br>
        <input type="radio" > Female <br>
        <input type="radio" > Other <br>

        <p>Nationality: </p>
        <select>
            <option> Indonesia </option>
            <option> Malaysia </option>
            <option> Thailand </option>
            <option> Vietnam </option>
        </select>

        <p>Language Spoken:</p>
        <input type="checkbox" > Indonesia <br>
        <input type="checkbox" > English <br>
        <input type="checkbox" > Other <br>

        <p>Bio:</p>
        <textarea cols="30" rows="7"></textarea>
        <br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>