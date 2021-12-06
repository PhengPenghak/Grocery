<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array score</title>
</head>

<style>
    table {
        margin: 0 auto;
        border-collapse: collapse;
    }

    table th,
    table td {
        border: 1px solid blueviolet;
        font-size: 12px;
        color: black;
        width: 45px;
        height: 25px;
        text-align: center;
    }
</style>

<body>
    <?php

    $score = array(
        array(
            "No." => "01",
            "Name" => "Pheng Penghak",
            "OS" => 80,
            "Web" => 60,
            "DBMS" => 80,
            "Dektop" => 75,
            "Com. Admin" => 85
        ),
        array(
            "No." => "02",
            "Name" => "Thol Sotheara",
            "OS" => 80,
            "Web" => 90,
            "DBMS" => 80,
            "Dektop" => 90,
            "Com. Admin" => 85
        ),
        array(
            "No." => "02",
            "Name" => "LengYu",
            "OS" => 80,
            "Web" => 90,
            "DBMS" => 80,
            "Dektop" => 90,
            "Com. Admin" => 85
        )
    );
    // echo "<pre>";
    // print_r($score)
    ?>
    <table>
        <thead>
            <th>No.</th>
            <th style="width: 80px;">Name</th>
            <th>OS</th>
            <th>Web</th>
            <th>Desktop</th>
            <th>DMBS</th>
            <th>Com. Admin</th>
            <th>Total</th>
            <th>Mention</th>
        </thead>
        <tbody>
            <?php
            foreach ($score as $arr_row) {
                $total = 0;
            ?>
                <tr>
                    <td><?php echo $arr_row["No."] ?></td>
                    <td style="text-align:left;"><?php echo $arr_row["Name"] ?></td>
                    <td> <?php
                            echo $arr_row["OS"];
                            $total += $arr_row["OS"];
                            ?>
                    </td>
                    <td><?php
                        echo $arr_row["Web"];
                        $total += $arr_row["Web"];
                        ?></td>
                    <td>
                        <?php
                        echo $arr_row["DBMS"];
                        $total += $arr_row["DBMS"];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $arr_row["Dektop"];
                        $total += $arr_row["Dektop"];
                        ?>
                    </td>
                    <td><?php
                        echo $arr_row["Com. Admin"];
                        $total += $arr_row["Com. Admin"];
                        ?>
                    </td>
                    <td>
                        <?php
                        echo $total;
                        ?>
                    </td>
                    <td><?php
                        if ($total / 5 >= 60) {
                            echo "Passed!";
                        } else {
                            echo "Failed!";
                        }
                        ?></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>

</html>