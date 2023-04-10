<?php
    session_start();
    if(isset($_COOKIE['Adminflag'])){
?>
<html>
    <head>
        <title>
            View Profile 
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
                                <!-- <a href="logout.php">Log Out</a> -->

                            </td>   
                        </tr>    
                    </table>                   
                </td>
            </tr>
            <tr>
                <h1>View Profile Management</h1>
            </tr>
            <tr>
                <td>
                    <fieldset>
                        <legend align="center"><h2>Personal Information</h2></legend>
                        <a href="UpdateInfo.php">Update Information</a><br/>
                        <a href="MemberInformationView.php">Member Information View</a>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td>          
                    <fieldset>
                        <legend align="center"><h2>Account Setting</h2></legend> 
                        <a href="AdminAccount.php">Account Details</a>                       
                    </fieldset>
                </td>
            <tr>
                <td>
                    <fieldset>
                        <legend align="center"><h2>Record History</h2></legend>
                        <a href="RecordHistory.php">View Record History</a>
                    </fieldset>
                </td>
            </tr>
            <tr>
                <td>
                    <fieldset>
                        <legend align="center"><h2>Request History</h2></legend>
                        <a href="RequestHistory.php">View Request History</a>

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