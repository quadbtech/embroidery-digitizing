<?php

$link = mysqli_connect("localhost", "root", "", "vectorart");

if (mysqli_connect_error()){
    die("<script>console.log('There is a problem with mysql connection')</script>");
}

if(isset($_POST['name'])){
    
    $data = array();  
    $from_ip = $_SERVER['REMOTE_ADDR'];
    $from_browser = $_SERVER['HTTP_USER_AGENT'];
    date_default_timezone_set("Asia/Calcutta");
    $date_now = date("r");

    $name = $_POST['name'];
    $phone = $_POST['Phone'];
    $email = $_POST['email'];
    
    
    if($phone == ""){
        $phone = 0;
    }

    $id = 0;

    $result = mysqli_query($link, "SELECT max(id) FROM `contacthome`");

    while ($row = mysqli_fetch_array($result)) {
        $id = $row[0];  
    }
    $id = $id + 1;


    $query = "INSERT INTO `contacthome` (id,`name`, `phone`, `email`, `time`, `from_ip`, `from_browser`) VALUES ($id, '$name', '$phone', '$email', '$date_now','$from_ip', '$from_browser')";

    // echo $query;
    
    if($result = mysqli_query($link, $query))  
    {  
        $data['status'] = 201;
        $data['id'] = $id;
        echo json_encode($data);
    }  
    else  
    {  
        $data['status'] = 601;
        $data['error'] = $link -> error;
        echo json_encode($data);
    } 

}


?>
   