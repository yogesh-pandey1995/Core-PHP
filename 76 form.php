<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data</title>
</head>

<body>
    <form action="test.php" method="POST" enctype="multipart/form-data">
        <label for="user_name">User Name : </label><br>
        <input type="text" id="user_name" placeholder="User Name" name="username" /><br>
        <label for="pass_word">Password : </label><br>
        <input type="password" id="pass_word" placeholder="Password" name="password" /><br>

        <input type="checkbox" id="lag1" name="lag1" value="PHP">
        <label for="lag1"> PHP</label><br>
        <input type="checkbox" id="lag2" name="lag2" value="JAVA">
        <label for="lag2"> JAVA</label><br>
        <input type="checkbox" id="lag3" name="lag3" value="JS">
        <label for="lag3"> JS</label><br><br>


        <span>Gender</span>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">MALE</label>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">FEMALE</label><br><br>

        <label for="cars">Choose a car:</label>
        <select name="cars[]" id="cars" multiple>
            <option value="volvo">Volvo</option>
            <option value="tata">TATA</option>
            <option value="maruti">Maruti</option>
            <option value="audi">Audi</option>
        </select><br>

        File Upload : <input type="file" name="myfile" ><br>

        <textarea placeholder="Enter Your Family Member Name" name="family" cols="30" rows="4">
1.
2.
3.
        </textarea><br>

        Date Of Birth : <input type="date" name="dob" value="<?php echo date('d-m-Y'); ?>">

        <input type="reset" value="RESET">
        <input type="submit" value="SUBMIT">
    </form>

</body>

</html>