<?php
    session_start();
    if(isset($_COOKIE['Adminflag'])){
        //session_start();
        // $username = $_REQUEST['username']; 
?>
<html>
    <head>
        <title>
            AdminPortal
        </title>
    </head>
    <body>

        <div>
        <center>
        <table height=720 width=1080>
            <tr height=70>
                <td >
                    <table width = "800">
                        <tr>
                            <td>
                                <img height="120" src="LibraryLogo.jpg">
                            </td>
                            <td align="right">
                                <!-- <a href="UserManagement\UserManagement.php">UserManagement</a>
                                <a href="">BookManagement</a>
                                <a href="">ViewProfile</a>
                                <a href="">Trending</a> -->
                                <a href="../controls/logout.php">Log Out</a>
                            </td>   
                        </tr>    
                    </table>                   
                </td>
            </tr>
            <tr>
                <h1>Welcome Back Admin</h1>
            </tr>
            <tr>
                <td>
                    <fieldset>
                        <legend align="center"><h2>AdminManagement</h2></legend>
                        <p>AdminManagement:</p>
                        <a href="UserManagement\UserManagement.php">AdminManagement</a>       
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td>          
                    <fieldset>
                        <legend align="center"><h2>Book Management</h2></legend>
                        <p>Book Management</p>
                        <a href="BookManagement\Bookmanagement.php">BookManagement</a>                        
                    </fieldset>
                </td>
            <tr>
                <td>
                    <fieldset>
                        <legend align="center"><h2>View Porfile</h2></legend>
                        <a href="ViewProfile/ViewProfile.php">View Profile</a>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td>
                    <fieldset>
                        <legend align="center"><h2>Trending</h2></legend>
                        <a href="Trending/Trending.php">Trending</a>
                    </fieldset>
                </td>
            </tr>
            <tr height =40>
                <td align="center">
                <h4>Copyright ©JoyDep_Dhar_2023</h4>    
                </td>
            </tr>
        </table>
    </center>
        </div>
    </body>
</html>
<?php 
    }else{
        header('location: WelocmePage.php'); 
    }
?>