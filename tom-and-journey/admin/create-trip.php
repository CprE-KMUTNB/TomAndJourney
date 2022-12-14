<?php

include('config/authentication.php');

include('includes/header.php');

include('config/alert_box.php');
include('../config.php');

?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Recommend Trip Planner</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Create your trip planner</li>
    </ol>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4> Edit Geocoding LAT/LON
                        <a href='add-create-trip.php' class="btn btn-primary float-end">Add</a>
                    </h4>

                </div>
                <div class="card-body">

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>TRIP LIST</th>
                                <th>DELETE</th>
                            </tr>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM $database_table_14";
                            $query = mysqli_query($conn, $sql);
                            $id_arr = array();
                            // $count = 0;

                            if ($query) {

                                while ($row = mysqli_fetch_row($query)) {

                            ?>
                                    <tr>
                                        <td><?= $row[0]; ?></td>
                                        <td><?= $row[1]; ?></td>

                                        <!-- inner join -->
                                        <?php
                                        // echo $row[2];
                                        $trip_list = array();
                                        $temp = '';


                                        // echo strlen($row[2]);
                                        for ($i = 0; $i < strlen($row[2]); $i++) {

                                            if ($row[2][$i] != ',') {
                                                $temp .= $row[2][$i];
                                                // echo $row[2][$i];

                                            } else {
                                                // echo $temp . '<br>'
                                                $sql_2 = "SELECT $database_table_14.$database_table_14_tripnum_field, $database_table_13.$database_table_2_id_field, $database_table_13.$database_table_2_name_field, $database_table_13.$database_table_2_address_field, $database_table_13.$database_table_2_lat_field, $database_table_13.$database_table_2_lng_field, $database_table_13.$database_table_2_type_field
                                                        FROM $database_table_14
                                                        INNER JOIN $database_table_13
                                                        ON " . $temp . "= $database_table_13.$database_table_2_id_field";

                                                $query_2 = mysqli_query($conn, $sql_2);

                                                if ($query_2) {

                                                    while ($row_2 = mysqli_fetch_row($query_2)) {


                                                        if ($row_2[1] == $temp) {

                                                            // echo $row[2][$i] . '<br>';
                                                            $temp_data = array(

                                                                'name' =>  $row_2[2],
                                                                'address' =>  $row_2[3],
                                                                'lat' =>  $row_2[4],
                                                                'lng' =>  $row_2[5],
                                                                'type' =>  $row_2[6],
                                                            );
                                                            array_push(
                                                                $trip_list,
                                                                $temp_data,
                                                            );
                                                            break;
                                                        }
                                                    }
                                                }
                                                $temp = '';
                                            }
                                        }

                                        $show_trip_list = "";
                                        // print_r($trip_list);
                                        // echo '<br>';



                                        for ($i = 0; $i < count($trip_list); $i++) {
                                            $show_trip_list .=  "name : " . $trip_list[$i]['name'] . "<br> address : " . $trip_list[$i]['address'] . "<br> lat : " . $trip_list[$i]['lat'] . "<br> lng : " . $trip_list[$i]['lng'] . "<br> type : " . $trip_list[$i]['type'] . "<br> <br>";
                                        }
                                        ?>

                                        <td><?= $show_trip_list ?></td>
                                        <td>
                                            <form action="create-trip-add-update.php?id=<?= $row[0]; ?>&location_id=<?= $row[2]; ?>" name="delete_trip_set" method="post">
                                                <button type="submit" name="delete_trip_set" value="<?= $row[0]; ?>" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php


                                }
                            } else {
                                ?>
                                <tr>
                                    <td colspan="8">Can't connect to database</td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                        </thead>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
include('includes/footer.php');
include('includes/scripts.php');
?>