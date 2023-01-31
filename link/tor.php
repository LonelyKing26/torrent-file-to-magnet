
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <title></title>
</head>
<header>
    <div class="header bg-dark text-white text-center pt-4 pb-4">
        <h4></h4>
    </div>
</header>
<body>
    <div class="container pt-5">
        <div class="col-12 row main_area">
            <div class="col-6">
                <input type="file" name="" class="torrent_file form-control">
            </div>
            <div class="col-6">
                <div class="magnet"></div>
            </div>
        </div>
        <div class="col-12 pt-3 row main_area">
            <div class="col-6">
                <input type="file" name="" class="torrent_file form-control">
            </div>
            <div class="col-6">
            <div class="magnet"></div>

            </div>
        </div>
        <div class="col-12 pt-3 row main_area">
            <div class="col-6">
                <input type="file" name="" class="torrent_file form-control">
            </div>
            <div class="col-6">
            <div class="magnet"></div>

            </div>
        </div>
    </div>
    <input type="text" name="" class="result form-control">
    <!-- <div class="result"></div> -->
    <div id="fileDisplayArea"></div>
    <!-- <div class="footer text-center">
       
        <div class="own-details text-center">
            <?php
                $myip = $_SERVER["REMOTE_ADDR"];
                echo 'Your IP Address - '.$myip;
            ?>
        </div>
        <p> &copy; arunpandiyan.in</p>
    </div> -->
   
<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- Datatables -->
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<!-- Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="assets\js\hashinfo.js"></script>
<script>
    $(document).ready(function(){

    });
</script>
</body>
</html>