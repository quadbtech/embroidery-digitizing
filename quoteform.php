<?php

    $error = ""; $successMessage = "";

    if ($_POST) {
        
        if (isset($_POST["Email"]) && isset($_POST["Phone"]) && isset($_POST["FirstName"])) {
           ?>
          <?php
         
       $link = mysqli_connect("localhost", "root", "", "vectorart");

                    if (mysqli_connect_error()){
                ?>
   <?php
    die("<script>console.log('There is a problem with mysql connection')</script>");
}
else{
    ?>
   <?php
}
            if(isset($_POST['FirstName'])){
    
    $data = array();  
    $from_ip = $_SERVER['REMOTE_ADDR'];
    $from_browser = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set("Asia/Calcutta");
    $date_now = date("r");
    $images = $_FILES['images']['name'];
    $quotetype = $_POST['quotebtn'];
    $FirstName = $_POST['FirstName'];
    $Phone = $_POST['Phone'];
    $Email = $_POST['Email'];
    $DesignName = $_POST['DesignName'];
    $Size = $_POST['Size'];
    $fileformat = $_POST['fileformat'];
    $notes = "";
    if(isset($_POST['notes'])){
        $notes = $_POST['notes'];
    }
    if($Phone == ""){
        $Phone = 0;
    }
     $img = $_FILES['images']['name'];
      $img_loc = $_FILES['images']['tmp_name'];
      $img_folder = "upload_files/";
      if(move_uploaded_file($img_loc,$img_folder.$img))
      {
          ?>
          <!-- <script>alert('file uploaded')</script> -->
              <?php
      }
      else 
      {
          ?>
<!-- <script>alert('file not uploaded')</script> -->
<?php
      }
  }
    $id = 0;

    $result = mysqli_query($link, "SELECT max(id) FROM `quote`");

    while ($row = mysqli_fetch_array($result)) {
        $id = $row[0];  
    }
    $id = $id + 1;


    $query = "INSERT INTO `quote` (id,`Quote Type`, `Name`, `phone`, `email`, `Design Name`, `Size`, `File format`,`Notes`,`File`, `time`, `from_ip`, `from_browser`) VALUES ($id, '$quotetype', '$FirstName', '$Phone', '$Email', '$DesignName','$Size', '$fileformat' ,'$notes','$images', '$date_now','$from_ip', '$from_browser')";

    // echo $query;
    
    if($result = mysqli_query($link, $query))  
    {  
         ?>
   <script>
    window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({'event': 'quote-success'});
   window.location = 'thankyou';
   
   </script>
   <?php
//        $data['status'] = 201;
//        $data['id'] = $id;
//        echo json_encode($data);
    }  
    else  
    {  
        $data['status'] = 601;
        $data['error'] = $link -> error;
        echo json_encode($data);
    } 

}

        }
        
                ?>
<?php

    $error = ""; $successMessage = "";

    if ($_POST) {
        
        if (isset($_POST["Emailmob"]) && isset($_POST["Phonemob"]) && isset($_POST["Namemob"])) {
           ?>
          <?php
          
       $link = mysqli_connect("localhost", "root", "", "vectorart");

                    if (mysqli_connect_error()){
                ?>
   <?php
    die("<script>console.log('There is a problem with mysql connection')</script>");
}
else{
    ?>

   <?php
}
            if(isset($_POST['Namemob'])){
    
    $data = array();  
    $from_ip = $_SERVER['REMOTE_ADDR'];
    $from_browser = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set("Asia/Calcutta");
    $date_now = date("r");
    $images = $_FILES['imagesmob']['name'];
    $quotetype = $_POST['quotebtnmob'];
    $FirstName = $_POST['Namemob'];
    $Phone = $_POST['Phonemob'];
    $Email = $_POST['Emailmob'];
    $DesignName = $_POST['DesignNamemob'];
    $Size = $_POST['Sizemob'];
    $fileformat = $_POST['fileformatmob'];
    $notes = "";
    if(isset($_POST['notesmob'])){
        $notes = $_POST['notesmob'];
    }
    if($Phone == ""){
        $Phone = 0;
    }
     $img = $_FILES['imagesmob']['name'];
      $img_loc = $_FILES['imagesmob']['tmp_name'];
      $img_folder = "upload_files/";
      if(move_uploaded_file($img_loc,$img_folder.$img))
      {
          ?>
          <!-- <script>alert('file uploaded')</script> -->
              <?php
      }
      else 
      {
          ?>
<!-- <script>alert('file not uploaded')</script> -->
<?php
      }
  }
    $id = 0;

    $result = mysqli_query($link, "SELECT max(id) FROM `quote`");

    while ($row = mysqli_fetch_array($result)) {
        $id = $row[0];  
    }
    $id = $id + 1;


    $query = "INSERT INTO `quote` (id,`Quote Type`, `Name`, `phone`, `email`, `Design Name`, `Size`, `File format`,`Notes`,`File`, `time`, `from_ip`, `from_browser`) VALUES ($id, '$quotetype', '$FirstName', '$Phone', '$Email', '$DesignName','$Size', '$fileformat' ,'$notes','$images', '$date_now','$from_ip', '$from_browser')";

    // echo $query;
    
    if($result = mysqli_query($link, $query))  
    {  
         ?>
   <script>
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({'event': 'quote-success'});
        window.location = 'thankyou';
   </script>
   <?php
//        $data['status'] = 201;
//        $data['id'] = $id;
//        echo json_encode($data);
    }  
    else  
    {  
        $data['status'] = 601;
        $data['error'] = $link -> error;
        echo json_encode($data);
    } 

}

        }
                ?>

        
<!doctype html>
<html lang="en">

<head>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','ENTER_YOUR_TAG_MANAGER_ID');</script>
<!-- End Google Tag Manager -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=ENTER_YOUR_ANALYTICS_ID"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'ENTER_YOUR_ANALYTICS_ID');
</script>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Not required meta tags but essential for seo and link sharing -->
    <meta name="description"
        content="Get the best services in embroidery digitizing, vector digitizing, vector dervices and designing services.">
    <meta name="Keywords" content="Vector digitizing, embroidery digitizing, embroidery designing, vector designing, logo designing, designing services custom designs, vector files">
    <meta property="og:title" content="Home | QuadB Designs" />
    <meta property="og:url" content="https://www.quadbdesigns.com/quoteform" />
    <meta property="og:description"
        content="Create Get the best services in embroidery digitizing, vector digitizing, vector dervices and designing services.">
    <!-- <meta property="og:image" itemprop="image" content="https://i.imgur.com/gL9EszK.png" />
    <meta property="og:image:secure_url" itemprop="image" content="https://i.imgur.com/gL9EszK.png" />
    <meta property="og:image:width" content="640">
    <meta property="og:image:height" content="300"> -->
    <meta property="og:type" content="website" />
    <!-- <link rel="shortcut icon" type="image/x-icon" href="images/Top Controllers Logo.svg" /> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Vector | Digitizer</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style type="text/css">
      /* custom css for the page */
        .slider-button {
            font-size: 15px;
            color: #FFFFFF;
            border: 3px solid #284B7D;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #284B7D;
            width: 80%;
        }

        .slider-buttonmob {
            border: 3px solid #284B7D;
            font-size: 18px;
            color: #FFFFFF;
            font-family: Arial, Helvetica, sans-serif;
            background-color: #284B7D;
        }

        .slider-button:hover {
            opacity: .37;
        }

        /* custom css for the mobile page */
        .slider-buttonmob:hover {
            opacity: .37;
        }

        #desktop-navbar {
            width: 100%;
            opacity: 1;
            z-index: 9;
            top: 0px;
            background-color: white;
        }

        #mobile-navbar {
            width: 100%;
            opacity: 1;
            z-index: 9;
            top: 0px;
            background-color: white;
        }

        .signinn {
            font-size: 44px;
            line-height: 53px;
            text-align: center;
            font-weight: bold;
            font-family: Helvetica, Helvetica Neue, Arial, sans-serif;
            color: #58585A;
            margin-top: 20px;
        }

        .headertext1 {
            text-align: center;
            font-size: 30px;
            line-height: 36px;
            font-family: source-sans-pro, sans-serif;
            font-weight: 600;
            background-color: transparent;
            color: #58585A;
        }

        .headertext2 {
            font-size: 26px;
            line-height: 31px;
            font-weight: 900;
            font-family: source-sans-pro, sans-serif;
            color: #58585A;
            background-color: transparent;
            text-align: center;
        }

        .headertext3 {
            background-color: transparent;
            color: #58585A;
            text-align: center;
            font-size: 20px;
            line-height: 24px;
            font-family: source-sans-pro, sans-serif;
            font-weight: 600;
            text-align: center;
        }

        .headertext4 {
            color: #888787;
            font-family: Helvetica, Helvetica Neue, Arial, sans-serif;
            text-align: center;
            opacity: 1;
            line-height: 26px;
            font-size: 22px;
            margin: 0 25px;
        }

        .signinnmob {
            color: #7F7F7F;
            text-align: right;
            font-size: 18px;
            line-height: 18px;
            font-family: Helvetica, Helvetica Neue, Arial, sans-serif;
            font-weight: bold;
            margin-top: 20px;
        }

        #drawer {
            -webkit-animation-duration: 0.8s;
            animation-duration: 0.8s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
            -webkit-animation-name: slideLeft;
            animation-name: slideLeft;
        }

        @-webkit-keyframes slideLeft {
            0% {
                margin-left: -100%;
            }

            100% {
                margin-left: 0%;
            }
        }

        @keyframes slideLeft {
            0% {
                margin-left: -100%;
            }

            100% {
                margin-left: 0%;
            }
        }
        .hovercolor:hover {
            color: #284B7D;
            text-decoration: underline;
        }

        .hovrr:hover {
            color: #f1f1f1;
        }

        .headertext1mob {
            text-align: center;
            font-size: 14px;
            color: #7F7F7F;
            font-family: source-sans-pro, sans-serif;
            font-weight: 600;
        }

        .headertext2mob {
            font-size: 16px;
            font-family: source-sans-pro, sans-serif;
            color: #58585A;
            font-weight: 900;
            line-height: 19px;
            background-color: transparent;
            text-align: center;
        }

        .headertext3mob {
            background-color: transparent;
            color: #58585A;
            text-align: center;
            font-size: 14px;
            line-height: 17px;
            font-family: source-sans-pro, sans-serif;
            font-weight: 600;
        }

        .headertext4mob {
            font-family: source-sans-pro, sans-serif;
            font-size: 8px;
            line-height: 10px;
            background-color: transparent;
            color: #58585A;
            text-align: center;
            font-weight: 600;
        }

        .headertext4footer {
            color: white;
            font-family: Helvetica, Helvetica Neue, Arial, sans-serif;
            text-align: center;
            opacity: 1;
            line-height: 26px;
            font-size: 22px;
            margin: 0 10px;
        }

        .headertext4footermob {
            color: white;
            font-family: Helvetica, Helvetica Neue, Arial, sans-serif;
            text-align: center;
            opacity: 1;
            line-height: 15px;
            font-size: 12px;
            margin: 0 10px;
        }
        .btn-primary {
            background-color: #284B7D;
            border-radius: 28px;

        }

        .btn-primary:hover {
            color: #284B7D;
            background-color: white;
            border-color: #284B7D;
            border-radius: 28px;
        }


        .headertext4footer:hover {
            text-decoration: underline;
            color: #B6D4FF;
        }

        .quotehead {
            font-weight: bold;
            font-size: 36px;
            color: #999999;
            text-align: center;
        }

        .quoteheadmob {
            font-weight: bold;
            font-size: 20px;
            color: #999999;
            text-align: center;
        }
    </style>

</head>

<body>
    
     <!--desktop view-->
    <div class="d-none d-lg-block">
        <!--header-->
        <header>
            <div class="nav-container">
<!--                <div id="desktop-navbar"></div>-->
                <nav class="navbar  navbar-dark bg-transparent  px-5 py-4">
                    <div class="row" style=" width: 100%;">
                        <div class="col-3">
                            <div class="d-flex justify-content-center align-items-center">
                                <img style="width :255px;height:85;margin-top: 10px;" class="logo-header" src="images/QB Design 255x85-min.webp"  alt="">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class=" justify-content-center align-items-center">
                                <p class="headertext1" style="margin-bottom: 5px;">Embroidery Digitizing + Vector Art
                                </p>
                                <p style="display:flex;justify-content:center;">
                                    <a class="headertext2 hovercolor" style="margin-bottom: 5px;" href="tel:+16465832939"> +1 646 583 2939</a>
                                </p>
                                
                            </div>
                        </div>
                        <!-- <div class="col-3">
                            <div class="d-flex justify-content-center align-items-center">
                                <p class="signinn">Sign In</p>
                            </div>
                        </div> -->
                    </div>
                    <div class="row" style=" width: 100%;justify-content: center;margin-top: 10px;">
                        <ul class="navbar-nav mr-auto ml-auto header-ul" style="display: contents;">
                            <li class="nav-item active">
                                <a class=" headertext4 hovercolor" href="index">Home</a>
                            </li>
                            <li class="nav-item active">
                              <a  class=" headertext4 hovercolor" href="vector">Vector Art</a>
                            </li>
                            <li class="nav-item active">
                                <a class=" headertext4 hovercolor" href="3D-Puff">3D Puff</a>
                            </li>
                            <!-- <li class="nav-item active">
                                <a class=" headertext4" href="#">Order</a>
                            </li> -->
                            <li class="nav-item active">
                                <a class=" headertext4 hovercolor" href="Samples">Samples</a>
                            </li>
                            <li class="nav-item active">
                                <a class=" headertext4 hovercolor" href="packages">Packages</a>
                            </li>
                            <!-- <li class="nav-item active">
                                <a class=" headertext4 hovercolor" href="Download.html">Downloads</a>
                            </li> -->
                            <li class="nav-item active">
                                <a class=" headertext4 hovercolor" href="contact-us">Contact Us</a>
                            </li>
                            <li class="nav-item active">
                                <a class=" headertext4 hovercolor" style="font-weight: bold;" href="quoteform">Get a Quote</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

        </header>
        <div class="container-fluid position-relative p-0 colors">
            <div id="vectquote" style="width: 100%;display: block;justify-content: center;align-items: center;">
                <p class="quotehead">Vector Art Quote</p>
            </div>
            <div id="embroidquote" style=" width: 100%;justify-content: center;align-items: center;">
                <p class="quotehead">Embroidery Digitizing Quote</p>
            </div>
            <!--           <button>START YOUR WILD HUNT</button>-->
        </div>
        <div class="container-fluid " style="margin-top: 20px;">
           

            <div class="row">
                <div style="width: 100%;margin: 0 auto;float: left;display: flex;justify-content: center;">
                    <form id="vectform" style="width: 30%;" method="post" enctype="multipart/form-data">
                         <fieldset class="form-row" style="display: contents;">
                         <div class="row" style="justify-content: center; margin-bottom: 30px;margin-top: 10px;">
                          <select id="quotebtn" class="slider-button" name="quotebtn" onchange="populate(this.id)">
                            <option class="slider-button">Quote for embroidery digitizing instead</option>
                           <option class="slider-button">Quote for Vector Art</option>
                        </select>
                       </div>
                        </fieldset>
                        <fieldset class="form-row" style="display: contents;">
                            <label style="margin-bottom: 3px;margin-top: 8px;" for="FirstName">Name*</label>
                            <input type="text" class="form-control" placeholder="First name" name="FirstName" id="FirstName">
                        </fieldset>
                        <fieldset class="form-row" style="display: contents;">
                            <label style="margin-bottom: 3px;margin-top: 8px;" for="Phone">Phone*</label>
                            <input type="number" class="form-control" placeholder="Phone" name="Phone" id="Phone">
                        </fieldset>
                        <fieldset class="form-row" style="display: contents;">
                            <label style="margin-bottom: 3px;margin-top: 8px;" for="Email">Email*</label>
                            <input type="email" class="form-control"  placeholder="name@example.com" name="Email" id="Email">
                        </fieldset>
                        <fieldset class="form-row" style="display: contents;margin-top: 15px;">
                            <p
                                style="margin-top: 20px;margin-bottom: 5px;font-weight: bold;font-family: Arial, Helvetica, sans-serif;font-size: 18pt;color: #999999;text-align: left;">
                                About the design</p>
                            <p style="height: 4px;width: 100%;background-color: #999999"></p>

                            <label style="margin-bottom: 3px;margin-top: 8px;">Design Name / PO</label>
                            <input type="text" class="form-control" placeholder="Design Name / PO" name="DesignName" id="DesignName">
                        </fieldset>
                        <fieldset class="form-row" style="display: contents;">
                            <label style="margin-bottom: 3px;margin-top: 8px;">Size</label>
                            <input type="text" class="form-control" placeholder="Size" name="Size" id="Size"> 
                        </fieldset>
                        <fieldset id="forrmat" class="form-row" style="display: contents;">
                            <label style="margin-bottom: 3px;margin-top: 8px;">File Format*</label>
                            <select style="display: block;"   name="fileformat" id="fileformat">
                                <option >I am not sure...</option>
                                <option >WebP</option>
                                <option >JPG</option>
                                <option >PNG</option>
                                <option >PDF</option>
                                <option >SVG</option>
                                <option >.dst</option>
                                <option >.pes</option>
                                <option >.hus</option>
                                <option >other</option>
                            </select>
                        </fieldset>
                        <fieldset class="form-row" style="display: contents;">
                            <label style="margin-bottom: 3px;margin-top: 8px;"
                                for="exampleFormControlTextarea1">Notes</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="notes" id="notes"></textarea>
                        </fieldset>
                        <fieldset class="form-row" style="display: contents;">
                            <p
                                style="margin-top: 20px;margin-bottom: 5px;font-weight: bold;font-family: Arial, Helvetica, sans-serif;font-size: 18pt;color: #999999;text-align: left;">
                                Send Your File</p>
                            <p style="height: 4px;width: 100%;background-color: #999999"></p>
                        <input type="file" name="images" />
                        </fieldset>
                        <p style="margin-top: 20px;">
                            <button type="submit" class="btn btn-primary" id="submitdesk">Submit</button>
                        </p>
                    </form>
                </div>
            </div>
            <div class="row" style="justify-content: center; margin-bottom:0px;margin-top: 52px;">
                <div class="hr-line" style="width: 80%;margin: 0 auto;">
                </div>
            </div>

        </div>
        <footer
            style="justify-content: center; align-items: center; display: flex; background: #284B7D; 0% 0%no-repeat padding-box: ;height: 239px;background: #284B7D; 0% 0% no-repeat padding-box; height: 239px;">
            <div class="row" style=" width: 100%;justify-content: center;">
                <div class="row" style=" width: 100%;justify-content: center;margin-top: 10px;">
                    <ul class="navbar-nav mr-auto ml-auto header-ul" style="display: contents;">
                        <li class="nav-item active" style="border-right: white 2px solid;">
                            <a class=" headertext4footer" href="index">Home</a>
                        </li>
                        <li class="nav-item active" style="border-right: white 2px solid;">
                            <a class=" headertext4footer" href="3D-Puff">3D Puff</a>
                        </li>
                        <!-- <li class="nav-item active" style="border-right: white 2px solid;">
                            <a class=" headertext4footer" href="#">Order</a>
                        </li> -->
                        <li class="nav-item active" style="border-right: white 2px solid;">
                            <a class=" headertext4footer" href="Samples">Samples</a>
                        </li>
                        <li class="nav-item active" style="border-right: white 2px solid;">
                            <a class=" headertext4footer" href="packages">Packages</a>
                        </li>
                        <!-- <li class="nav-item active" style="border-right: white 2px solid;">
                            <a class=" headertext4footer" href="Download.html">Downloads</a>
                        </li> -->
                        <li class="nav-item active" style="border-right: white 2px solid;">
                            <a class=" headertext4footer" style="font-weight: bold;" href="quoteform">Get a Quote</a>
                        </li>
                        <li class="nav-item active" style="border-right: white 2px solid;">
                            <a class=" headertext4footer" href="contact-us">Contact Us</a>
                        </li>
                        <li class="nav-item active">
                            <a class=" headertext4footer" href="privacy-policy">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
                <div style="width: 100%;justify-content: center;margin-top: 10px;">
                    <p
                        style="color: #FFFFFF;font-family: source-sans-pro, sans-serif;font-size: 24px; font-weight: 400;line-height: 32px;text-align: center;text-indent: 17px;padding: 0px;">
                        Copyright 2017 QuadB Designs all rights reserved.</p>
                </div>
            </div>
        </footer>
    </div>
    <!-- mobile view -->
    <div class="d-lg-none">
        <header>
            <div class="position-fixed h-100 w-100"
                style=" opacity: 1; backdrop-filter: blur(8px); -webkit-backdrop-filter: blur(8px); z-index: 16;"
                id="drawer">
                <div class="container h-100 w-100 pr-0">
                    <div class="row h-100 w-100 mr-0 position-absolute">
                       
                        <div class="col-10 position-relative" style="background: white 0% 0% no-repeat padding-box;display: flex;
    justify-content: center;
    align-items: center;">
                            <div class="position-absolute w-100" style="padding-left: 15px;">
                                <p class="footer-text  text-center hovrr" style="color: #7F7F7F;font-size: 30px;margin-bottom: 30px; font-family: source-sans-pro, sans-serif;
                                font-weight: 700;" onclick="window.location.href = 'index';">Home</p>
                                <p class="footer-text  text-center" style="color: #7F7F7F;font-size: 30px;margin-bottom: 30px; font-family: source-sans-pro, sans-serif;
                                font-weight: 700;" onclick="window.location.href = 'vector';">Vectors</p>
                                <p class="footer-text  text-center" style="color: #7F7F7F;font-size: 30px;margin-bottom: 30px; font-family: source-sans-pro, sans-serif;
                                font-weight: 700;" onclick="window.location.href = '3D-Puff';">3D Puff</p>
                                <!-- <p class="footer-text  text-center" style="color: #7F7F7F;font-size: 30px;margin-bottom: 30px; font-family: source-sans-pro, sans-serif;
                                font-weight: 700;" onclick="window.location = '/'">Order</p> -->
                                <p class="footer-text  text-center" style="color: #7F7F7F;font-size: 30px;margin-bottom: 30px; font-family: source-sans-pro, sans-serif;
                                font-weight: 700;" onclick="window.location.href = 'Samples';">Samples</p>
                                <p class="footer-text  text-center" style="color: #7F7F7F;font-size: 30px;margin-bottom: 30px; font-family: source-sans-pro, sans-serif;
                                font-weight: 700;" onclick="window.location.href = 'packages';">Packages</p>
                                 <!-- <p class="footer-text  text-center" style="color: #7F7F7F;font-size: 30px;margin-bottom: 30px; font-family: source-sans-pro, sans-serif;
                                font-weight: 700;" onclick="window.location.href = 'Download.html';">Downloads</p> -->
                                <p class="footer-text  text-center" style="color: #7F7F7F;font-size: 30px;margin-bottom: 30px; font-family: source-sans-pro, sans-serif;
                                font-weight: 700;" onclick="window.location.href = 'contact-us';">Contact Us</p>
                                <p class="footer-text  text-center" style="color: #7F7F7F;font-size: 30px;margin-bottom: 30px; font-family: source-sans-pro, sans-serif;
                                font-weight: 900;" onclick="window.location.href = 'quoteform';">Get a Quote</p>
                            </div>


                        </div>
                            <div class="col-2 d-flex justify-content-end pt-5 pl-0" id="cross">
                            <div id="mobile-cross">
                                <p class="m-0">X</p>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
            <div class="nav-container">
                
                <nav class="navbar  navbar-dark bg-transparent ">
                    <div class="row" style=" width: 100%;">
                        <div class="col-3" style="">
                            <div style=" z-index: 10; margin-top: 20px; z-index:15 !important;" id="open-drawer">
                                <hr
                                    style="width: 30px; height: 2px; background-color: #999999;border-radius: 100px;  margin: 0px;">
                                <hr
                                    style="width: 30px; height: 2px; background-color:#999999; margin-top: 3px; margin-bottom: 0px; border-radius: 100px;margin-left: 0px;">
                                <hr
                                    style="width: 18px; height: 2px; background-color: #999999; margin-top: 3px; margin-bottom: 0px; border-radius: 100px; margin-left: 0px;">
                            </div>
                        </div>
                        <div class="col-6" style="padding: 0px !important;">
                            <div class="d-flex justify-content-center align-items-center">
                                <img style="margin-top: 10px;width: 126px;height: 42;" class="logo-headermob"
                                    src="images/QB Design 126x42-min.webp" alt="">
                            </div>
                        </div>
                        <!-- <div class="col-3" style="padding: 0px !important;display: flex;justify-content:      flex-end;">
                            <div class="d-flex justify-content-center align-items-center">
                                <p class="signinnmob">Sign In</p>
                            </div>
                        </div> -->
                    </div>
                    <div class="row" style="width: 100%;">
                        <div style="width: 100%;">
                            <p class="headertext1mob" style="margin-bottom: 5px;">Embroidery Digitizing + Vector Art
                                <p class="headertext2mob hovercolor" style="margin-bottom: 5px;"onclick="window.location.href = 'tel:+16465832939';">+1 646 583 2939
                                    </p>
                        </div>
                    </div>
                </nav>
            </div>

        </header>
        <div class="container-fluid position-relative p-0 colors" style="justify-content: center;">
            <div id="vectquotemob" style="width: 100%;display: block;justify-content: center;align-items: center;">
                <p class="quoteheadmob">Vector Art Quote</p>
            </div>
            <div id="embroidquotemob" style=" width: 100%;justify-content: center;align-items: center;">
                <p class="quoteheadmob">Embroidery Digitizing Quote</p>
            </div>
            <!--           <button>START YOUR WILD HUNT</button>-->
        </div>
        <div class="container-fluid " style="margin-top: 20px;">
           
            <div class="row">
                <div style="width: 100%;margin: 0 auto;float: left;display: flex;justify-content: center;">
                    <form id="vectform-mobile" style="width: 60%;" method="post" enctype="multipart/form-data">
                        <fieldset class="form-row" style="display: contents;">
                         <div class="row" style="justify-content: center; margin-bottom: 30px;margin-top: 10px;">
                                <select id="quotebtnmob" class="slider-buttonmob" name="quotebtnmob" onchange="populatemob(this.id)">
                                    <option class="slider-buttonmob">Quote for embroidery digitizing instead</option>
                                    <option class="slider-buttonmob">Quote for Vector Art</option>
                                </select>
                            </div>
                        </fieldset>
                        <fieldset class="form-row" style="display: contents;">
                            <label style="margin-bottom: 3px;margin-top: 8px;">First Name*</label>
                            <input type="text" class="form-control" placeholder="First name" name="Namemob" id="Namemob">
                        </fieldset>
                        <fieldset class="form-row" style="display: contents;">
                            <label style="margin-bottom: 3px;margin-top: 8px;" for="Phonemob">Phone*</label>
                            <input type="number" class="form-control" placeholder="Phone" name="Phonemob" id="Phonemob">
                        </fieldset>
                        <fieldset class="form-row" style="display: contents;">
                            <label style="margin-bottom: 3px;margin-top: 8px;" for="Emailmob">Email*</label>
                            <input type="email" class="form-control" id="Emailmob" name="Emailmob" placeholder="name@example.com">
                        </fieldset>
                        <fieldset class="form-row" style="display: contents;margin-top: 15px;">
                            <p
                                style="margin-top: 20px;margin-bottom: 5px;font-weight: bold;font-family: Arial, Helvetica, sans-serif;font-size: 18pt;color: #999999;text-align: left;">
                                About the design</p>
                            <p style="height: 4px;width: 100%;background-color: #999999"></p>

                            <label style="margin-bottom: 3px;margin-top: 8px;">Design Name / PO</label>
                            <input type="text" class="form-control" placeholder="Design Name / PO" name="DesignNamemob" id="DesignNamemob">
                        </fieldset>
                        <fieldset class="form-row" style="display: contents;">
                            <label style="margin-bottom: 3px;margin-top: 8px;">Size</label>
                            <input type="text" class="form-control" placeholder="Size" name="Sizemob" id="Sizemob">
                        </fieldset>
                        <fieldset id="forrmatmob" class="form-row" style="display: contents;">
                            <label style="margin-bottom: 3px;margin-top: 8px;">File Format*</label>
                            <select style="display: block; width: 100%;" class="" id="fileformatmob" name="fileformatmob">
                            <option >I am not sure...</option>
                                <option >WebP</option>
                                <option >JPG</option>
                                <option >PNG</option>
                                <option >PDF</option>
                                <option >SVG</option>
                                <option >.dst</option>
                                <option >.pes</option>
                                <option >.hus</option>
                                <option >other</option>
                            </select>
                        </fieldset>
                        <fieldset class="form-row" style="display: contents;">
                            <label style="margin-bottom: 3px;margin-top: 8px;"
                                for="notesmob">Notes</label>
                            <textarea class="form-control" id="notesmob" name="notesmob" rows="3"></textarea>
                        </fieldset>
                        <fieldset class="form-row" style="display: contents;">
                            <p
                                style="margin-top: 20px;margin-bottom: 5px;font-weight: bold;font-family: Arial, Helvetica, sans-serif;font-size: 18pt;color: #999999;text-align: left;">
                                Send Your File</p>
                            <p style="height: 4px;width: 100%;background-color: #999999"></p>
                            <input type="file" name="imagesmob" />
                        </fieldset>
                        <p style="margin-top: 20px;text-align: center;">
                             <button type="submit" class="btn btn-primary" id="submitmob">Submit</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
        <footer>
            <div
                style="justify-content: center; align-items: center; display: flex; background: #284B7D; 0% 0%no-repeat padding-box: ;height: 239px;background: #284B7D; 0% 0% no-repeat padding-box; height: 63px;">
                <div class="row" style=" width: 100%;justify-content: center;">
                    <div class="row" style=" width: 100%;justify-content: center;margin-top: 10px;">
                        <ul class="navbar-nav mr-auto ml-auto header-ul" style="display: contents;">
                            <li class="nav-item active">
                                <a class=" headertext4footermob" href="privacy-policy">Privacy Policy</a>
                            </li>
                        </ul>
                    </div>
                    <div style="width: 100%;justify-content: center;margin-top: 10px;">
                        <p
                            style="color: #FFFFFF;font-family: source-sans-pro, sans-serif;font-size: 12px; font-weight: 400;line-height: 15px;text-align: center;padding: 0px;">
                            Copyright 2017 QuadB Designs all rights reserved.</p>
                    </div>
                </div>
            </div>
            <div class="row"
                style="margin-left: 0px;margin-right: 0px; margin-top: 18px;margin-bottom: 18px; justify-content: center; align-items: center; display: flex;width: 100%">
                <div class="col-5" style="padding: 0px !important;">
                    <p
                        style="color: #58585A;padding-left: 3px;
               font-family: Helvetica, Helvetica Neue, Arial, sans-serif;text-align: left;font-size: 12px;line-height: 14px;font-weight: bold; margin-bottom:4px;">
                        Send us an e-mail</p>
                        <p class="hovercolor"
                        style="color: #58585A;padding-left: 0px;
               font-family: Helvetica, Helvetica Neue, Arial, sans-serif;text-align: left;font-size: 12px;line-height: 14px;font-weight: bold; margin-bottom:4px;" onclick="window.location.href = 'mailto:support@quadbdesigns.com';">
                        support@quadbdesigns.com</p>
                </div>
                <div class="col-3" style="padding: 0px !important;">
                    <p
                        style="margin-bottom: 0px;color: #58585A;
               font-family: Helvetica, Helvetica Neue, Arial, sans-serif;text-align: center;font-size: 12px;line-height: 14px;font-weight: bold;">
                        Contact us</p>
                    <p class="hovercolor"
                        style="margin-bottom: 0px;color: #58585A;
               font-family: Helvetica, Helvetica Neue, Arial, sans-serif;text-align: center;font-size: 12px;line-height: 14px;font-weight: bold;"  onclick="window.location.href = 'tel:+16465832939';">
                        +1 646 583 2939</p>
                </div>
                <div class="col-4" style="padding: 0px !important;">
                    <p
                        style="margin-bottom: 0px;color: #58585A;
               font-family: Helvetica, Helvetica Neue, Arial, sans-serif;text-align: center;font-size: 12px;line-height: 14px;font-weight: bold;">
                        32 W 39th St floor 4,</p>
                    <p
                        style="margin-bottom: 0px;color: #58585A;
               font-family: Helvetica, Helvetica Neue, Arial, sans-serif;text-align: center;font-size: 12px;line-height: 14px;font-weight: bold;">
                        New York, NY 10018</p>
                    <p
                        style="margin-bottom: 0px;color: #58585A;
               font-family: Helvetica, Helvetica Neue, Arial, sans-serif;text-align: center;font-size: 12px;line-height: 14px;font-weight: bold;">
                        United States</p>
                </div>
            </div>
        </footer>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
   <script type="text/javascript">
          // script for change form
        document.getElementById("vectquote").style.display = "none";
        function populate(s1) {
            var s1 = document.getElementById(s1);
            var name = "Quote for Vector Art";
            if (s1.value == "Quote for Vector Art") {
                var none = "none";
                document.getElementById("vectquote").style.display = "block";
                document.getElementById("embroidquote").style.display = "none";
            }
            else {
                document.getElementById("vectquote").style.display = "none";
                document.getElementById("embroidquote").style.display = "block";
            }

        }
        // script for change form mob
        document.getElementById("vectquotemob").style.display = "none";
        function populatemob(s1) {
            var s1 = document.getElementById(s1);
            var name = "Quote for Vector Art";
            if (s1.value == "Quote for Vector Art") {
                document.getElementById("vectquotemob").style.display = "block";
                document.getElementById("embroidquotemob").style.display = "none";
            }
            else {
                document.getElementById("vectquotemob").style.display = "none";
                document.getElementById("embroidquotemob").style.display = "block";
            
            }

        }
        //script fot submit desk form
          $("#vectform").submit(function(e) {
               var error = "";
            function validateEmail() {
                var email = $("#Email").val();
               var emailReg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
              if( emailReg.test(email)){
                  return true;
               }else{
                   return false;
               }
            }
            if($("#FirstName").val() == ""){
                $("#FirstName").css('border-color','red');
                $("#FirstName").css('border-width','2px');
                $("#FirstName").attr('placeholder','Required Field');
                error = error + 'name';
            } else{
                $("#FirstName").css('border-color','white');
                $("#FirstName").css('border-width','1px');
            }
           
            if($("#Phone").val() == ""){
                $("#Phone").css('border-color','red');
                $("#Phone").css('border-width','2px');
                $("#Phone").attr('placeholder','Required Field');
                error = error + 'Phone';
            }else{
                $("#Phone").css('border-color','white');
                $("#Phone").css('border-width','1px');
            }
            if(validateEmail()) {
                  $("#Email").css('border-color','white');
                $("#Email").css('border-width','1px');
                
            }else{
                $("#Email").css('border-color','red');
                $("#Email").css('border-width','2px');
                $("#Email").attr('placeholder','Required Field');
                error = error + 'email';
            }
           
            if(error !== ""){
                 alert('There are error in the form. Please check your submissions');
                  return false;
              } else {
                  return true;
              }
               });
       //script for drawer
        $("#drawer").css('display', 'none');
        $("#open-drawer").on("click", function () {
            if ($("#drawer").css('display') == 'none') {
                $("#drawer").css('display', 'block');
            } else {
                $("#drawer").css('display', 'none');
            }
        });
        $("#cross").on("click", function () {
            $("#drawer").css('display', 'none');
        });
        $("#mobile-cross").on("click", function () {
            $("#drawer").css('display', 'none');
        });
//script fot submit mob form
          $("#vectform-mobile").submit(function(e) {
                var error = "";
                function validateEmail() {
                var email = $("#Emailmob").val();
                var emailReg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
                if( emailReg.test(email)){
                    return true;
                }else{
                    return false;
                }
            }
            if($("#Namemob").val() == ""){
                $("#Namemob").css('border-color','red');
                $("#Namemob").css('border-width','2px');
                $("#Namemob").attr('placeholder','Required Field');
                error = error + 'name';
            } else{
                $("#Namemob").css('border-color','white');
                $("#Namemob").css('border-width','1px');
            }
           
            if($("#Phonemob").val() == ""){
                $("#Phonemob").css('border-color','red');
                $("#Phonemob").css('border-width','2px');
                $("#Phonemob").attr('placeholder','Required Field');
                error = error + 'Phone';
            }else{
                $("#Phonemob").css('border-color','white');
                $("#Phonemob").css('border-width','1px');
            }
            if(validateEmail()) {
                  $("#Emailmob").css('border-color','white');
                $("#Emailmob").css('border-width','1px');
                
            }else{
                $("#Emailmob").css('border-color','red');
                $("#Emailmob").css('border-width','2px');
                $("#Emailmob").attr('placeholder','Required Field');
                error = error + 'email';
            }
           
            if(error !== ""){
                alert('There are error in the form. Please check your submissions');
                    return false;
                } else {
                    return true;
                }
            })
    </script>
</body>

</html>