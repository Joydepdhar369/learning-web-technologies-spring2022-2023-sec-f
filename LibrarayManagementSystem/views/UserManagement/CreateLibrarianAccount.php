<?php
    session_start();
    if(isset($_COOKIE['Adminflag'])){
?>
<html>
    <head>
        <title>
            Add Librarian
        </title>
    </head>
    <body>
       <center>
            <div>
                <table height=720 width=1080>
                    <tr height=70>
                        <td >
                            <table width = "800">
                                <tr>
                                    <td>
                                        <img height="120" src="/Joydep_Web_Technologies\LibraryLogo.jpg">
                                    </td>
                                    <td align="right">
                                    <a href="UserManagement.php">Back</a>
                                    <a href="/Joydep_Web_Technologies\logout.php">Log Out</a>
                                    </td>   
                                </tr>    
                            </table>                   
                        </td>
                    </tr>
            </div>
            <div>
            <tr>
                <td>   
                <!-- C:\xampp\htdocs\Joydep_Web_Technologies\CheckLibrarianAccount.php      -->
                <!-- C:\xampp\htdocs\LibrarayManagementSystem\controls\CheckLibrarianAccount.php -->
                    <form method="POST" action="\LibrarayManagementSystem\controls\CheckLibrarianAccount.php" >
                        <fieldset>
                            <legend align="center"><h2>Add New Librarian</h2></legend>
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
                        <input type="submit" name="submit" value="Submit"/>
                        <input type="reset" name="reset" value="Reset">
                        </fieldset>
                    </form>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <fieldset>
                        <legend align="center">About Us</legend>
                        <!-- C:\xampp\htdocs\Joydep_Web_Technologies\AboutUs\AboutUs.php -->
                        <a href="\Joydep_Web_Technologies\AboutUs\AboutUs.php">Library Information</a>  <br>
                        <a href="\Joydep_Web_Technologies\AboutUs\ContactUs.php">Contract Us</a>
                    </fieldset>
                </td>
            </tr>
            <tr height =40>
                <td align="center">Copyright ©Joydep_Dhar_2023</td>
            </tr>
            </div>
       </center>
    </body>
</html>
<?php 
    }else{
        header('location: WelocmePage.php'); 
    }
?>