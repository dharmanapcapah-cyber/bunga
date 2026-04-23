<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Daftar</title>
    <style>
        body {
            font-family: "Times New Roman", serif;
            margin: 40px;
        }

        h1 {
            font-size: 40px;
        }

        h2 {
            font-size: 28px;
        }

        label {
            font-size: 18px;
        }

        input, select, textarea {
            margin-top: 5px;
            margin-bottom: 15px;
            padding: 5px;
            font-size: 16px;
            width: 250px;
        }

        textarea {
            width: 350px;
            height: 100px;
        }

        .radio-group,
        .checkbox-group {
            margin-bottom: 15px;
        }

        .radio-group input,
        .checkbox-group input {
            width: auto;
        }

        button {
            padding: 6px 12px;
            font-size: 16px;
        }
    </style>
</head>
<body>




    <h1>Buat Account Baru!</h1>
    <h2><a href="/">back</h2> </a>
    <h2>Sign Up Form</h2>

    <form>
        <!-- First Name -->
        <label>First name:</label><br>
        <input type="text" name="firstname"><br>

        <!-- Last Name -->
        <label>Last name:</label><br>
        <input type="text" name="lastname"><br>

        <!-- Gender -->
        <div class="radio-group">
            <label>Gender:</label><br>
            <input type="radio" name="gender"> Male <br>
            <input type="radio" name="gender"> Female <br>
            <input type="radio" name="gender"> Other
        </div>

        <!-- Nationality -->
        <label>Nationality:</label><br>
        <select>
            <option>Indonesian</option>
            <option>Malaysian</option>
            <option>Singaporean</option>
        </select><br>

        <!-- Language -->
        <div class="checkbox-group">
            <label>Language Spoken:</label><br>
            <input type="checkbox"> Bahasa Indonesia <br>
            <input type="checkbox"> English <br>
            <input type="checkbox"> Other
        </div>

        <!-- Bio -->
        <label>Bio:</label><br>
        <textarea></textarea><br>

        <!-- Button -->
        <button type="submit">Sign Up</button>
    </form>

</body>
</html>