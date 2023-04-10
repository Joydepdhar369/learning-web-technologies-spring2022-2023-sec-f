<?php
require_once "../../../models\JournalManagement.php";
    session_start();
    if(isset($_COOKIE['Adminflag'])||isset($_COOKIE['Librarianflag'])){
?>
<html>
    <head>
        <title>
            Catalog Journal
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
                                    <a href="..\BookManagement.php">back</a>
                                </td>   
                            </tr>    
                        </table>                   
                    </td>
                </tr>
            </table>
        </center>
        <div>
            <fieldset>
                <legend><h3>Library Journal Catalog</h3></legend>
                    <?php
                    $state = viewjournal ();
                
                echo "<table border='1' cellspacing='0' width='1000'>
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Genre</th>
                        </tr>";
                        
                while($row = mysqli_fetch_assoc($state)){
                    echo "<tr>
                            <td>{$row['JournalName']}</td>
                            <td>{$row['AuthorName']}</td>
                            <td>{$row['Genra']}</td>
                            <td><a href='../../../controls/deleteJournal.php?id=".$row['ID']."'>Delete</a> </td>
                        </tr>";
                }
                
                echo "</table>";
            ?>

                
            </fieldset>
        </div>
    </body>
</html>
<?php 
    }else{
        header('location: WelocmePage.php'); 
    }
?>