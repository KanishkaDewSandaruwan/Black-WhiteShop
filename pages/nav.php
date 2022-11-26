<nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light"
    id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
        <div class="nav-item dropdown">
        <?php 
                        $getall = getAllParentCategory();
                        while($row=mysqli_fetch_assoc($getall)){ 
                            $cat_id = $row['cat_id'];
                          
                            $getallCp2 = getAllSubCategory($cat_id);
                            $count_sub = mysqli_num_rows($getallCp2);
                            if($count_sub > 0){
                                
     
                                    $getallCat = getAllSubCategory($cat_id);

                                    while($row3 = mysqli_fetch_assoc($getallCat)){ 
                                        $cat_id2 = $row3['cat_id'];
                                       

                                    $getallCp3 = getAllItemsByParentCategory($cat_id2);
                                    if ($row4 = mysqli_fetch_assoc($getallCp3)) {
                                        ?>
            <a href="#" class="nav-link" data-toggle="dropdown"><?php echo $row['cat_name']; ?> <i
                    class="fa fa-angle-down float-right mt-1"></i></a>
            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                <?php 
                                    $getallCat = getAllSubCategory($cat_id);

                                    while($row3 = mysqli_fetch_assoc($getallCat)){ 
                                        $cat_id2 = $row3['cat_id'];
                                       

                                    $getallCp3 = getAllItemsByParentCategory($cat_id2);
                                    if ($row4 = mysqli_fetch_assoc($getallCp3)) {
                                        ?>
                <a href="shop.php?cat_id=<?php echo $cat_id2; ?>"
                    class="dropdown-item"><?php echo $row4['cat_name']; ?></a>
                <?php } }  ?>
            </div>
            <?php } }  } }  ?>
        </div>

    </div>
</nav>