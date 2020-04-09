<?php

$mysqli = new mysqli('localhost', 'gyrjs07', 'ektgha730!', 'gyrjs07');
$conn = mysqli_connect('localhost', 'gyrjs07', 'ektgha730!', 'gyrjs07');

$json = file_get_contents('php://input');
$data_back = json_decode($json);


switch($data_back->{"mode"}){
    case 'insert':

        echo "insert is done";
        break;
a
    case 'delete':

        echo "delet is done";     
        break;

    case 'modify':
 
        echo "modify is done";
        break;

        case 'new':
            for($q1 = 0; $q1 < count($_GET["gocoder"]); $q1++) {
                for($q2 = 0; $q2 < count($_GET["gocoder"]); $q2++) {
                    for($q3 = 0; $q3 < count($_GET["gocoder"]); $q3++) {
                        for($q4 = 0; $q4 < count($_GET["gocoder"]); $q4++) {
                            for($q5 = 0; $q4 < count($_GET["gocoder"]); $q4++) {
                                for($q6 = 0; $q4 < count($_GET["gocoder"]); $q4++) {
                                    for($q7 = 0; $q4 < count($_GET["gocoder"]); $q4++) {
                                        
                                        mysqli_query( $conn, 'DELETE FROM tb_task WHERE suburb = $suburb AND lot = $lot');                                         d

                                    }    
                                }    
                            }    
                        }
                    }
                }
                echo $i."번째 value 값 :".$_GET["gocoder"][$i]."<Br>";    
            }
            
            $suburb = $mysqli -> real_escape_string($data_back->{"suburb"});
            $lot = $mysqli -> real_escape_string($data_back->{"lot"});
            mysqli_query( $conn, 'DELETE FROM tb_task WHERE suburb = $suburb AND lot = $lot'); 
            echo "new is done";     
            break;
}
?>