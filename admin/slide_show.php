<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="assets/"
    data-template="vertical-menu-template-free">

<head>
    <?php include 'template/head.php'; ?>
</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container" style="background-image:url(../img/pattern.png );">

            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu " style="background-image:url(../img/pattern.png );background-color:#1c2841 ;">
            <div class="app-brand demo mt-3" >
                <a href="index.php" >
                      <img src="../img/Logo (2).png" style="width:210px;height:90px;box-shadow:0rem 3rem 2rem rgba(0,0,0,.5);" class="mt-0 ml-4 p-0 py-1">
                         <!-- <span class="app-brand-text demo menu-text fw-bolder ms-2" style="text-transform: uppercase;">Black & White</span> --> 
                 </a> 

                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">
                    <!-- Dashboard -->
                    <li class="menu-item ">
                        <a href="index.php" class="menu-link text-light">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Dashboard</div>
                        </a>
                    </li>
                    <li class="menu-item active">
                        <a href="customer.php" class="menu-link text-light">
                            <i class="menu-icon tf-icons bx bx-user-circle"></i>
                            <div data-i18n="Analytics">Customer</div>
                        </a>
                    </li>

                    <!-- Layouts -->
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle text-light">
                            <i class="menu-icon tf-icons bx bx-layout"></i>
                            <div data-i18n="Layouts">Category</div>
                        </a>

                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="category.php" class="menu-link text-light">
                                    <div data-i18n="Without menu">Cloth Category</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="color.php" class="menu-link text-light">
                                    <div data-i18n="Without navbar">Colors</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="size.php" class="menu-link text-light">
                                    <div data-i18n="Container">Sizes</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu-item ">
                        <a href="products.php" class="menu-link text-light">
                            <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                            <div data-i18n="Analytics">Products</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="orders.php" class="menu-link text-light">
                            <i class="menu-icon tf-icons bx bx-detail"></i>
                            <div data-i18n="Analytics">Orders</div>
                        </a>
                    </li>
                    <li class="menu-item ">
                        <a href="message.php" class="menu-link text-light">
                            <i class="menu-icon tf-icons bx bx-file"></i>
                            <div data-i18n="Analytics">Message</div>
                        </a>
                    </li>


                </ul>
            </aside>
            <!-- / Menu -->


            <?php include 'template/navbar.php'; ?>

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    <div class="row">

                        <div class="row">
                            <div class="col-lg-10">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="products.php">Slide Show</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Slide Show List</li>
                                    </ol>
                                </nav>
                                <h3 class="mb-4" style="color:navy ;">Slide Show List</h3>
                            </div>
                            <div class="col-lg-2">
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#SlideShowModal">
                                    Add
                                    New</button>
                            </div>
                        </div>
                        <hr>
                        <div class="table-responsive">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $getall = getAllSlideShow();

                                    while ($row = mysqli_fetch_assoc($getall)) {
                                        $img = $row['slideshow_image'];
                                        $img_src = "../server/uploads/slideshow/" . $img;

                                    ?>

                                    <tr>
                                        <td><?php echo $row['slideshow_title']; ?></td>
                                        <td><img width="100px" src='<?php echo $img_src; ?>'></td>
                                        <td> <button type="button"
                                                onclick="permenantdeleteData(<?php echo $row['slideshow_id']; ?>, 'slideshow', 'slideshow_id')"
                                                class="btn btn-darkblue"> <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>

                                    <?php } ?>

                                </tbody>
                            </table>

                        </div>

                    </div>

                </div>
                <!-- / Content -->

                <?php include 'template/footer.php'; ?>
</body>

<!-- Modal -->
<div class="modal fade" id="SlideShowModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content bg-white">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body bg-white">
                <form method="POST" accept="php_parts/addCat.php" class="row g-3 needs-validation" novalidate
                    enctype="multipart/form-data">
                    <div class="col-md-12">
                        <label for="cat_name" class="form-label">Slide Show</label>
                        <input type="text" class="form-control" name="slideshow_title" id="slideshow_title"
                            placeholder="Slide Show" required>
                    </div>
                    <div class="col-md-12">
                        <label for="file" class="form-label">Slide Show Image file</label>
                        <input class="form-control" name="file" type="file" id="file">
                    </div>
            </div>
            <div class="modal-footer bg-white">
                <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                <button type="button" onclick="addSlideshow(this.form)" name="submit" class="btn btn-primary">Save
                    changes</button>
            </div>
            </form>

        </div>
    </div>
</div>

</html>