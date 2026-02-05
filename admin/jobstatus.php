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
              <li class="nav-item active">
                <a href="jobstatus.php">
                  <i class="fas fa-clipboard-check"></i>
                  <p>Job Status & Tracking</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="feedbacks.php">
                  <i class="fas fa-comment-dots"></i>
                  <p>Feedbacks</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="notifications.php">
                  <i class="fas fa-bell"></i>
                  <p>Notifications</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php">
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
                        <h2>Report and Monitoring</h2>
                      </div>
                    </div>
                  </div>
                </div>
        

    <!-- JOB STATUS-->
            <div class="col-md-11 ms-auto me-auto">
                <div class="card">
                  <div class="card-header">
                    <div class="d-flex align-items-center">
                      <h4 class="card-title">Job Status & Tracking</h4>
                      <button
                        class="btn btn-primary btn-round ms-auto"
                        data-bs-toggle="modal"
                        data-bs-target="#addRowModal"
                      >
                        <i class="fa fa-plus"></i>
                        Request Form
                      </button>
                    </div>
                  </div>
                  <div class="card-body">
                    <!-- Modal -->
                  <div
                    class="modal fade"
                    id="addRowModal"
                    tabindex="-1"
                    role="dialog"
                    aria-hidden="true"
                  >
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header border-0">
                          <h5 class="modal-title">
                            <span class="fw-mediumbold"> Request</span>
                            <span class="fw-light"> Form </span>
                          </h5>
                          <button
                            type="button"
                            class="close"
                            data-bs-dismiss="modal"
                            aria-label="Close"
                          >
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>

                        <div class="modal-body">
                          <p class="small">
                            Please complete all required fields before saving.
                          </p>

                          <form>
                            <div class="row">

                              <!-- Date Filled (auto, realtime) -->
                              <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                  <label>Date Filled</label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    value=""
                                    id="dateFilled"
                                    readonly
                                  />
                                </div>
                              </div>

                              <!-- Office / Department -->
                              <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                  <label>Office / Department</label>
                                  <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Enter office or department"
                                  />
                                </div>
                              </div>

                              <!-- Divider -->
                              <div class="col-sm-12">
                                <hr />
                              </div>

                              <!-- Tasks / Job Description -->
                              <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                  <label>Tasks / Job Description</label>
                                  <textarea
                                    class="form-control"
                                    placeholder="Enter task or job description"
                                  ></textarea>
                                </div>
                              </div>

                              <!-- Purpose -->
                              <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                  <label>Purpose</label>
                                  <textarea
                                    class="form-control"
                                    placeholder="Enter purpose"
                                  ></textarea>
                                </div>
                              </div>

                              <!-- Estimated Costs -->
                              <div class="col-md-6 pe-0">
                                <div class="form-group form-group-default">
                                  <label>Estimated Costs</label>
                                  <input
                                    type="number"
                                    class="form-control"
                                    placeholder="Enter estimated cost"
                                  />
                                </div>
                              </div>

                              <!-- Date When Needed -->
                              <div class="col-md-6">
                                <div class="form-group form-group-default">
                                  <label>Date When Needed</label>
                                  <input
                                    type="date"
                                    class="form-control"
                                  />
                                </div>
                              </div>

                              <!-- Total Costs -->
                              <div class="col-sm-12">
                                <div class="form-group form-group-default">
                                  <label>Total Costs</label>
                                  <input
                                    type="number"
                                    class="form-control"
                                    placeholder="Enter total cost"
                                  />
                                </div>
                              </div>

                            </div>
                          </form>
                        </div>

                        <div class="modal-footer border-0">
                          <button
                            type="button"
                            class="btn btn-primary"
                            id="saveRequestButton"
                            data-bs-dismiss="modal"
                          >
                            Save
                          </button>
                          <button
                            type="button"
                            class="btn btn-danger"
                            data-bs-dismiss="modal"
                          >
                            Cancel
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>

                    <div class="table-responsive">
                      <table
                        id="add-row"
                        class="display table table-striped table-hover"
                      >
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Job</th>
                            <th>Staff</th>
                            <th style="width: 10%">Feedback</th>
                          </tr>
                        </thead>
                        <tbody>
                        </tbody>
                      </table>
                    </div>
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
        $("#add-row").DataTable({
          pageLength: 5,
        });

        var action =
          '<td> <div class="form-button-action"> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-bs-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

        $("#addRowButton").click(function () {
          $("#add-row")
            .dataTable()
            .fnAddData([
              $("#addName").val(),
              $("#addPosition").val(),
              $("#addOffice").val(),
              action,
            ]);
          $("#addRowModal").modal("hide");
        });
      });
    </script>