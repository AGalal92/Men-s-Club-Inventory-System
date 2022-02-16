<?php

include('config/connection.php');
include('templates/header.php');

?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>IP's</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                <li class="breadcrumb-item">Branches</li>
                <li class="breadcrumb-item active">IP's</li>
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
                                    <th scope="col">Store Name</th>
                                    <th scope="col">Store Code</th>
                                    <th scope="col">Connection</th>
                                    <th scope="col">PC IP</th>
                                    <th scope="col">Att IP</th>
                                    <th scope="col">DVR IP</th>
                                    <th scope="col">Vigor IP</th>
                                    <th scope="col">Router IP</th>
                                    <th scope="col">WAN IP</th>
                                    <th scope="col">Static IP</th>
                                    <th scope="col">MASK</th>
                                    <th scope="col">Gateway</th>
                                    <th scope="col">DNS1</th>
                                    <th scope="col">DNS2</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = 'SELECT * FROM branches';
                                $result = mysqli_query($db, $query) or die(mysqli_error($db));

                                while ($row = mysqli_fetch_assoc($result)) {

                                    echo '<tr>';
                                    echo '<td>' . $row['ItemID'] . '</td>';
                                    echo '<td>' . $row['storename'] . '</td>';
                                    echo '<td>' . $row['storecode'] . '</td>';
                                    echo '<td>' . $row['dslorsim'] . '</td>';
                                    echo '<td>' . '<a href="#" data-bs-toggle="modal" data-bs-target="#verticalycentered">' . $row['pcip'] . '</a>' . '</td>';
                                    echo '<td>' . '<a href="#" data-bs-toggle="modal" data-bs-target="#verticalycentered">' . $row['attip'] . '</a>' . '</td>';
                                    echo '<td>' . '<a href="#" data-bs-toggle="modal" data-bs-target="#verticalycentered">' . $row['dvrip'] . '</a>' . '</td>';
                                    echo '<td>' . '<a href="#" data-bs-toggle="modal" data-bs-target="#verticalycentered">' . $row['vigorip'] . '</a>' . '</td>';
                                    echo '<td>' . '<a href="#" data-bs-toggle="modal" data-bs-target="#verticalycentered">' . $row['routerip'] . '</a>' . '</td>';
                                    echo '<td>' . $row['wanip'] . '</td>';
                                    echo '<td>' . $row['staticip'] . '</td>';
                                    echo '<td>' . $row['mask'] . '</td>';
                                    echo '<td>' . $row['gateway'] . '</td>';
                                    echo '<td>' . $row['dnsone'] . '</td>';
                                    echo '<td>' . $row['dnstwo'] . '</td>';
                                    // echo '<td> <a  type="button" class="btn btn-danger rounded-pill" href="del.php?type=courses&delete & id=' . $row['ItemID'] . '">DELETE </a> </td>';
                                    /* echo '<td>  <a type="button" class="btn btn-xs btn-info" href="searchfrm.php?action=edit & id=' . $row['course_id'] . '"> SEARCH </a> '; */
                                    /* echo ' <a type="button" class="btn btn-xs btn-warning" href="edit.php?action=edit & id=' . $row['course_id'] . '"> EDIT </a> '; */
                                    echo '</tr> ';

                                    $vigorPassword[] = $row['vigorpassword'];
                                }
                                ?>
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

                <div class="card">
                    <div class="card-body">

                        <div class="modal fade" id="verticalycentered" tabindex="-1" aria-hidden="true" style="display: none;">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"><?php echo $vigorPassword ?></h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Non omnis incidunt qui sed occaecati magni asperiores est mollitia. Soluta at et reprehenderit. Placeat autem numquam et fuga numquam. Tempora in facere consequatur sit dolor ipsum. Consequatur nemo amet incidunt est facilis. Dolorem neque recusandae quo sit molestias sint dignissimos.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End Vertically centered Modal-->

                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->
<?php include('templates/footer.php'); ?>