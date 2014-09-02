<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Initiate Interview</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.22/angular.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/ui-utils-ieshiv.min.js"></script>
<script src="/js/ui-utils.min.js"></script>
<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
</head>

<body>
<nav class="navbar navbar-inverse no-transition" role="navigation">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> </button>
      <a class="navbar-brand" href="#">Main Menu</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <ul class="nav navbar-nav navbar-left">
          <li class="grey90"><a href="#">Welcome, User</a></li>
          <li class="grey80"><a href="#">Records</a></li>
          <li class="grey70"><a href="#"><span class="edit-icon"></span> Edit Existing</a></li>
          <li class="grey60"><a href="/interview.php">Intitiate Interview Process</a></li>
        </ul>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
<div id="content">
  <div class="container">
    <form novalidate class="form-horizontal" role="form" autocomplete="off" name="NewRecordForm" action="interview.php" method="post">
      <div class="row">
        <div class="col-md-12">
          <div class="title-icon"><img src="/images/interview-icon.png"></div>
          <div class="title-h1">
            <h1>Initiate Interview Process</h1>
          </div>
          <div class="spacer"></div>
          <div class="form-group">
            <div class="col-sm-12">
              <select class="form-select" id="studyID" name="studyID" required>
                <option value="0" <?php if(isset($_POST['studyID']) && $_POST['studyID'] == 0) { echo 'selected'; } ?> >Select Study ID</option>
                <option value="1" <?php if(isset($_POST['studyID']) && $_POST['studyID'] == 1) { echo 'selected'; } ?> >John Doe - 276723</option>
              </select>
            </div>
          </div>
          
          <!-- Sub Options on Submit-->
          <?php if(isset($_POST['studyID']) && $_POST['studyID'] > 0) { ?>
			  
		  
          <div class="spacer"></div>
          
          <h2 class="background text-center"><span>Interviews</span></h2>
          
          <div class="spacer"></div>
          <div class="form-group">
            <div class="col-sm-12">
              <a href="interview-demographics.php" class="btn btn-info btn-md btn-block" role="button">Baseline</a>
              <button type="button" class="btn btn-info btn-md btn-block">6 Months</button>
              <button type="button" class="btn btn-info btn-md btn-block">12 Months</button>
              <button type="button" disabled class="btn btn-info btn-md btn-block">24 Months</button>
              <button type="button" disabled class="btn btn-info btn-md btn-block">36 Months</button>
            </div>
          </div>
          <?php } else { ?>
          
          
          <div class="form-group text-right end">
            <div class="col-sm-12">
              <button type="submit" class="btn btn-success btn-lg" 
                   value="Login" title="Login"> <span>NEXT</span> </button>
            </div>
          </div>
          
         <?php } ?> 
        </div>
      </div>
    </form>
  </div>
</div>
</body>
</html>
