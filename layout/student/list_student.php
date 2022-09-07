<?php
require_once '../../controller/student/list_student.php';
require_once '../../layout/main/header.php';

?>

<style>
    .active-page {
        background-color: #ddd;
        color: #007bff;
    }

    table tbody tr:hover {
        background-color: #ddd;
    }
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">List Student</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
                        <li class="breadcrumb-item active">List Student</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="container">
        <div class="row mb-3">
            <div class="col-6"><?= $where ?></div>
            <div style="display: flex; justify-content: end;" class="col-6">
                <form class="form-inline " method="GET">
                    <input name="search" class="form-control my-0 py-1 red-border" type="text" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn" type="submit">
                            <span class="input-group-text red lighten-3" id="basic-text1"><i class="fas fa-search text-grey" aria-hidden="true"></i></span>
                        </button>
                    </div>
                </form>
            </div>
            <!-- Search form -->

        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container">
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th style="text-align: center;">#</th>
                        <th style="text-align: center;">Student code</th>
                        <th style="text-align: center;">Student image</th>
                        <th style="text-align: center;">Student name</th>
                        <th style="text-align: center;">Student class</th>
                        <th style="text-align: center;" colspan="2">Active</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($list_student as $key => $row) {

                    ?>
                        <tr>
                            <td style="vertical-align: middle;"><?= $start++ ?></td>
                            <td style="vertical-align: middle;"><?= $row['student_code'] ?></td>
                            <td style="vertical-align: middle;">
                                <img src="../../libraries/images/<?= $row['student_image'] ?>" alt="<?= $row['student_image'] ?>" width="50" height="50" />
                            </td>
                            <td style="vertical-align: middle;"><?= $row['student_name'] ?></td>
                            <td style="vertical-align: middle;"><?= $row['student_class'] ?></td>
                            <td style="text-align: center; vertical-align: middle;">
                                <a href="./edit_student.php?this_id=<?= $row['student_id'] ?>" class="text-success">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td style="text-align: center; vertical-align: middle;">
                                <a href="../../controller/student/delete_student.php?this_id=<?= $row['student_id'] ?>" class="text-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php

                    }
                    ?>
                </tbody>
            </table>
            <div style="display: flex; justify-content: end;">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">

                        <?php
                        if (isset($_GET['page']) && $_GET['page'] > 1) {
                        ?>
                            <li class="page-item"><a class="page-link" href="?page=<?= $_GET['page'] - 1 ?>">Prev</a></li>
                        <?php
                        }
                        ?>
                        <?php
                        for ($i = 1; $i <= $number_of_page; $i++) {
                        ?>
                            <li class="page-item ">
                                <a class="page-link 
                                <?php
                                if ($_GET['page'] == $i) {
                                    echo 'active-page';
                                }
                                ?>" href="?page=<?= $i ?>"><?= $i ?></a>
                            </li>
                        <?php
                        }
                        ?>

                        <?php
                        if (isset($_GET['page']) && $_GET['page'] < $number_of_page) {
                        ?>
                            <li class="page-item"><a class="page-link" href="?page=<?= $_GET['page'] + 1 ?>">Next</a></li>
                        <?php
                        }
                        ?>

                    </ul>
                </nav>
            </div>

        </div>

    </section>

    <?php
    require_once '../../layout/main/footer.php';
    ?>