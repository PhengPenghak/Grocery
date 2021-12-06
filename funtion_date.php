
        <?php
        function dateKH($dayName,$dayNo , $monthName ,$year){
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

        }
    ?>



    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title></title>
      </head>
      <body>

      </body>
    </html>
