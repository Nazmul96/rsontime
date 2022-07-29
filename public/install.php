<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
          <link href="/backend/admin/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />

          <script src="/backend/admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
          <script src="/backend/admin/assets/libs/jquery/jquery.min.js"></script>
          <script src="/backend/admin/assets/js/pages/form-validation.init.js"></script>
          <style>
                 li{
                    list-style-type: none;
                    color:white;
                    background-color: blue;      
                 } 
                 .install button{
                       margin-left: 80%;;       
                 }
          </style>
</head>

<body style="">
<header id="page-topbar" class="mb-2" style="background-color:black; height:50px;">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box text-center mt-2">

                            <a href="#" class="logo logo-light p-5">
                                <span class="logo-lg">
                                    <img src="/backend/admin/assets/images/logo-light.png" alt="logo-light" height="24">
                                </span>
                            </a>
                        </div>
                    </div>

                   
                </div>
</header>
         <div class="div">        
         <h3 align="center">installation Rsontime</h3>
         <hr>
         <h4 align="center">Pre-install Checklist</h4>
         <div class="row"  style="height:100vh;">
                   <div class="col-md-3">

                   </div>
                   <div class="col-md-4 install">
                             
                             
                             <div class="all_data">
                             <ul>
                                 <li class="p-1">You are runing php 7.4.23</li>
                                 <li class="mt-2 p-1">Mysqli php extension loaded</li>    
                             </ul>
                             <!-- <button class="btn btn-primary next_page">Next</button> -->
                             <span class="alert_show mb-2"></span>
                             </div>
                             
                             <div class="message_show">
                                 <h4 class="text-success">Successfully Installed</h4>
                                 
                                    <p>Admin: nazmul@gmail.com</p>
                                     <p>Password: 1234</p>
                                <a href="/admin/login" class="btn btn-primary">Login</a>
                             </div>
                   </div>

                   <div class="col-md-4 form_hide">
                   <form action="" method="post" class="needs-validation" novalidate><div class="form-group"><label for="">Database Hostname *</label><input type="text" class="form-control" name="hostname" placeholder="Hostname" required></div><br><div class="form-group"><label for="">Database Port</label><input name="database_port" type="text" class="form-control" placeholder="Database Port"></div><br><div class="form-group"><label for="">Database Name *</label><input name="database_name" type="text" class="form-control" placeholder="Database Name" required></div><br><div class="form-group"><label for="">DB user *</label><input name="database_user" type="text" class="form-control" placeholder="Database User" required></div><br><div class="form-group"><label for="">DB Password </label><input name="database_password" type="text" class="form-control" placeholder="Database Password"></div><br><div class="form-group"><br><button type="submit" name="submit" class="btn btn-primary btn-sm mb-5">Begin install</button></form>
                   </div>
         </div>
         </div>
<script>
 
          //    alert('hii');
    $('.message_show').hide(); 
       
</script> 
            
<footer class="footer" style="background-color:black; height:50px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 p-2 text-white">
                <script>document.write(new Date().getFullYear())</script> © Coming Soon.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block p-2 text-white">
                    Crafted with <i class="mdi mdi-heart text-danger"></i> by RsSoftware
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>

<?php
if(isset($_REQUEST['submit'])){

        $hostname=$_REQUEST['hostname'];
        $db_name=$_REQUEST['database_name'];
        $db_username=$_REQUEST['database_user'];
        $db_password=$_REQUEST['database_password']; 
          // echo fread($myfile,filesize("./env"));
          // fclose($myfile);
    
          // echo $myfile1;
        //   die();

        //   $hostname=$hostname1;
        //   $db_name=$db_name1;
        //   $db_username='root';
        //   $password='';
          $conn = @mysqli_connect($hostname, $db_username,$db_password);
          $conn1=mysqli_select_db($conn,$db_name);
        //   echo '<pre>';
        //   print_r($conn);
        //   die();
          if(!$conn){?>
                <script>
                    $('.alert_show').html('<div style="color:red;">Database Connection failed</div>');
                </script>
         <?php }
        
       else if(!$conn1){ ?>
        
            <script>
               
               $('.alert_show').html('<div style="color:red;">Database name is not valid</div>');
           </script>
       <?php }else{
        // echo 'hoi na';
        // die();   
        $myfile = fopen("../env", "r");
        $full_env=fread($myfile,filesize("../env"));
        // // echo $full_env;
        // // die();
        $change=["localhost","ci4","root","dbt_password"];
        $change_to=[$hostname,$db_name,$db_username,$db_password];
        // print_r($change_to);
        $content=str_replace($change,$change_to,$full_env);

        $myfile1 = fopen("../.env", "w");
        fwrite($myfile1, $content);

        $tempLine = '';
        // Read in the full file
        $lines = file("../rsontime.sql");
        // echo '<pre>';
        // print_r($lines);
        // die();
        // Loop through each line
        foreach ($lines as $line) {

            // Skip it if it's a comment
            if (substr($line, 0, 2) == '--' || $line == '')
                continue;
        
            // Add this line to the current segment
            $tempLine .= $line;
            // If its semicolon at the end, so that is the end of one query
            if (substr(trim($line), -1, 1) == ';')  {
                // Perform the query
                mysqli_query($conn, $tempLine); 
                //or print("Error in " . $tempLine .":". mysqli_error());
                // Reset temp variable to empty
                $tempLine = '';    
                // $hide=0;
            }
      } ?>
       <script>
            $('.all_data').hide();
            $('.form_hide').hide();
            $('.message_show').show(); 
        </script>
    <?php   
    }
}         

?>