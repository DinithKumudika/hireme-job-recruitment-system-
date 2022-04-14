<?php

require('../config/db.php');

function applicantCount($conn){
     $count = '';
     $query = "SELECT `applicant_ID` from applicant_reg;";
     $result = mysqli_query($conn,$query);
     if($result){
          $count = mysqli_num_rows($result);
     }
     return $count;
}

function employerCount($conn){
     $count = '';
     $query = "SELECT `emp_id` from emp_reg;";
     $result = mysqli_query($conn,$query);
     if($result){
          $count = mysqli_num_rows($result);
     }
     return $count;
}

function vacancyCount($conn){
     $count = '';
     $query = "SELECT `vacancy_id` from vacancy;";
     $result = mysqli_query($conn,$query);
     if($result){
          $count = mysqli_num_rows($result);
     }
     return $count;
}

function applicationCount($conn){
     $count = '';
     $query = "SELECT `application_id` from applications;";
     $result = mysqli_query($conn,$query);
     if($result){
          $count = mysqli_num_rows($result);
     }
     return $count;
}

function getLastVacancy($conn){
     $query = "SELECT * FROM vacancy ORDER BY vacancy_id DESC LIMIT 1;";
     $result = mysqli_query($conn,$query);
     if($result){
          $row = mysqli_fetch_assoc($result);

     }
     return $row;
}

function getLastApplication($conn){
     $data = array();
     $query = "SELECT * FROM applications ORDER BY application_id DESC LIMIT 1;";
     $result = mysqli_query($conn,$query);
     if($result){
          if(mysqli_num_rows($result)>0){
               $row = mysqli_fetch_assoc($result);
               $data['full_name'] = $row['full_name'];
               $vacancy_id = $row['vacancy_id'];
               $query2 = "SELECT job_title, position, company FROM vacancy WHERE vacancy_id='$vacancy_id';";
               $result2 = mysqli_query($conn,$query2);
               if($result2){
                    if(mysqli_num_rows($result2)>0){
                         $row2 = mysqli_fetch_assoc($result2);
                         $data['job_title'] = $row2['job_title'];
                         $data['position'] = $row2['position'];
                         $data['company'] = $row2['company'];
                         return $data;
                    }
                    else{
                         exit();
                    }
               }
          }
          else{
               exit();
          }
     }
     
}

$applicant_count = applicantCount($conn);

$employer_count = employerCount($conn);

$vacancy_count = vacancyCount($conn);

$application_count = applicationCount($conn);

$latest_vacancy = getLastVacancy($conn);

$latest_application = getLastApplication($conn);