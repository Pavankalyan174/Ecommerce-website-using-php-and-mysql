<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset ="UTF-8">
        <meta http-equiv="X-UA-compatible"content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Admin Dashboard</title>
     <!-- boostrap css link -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

     <!-- font awesome link-->

     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <link rel="stylesheet" href="../style.css">
     <style>
     .admin_image{
    width: 100px;
    object-fit: contain;
}
     </style>
    </head>


    <body>
        <!-- navbar-->
        <div class="container-fluid p-0">
            <!-- first child-->
             <nav class="navbar navbar-expand-lg navbar-light bg-info">
                 <div class="container-fluid">
                    <img src="..\images\logo.png.jpeg" alt="" class="logo">
                    <nav class="navbar navbar-expand-lg">
                        <ui class="navbar-nav">
                            <li class="nav-item">
                                <a href=""class="nav-link">Welcome Guest</a>
                            </li>
                        </ui>
                    </nav>
                 </div>
             </nav>
             <!-- second child-->
             <div class="bg-light">
                <h3 class="text-center p-2">Manage Details</h3>
             </div>
             <!-- third child-->
             <div class="row">
                <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
                    <div class="px-5">
                        <a href="#"><img src="../images/apple-fruit.jpg" alt=""class="admin_image"></a>
                        <p class="text-light text-center">Admin name </p>
                    </div>
                    <div class="button text-center">
                        <button><a href="" class="nav-link text-light bg-info my-1">Insert Products</a></button>
                        <button><a href="" class="nav-link text-light bg-info my-1">View Products</a></button>
                        <button><a href="index.php?insert_category" class="nav-link text-light bg-info my-1">Insert Categories</a></button>
                        <button><a href="" class="nav-link text-light bg-info my-1">View Categories</a></button>
                        <button><a href="index.php?insert_Brand" class="nav-link text-light bg-info my-1">Insert Brands</a></button>
                        <button><a href="" class="nav-link text-light bg-info my-1">View Brands</a></button>
                        <button><a href="" class="nav-link text-light bg-info my-1">All Orders</a></button>
                        <button><a href="" class="nav-link text-light bg-info my-1">All Payments</a></button>
                        <button><a href="" class="nav-link text-light bg-info my-1">List Users</a></button>
                        <button><a href="" class="nav-link text-light bg-info my-1">Logout</a></button>
                    </div>

                </div>
             </div>

             <!-- fourth child-->
             <div class="container my-5">
                <?php
                if(isset($_GET['insert_category'])){
                    include('insert_categories.php');
                }
                ?>
                 <?php
                if(isset($_GET['insert_Brand'])){
                    include('insert_Brands.php');
                }
                ?>
             </div>


        </div>
    <!-- boostrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    </body>
</html>