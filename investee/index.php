<?php
session_start();
if(isset($_SESSION['login_user'])){

}
else{
    //header('location: ./signin.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - InvestLakeBasin</title>
    <meta name="twitter:description" content="InvestLakeBasin is a platform for connecting Small Scale Farmers as Investees to investors based on their portfolio created.">
    <meta name="twitter:title" content="InvestLakeBasin">
    <meta name="twitter:card" content="summary_large_image">
    <meta property="og:image" content="assets/img/invest_lakebasin.png">
    <meta name="description" content="InvestLakeBasin is a platform for connecting Investees to investors based on their portfolio created.">
    <meta property="og:type" content="website">
    <meta name="twitter:image" content="assets/img/invest_lakebasin.png">
    <link rel="icon" type="image/png" sizes="89x100" href="assets/img/invest_lakebasin_favicon.png">
    <link rel="icon" type="image/png" sizes="89x100" href="assets/img/invest_lakebasin_favicon.png">
    <link rel="icon" type="image/png" sizes="89x100" href="assets/img/invest_lakebasin_favicon.png">
    <link rel="icon" type="image/png" sizes="89x100" href="assets/img/invest_lakebasin_favicon.png">
    <link rel="icon" type="image/png" sizes="89x100" href="assets/img/invest_lakebasin_favicon.png">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="manifest" href="manifest.json">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
</head>

<body>
<nav class="navbar navbar-dark navbar-expand-md fixed-top bg-white portfolio-navbar gradient">
        <div class="container"><a class="navbar-brand logo" href="#">InvestLakeBasin</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navbarNav">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../index.html">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../index.html#how-it-works">About&nbsp;</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="Potential.php">Potential Investors</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../investors">Settings</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div>
        <div class="container" style="margin-top: 90px;">
            <h1><?php echo date('Y');?></h1>
            <div id="fetch-data">
                <div class="card col-sm-3">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo date('M Y');?></h4>
                            <h6 class="text-muted card-subtitle mb-2">No data could be found!</h6>
                            <p class="card-text">Tap add to add information about this month</p>
                            <a class="card-link" href="#"  data-toggle="modal" data-target="#myModal">Add</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
      <h2 class="text-center modal-title">Monthly Report</h2>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      <div class="container" style="">
        
        <form method="post" enctype="multipart/form-data" action="">
            <label>Invested Amount:</label>
            <input class="form-control" type="text" name="invested_amount" placeholder="Invested Amount" required>
            <label>Returned Amount</label>
            <input class="form-control" type="text" name="returned amount" placeholder="Returned Amount" required>
            <label>Expenses:</label>
            <input class="form-control" type="text" name="expenses" placeholder="Expenses" required>
            <label>Profit/Loss:</label>
            <input class="form-control" type="text" name="profit-loss" placeholder="Profit/Loss" required>
            <label>Evidence:</label><br/>
            <small>Please upload atleast one Image:</small><br>
            <input type="file" name="evidence_1" accept="image/*" required><input type="file" name="evidence_2" accept="image/*">
            <input type="file" name="evidence_3" accept="image/*"><input type="file" name="evidence_4" accept="image/*">
            <button class="btn btn-primary btn-block" type="submit" style="margin-top: 20px;" name="upload_button">Upload</button></form>
    </div>
      </div>

    </div>
  </div>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script>
        const addEvidence=(id,)=>{

        }
    </script>
</body>

</html>