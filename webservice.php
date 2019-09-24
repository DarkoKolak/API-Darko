<?php

/****************************************
*######## RESTful WEB SERVICE ##########*
*                                                    *
* Client process the request VIA URL    *
* http://address.com/webservice.php?id=1*
* and gets the JSON result.             *
****************************************/


if (true) {
        # code...
// Set Content-Type header to application/json
header("Content-Type:application/json");


// Check if the id has a value

        // Require db_check.php file (check the id in the database and get the name and the price)
        require_once("check.php");

        // If the name and the price are empty - id doesn't exist - car not found
        if(empty($name) && empty($lastname)&& empty($username)){
                        response(200, "Person not found", NULL, NULL,NULL);
        }
        // If the name and the price aren't empty - id exists - car found
        else{
                        response(200, "Person found" , $name, $lastname,$username);
        }
}

// If the id is not set - request is not valid
else {
                        response(400, "Invalid request", NULL, NULL,NULL);
        }


// Function for delivering a JSON response
function response($status,$status_message,$name,$lastname,$username){
        
        /*HTTP 1.1 provides a persistent connection
        that allows multiple requests to be batched
        or pipelined to an output buffer */
        header("HTTP/1.1 $status $status_message");

        // $response array
        $response['status']=$status;
        $response['status_message']=$status_message;
        $response['name']=$name;
        $response['lastname']=$lastname;
        $response['username']=$username;

        //Generating JSON from the $response array
        $json_response=json_encode($response);

        // Outputting JSON to the client
        echo $json_response;
}

?>