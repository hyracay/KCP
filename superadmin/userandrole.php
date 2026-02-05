<?php


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>KCP Job Order</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="assets/img/kaiadmin/favicon.ico"
      type="image/x-icon"
    />

    <!-- Fonts and icons -->
    <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["../assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/plugins.min.css" />
    <link rel="stylesheet" href="../assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project
    <link rel="stylesheet" href="assets/css/demo.css" /> -->

  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <!-- responsive logo here -->
            <a href="index.php" class="logo">
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <li class="nav-item">
                <a href="dashboard.php">
                  <i class="fas fa-home"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="systemmanagement.php">
                  <i class="fas fa-clipboard-check"></i>
                  <p>System Management</p>
                </a>
              </li>
              <li class="nav-item active">
                <a href="userandrole.php">
                  <i class="fas fa-user"></i>
                  <p>User & Role Management</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="reportandmonitoring.php">
                  <i class="fas fa-bell"></i>
                  <p>Report and Monitoring</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../index.php">
                  <i class="fas fa-sign-out-alt"></i>
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->
      <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
              <a href="index.html" class="logo">
                <img
                  src="../assets/img/kaiadmin/logo_light.svg"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="20"
                />
              </a>
            </div>
            <!-- End Logo Header -->
          </div>
          <!-- Navbar Header -->
          <!-- <nav class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
            <div class="container-fluid">
              <nav class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
              </nav>
            </div>
          </nav> -->
          <!-- End Navbar -->
        </div>
        
        <br>
                <div class=" row-demo-grid">
                  <div class="col-md-11 ms-auto me-auto">
                    <div class="card">
                      <div class="card-body text-center">
                        <h2>User and Role Management</h2>
                      </div>
                    </div>
                  </div>
                </div>

<!-- USERS CARD -->
<div class="col-11 ms-auto me-auto">
  <div class="card">
    <div class="card-header">
      <div class="d-flex flex-column flex-sm-row align-items-sm-center">
        <h4 class="card-title mb-2 mb-sm-0">Users</h4>
        <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal" data-bs-target="#addUserModal">
          <i class="fa fa-plus"></i> Add New User
        </button>
      </div>
    </div>
    <div class="card-body">

      <!-- User Modal -->
      <div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header border-0">
              <h5 class="modal-title">
                <span class="fw-mediumbold"> Add</span>
                <span class="fw-light"> New User</span>
              </h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p class="small">Please complete all required fields before saving.</p>
              <form id="userForm">
                <div class="row">
                  <div class="col-12 mb-2">
                    <div class="form-group form-group-default">
                      <label>User Name</label>
                      <input type="text" class="form-control" placeholder="Enter user name" />
                    </div>
                  </div>
                  <div class="col-12 mb-2">
                    <div class="form-group form-group-default">
                      <label>Email Address</label>
                      <input type="email" class="form-control" placeholder="Enter email address" />
                    </div>
                  </div>
                  <div class="col-12 mb-2">
                    <div class="form-group form-group-default">
                      <label>Password</label>
                      <input type="password" class="form-control" placeholder="Enter password" />
                    </div>
                  </div>
                  <div class="col-12 mb-2">
                    <div class="form-group form-group-default">
                      <label>Department</label>
                      <select class="form-control">
                        <option value="" disabled selected>Select Department</option>
                        <option>IT</option>
                        <option>HR</option>
                        <option>Finance</option>
                        <option>Operations</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-12 mb-2">
                    <div class="form-group form-group-default">
                      <label>Role / User Type</label>
                      <select class="form-control">
                        <option value="" disabled selected>Select Role</option>
                        <option>Admin</option>
                        <option>Staff</option>
                        <option>Supervisor</option>
                        <option>User</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-12 mb-2">
                    <div class="form-group form-group-default">
                      <label>Status</label>
                      <select class="form-control">
                        <option value="" disabled selected>Select Status</option>
                        <option>Active</option>
                        <option>Inactive</option>
                        <option>Suspend</option>
                      </select>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer border-0">
              <button type="button" class="btn btn-primary" id="saveUserButton" data-bs-dismiss="modal">Save</button>
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Users Table -->
      <div class="table-responsive">
        <table id="userTable" class="display table table-striped table-hover">
          <thead>
            <tr>
            <td>
            <div class="form-group">

                <select
                class="form-select form-control"
                id="UserstatusSelect"
                >
                <option>Status</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                </select>
            </div>
            </td>
            </tr>
            <tr>
              <th>Name</th>
              <th>Email</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody></tbody>
        </table>
      </div>

    </div>
  </div>
</div>

<!-- DEPARTMENTS CARD -->
<div class="col-11 ms-auto me-auto">
  <div class="card">
    <div class="card-header">
      <div class="d-flex align-items-center">
        <h4 class="card-title">Departments</h4>
        <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal" data-bs-target="#addDepartmentModal">
          <i class="fa fa-plus"></i> Add New Department
        </button>
      </div>
    </div>
    <div class="card-body">

      <!-- Department Modal -->
      <div class="modal fade" id="addDepartmentModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header border-0">
              <h5 class="modal-title">
                <span class="fw-mediumbold"> Add</span>
                <span class="fw-light"> New Department </span>
              </h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p class="small">Please complete all required fields before saving.</p>
              <form id="departmentForm">
                <div class="row">
                  <div class="col-12 mb-2">
                    <div class="form-group form-group-default">
                      <label>Department Name</label>
                      <input type="text" class="form-control" placeholder="Enter department name" />
                    </div>
                  </div>
                  <div class="col-12 mb-2">
                    <div class="form-group form-group-default">
                      <label>Status</label>
                      <select class="form-control">
                        <option value="" disabled selected>Select Status</option>
                        <option>Active</option>
                        <option>Inactive</option>
                        <option>Suspend</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-12 mb-2">
                  <div class="form-group form-group-default">
                      <label>Department Head</label>
                      <input type="text" class="form-control" placeholder="Enter department head" />
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="modal-footer border-0">
              <button type="button" class="btn btn-primary" id="saveDepartmentButton" data-bs-dismiss="modal">Save</button>
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Departments Table -->
      <div class="table-responsive">
        <table id="departmentTable" class="display table table-striped table-hover">
          <thead>
            <tr>
              <th>Department Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody></tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</div>
</div>


        

        
    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="../assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="../assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="../assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="../assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="../assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Sweet Alert -->
    <script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="../assets/js/kaiadmin.min.js"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="../assets/js/setting-demo.js"></script>
    <script src="../assets/js/demo.js"></script>
    <script>
      $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#177dff",
        fillColor: "rgba(23, 125, 255, 0.14)",
      });

      $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#f3545d",
        fillColor: "rgba(243, 84, 93, .14)",
      });

      $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#ffa534",
        fillColor: "rgba(255, 165, 52, .14)",
      });
    </script>
  </body>
</html>
<script>
      $(document).ready(function () {
        $("#basic-datatables").DataTable({});

        $("#multi-filter-select").DataTable({
          pageLength: 5,
          initComplete: function () {
            this.api()
              .columns()
              .every(function () {
                var column = this;
                var select = $(
                  '<select class="form-select"><option value=""></option></select>'
                )
                  .appendTo($(column.footer()).empty())
                  .on("change", function () {
                    var val = $.fn.dataTable.util.escapeRegex($(this).val());

                    column
                      .search(val ? "^" + val + "$" : "", true, false)
                      .draw();
                  });

                column
                  .data()
                  .unique()
                  .sort()
                  .each(function (d, j) {
                    select.append(
                      '<option value="' + d + '">' + d + "</option>"
                    );
                  });
              });
          },
        });

        // Add Row
        $("#userTable, #departmentTable").DataTable({ pageLength: 5 });

        // Add User row
        $("#saveUserButton").click(function () {
        var table = $("#userTable").DataTable();
        var form = $("#userForm");
        table.row.add([
            form.find("input[type=text]").val(),       // Name
            form.find("input[type=email]").val(),      // Email
            form.find("select:last").val()             // Status
        ]).draw();
        form[0].reset();
        });

        // Add Department row
        $("#saveDepartmentButton").click(function () {
        var table = $("#departmentTable").DataTable();
        var form = $("#departmentForm");
        table.row.add([
            form.find("input[type=text]").val(),       // Department Name
            form.find("select").val(),                 // Status
            ""                                         // Empty for now
        ]).draw();
        form[0].reset();
        });

        // --- END OF NEW CODE ---
        });
    </script>