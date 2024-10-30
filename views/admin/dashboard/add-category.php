<?php include('../controllers/categoryController.php');
?>
<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">


<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Admin</title>
  <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicons/favicon-16x16.png">
  <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicons/favicon.ico">
  <link rel="manifest" href="../assets/img/favicons/manifest.json">

  <meta name="msapplication-TileImage" content="../assets/img/favicons/mstile-150x150.png">
  <meta name="theme-color" content="#ffffff">
  <script src="../assets/js/config.js"></script>
  <script src="../vendors/simplebar/simplebar.min.js"></script>

  <link rel="preconnect" href="https://fonts.gstatic.com/">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
  <link href="../vendors/simplebar/simplebar.min.css" rel="stylesheet">
  <link href="../assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
  <link href="../assets/css/theme.min.css" rel="stylesheet" id="style-default">
  <link href="../assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
  <link href="../assets/css/user.min.css" rel="stylesheet" id="user-style-default">
  <script src="../js/header.js"></script>

</head>

<body>
  <main class="main" id="top">
    <div class="container" data-layout="container">

      <script src="../js/top.js"></script>
      <?php include('../menu.php '); ?>
      <?php include('../menuTop.php'); ?>

      <div class="content">
        <?php include('navbar.php'); ?>

        <script src="../js/navbarPosition.js"></script>

        <div class="row g-0">
          <div class="col-lg-12 pe-lg-4">

            <div class="card mb-3">

              <div class="card-body">
                <div class="col-6 col-sm-auto d-flex align-items-center pe-0">
                  <h5 class="fs-9 mb-0 text-nowrap py-2 py-xl-0"> New Category</h5>
                  <button class="btn btn-falcon-default btn-sm" type="button" data-toggle="modal" data-target="#addCategoryModal">
                    <span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span>
                    <span class="d-none d-sm-inline-block ms-1">New</span>
                  </button>
                </div>
                <div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-labelledby="addCategoryLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="addCategoryLabel">Add New Category</h5>

                      </div>
                      <form method="post">
                        <div class="modal-body">
                          <div class="mb-3">
                            <label for="categoryName" class="form-label">Category Name:</label>
                            <input class="form-control" id="categoryName" type="text" name="Category" required />
                          </div>
                          <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" name="is_host" id="isHostCheck">
                            <label class="form-check-label" for="isHostCheck">Is host</label>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                          <input type="submit" name="submit" value="Add Category" class="btn btn-primary">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-header">

              <?php if ($thanhcong): ?>
                <div="alert alert-success alert-dismissible fade show mt-2" role="alert">
                  <?php echo $thanhcong; ?>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  </div=>
                  <script>
                    setTimeout(() => {
                      $('.alert-success').alert('close');
                    }, 3000);
                  </script>
                <?php endif; ?>
                <div>
                  <?php
                  if (isset($errors['delete'])) {
                    echo "<div class='alert alert-danger alert-dismissible fade show mt-2' role='alert'>" . $errors['delete'] . "
            <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
            </button>
        </div>";
                  }
                  ?>
                </div>


                <?php
                if (isset($errors['nhap'])) {
                  echo "<div class='alert alert-danger alert-dismissible fade show mt-2' role='alert'>" . $errors['nhap'] . "
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button>
                                </div>";
                }
                if (isset($errors['nhap2'])) {
                  echo "<div class='alert alert-danger alert-dismissible fade show mt-2' role='alert'>" . $errors['nhap2'] . "
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button>
                                </div>";
                }
                if (isset($errors['insert'])) {
                  echo "<div class='alert alert-danger alert-dismissible fade show mt-2' role='alert'>" . $errors['insert'] . "
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                        <span aria-hidden='true'>&times;</span>
                                    </button>
                                </div>";
                }
                ?>
                <div class="datatable-container">



                  <table class="table table-dashboard mb-0 table-borderless fs-10 border-200">
                    <thead class="bg-body-tertiary">
                      <tr>

                        <th class="text-900">ID</th>
                        <th class="text-900 text-center">Category Name</th>
                        <th class="text-900 text-center">Is host</th>
                        <th class="text-900 text-center ">Function</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php if ($result->num_rows > 0): ?>
                        <?php
                        $index = 1;
                        while ($list = $result->fetch_assoc()) { ?>
                          <tr>
                            <td class="text-900 text-center"><?php echo $index++; ?></td>
                            <td class="text-900 text-center"><?php echo $list['category_name']; ?></td>
                            <td class="text-900 text-center"><?php echo $list['is_host'] ? 'Yes' : 'No'; ?></td>
                            <td class="text-900 text-center">
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-id="<?php echo $list['category_id']; ?>" data-name="<?php echo $list['category_name']; ?>" data-is_host="<?php echo $list['is_host']; ?>">
                                Edit
                              </button>
                              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#viewModal" data-id="<?php echo $list['category_id']; ?>" data-name="<?php echo $list['category_name']; ?>" data-is_host="<?php echo $list['is_host']; ?>">
                                View
                              </button>
                              <form method="post" style="display:inline;" onsubmit="return confirmDelete();">
                                <input type="hidden" name="delete_id" value="<?php echo $list['category_id']; ?>">
                                <input type="submit" name="delete" value="Delete" class="btn btn-danger">
                              </form>
                            </td>



                          </tr>
                        <?php } ?>
                      <?php else: ?>
                        <tr>
                          <td class="text-900 text-center" colspan="7" class="text-center">No contacts found</td>
                        </tr>
                      <?php endif; ?>

                    </tbody>
                  </table>




                </div>
                <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="viewModalLabel">View Category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="mb-3">
                          <label for="viewCategory" class="form-label">Category name</label>
                          <input type="text" id="viewCategory" class="form-control" disabled>
                        </div>
                        <div class="mb-3 form-check">
                          <input type="checkbox" class="form-check-input" id="viewIsHost" disabled>
                          <label class="form-check-label" for="viewIsHost">Is host</label>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>

                      </div>
                      <div class="modal-body">
                        <form method="post">
                          <div class="mb-3">
                            <label for="updatedCategory" class="form-label">Category name</label>
                            <input type="text" id="updatedCategory" name="updatedCategory" class="form-control" required>
                            <input type="hidden" id="category_id" name="category_id">
                          </div>
                          <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" name="updatedIsHost" id="updatedIsHost">
                            <label class="form-check-label" for="updatedIsHost">Is host</label>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" name="update" value="Save changes" class="btn btn-primary">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

                <div>
                  <?php
                  if (isset($errors['update'])) {
                    echo "<div class='alert alert-danger alert-dismissible fade show mt-2' role='alert'>" . $errors['update'] . "
                                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                            <span aria-hidden='true'>&times;</span>
                                        </button>
                                    </div>";
                  }
                  if (isset($errors['updateError'])) {
                    echo "<div class='alert alert-danger alert-dismissible fade show mt-2' role='alert'>" . $errors['updateError'] . "
                                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                            <span aria-hidden='true'>&times;</span>
                                        </button>
                                    </div>";
                  }
                  ?>
                </div>
            </div>
          </div>

        </div>

      </div>

      <?php include('../footer.php '); ?>
    </div>

    </div>



    <script src="../vendors/popper/popper.min.js"></script>
    <script src="../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../vendors/anchorjs/anchor.min.js"></script>
    <script src="../vendors/is/is.min.js"></script>
    <script src="../vendors/chart/chart.umd.js"></script>
    <script src="../vendors/countup/countUp.umd.js"></script>
    <script src="../vendors/echarts/echarts.min.js"></script>
    <script src="../vendors/dayjs/dayjs.min.js"></script>
    <script src="../vendors/fontawesome/all.min.js"></script>
    <script src="../vendors/lodash/lodash.min.js"></script>
    <script src="../../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="../vendors/list.js/list.min.js"></script>
    <script src="../assets/js/theme.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
      $('#exampleModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var categoryId = button.data('id');
        var categoryName = button.data('name');
        var isHost = button.data('is_host');

        var modal = $(this);
        modal.find('#category_id').val(categoryId);
        modal.find('#updatedCategory').val(categoryName);
        modal.find('#updatedIsHost').prop('checked', isHost == 1);
      });
      $('#viewModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget);
        var categoryId = button.data('id');
        var categoryName = button.data('name');
        var isHost = button.data('is_host');

        var modal = $(this);
        modal.find('#viewCategory').val(categoryName);
        modal.find('#viewIsHost').prop('checked', isHost == 1);
      });
    </script>
    <script>
      function confirmDelete() {
        return confirm("Are you sure you want to delete this category?");
      }
    </script>
</body>



</html>