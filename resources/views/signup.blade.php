<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>

    <h1>Buat Account Baru</h1>
    <form action="/welcomes" method ="post">
    @csrf
        <label for="namadepan">First Name : </label>
        <br>
        <input type="text" name="namadepan" id="" placeholder="Nama Depan" required="required">
        <br><br>
        <label for="namabelakang">Last Name : </label>
        <br>
        <input type="text" name="namabelakang" id="" placeholder="Nama Belakang" required="required">
        <br><br>
        <label >Gender :</label>
        <br>
        <input type="radio" name="gender" id="0">Male <br>
        <input type="radio" name="gender" id="1">Femlae <br>
        <br><br>
        <label for="">Nationality :</label>
        <br>
        <select name="" id="" required = "required">
            <optgroup label="Asian">
                <option value="0">Indonesian</option>
                <option value="1">Singapore</option>
                <option value="2">Australian</option>
            </optgroup>
            <optgroup label="Europe">
                <option value="0">English</option>
                <option value="1">Swedish</option>
                <option value="2">Italian</option>
            </optgroup>
        </select>
        <br><br>
        <label for="">Language Spoken:</label>
        <br>
        <input type="checkbox" name="bahasa" id="0">Bahasa Indonesia <br>
        <input type="checkbox" name="bahasa" id="1">English <br>
        <input type="checkbox" name="bahasa" id="2">Other <br>
        <br><br>
        <label for="bio">Bio</label><br>
        <textarea name="bio" id="" cols="30" rows="10" placeholder="Biodata"></textarea>
        <br>
        <button class="btn btn-primary" type="submit">Tambah</button>




    </form>
    
</body>
</html>