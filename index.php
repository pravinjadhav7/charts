<?php 
include "lib.php";
if($_GET['field_wise']=='student'){
$mark_details = getStundentMarks($_GET['student_name']);
#print_r($mark_details);
$chart_data = convertPHPArrayToJS($mark_details);
$chart_data = "['Subject', \"Students\", { role: 'style' } ], $chart_data";
$chart_title="'$_GET[student_name]'";
$htitle="'Marks'"; 
$vtitle="'Students'";
#print $chart_data;
}

if($_GET['field_wise']=='subject'){
$student_subject_marks = getStundentSubjectMarks($_GET['subject_name']);
#print_r($student_subject_marks);
$chart_data = convertPHPArrayToJS($student_subject_marks);
$chart_data = "['Student', \"Marks\", { role: 'style' } ], $chart_data";
$chart_title="' $_GET[subject_name]'";
$htitle="'Percentage'"; 
$vtitle="'Subject'";
#print $chart_data;
}

$students = getStudents();
$subjects = getSubjects();
#print_r($students);
#print_r($subjects);
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="charts.js"></script>
    <link rel="stylesheet" type="text/css" href="sidebar.css">

<script type="text/javascript">

chart_data=[<?php echo $chart_data ?>];
chart_title=<?php echo $chart_title; ?>;
h_title=<?php echo $htitle; ?>;
v_title=<?php echo $vtitle; ?>;


/*
var chart_data = [
    ["Subject", "Sagar", { role: "style" } ],
    ["Physics", 10, "#b87333"],
    ["Maths", 25, "silver"],
    ["Chemistry", 35, "gold"],
    ["Bio", 42, "color: #e5e4e2"],
    ["SST", 62, "color: #e5e4e2"]
];
 */

google.charts.load("current", {packages:["corechart"]});
google.charts.setOnLoadCallback(function(){ 
        drawChart('barchart_values',chart_data,chart_title,h_title,v_title);
});
</script>
<script>
$(document).ready(function(){
    $("#mark_wise").click(function(){
        $(".hide1").toggle();
    });
});

$(document).ready(function(){
    $("#sub_wise").click(function(){
        $(".hide2").toggle();
    });
});
</script>
  </head>
  <body>
<div id="container">
<div id="top" style="width:80%;height:0px;">
<!-- top navigation -->
</div>

<div id="left_navigation" style="float:left;" style="color:#000033">

<div class="navigation" style="background-color:#312A2A; width:350px; height:700px">
<nav class="" style="background-color:white; width:300px">
  <ul class="mainmenu">
    <li><a href="#" id="mark_wise" style="font-size:18px"><span class="glyphicon glyphicon-filter"></span>Mark Wise</a>
      <ul class="submenu hide1">
       <?php foreach ($students as $student){ ?>
       <li><a href="index.php?field_wise=student&student_name=<?php echo $student['student_name'] ?>" style="font-size:14px"><span class="glyphicon glyphicon-arrow-right"></span><?php echo $student['student_name']; ?></a></li><br>
        <?php } ?>
      </ul>
    </li>
    <li><a href="#" id="sub_wise" style="font-size:18px"><span class="glyphicon glyphicon-filter"></span>Field Wise</a>
      <ul class="submenu hide2">
       <?php foreach ($subjects as $subject){ ?>
       <li><a href="index.php?field_wise=subject&subject_name=<?php echo $subject['subject_name'] ?>" style="font-size:14px"><span class="glyphicon glyphicon-arrow-right"></span><?php echo $subject['subject_name']; ?></a></li><br>
        <?php } ?>
      </ul>
    </li>
  </ul>
</nav>
</div>
</div>

<div id="barchart_values" style="width: 900px; height: 300px;float:right;"></div>
</div>
  </body>
</html>
