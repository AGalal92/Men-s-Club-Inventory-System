<?php

include('config/connection.php');
include('templates/header.php');

?>



<main id="main" class="main">

    <div class="pagetitle">
        <h1>Computer Devices</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <!-- <li class="breadcrumb-item">Factory</li> -->
                <li class="breadcrumb-item active">Computer Devices</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <div class="col-sm-10">
                            <a href="add.php?action=add" type="button" class="btn btn-primary my-3 rounded-pill">Add New</a>
                        </div>
                        <!-- Table with stripped rows -->
                        <table class="table datatable table-hover text-center">
                            <thead>
                                <tr>
                                    <th scope="col" width="50">ID</th>
                                    <th scope="col">User Name</th>
                                    <th scope="col">Department</th>
                                    <th scope="col">Device Scheme</th>
                                    <th scope="col">Device Type</th>
                                    <th scope="col">Brand</th>
                                    <th scope="col">Device Model</th>
                                    <th scope="col">Serial Number</th>
                                    <th scope="col">Proccessor Type</th>
                                    <th scope="col">Proccessor Model</th>
                                    <th scope="col">Memory</th>
                                    <th scope="col">Storage</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = 'SELECT * FROM cdevices';
                                $result = mysqli_query($db, $query) or die(mysqli_error($db));

                                while ($row = mysqli_fetch_assoc($result)) {

                                    echo '<tr>';
                                    echo '<td>' . $row['ItemID'] . '</td>';
                                    echo '<td>' . $row['username'] . '</td>';
                                    echo '<td>' . $row['department'] . '</td>';
                                    echo '<td>' . $row['scheme'] . '</td>';
                                    echo '<td>' . $row['type'] . '</td>';
                                    echo '<td>' . $row['brand'] . '</td>';
                                    echo '<td>' . $row['model'] . '</td>';
                                    echo '<td>' . $row['serial'] . '</td>';
                                    echo '<td>' . $row['protype'] . '</td>';
                                    echo '<td>' . $row['promodel'] . '</td>';
                                    echo '<td>' . $row['ram'] . '</td>';
                                    echo '<td>' . $row['hdd'] . '</td>';
                                    // echo '<td> <a  type="button" class="btn btn-danger rounded-pill" href="del.php?type=courses&delete & id=' . $row['ItemID'] . '">DELETE </a> </td>';
                                    /* echo '<td>  <a type="button" class="btn btn-xs btn-info" href="searchfrm.php?action=edit & id=' . $row['course_id'] . '"> SEARCH </a> '; */
                                    /* echo ' <a type="button" class="btn btn-xs btn-warning" href="edit.php?action=edit & id=' . $row['course_id'] . '"> EDIT </a> '; */
                                    echo '</tr> ';
                                }
                                ?>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->

<?php include('templates/footer.php'); ?>