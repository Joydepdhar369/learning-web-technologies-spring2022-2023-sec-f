<?php
    session_start();
    if(isset($_COOKIE['Adminflag'])){
?>
<html>
    <head>
        <title>
            UserManagement
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
                                <img height="120" src="/Joydep_Web_Technologies\LibraryLogo.jpg">
                            </td>
                            <td align="right">
                                <!-- <a href="CreateLibrarianAccount.php">Create Librarian Account</a>
                                <a href="">View Librarian Account</a>
                                <a href="">View Member Account</a>
                                <a href="">Assign Role</a>
                                <a href="">Permission</a> -->
                                <a href="../Admin.php">Back</a>
                                <a href="/Joydep_Web_Technologies\logout.php">Log Out</a>

                            </td>   
                        </tr>    
                    </table>                   
                </td>
            </tr>
            <tr>
                <h1>User Management Studio</h1>
            </tr>
            <tr>
                <td>
                    <fieldset>
                        <legend><h2>User Management</h2></legend>
                        <a href="CreateLibrarianAccount.php">Create Librarian Account</a><br/>
                        <a href="ViewLibrarianAccount.php">View Librarian Account</a> <br> 
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td>          
                    <fieldset>
                        <legend><h2>DashBoard Management</h2></legend>
                        <!-- C:\xampp\htdocs\LibrarayManagementSystem\views\ViewProfile\ViewProfile.php -->
                        <a href="../ViewProfile\AdminAccount.php">ViewProfile</a><br>
                        <a href="../ViewProfile/UpdateInfo.php">EditProfile</a>                        
                    </fieldset>
                </td>
            <tr>
                <td>
                    <fieldset>
                        <legend><h2>Access Control</h2></legend>
                        <a href="../AccessControl/settingPermission.php">setting Permission</a><br>
                        <a href="../AccessControl\settingPermission.php">Access Time</a>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td>
                    <fieldset>
                        <legend><h2>Content</h2></legend>
                        <a href="\Joydep_Web_Technologies\Content\RemoveUser.php">Remove User</a><br>
                        <a href="\Joydep_Web_Technologies\Content\RemoveBook.php"> RemoveBook</a>
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