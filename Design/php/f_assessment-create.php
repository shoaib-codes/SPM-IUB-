<?php
    include 'mysql.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $semester = $_POST['semester'];
        $section = $_POST['section'];
        $course_id = $_POST['course_id'];
        $type = strtolower($_POST['type']);
        $total_q = $_POST['total_q'];


        $query = "SELECT id from section WHERE LOWER(semester) = LOWER('$semester') AND LOWER(num) = LOWER('$section') AND LOWER(course_id) = LOWER('$course_id')";      
        $section_id = $conn->query($query)->fetch_assoc()['id'];

        $query = "SELECT * FROM assessment WHERE type = '$type' AND section_id = $section_id";
        if($conn->query($query)->num_rows==0){
            for($i=1; $i<=$total_q; $i++){
                $mark = $_POST['mark'.$i];
                $co = $_POST['co'.$i];
                $newFileName = null;
                $flag = 0;
                if($_FILES['qc'.$i]){
                    $file_name = $_FILES['qc'.$i]['name'];
                    $file_size = $_FILES['qc'.$i]['size'];
                    $file_tmp = $_FILES['qc'.$i]['tmp_name'];
                    $strings = explode(".", $file_name);
                    $file_ext = strtolower(end($strings));
    
                    $newFileName = md5(time() . $file_name) . '.' . $file_ext;
    
                    if(move_uploaded_file($file_tmp,"../uploads/".$newFileName)){
                        $flag = 1;
                    }
                }
                if($flag==1){
                    $query = "INSERT INTO assessment (question_number, question_content, type, mark, co_number, section_id)
                            VALUES($i, '$newFileName', '$type', $mark, $co, $section_id)";
                }else{
                    $query = "INSERT INTO assessment (question_number, type, mark, co_number, section_id)
                            VALUES($i, '$type', $mark, $co, $section_id)";
                }
                
                echo $query . '<br/>';
                $conn->query($query);  
                echo $conn->error;
                echo '<br>';
            }
        }

        echo '<br>';
        echo '<br>';

        $file = fopen($_FILES['evaluation']['tmp_name'], "r");   

        fgetcsv($file);   
        
        while($data = fgetcsv($file)){
            $student_id =  $data[0];
            $query = "SELECT id FROM enrollment WHERE student_id = $student_id AND section_id = $section_id";
            $enrollment_id = $conn->query($query)->fetch_assoc()['id'];
            for($i=1; $i<=$total_q; $i++){
                $query = "SELECT id FROM assessment WHERE question_number = $i AND type = '$type' AND section_id = $section_id";
                $assessment_id = $conn->query($query)->fetch_assoc()['id'];
                $mark = $data[$i];
                $query = "INSERT INTO evaluation (enrollment_id, assessment_id, obtained_mark)
                            VALUES($enrollment_id, $assessment_id, $mark)";
                
                echo $query . '<br/>';
                $conn->query($query);  
                echo $conn->error;
                echo '<br>';
            }
        }
        
        header("Location: assessments-list.php");
        
   }else{
        $query = "SELECT section.semester as 'semester', section.num as 'section', section.course_id as 'course_id', assessment.type as 'type',
        COUNT(assessment.id) as 'total_q', COUNT(DISTINCT(evaluation.enrollment_id)) as 'total_students'
        FROM assessment LEFT JOIN section ON assessment.section_id = section.id
        LEFT JOIN evaluation ON assessment.id = evaluation.assessment_id
        GROUP BY assessment.section_id, assessment.type";

        $asmnts = $conn->query($query);
   }       

?>