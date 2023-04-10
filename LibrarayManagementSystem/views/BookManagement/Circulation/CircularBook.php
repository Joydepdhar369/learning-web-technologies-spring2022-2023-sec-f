<?php
    session_start();
    if(isset($_COOKIE['Adminflag'])||isset($_COOKIE['Librarianflag'])){
?>
<html>
    <head>
        <title>
            Circular Books
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
                                    <a href="../BookManagement.php">back</a>
                                </td>   
                            </tr>    
                        </table>                   
                    </td>
                </tr>
            </table>
        </center>
        <div>
            <fieldset>
                <legend><h3>Circular Books</h3></legend>
                    <table border="1" cellspacing="0" width="1000">
                        <tr>
                                <th>Title</th>
                                <th>Author</th>
                                <th>ISBN</th>
                                <th>Status</th>
                                <th>Actions</th>
                        </tr>
                        <tr>
                                <td>The Great Gatsby</td>
                                <td>F. Scott Fitzgerald</td>
                                <td>9780743273565</td>
                                <td>Available</td>
                        
                        <td>
                                <button>Borrow</button>
                                <button>Reserve</button>
                            </td>
                            </tr>
                            <tr>
                                <td>To Kill a Mockingbird</td>
                                <td>Harper Lee</td>
                                <td>9780446310789</td>
                                <td>Checked out</td>
                            <td>
                                <button>Renew</button>
                                <button>Return</button>
                            </td>
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
