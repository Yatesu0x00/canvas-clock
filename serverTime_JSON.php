
<?php 
    $time = date('Y-m-d-g-i-s', time());
    $date = date_create_from_format("Y-m-d-g-i-s", $time);
    $result = array(
        'year' => (int)$date->format('Y'),
        'month' => $date->format('m'),
        'day' => (int)$date->format('j'),
        'hour' => (int)$date->format('g'),
        'min' => $date->format('i'),
        'sec' => (int)$date->format('s')       
    );

    $myJSON = json_encode($result);

    echo($myJSON);
?> 