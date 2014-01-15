<html>
    <head>
        <title> Welcome student</title>
        <script src="../js/functions.js"></script>
    </head>

    <body>
        <h1> Welcome to BIQuiz student </h1>
        <table>
            <tr>
                <td>
                    <a href="#" onclick="toggle_visibility('existing_student')">Existing Student </a>
                    <div id="existing_student" hidden="true">
                    Insert your login detail 
                    <form name="studentloginform" >
                        <table>
                            <tr>
                                <td>Email</td> <td><input type="email" name="email"></td>
                            </tr>
                            <tr>
                                <td>Password</td> <td><input type="text" name="passwd"></td>
                            </tr>
                            <tr>
                                <td><input type="submit" name="submit"></td>
                                <td><input type="reset" name="reset"></td>
                            </tr>
                        </table>
                    </form>
                    </div>
        
                </td>
            </tr>
            <tr>
                <td>
                    <a href="#" onclick="toggle_visibility('new_student')">New Student</a>
                    <div id="new_student" hidden="true">
                    <form action="studentloginexec.php" method="post">
                        <table>
                            <tr>
                                <td>Name</td> <td><input type="text" name="username"></td>
                            </tr>
                            <tr>
                                <td>Email</td> <td><input type="text" name="email"></td>
                            </tr>
                            <tr>
                                <td>Password</td> <td><input type="password" name="password"></td>
                            </tr>
                            <tr>
                                <td>ReType Password</td> <td><input type="password" name="retypepasswd"></td>
                            </tr>
                            <tr>
                                <td><input type="submit" name="submit"></td>
                                <td><input type="reset" name="reset"></td>
                            </tr>
                        </table>
                    </form>
                    </div>
                </td> 
            </tr>
        </table>
        
    </body>
</html>