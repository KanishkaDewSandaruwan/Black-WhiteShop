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
                    <li class="menu-item">
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

                    <li class="menu-item active">
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
                                        <li class="breadcrumb-item"><a href="message.php">Reviews</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Reviews List</li>
                                    </ol>
                                </nav>
                                <h3 class="mb-4" style="color:navy ;">Reviews List</h3>
                            </div>
                        </div>
                        <hr>
                        <div class="table-responsive">
                        <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Review</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                            </tr>
                        </thead>
                      
                        <tbody>
                            <?php 
                                $getall = getAllReviews($_REQUEST['pid']);

                                while($row=mysqli_fetch_assoc($getall)){ ?>
                            <tr>

                                <td>#<?php echo $row['review_id']; ?></td>
                                <td><?php echo $row['review_review']; ?></td>
                                <td><?php echo $row['review_name']; ?></td>
                                <td><?php echo $row['review_email']; ?></td>
                                <td><?php echo $row['date_updated']; ?></td>
                                <td>

                                    <button type="button"
                                        onclick="permenantdeleteData(<?php echo $row['review_id']; ?>, 'review', 'review_id' )"
                                        class="btn btn-darkblue"> <i class="fa-solid fa-trash"></i> </button>
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

</html>