<?php


$databaseHost = 'localhost';
$databaseName = 'webproject';
$databaseUsername = 'root';
$databasePassword = '';
$id = $_GET['id'];
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
$result = mysqli_query($mysqli, "SELECT * FROM data WHERE ProductId=$id");
$show = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>COMPUTER TECHNOLOGY</title>
    <link rel="icon" href="images/logo.png" type="image/icon type">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="ProjectCss.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

</head>

<body>
    <div class="container-fluid ">
        <div class="row justify-content-between">
            <div class="col-12 col-lg-1 logo">
                <center>
                    <img src="images/logo.png" alt="logo">
                </center>
            </div>
            <div class="col-12 col-lg-2 s-all-icons my-auto ">
                <center>
                    <a href="https://www.youtube.com/">
                        <img src="images/social-1.png" alt="Image" class="s-icons "></a>
                    <a href="https://web.whatsapp.com/">
                        <img src="images/social-2.png" alt="Image" class="s-icons"></a>
                    <a href="https://twitter.com/">
                        <img src="images/social-3.png" alt="Image" class="s-icons"></a>
                    <a href="https://www.facebook.com/">
                        <img src="images/social-4.png" alt="Image" class="s-icons"></a>
                </center>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-sm justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="Home()">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="About()">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="Product()">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="Contact()">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Login.php">Admin Login</a>
            </li>
        </ul>
    </nav>
    <center>
        <form action="UpdateProduct.php" method="post" enctype="multipart/form-data" class="f-contact col-9 col-lg-4">
            <h1> UPDATE DATA</h1><br>
            <input type="hidden" class="form-control" name="ProductId" id="ProductId"
                value="<?php echo $show["ProductId"] ?>">

            <label for="" class="form-label">Title </label>
            <input type="text" class="form-control" name="Title" id="Title" value="<?php echo $show["Title"] ?>">

            <label for="" class="form-label">Discount </label>
            <input type="number" class="form-control" name="Discount" id="Discount"
                value="<?php echo $show["Discount"] ?>">

            <label for="" class="form-label">Image</label>
            <input type="file" class="form-control" name="image" id="image">

            <label for="" class="form-label">Price </label>
            <input type="number" class="form-control" name="Price" id="Price" value="<?php echo $show["Price"] ?>">

            <label for="" class="form-label">Code </label>
            <input type="number" class="form-control" name="Code" id="Code" value="<?php echo $show["Code"] ?>">

            <div class="radio-all">
                <label for="" class="form-label">InStock </label>
                <input type="radio" name="radio" id="radio1" value="Yes" checked>
                <label for="" class="form-label" id="radio-op">Yes</label>
                <input type="radio" name="radio" id="radio2" value="No">
                <label for="" class="form-label" id="radio-op">No</label>
            </div>
            <br>
            <label for="Sizes" class="form-label">Sizes</label>
            <select name="Sizes" id="Sizes">
                <option value="Small">Small</option>
                <option value="Medium">Medium</option>
                <option value="Large">Large</option>
                <option value="All">All</option>

            </select>
            <br><br>
            <label for="" class="form-label">Details </label>
            <textarea name="Details" id="text-area" cols="50" rows="10"> <?php echo $show["Details"] ?></textarea>
            <br>
            <div id="alert1">
                <button type="submit" name="submit" class="btn btn-primary" id="alert2">Submit</button>
                <a href="AdminOptions.php"><button type="button" name="button" class="btn btn-primary"
                        id="alert2">Back</button></a>

            </div>

        </form>
    </center>
    <footer class="row justify-content-between">
        <div class=" news col-7">
            <h4 class="News-h">News<h4>

                    <ul><a href="https://www.laptopmag.com/news/live/black-friday-gaming-laptop-deals" target="_blank">
                            <li> Black Friday Gaming Laptop deals still running today LIVE: Big savings on Alienware,
                                Razer, Asus and more</li>
                        </a>
                        <a href="https://www.laptopmag.com/uk/best-macbook-deals" target="_blank">
                            <li>Wow! The M1 MacBook Pro with 1TB of storage is $500 off right now</li>
                        </a>
                        <a href="https://www.laptopmag.com/news/cyber-monday-deals-2022" target="_blank">
                            <li>
                                Extended Cyber Monday deals are now Cyber Week with epic ongoing deals on Laptops.
                            </li>

                        </a>
                        <a href="https://www.laptopmag.com/news/best-dell-deals" target="_blank">
                            <li>
                                The Best Dell Deals in December 2022.
                            </li>

                        </a>
                    </ul>
        </div>
        <div class=" f-social-h col-4  align-self-center ">
            <a href="https://www.youtube.com/">
                <img src="social-1.png" alt="Image" class="f-social"></a>
            <a href="https://web.whatsapp.com/">
                <img src="social-2.png" alt="Image" class="f-social"></a>
            <a href="https://twitter.com/">
                <img src="social-3.png" alt="Image" class="f-social"></a>
            <a href="https://www.facebook.com/">
                <img src="social-4.png" alt="Image" class="f-social"></a>

        </div>
        <div class="creator">
            <p>Created by DNA</p>
        </div>
    </footer>
</body>
<script>
    function Home() {
        window.open("Home.php", "_self");
    }
    function About() {
        window.open("AboutUs.html", "_self");
    }
    function Product() {
        window.open("Products.php", "_self");
    }
    function Contact() {
        window.open("Contact.php", "_self");
    }

</script>
</body>

</html>
<script>




</script>