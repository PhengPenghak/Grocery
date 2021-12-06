<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Current in Khmer</title>
</head>

<body>
    <h1 style="font-size: 20pt;color: blue; text-align: center;">
        <?php
        $dayKH = array(
            "Mon" => "ថ្ងៃចន្ទ",
            "Tue" => "ថ្ងៃអង្គារ៍",
            "Wed" => "ថ្ងៃពុធ",
            "Thu" => "ថ្ងៃព្រហស្បត្តិ័",
            "Fri" => "ថ្ងៃសុក្រ",
            "Sat" => "ថ្ងៃសៅរ៍",
            "Sun" => "ថ្ងៃអាទិត្យ"
        );
        $monthKH = array(
            "Jan" => "មករា",
            "Feb" => "កុម្ភៈ",
            "Mar" => "មីនា",
            "Apr" => "មេសា",
            "May" => "ឧសភា",
            "Jun" => "មិថុនា",
            "Jul" => "កក្កដា",
            "Aug" => "សីហា",
            "Sep" => "កញ្ញា",
            "Oct" => "តុលា",
            "Nov" => "វិច្ឆិកា",
            "Dec" => "ធ្នូ"
        );
        $numKH = array("០", "១", "២", "៣", "៤", "៥", "៦", "៧", "៨", "៩");

        echo $dayKH[date("D")] . " ទី"
            . $numKH[substr(date("d"), 0, 1)] . $numKH[substr(date("d"), 1, 1)]
            . " ខែ" . $monthKH[date("M")]
            . " ឆ្នាំ"
            . $numKH[substr(date("Y"), 0, 1)]
            . $numKH[substr(date("Y"), 1, 1)]
            . $numKH[substr(date("Y"), 2, 1)]
            . $numKH[substr(date("Y"), 3, 1)];


        ?>
    </h1>
</body>

</html>