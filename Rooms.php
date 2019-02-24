<?php
require_once "./Database.php";

class Rooms extends Database {
    public function print_rooms() {
        $sql = "SELECT * FROM rooms";
        $result = mysqli_query($this->connect, $sql);

        while($row = mysqli_fetch_assoc($result)) {

            echo "<div>";     
                ?>
                    <h3 style="display: inline-block;">
                        <?php echo $row['name'] ."-". $row['number'] ?>
                    </h3> 
                <?php;
                
                if($row['status'] == 0) {
                    ?>
                        <form action="./room_list.php" method="POST" style="display: inline-block;">
                            <input type="hidden" name="room_id" value="<?php echo $row['id'] ?>">
                            <input type="submit" name="reserve" value="Reserve Room">
                        </form>
                    <?php
                }
                else {
                    echo 'The room reserved';
                }
            echo "</div>";
        }
    }

    public function reserve_room($room_id) {
        if($room_id != '') {
            $update = "UPDATE `rooms` SET `status`='1' WHERE `id`='$room_id'";
            $result = mysqli_query($this->connect, $update); 
        }
    }
}