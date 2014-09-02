<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<title>Payment Receipt</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.22/angular.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/bootstrap-datepicker.js"></script>
<script src="/js/ui-utils-ieshiv.min.js"></script>
<script src="/js/ui-utils.min.js"></script>
<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
<link href="/css/datepicker.css" rel="stylesheet" type="text/css">
</head>

<body onselectstart="return false">
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
            <h1>Payment Receipt</h1>
          </div>
          
          <div class="spacer"></div>
          
          <div class="col-sm-12">
          
          <div class="form-group">
            <label for="studyID">Study ID *</label>
            <input type="text" class="form-control" id="studyID" value="John Doe - 276723"  readonly>
          </div>
          
                   
          <div class="form-group">
          	<label for="receivedpayment" class="required">I received my payment for $25 for completing the interview? *</label>
            <div class="radio">
            <label>
            <input type="radio" name="receivedpayment" value="Yes">
            Yes         
            </label>
            </div>
            <div class="radio">
            <label>
            <input type="radio" name="receivedpayment"  value="No">
            No
            </label>
            </div>            
          </div>
                 
           
          <div class="spacer"></div>
          
          
            <div class="form-group">
            <label for="signature" class="required">Participant Signature *</label>
            <div id="signature-pad" class="m-signature-pad">
            <div class="m-signature-pad--body">
              <canvas></canvas>
            </div>
            <div class="m-signature-pad--footer">
              <div class="description">Sign above</div>
              <button type="button" class="button clear" data-action="clear">Clear</button>
              <button type="button" class="button save" data-action="save">Save</button>
            </div>
          </div>
            </div>    
                     
            <div class="spacer"></div>            
            
            
            <div class="form-group">
            <label for="date" class="required">Today's Date</label>
            <input type="text" class="form-control" id="date" value="<?php echo date("F j, Y"); ?>" required readonly>
            </div>  
            
            
            <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg pull-right" 
            value="Save" title="Login"> <span>NEXT</span> </button> 
            </div>
            
            
            
            
            
         </div>
            
            
            
        
        </div>
      </div>
    </form>
  </div>
</div>

<script src="/js/signature_pad.min.js"></script>
<script src="/js/app.js"></script>

</body>
</html>
