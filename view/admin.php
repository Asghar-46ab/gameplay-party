<title>Admin</title>
<div class="container">
    <div class="row">
        <div class="my-5 col-12">
            <h1 class="text-center">Admin-panal</h1><br>
        </div>

        <div class="col-md-12">
        <div class="text-right">
        <a href="index.php?op=create" class="btn btn-primary my-3">nieuw product</a>
        </div>
            <!-- <a href='index.php?op=create'><button class="but">Create New Product</button><a> -->
            <?php
                // require 'header.php';
                echo $table;
                // require 'footer.php';
            ?>
            <div class="">
                <ul class="pagination">
                    <?php

                            for ($i = 0; $i < $pages; $i++) {
                                $get = array_merge($_GET, []);
                                $get["page"] = $i;
                                $get = http_build_query($get);
                                echo "<li class='page-item'><a class='page-link'href='index.php?$get'>" . ($i + 1) . "</a></li>";
                            }

                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>
