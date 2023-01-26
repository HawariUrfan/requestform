<!DOCTYPE html>
<html lang="en">
    <head>
       <title> Add Users - Menambahkan User Baru</title>
   </head>
    
   <body>
           <a class="add" href="index.php">Beranda</a>
   <br>
    
       <form action="add.php" method="post" name="form1">
           <table width="25%" border="0">
           <tr> 
                   <td>Nama</td>
                   <td><input type="text" name="nama"></td>
               </tr>
               <tr> 
                   <td>Divisi</td>
                   <td><input type="text" name="divisi"></td>
               </tr>
               <tr> 
                   <td>Request</td>
                   <td><input type="text" name="request"></td>
               </tr>
               <tr> 
                   <td>Progres</td>
                   <td><input type="text" name="progres"></td>
               </tr>
               <tr> 
                   <td></td>
                   <td><input type="submit" name="Submit" value="Add"></td>
               </tr>
           </table>
       </form>
       
       <?php
    
       // Check If form submitted, insert form data into users table.
       if(isset($_POST['Submit'])) {
   
           $nama = $_POST['nama'];
           $divisi = $_POST['divisi'];
           $request = $_POST['request'];
           $proges = $_POST['proges'];
           
           // include database connection file
           include_once("config.php");
                   
           // Insert user data into table
           $result = mysqli_query($mysqli, "INSERT INTO users(nama,divisi,request,progres) VALUES ('$nama','$divisi','$request','$progres')");
           
           // Show message when user added
           echo "User added successfully. <a href='index.php'>View Users</a>";
       }
       ?>
   </body>
   </html>