<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> All input</title>
</head>

<style media="screen">
    label{
        
        display:block;
        
    }
    </style>


<body>
    <form action="simproj.php" method="post" class="" autocomplete="off">

        <label> Name </label>
        <input type="text" name="name" required value=""><br>
        <label> Age </label>
        <input type="number" name="age" required value=""><br>

        <label>Domain</label>
        <select name="country" required>
                <option value="" selected hidden>Select Domain</option>
                <option value="frontend">Front-end</option>
                <option value="backend">Back-end</option>
                <option value="ui">UI/UX</option>
                <option value="database">Database Adminstrator</option>
        </select><br>

        <label> Gender :</label>
        <input type="radio" name="gender" value="male" required>Male
        <input type="radio" name="gender" value="female">female
        <input type="radio" name="gender" value="other">Other
<br>
        <label> Language :</label>
            <input type="checkbox" name="languages[]" value="english">English
            <input type="checkbox" name="languages[]" value="Hindi">Hindi
            <input type="checkbox" name="languages[]" value="english">Spanish
            <input type="checkbox" name="languages[]" value="english">Russian
<br>
        <button type="submit" name="submit">Save</button>
        <button type="reset" name="reset">Reset</button>


    </form>
</body>
</html>