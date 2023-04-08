<!DOCTYPE html>
<html>
    <head>
        <title>Registeration - Onerois</title>
        <link href="style.css" rel="stylesheet">
        <link rel="apple-touch-icon" sizes="180x180" href="/Home/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/Home/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/Home/favicon/favicon-16x16.png">
        <link rel="manifest" href="/Home/favicon/site.webmanifest">
        <?php include"main.php"; ?>
    </head>
    <body>
        <form method="post">
            <h1>Registration</h1>
            <div class="form-div">
                <label>Name</label>
                <input type="text" name="name">
                <label>Registration No.</label>
                <input type="number" name="regno">
                <label>Year</label>
                <select name="year">
                    <option value="">1st</option>
                    <option value="">2nd</option>
                    <option value="">3rd</option>
                    <option value="">4th</option>
                </select>
                <label>Course</label>
                <input type="text" name="course">
                <label>Branch</label>
                <input type="text" name="branch">
                <label>Outlook Email Id</label>
                <input type="email" name="email">
                <label>Phone No.</label>
                <input type="tel" name="phoneno">
                <label>Password</label>
                <input type="password" name="pass">
                <button type="submit">Submit</button>
                <p>Already have a account?<a href="http://localhost:3000/Login/index.php">Login</a></p>
            </div>
            </div>
        </form>
    </body>
</html>