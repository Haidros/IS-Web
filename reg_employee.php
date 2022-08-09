<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

</head>
<body>
    <h3>EMPLOYEE</h3>
    <div>
        <form action="employee.php" method="post"> 
          <label for="personid">Person ID</label>
          <input type="text" id="personid" name="person_id" placeholder="Your id..">

          <label for="fname">First Name</label>
          <input type="text" id="fname" name="firstname" placeholder="Your name..">

          <label for="lname">Last Name</label>
          <input type="text" id="lname" name="lastname" placeholder="Your last name..">

          <label for="bday">Birthdate:</label>
          <input type="date" id="bday" name="birthday">

          <label for="gender">Gender</label>
          <select id="gender" name="gender">
            <option value="M">Male</option>
            <option value="F">Female</option>

          </select>
        
          <input type="submit" id="myBtn" value="Submit" >
    
  </form>
  <form action="home.php">
    <input type="submit" value="Home">
  </form>
</div>
</body>
</html>