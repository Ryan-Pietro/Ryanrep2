<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Welcome - Document</title>
    <link rel="stylesheet" href="r.css">
</head>
<body>
    <nav class="nav">
    <li><a href="index.php">Home</a></li>
                    <li><a href="Aboutus.php">Aboutus</a></li>
                    <li><a href="contactus.php">contactus</a></li>
                    <li><a href="projects.php">projects</a></li>
                    <li><a href="Ourteam.php">Ourteam</a></li>
                    <li><a href="Designservices.php">Designservices</a></li>
                    <li><a href="Portfolio.php">Portfolio</a></li>
                    <li><a href="Nursery.php">Nursery</a></li>
                    <li><a href="signin.php">SignIn</a></li>
                    <li><a href="signup.php">SignUp</a></li>
    </nav>
    <br><br>

    <form method="post" action="processes.php">
        <label for="fName">First name:</label>
        <input type="text" name="fName" id="fName" />
        <br/><br/>

        <label for="lName">Last name:</label>
        <input type="text" name="lName" id="lName" />
        <br/><br/>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <br/><br/>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" />
        <br/><br/>

        <label for="gender">Gender:</label>
        <select name="gender" id="gender">
            <option value="">--Select Gender--</option>
            <option value="Female">Female</option>
            <option value="Male">Male</option>
            <option value="Rather not say">Rather not say</option>
        </select>
        <br/><br/>

        <label for="age">Age:</label>
        <input type="number" name="age" id="age">
        <br/><br/>

        <label for="deadline">Deadline:</label>
        <input type="date" name="deadline">
        <br/><br/>

        <input type="submit" name="submit" value="Submit" />
        <input type="reset" name="reset" value="Reset" />
    </form>
</body>
</html>