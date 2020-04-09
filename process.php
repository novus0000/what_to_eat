<?php

$mysqli = new mysqli('localhost', 'gyrjs07', 'ektgha730!', 'gyrjs07');
$conn = mysqli_connect('localhost', 'gyrjs07', 'ektgha730!', 'gyrjs07');



if (mysqli_connect_errno($conn))
{
  echo "데이터베이스 연결 실패: " . mysqli_connect_error();
}

switch($_GET["mode"]){
    case 'insert':

        echo "insert is done";
        break;

    case 'delete':

        echo "delet is done";     
        break;

    case 'modify':
 
        echo "modify is done";
        break;

        case 'new':
            $FOOD = $mysqli -> real_escape_string($_POST["FOOD"]);
            $Q1 = $_POST["Q1"];
            $Q2 = $_POST["Q2"];
            $Q3 = $_POST["Q3"];
            $Q4 = $_POST["Q4"];
            $Q5 = $_POST["Q5"];
            $Q6 = $_POST["Q6"];
            $Q7 = $_POST["Q7"]; 

            for($q1 = 0; $q1 < count($Q1); $q1++) {
                for($q2 = 0; $q2 < count($Q2); $q2++) {
                    for($q3 = 0; $q3 < count($Q3); $q3++) {
                        for($q4 = 0; $q4 < count($Q4); $q4++) {
                            for($q5 = 0; $q5 < count($Q5); $q5++) {
                                for($q6 = 0; $q6 < count($Q6); $q6++) {
                                    for($q7 = 0; $q7 < count($Q7); $q7++) {
                                        echo "added";
                                        mysqli_query( $conn, "INSERT INTO tb_food_list (FOOD, Q1, 
                                        Q2, Q3, Q4, Q5, Q6, Q7) VALUES ('$FOOD', '$Q1[$q1]', '$Q2[$q2]', '$Q3[$q3]', '$Q4[$q4]', '$Q5[$q5]' ,'$Q6[$q6]', '$Q7[$q7]')");
                                                                              

                                    }    
                                }    
                            }    
                        }
                    }
                }
            }
            
   
            break;
}
?>