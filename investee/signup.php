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
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../index.html#how-it-works">How it works&nbsp;</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="signin.php">Get funding</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../investors">Start Investing</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container" style="margin-top: 100px;">
        <h1 class="text-center">Sign up</h1>
    <div class="text-left">
        <ul class="nav nav-tabs nav-justified text-center">
            <li class="nav-item"><a role="tab" data-toggle="tab" class="nav-link active" href="#tab-1">Farmer</a></li>
            <li class="nav-item"><a role="tab" data-toggle="tab" class="nav-link" href="#tab-2">Investor</a></li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="tab-1">
                <br>
                <form action="register_investee.php" method="post" name="form1">
                    <label>Full Name</label>
                    <input class="form-control" type="text" placeholder="Full Name" required>
                    <label>Email</label>
                    <input class="form-control" type="text" placeholder="Email" required>
                    <label>Phone</label>
                    <input class="form-control" type="text" placeholder="Phone" required>
                    <label>Business Name</label>
            <input class="form-control" type="text" placeholder="Business Name:" required>
                    <label>National ID Number</label>
                    <input class="form-control" type="text" placeholder="National ID Number" required>
                    <label>KRA pin</label>
                    <input class="form-control" type="text" placeholder="KRA Pin" required>
                    <label>Password:</label>
                    <input class="form-control" type="password" placeholder="Password" required>
                    <label>Retype Password:</label>
                    <input class="form-control" type="password" placeholder="Retype password" required>
                    <button  name="sub_investee" value="Add"
                        class="btn btn-primary btn-block" type="submit" style="margin-top: 20px;">Sign Up</button>
                    </form>
            </div>
            <div role="tabpanel" class="tab-pane" id="tab-2">
                <br>
                <form action="register_investee.php" method="post" name="form1">
                    <label>Full Name</label>
                    <input class="form-control" type="text" placeholder="Full Name" required>
                    <label>Email</label>
                    <input class="form-control" type="text" placeholder="Email" required>
                    <label>Phone</label>
                    <input class="form-control" type="text" placeholder="Phone" required>
                    <label>Organization Name</label>
            <input class="form-control" type="text" placeholder="Organization name" required>
                    <label>National ID Number</label>
                    <input class="form-control" type="text" placeholder="National ID Number" required>
                    <label>KRA pin</label>
                    <input class="form-control" type="text" placeholder="KRA Pin" required>
                    <label>Password:</label>
                    <input class="form-control" type="password" placeholder="Password" required>
                    <label>Retype Password:</label>
                    <input class="form-control" type="password" placeholder="Retype password" required>
                    <button  name="sub_investor" value="Add" class="btn btn-primary btn-block" type="submit" style="margin-top: 20px;">Sign Up</button>
                    </form>
            </div>
        </div>
    </div>
    <div class="container text-center" style="margin-top: 20px; margin-bottom:20px;"><small class="text-center">Already have an account? <a href="signin.php">Sign in here</a></small></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>