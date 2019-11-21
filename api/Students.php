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

        $get_students = "SELECT * FROM students";
        $getJson = $conn->prepare($get_students);
        $getJson->execute();
        $result = $getJson->fetchAll(PDO::FETCH_ASSOC);

        foreach($result as $data)
        {
                        
            array_push($response,
                array(
                    'student_id'=>$data['student_id'],
                    'student_name'=>$data['student_name'],
                    'area_name'=>$data['area_name'],
                    'address'=>$data['address'],
                    'age'=>$data['age'],
                    'class'=>$data['class'],
                    'student_group'=>$data['student_group'],
                    'medium'=>$data['medium'],
                    'institute'=>$data['institute'],
                    'email'=>$data['email'],
                    'phone'=>$data['phone'],
                    'lat'=>$data['lat'],
                    'lng'=>$data['lng'],
                   // 'student_password'=>$data['student_password'],
                  //  'activation_code'=>$data['activation_code'],
                    'user_email_status'=>$data['user_email_status']
            
                    
                
                ));            
        }
        echo json_encode(array("students_data"=>$response,$status=>1, $message=>"Students Data Fetching Successful", "error"=>"None"));           
                       

    } else {
        echo json_encode(array("error"=>"Error in fetching data"));
    }
}
///---------------------------------------------------------------
?>

