<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="frm">
        <form action="process.php" method="POST">
            <P>
                <lable> Username:</label>
                <input type="text" id="user" name="user" />
            </P>

            <P>
                <lable> Password:</label>
                <input type="password" id="pass" name="pass" />
            </P>

            <P>
                <input type="submit" id="btn" name="Login" />
            </P>
        </form>    
    </div>        
</body>
</html>