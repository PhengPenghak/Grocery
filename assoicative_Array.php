<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $dayKH = array("Mon"=>"ច័ន្ទ","Tue"=>"អង្ការ","Wed"=>"ពុធ","thu"=>"ព្រហស្បតិ៍","Fri"=>"សុក្រ","Sat"=>"សៅរ៍","Sun"=>"អាទិត្យ")
        // echo $dayKH["Mon"];

        foreach ($dayKH as $day =>$day){
            echo $day ."<br>";
        }
    
    ?>
</body>
</html>