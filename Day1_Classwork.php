<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="styel.css">
    <title>Document</title>

</head>
<body>
    <style></style>
        
    
<?php 
// # Exercise 1
// $name = "Ateyaf & Kristofar";
// echo "<h1> $name </h1>";



#Exercise 2
// $name = "Ateyaf & Kristofar";
// $age = 30 & 24;
// $job_title ="couch driver";

// echo "<h1> Hi, we are  $name, and we are $age years old, and we work as a $job_title </h1>";

// echo'<img style= "width: 18%; height: 8%; margin-left: 35%; " src="https://cdn.pixabay.com/photo/2020/04/01/01/25/smile-4989709__340.png" > ';

#Exercise 3
// $names = array("Mark", "John", "Georg" ,"Lisa");
// echo "<h1>the third player in the team is $names[2]</h1>"


#Day 1 | Advanced

$marks = array(
    "cartoon" => array
        (
        "best_cartoon" => "Mickey Mouse",
        "best_Arabic_cartoon" =>  "sinbad"
        
        ),
    "anime" =>  array
        (
            "best_anime"  =>"Goku" ,
            "best_anime2" => "Pokemon" 
       
        ),
    "game" =>  array
        (
            "play_on_nintendo" => "Super_Mario" ,
            "play_on_PS4"=> "naruto_game" 
      
        )
    );
     /* Accessing multidimensional array values */
    
     echo "<h2>best cartoon we love :</h2>";
     echo "<h5>".$marks['cartoon']['best_cartoon'] . "</h5>" ;
     echo "<h2>best anime we love:</h2>";
     echo "<h5>".$marks['anime']['best_anime'] . "</h5>" ;
     echo "<h2>best game:<h2>" ;
     echo "<h5>". $marks['game']['play_on_nintendo'] .  "</h5>";
     
   
?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>