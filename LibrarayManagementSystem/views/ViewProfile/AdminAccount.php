<?php
    session_start();
    if(isset($_COOKIE['Adminflag'])){
?>
<html>
    <head>
        <title>
            Update Personal Information
        </title>
    </head>
    <body>
        <center>
            <table width=1080>
                <tr height=70>
                    <td >
                        <table width = "800">
                            <tr>
                                <td>
                                    <img height="120" src="/Joydep_Web_Technologies\LibraryLogo.jpg">
                                </td>
                                <td>
                                    <h3>AIUB Library</h3>
                                </td>
                                <td align="right">
                                    <!-- <a href="UserManagement\UserManagement.php">UserManagement</a>
                                    <a href="">BookManagement</a>
                                    <a href="">ViewProfile</a>
                                    <a href="">Trending</a> -->
                                    <a href="ViewProfile.php">back</a>
                                    <a href="/Joydep_Web_Technologies\logout.php">LogOut</a>
                                </td>   
                            </tr>    
                        </table>                   
                    </td>
                </tr>
            </table>
        </center>
            <fieldset>
                <legend>View Personal Information</legend>
                UserID: <input type="text" name="UserID" value="Karim98">
                <button>Search</button> <br><br>
                Name: <input type="text" name="Name" value="Karim"> <br><br>
                Email: <input type="text" name="emailaccount" value="Karim@gmail.com"><br><br>
                Phone No: <input type="text" name="Phone" value="017********"> <br><br>
                Date of Birth: <input type="text" name="DoB" value="12-4-2000">
            </fieldset>
    </body>
</html>
<?php 
    }else{
        header('location: WelocmePage.php'); 
    }
?>