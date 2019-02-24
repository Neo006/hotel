<?php
    require('./Rooms.php');
    $rooms = new Rooms;

    if(isset($_POST['reserve'])) {
        $rooms->reserve_room($_POST['room_id']);
    }
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Room List</h1>
    <div>
        <?php
            $room_list = $rooms->print_rooms();
        ?>
    </div>  
</body>
</html>