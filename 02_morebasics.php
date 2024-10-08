<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>
<style>
*{
   margin: 0;
   padding: 0;
   box-sizing: border-box;
}
.container{
    max-width:80%; 
    background-colour: red;
    margin: auto;          
    }
</style>
<body>
    <div class="container">
        <h1>lets learn about php </h1>
        this is a php container
        <?php
        $age=34;
        if($age>18){
            echo"you can go to the party";
        }
        else{
            echo"you can not go to the party";
        }
        ?>
    </div>
    
</body>
</html>