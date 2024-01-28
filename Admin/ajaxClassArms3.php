<?php

include '../Includes/dbcon.php';

    $sid = intval($_GET['sid']);//

        $queryss=mysqli_query($conn,"select * from tblsubjects where classId=".$sid." ");                        
        $countt = mysqli_num_rows($queryss); 

        echo '
        <select required name="subjectId" class="form-control mb-3">';
        echo'<option value="">--Select Subject--</option>';
        while ($row = mysqli_fetch_array($queryss)) {
        echo'<option value="'.$row['Id'].'" >'.$row['subjectName'].'</option>';
        }
        echo '</select>';
?>

