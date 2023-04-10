<?php
require_once "../../../models/bookManagementmodel.php";
    session_start();
    if(isset($_COOKIE['Adminflag'])||isset($_COOKIE['Librarianflag'])){
?>
<html>
    <head>
        <title>
            Catalog Book
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
                <legend><h3>Library Book Catalog</h3></legend>
                    <!-- <table border="1" cellspacing="0" width="1000">
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Genre</th>
                            <th>Publication Date</th>
                            <th>ISBN</th>
                        </tr>
                        <tr>
                            <td>The Great Gatsby</td>
                            <td>F. Scott Fitzgerald</td>
                            <td>Classic</td>
                            <td>April 10, 1925</td>
                            <td>9780521576542</td>
                        </tr>
                        <tr>
                            <td>To Kill a Mockingbird</td>
                            <td>Harper Lee</td>
                            <td>Classic</td>
                            <td>July 11, 1960</td>
                            <td>9780061120084</td>
                        </tr>
                        <tr>
                            <td>1984</td>
                            <td>George Orwell</td>
                            <td>Dystopian</td>
                            <td>June 8, 1949</td>
                            <td>9780451524935</td>
                        </tr>
                    </table> -->
                    <?php
                //     $state=viewBook ();
                //     while($row = mysqli_fetch_assoc($state)){
            
                //     //print_r($row); echo "<br>";
                //     echo "
                //     <!-- <table border="1" cellspacing="0" width="1000">
                //         <tr>
                //             <th>Title</th>
                //             <th>Author</th>
                //             <th>Genre</th>
                //         </tr>
                //     <tr>
                //         <th>Title</th>
                //         <th>Author</th>
                //         <th>Genre</th>
                //     </tr>
                //     <tr>
                //     <td>{$row['BookName']}</td>
                //     <td>{$row['AuthorName']}</td>
                //     <td>{$row['Genra']}</td>
                //     </tr>
                //     </table>";
                // }<?php
                $state = viewBook();
                
                echo "<table border='1' cellspacing='0' width='1000'>
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Genre</th>
                        </tr>";
                        
                while($row = mysqli_fetch_assoc($state)){
                    echo "<tr>
                            <td>{$row['BookName']}</td>
                            <td>{$row['AuthorName']}</td>
                            <td>{$row['Genra']}</td>
                            <td><a href='../../../controls/deleteBook.php?id=".$row['ID']."'>Delete</a> </td>
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