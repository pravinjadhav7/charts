<?php 
include 'db.php';

function getStundentMarks($student_name){
    global $dbh;
    try{
        $select = "SELECT students.student_name, subjects.subject_name,marks.mark FROM marks
            LEFT JOIN students ON students.student_id = marks.student_id 
            LEFT JOIN subjects ON subjects.subject_id = marks.subject_id
            WHERE students.student_name like ?";
        $sth = $dbh->prepare("$select");
        $sth->execute(array($student_name));
        #$mark_details= $sth->fetchAll(PDO::FETCH_ASSOC);
        $marks =array();
        while ($row = $sth->fetch(PDO::FETCH_ASSOC)){
            $marks[$row['subject_name']]=$row['mark'];
        }
    }catch(PDOException $e){
        echo "Found error: ".$e->getMessage();
        return false;
    }
    return $marks;
}

function getStundentSubjectMarks($subject_name){
    global $dbh;
    try{
        $select = "SELECT students.student_name, subjects.subject_name,marks.mark FROM marks
            LEFT JOIN students ON students.student_id = marks.student_id 
            LEFT JOIN subjects ON subjects.subject_id = marks.subject_id
            WHERE subjects.subject_name like ?";
        $sth = $dbh->prepare("$select");
        $sth->execute(array($subject_name));
        #$mark_details= $sth->fetchAll(PDO::FETCH_ASSOC);
        $student_marks =array();
        while ($row = $sth->fetch(PDO::FETCH_ASSOC)){
            $student_marks[$row['student_name']]=$row['mark'];
        }
    }catch(PDOException $e){
        echo "Found error: ".$e->getMessage();
        return false;
    }
    return $student_marks;
}

function convertPHPArrayToJS($php_array){
    $string='';
    foreach($php_array as $key => $value){
        $string="$string ['$key', $value, 'gold'],";
    }
    $string=rtrim($string, ",");
    return $string;
}

function getStudents(){
    global $dbh;
    try{
        $select = "SELECT * FROM students";
        $sth = $dbh->prepare("$select");
        $sth->execute();
        $students= $sth->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        echo "Found error: ".$e->getMessage();
        return false;
    }
    return $students;
}

function getSubjects(){
    global $dbh;
    try{
        $select = "SELECT * FROM subjects";
        $sth = $dbh->prepare("$select");
        $sth->execute();
        $subjects= $sth->fetchAll(PDO::FETCH_ASSOC);
    }catch(PDOException $e){
        echo "Found error: ".$e->getMessage();
        return false;
    }
    return $subjects;
}

?>
