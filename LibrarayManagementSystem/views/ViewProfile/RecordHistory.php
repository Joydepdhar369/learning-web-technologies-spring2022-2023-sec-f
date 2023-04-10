<?php
    session_start();
    if(isset($_COOKIE['Adminflag'])){
?>
<html>
    <head>
        <title>
            Record History
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
                                </td>   
                            </tr>    
                        </table>                   
                    </td>
                </tr>
            </table>
        </center>
        <div>
            <fieldset>
                <legend><h3>Library Request History</h3></legend>
                <table border="1" cellspacing="0" width="1000">   
                    <tr>
                        <th>Book Title</th>
                        <th>Borrower Name</th>
                        <th>Borrow Date</th>
                        <th>Return Date</th>
                    </tr>
                    <tr>
                        <td>The Great Gatsby</td>
                        <td>John Smith</td>
                        <td>March 1, 2023</td>
                        <td>March 8, 2023</td>
                    </tr>
                    <tr>
                        <td>To Kill a Mockingbird</td>
                        <td>Jane Doe</td>
                        <td>February 15, 2023</td>
                        <td>March 1, 2023</td>
                    </tr>
                    <tr>
                        <td>1984</td>
                        <td>Mike Johnson</td>
                        <td>January 30, 2023</td>
                        <td>February 15, 2023</td>
                    </tr>
                </table>
            </fieldset>
        </div>
    </body>
</html>
<?php 
    }else{
        header('location: WelocmePage.php'); 
    }
?>