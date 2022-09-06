<?php
require_once '../main/header.php';

require_once '../../controller/student/edit_student.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Student</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
                        <li class="breadcrumb-item active">Edit Student</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        
        <div class="container">
            <h1>Edit Student Form</h1>

            <form enctype="multipart/form-data" action="../../controller/student/edit_student.php?this_id=<?=$row['student_id']?>" method="POST">
                <div class="form-group">
                    <label for="txtStudentCode">Student code</label>
                    <input disabled value="<?php echo $row['student_code'] ?>" type="text" name="txtStudentCode" id="txtStudentCode" class="form-control" aria-describedby="helpId">
                </div>

                <div class="form-group">
                    <label for="txtStudentName">Student name</label>
                    <input value="<?php echo $row['student_name'] ?>" type="text" name="txtStudentName" id="txtStudentName" class="form-control" aria-describedby="helpId">
                </div>

                <div class="form-group">
                    <label for="formFile" class="form-label">Chọn ảnh sinh viên</label>
                    <input class="form-control" type="file" name="studentImage" id="formFile">
                    <img width="100" height="100" src="../../libraries/images/<?=$row['student_image']?>" alt="<?=$row['student_image']?>">
                </div>

                <div class="form-group">
                    <label for="txtStudentClass">Student class</label>
                    <input value="<?php echo $row['student_class'] ?>" type="text" name="txtStudentClass" id="txtStudentClass" class="form-control"  aria-describedby="helpId">
                </div>

                <button type="submit" name="btn-edit" class="btn btn-success">Edit Student</button>
            </form>

        </div>
    </section>
    <!-- /.content -->

    <?php
    require_once '../main/footer.php';
    ?>