<?php 
 //Connection with Mongo 
 require 'vendor/autoload.php';

        $client = new MongoDB\Client; 
        $db = $client->vehicle; 
        $col = $db->booking; 
        


            if(isset($_POST['book'])) 
            { 
              //   $id=$_POST['name']; 
              
                $name = $_POST['name'];
                $email=$_POST['email']; 
                $vehicle=$_POST['vehicle']; 
                $Seater=$_POST['Seater']; 
                $qur=$col->insertOne(['name'=>$name,'email'=>$email,'vehicle'=>$vehicle,'Seater'=>$Seater]); 
            } 
            ?> 