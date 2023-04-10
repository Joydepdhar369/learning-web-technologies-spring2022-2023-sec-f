<?php
    session_start();
    if(isset($_COOKIE['Adminflag'])){
    $id = $_REQUEST['id'];
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
                                    <a href="ViewProfile.php">back</a>
                                </td>   
                            </tr>    
                        </table>                   
                    </td>
                </tr>
            </table>
        </center>
        <fieldset>
            <legend>Update Personal Information</legend>
            <form method="POST" action="../../controls/updateprofile.php?id=<?php echo$id;?> >" >
                            <table>
                                <tr>
                                    <td>Name</td>
                                    <td>:<input type="text" name="name" value=""/> <br></td>
                                </tr>        
                                <tr>
                                    <td>Email</td>
                                    <td>:<input type="email" name="email" value=""/> <br>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td>:<input type="text" name="username" value=""/> <br></td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>:<input type="password" name="password" value=""/> <br></td>
                                </tr>
                                <tr>
                                <td>Confirm Password</td>
                                <td>:<input type="password" name="confirmpassword" value=""/> <br> </td>                
                                </tr>
                            </table>
                        <fieldset>
                            <Legend>Gender</Legend>
                                <input type="radio" name="gender" value="Male"/> Male
                                <input type="radio" name="gender" value="Female"/> Female
                                <input type="radio" name="gender" value="Other"/> Other <br>
                        </fieldset>
                            <h1></h1>
                         <fieldset>
                            <Legend>Date of Birth</Legend>
                                <input type="date" name="dob" value=""/> 
                        </fieldset> 
                        <h1></h1>
                        <input type="submit" name="Regsubmit" value="Update"/>
                        <input type="reset" name="reset" value="Reset">
                    </fieldset>
    </body>
</html>
<?php 
    }else{
        header('location: WelocmePage.php'); 
    }
?>