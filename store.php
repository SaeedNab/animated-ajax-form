<?php
    include 'database.php';

    if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['job']) && isset($_POST['isRelated']) && isset($_POST['proposal']) && isset($_POST['future']) && isset($_POST['opinion']) && isset($_POST['mobile']) && isset($_POST['universities']) && isset($_POST['grade'])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $job = $_POST['job'];
        $isRelated = $_POST['isRelated'];
        $proposal = $_POST['proposal'];
        $opinion = $_POST['opinion'];
        $grade = $_POST['grade'];
        $future = $_POST['future'];
        $mobile = $_POST['mobile'];
        $universities = $_POST['universities'];
        $enteredAt = $_POST['entered_at'];
$db = new Database("gigfa_29739839","survey","sql300.gigfa.com","gigfa_29739839_survey");
        $connection = $db->connect();
        $query = "insert into surveys (firstName,lastName,opinion,proposal,future,job,mobile,grade,universities,isRelated,entered_at) VALUES (:firstName,:lastName,:opinion,:proposal,:future,:job,:mobile,:grade,:universities,:isRelated,:entered_at)";
        $stmt = $connection->prepare($query);
        $stmt->bindValue(':firstName',$firstName);
        $stmt->bindValue(':lastName',$lastName);
        $stmt->bindValue(':opinion',$opinion);
        $stmt->bindValue(':proposal',$proposal);
        $stmt->bindValue(':grade',$grade);
        $stmt->bindValue(':job',$job);
        $stmt->bindValue(':future',$future);
        $stmt->bindValue(':mobile',$mobile);
        $stmt->bindValue(':universities',$universities);
        $stmt->bindValue(':isRelated',$isRelated);
        $stmt->bindValue(':entered_at',$enteredAt);
        $result = $stmt->execute();
        if($result){
            echo "success";
        }else{
            echo "error";
        }
        
    }










?>