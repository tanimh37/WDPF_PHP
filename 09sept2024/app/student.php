<?php
session_start();
if (!isset($_SESSION['email'])) {
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket Plus">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracketplus">
    <meta property="og:title" content="Bracket Plus">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracketplus/img/bracketplus-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>Bracket Plus Responsive Bootstrap 4 Admin Template</title>
    <?php include "partcails/styles_datatable.php"; ?>


  </head>

  <body>

    <!-- ########## START: LEFT PANEL ########## -->
    <?php include "partcails/left_penel.php"; ?>
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
  <?php include_once "partcails/headpanel.php"; ?>
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    <?php include_once "partcails/right_penel.php"; ?>
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">
      <div class="br-pageheader">
        <nav class="breadcrumb pd-0 mg-0 tx-12">
          <a class="breadcrumb-item" href="index.html">Bracket</a>
          <a class="breadcrumb-item" href="#">Tables</a>
          <span class="breadcrumb-item active">Data Table</span>
        </nav>
      </div><!-- br-pageheader -->
      <div class="br-pagetitle">
        <i class="icon icon ion-ios-bookmarks-outline"></i>
        <div>
          <h4>Data Table</h4>
          <p class="mg-b-0">DataTables is a plug-in for the jQuery Javascript library.</p>
        </div>
      </div><!-- d-flex -->

      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="br-section-label">Basic Responsive DataTable</h6>
          <p class="br-section-text">Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</p>

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">ID</th>
                  <th class="wd-15p">Name</th>
                  <th class="wd-20p">Email</th>
                  <th class="wd-15p">Phone</th>
                  <th class="wd-10p">Address</th>
                  <th class="wd-25p">Gender</th>
                </tr>
              </thead>
              <tbody>
    <?php require_once "dbconfig.php"; 
       $sql = $db->query("SELECT * FROM students");
        while($row = $sql->fetch_assoc()) {
    ?>
    

                <tr>
                  <td><?php echo $row['id']?></td>
                  <td><?php echo $row['name']?></td>
                  <td><?php echo $row['email']?></td>
                  <td><?php echo $row['phone']?></td>
                  <td><?php echo $row['address']?></td>
                  <td><?php echo $row['gender']?></td>

                </tr>
            <?php } ?>
              </tbody>
            </table>
          </div><!-- table-wrapper -->

        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->
      <?php include_once "partcails/footer.php" ?>
    </div>
    <!-- ########## END: MAIN PANEL ########## -->

  <?php include "partcails/js_datatables.php" ?>
  </body>
</html>
