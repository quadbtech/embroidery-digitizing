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
    $time = date("r");

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    if (!isset($_POST['message'])){
        $message ="";
    } else{
        $message =$_POST['message'];
    }
    if (!isset($_POST['company'])){
        $company = "";
    } else{
        $company = $_POST['company'];
    }

    if($phone == ""){
        $phone = 0;
    }

    $id = 0;

    $result = mysqli_query($link, "SELECT max(id) FROM `contactus`");

    while ($row = mysqli_fetch_array($result)) {
        $id = $row[0];  
    }
    $id = $id + 1;


    $query = "INSERT INTO `contactus` (id,`name`,`email`, `phone`, `message`, `company`, `time`, `from_ip`, `from_browser`) VALUES ($id, '$name', '$email','$phone',  '$message', '$company', '$time','$from_ip', '$from_browser')";

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
