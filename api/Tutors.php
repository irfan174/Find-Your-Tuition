<?php

///---------------------------------------------------------------
if ($_SERVER['REQUEST_METHOD'] == "OPTIONS") {
    // Tell the Client we support invocations from any site and 
    // that this preflight holds good for only 20 days
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
    header('Access-Control-Allow-Headers: Content-type');
    header('Access-Control-Max-Age: 1728000');
    header("Content-Length: 0");
    header("Content-Type: application/json");
} else if ($_SERVER['REQUEST_METHOD'] == "GET") {
    // Handling GET 
    Header("Access-control-allow-origin: *");
    Header("Content-type: application/json");

    require_once __DIR__ . '/Connection.php';
    $connection = new Connection();
    $conn = $connection->getConnection();
    //array for json response
    $response = array();
    $status="status";
    $message = "message";

    if ($conn != null) {

        $get_tutors = "SELECT * FROM tutors";
        $getJson = $conn->prepare($get_tutors);
        $getJson->execute();
        $result = $getJson->fetchAll(PDO::FETCH_ASSOC);

        foreach($result as $data)
        {
                        
            array_push($response,
                array(
                    'tutor_id'=>$data['tutor_id'],
                    'tutor_name'=>$data['tutor_name'],
                    'area_name'=>$data['area_name'],
                    'address'=>$data['address'],
                    'age'=>$data['age'],
                    'class'=>$data['class'],
                    'institute'=>$data['institute'],
                    'email'=>$data['email'],
                    'phone'=>$data['phone'],
                    'background'=>$data['background'],
                    'lat'=>$data['lat'],
                    'lng'=>$data['lng'],
                   // 'tutor_password'=>$data['tutor_password'],
                  //  'activation_code'=>$data['activation_code'],
                    'user_email_status'=>$data['user_email_status']
            
                    
                
                ));            
        }
        echo json_encode(array("tutors_data"=>$response,$status=>1, $message=>"Students Data Fetching Successful", "error"=>"None"));           
                       

    } else {
        echo json_encode(array("error"=>"Error in fetching data"));
    }
}
///---------------------------------------------------------------
?>

