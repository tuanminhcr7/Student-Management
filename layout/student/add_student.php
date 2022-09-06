<?php
require_once '../main/header.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Add Student</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="../../index.php">Home</a></li>
            <li class="breadcrumb-item active">Add Student</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container">
      <h1>Add Student Form</h1>

      <form enctype="multipart/form-data" action="../../controller/student/add_student.php" method="POST">
        <div class="form-group">
          <label for="txtStudentCode">Student code</label>
          <input type="text" name="txtStudentCode" id="txtStudentCode" class="form-control" placeholder="Enter student code..." aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="txtStudentName">Student name</label>
          <input type="text" name="txtStudentName" id="txtStudentName" class="form-control" placeholder="Enter student name..." aria-describedby="helpId">
        </div>

        <div class="form-group">
          <label for="formFile" class="form-label">Chọn ảnh sinh viên</label>
          <input class="form-control" type="file" name="studentImage" id="formFile">
        </div>

        <div class="form-group">
          <label for="txtStudentClass">Student class</label>
          <input type="text" name="txtStudentClass" id="txtStudentClass" class="form-control" placeholder="Enter student class..." aria-describedby="helpId">
        </div>

        <button type="submit" name="btn-add" class="btn btn-success">Add Student</button>
      </form>

    </div>
  </section>
  <!-- /.content -->

  <?php
  require_once '../main/footer.php';
  ?>