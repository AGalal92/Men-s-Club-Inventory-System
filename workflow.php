<?php

include('config/connection.php');
include('templates/header.php');
include('templates/side_nav.php');
?>



<main id="main" class="main">

    <div class="pagetitle">
        <h1>Fasion</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Factory</li>
                <li class="breadcrumb-item active">Fasion</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <img src="assets/img/card.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <?php
                        $query = 'SELECT * FROM workflow';
                        $result = mysqli_query($db, $query) or die(mysqli_error($db));

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '<h5 class="card-title">Model Name:' . $row['modelName'] . '</h5>';
                            echo '<p class="card-text">Code: ' . $row['code'] . '</p>';
                            echo '<p class="card-text">Date: ' . $row['date'] . '</p>';
                        } ?>
                    </div>
                </div>

            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <!-- Table with stripped rows -->
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">Department</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Comment</th>
                                    <th scope="col">Date Submitted</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $query = 'SELECT * FROM workflow';
                                $result = mysqli_query($db, $query) or die(mysqli_error($db));

                                while ($row = mysqli_fetch_assoc($result)) {

                                    echo '<tr>';
                                    echo '<td>Cutting</td>';
                                    if ($row['progress'] == true) {
                                        echo '<td><button class="btn btn-primary" type="button" disabled="">
                                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                                        In Progress...
                                    </button></td>';
                                    }
                                    echo '<td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ExtralargeModal">
                                    Comment
                                  </button></td>';
                                    echo '<td>' . $row['date'] . '</td>';
                                    echo '</tr> ';

                                    echo '<tr>';
                                    echo '<td>Printing</td>';
                                    echo '<td>' . $row['supplier'] . '</td>';
                                    echo '<td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ExtralargeModal">
                                    Comment
                                  </button></td>';
                                    echo '<td>' . $row['date'] . '</td>';
                                    echo '</tr> ';

                                    echo '<tr>';
                                    echo '<td>Embroidery</td>';
                                    echo '<td>' . $row['supplier'] . '</td>';
                                    echo '<td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ExtralargeModal">
                                    Comment
                                  </button></td>';
                                    echo '<td>' . $row['date'] . '</td>';
                                    echo '</tr> ';

                                    echo '<tr>';
                                    echo '<td>Line In</td>';
                                    echo '<td>' . $row['supplier'] . '</td>';
                                    echo '<td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ExtralargeModal">
                                    Comment
                                  </button></td>';
                                    echo '<td>' . $row['date'] . '</td>';
                                    echo '</tr> ';

                                    echo '<tr>';
                                    echo '<td>Line Out</td>';
                                    echo '<td>' . $row['supplier'] . '</td>';
                                    echo '<td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ExtralargeModal">
                                    Comment
                                  </button></td>';
                                    echo '<td>' . $row['date'] . '</td>';
                                    echo '</tr> ';

                                    echo '<tr>';
                                    echo '<td>Washing</td>';
                                    echo '<td>' . $row['supplier'] . '</td>';
                                    echo '<td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ExtralargeModal">
                                    Comment
                                  </button></td>';
                                    echo '<td>' . $row['date'] . '</td>';
                                    echo '</tr> ';

                                    echo '<tr>';
                                    echo '<td>Iron And Packing</td>';
                                    echo '<td>' . $row['supplier'] . '</td>';
                                    echo '<td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ExtralargeModal">
                                    Comment
                                  </button></td>';
                                    echo '<td>' . $row['date'] . '</td>';
                                    echo '</tr> ';

                                    echo '<tr>';
                                    echo '<td>Inventory</td>';
                                    echo '<td>' . $row['supplier'] . '</td>';
                                    echo '<td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ExtralargeModal">
                                    Comment
                                  </button></td>';
                                    echo '<td>' . $row['date'] . '</td>';
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

    <!-- Comment -->

    <div class="modal fade" id="ExtralargeModal" tabindex="-1">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Request an Edit or type a Comment</h5>

                            <!-- Quill Editor Full -->
                            <p>Write a Comment</p>
                            <div class="quill-editor-full">
                                <p>Write your Comment....</p>
                            </div>
                            <!-- End Quill Editor Full -->

                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div><!-- End Comment-->
    <!-- <button class="btn btn-primary" type="button" disabled="">
                            <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                            In Progress...
                        </button> -->
</main><!-- End #main -->

<?php include('templates/footer.php'); ?>