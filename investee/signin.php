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
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../index.html#how-it-works">How it works</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="javascript:void(0)">Get funding</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../investors">Start Investing</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container" style="margin-top: 100px;">
        <?php
        if(isset($_GET['message'])){
            if($_GET['message']=='success'){
                echo "<div class='alert alert-success'>Successfully signed up. Please log in!</div>";
            }
        }

        ?>
        <h1 class="text-center">Sign in</h1>
    <div class="text-left">
        <ul class="nav nav-tabs nav-justified text-center">
            <li class="nav-item"><a role="tab" data-toggle="tab" class="nav-link active" href="#tab-1">Farmer</a></li>
            <li class="nav-item"><a role="tab" data-toggle="tab" class="nav-link" href="#tab-2">Investor</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="tab-1">
                <br>
                <hr>
                <small>Get funded by potential investors by being part of us.</small><br>
                <small>Pata ufadhili na wawekezaji uwezo kwa kuwa sehemu yetu.</small>
                <hr>
                <br><br>
            <form action="login.php" method="post">
                <label>Email, Phone Number or Username:</label>
                <input type="text" class="form-control" name="username-farmer" required placeholder="Email, Phone Number or Username" />
                <label style="margin-top: 10px;">Password:</label>
                <input type="password" class="form-control" name="password-farmer" placeholder="Password" required/>
                <button class="btn btn-primary btn-block" type="submit" style="margin-top: 20px;">Login as farmer</button></form>
            </div>
            <div role="tabpanel" class="tab-pane" id="tab-2">
                <br>
            <form action="login.php" method="post">
                <label>Email, Phone Number or Username:</label>
                <input class="form-control" type="text" name="username-investor" required placeholder="Email, Phone Number or Username">
                <label style="margin-top: 10px;">Password:</label>
                <input class="form-control" type="password" name="password-investor" required placeholder="Password">
            <button
                class="btn btn-primary btn-block" type="submit" style="margin-top: 20px;">Login as investor</button>
        </form>
            </div>
        </div>
    </div> 
    </div>
    <div class="container text-center" style="margin-top: 20px;"><small class="text-center">Don&#39;t have an account? <a href="signup.php">Sign up here</a></small></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>