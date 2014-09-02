<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Demographics 2</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.22/angular.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/bootstrap-datepicker.js"></script>
<script src="/js/ui-utils-ieshiv.min.js"></script>
<script src="/js/ui-utils.min.js"></script>
<script src="/js/jquery.mask.js"></script>
<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
<link href="/css/datepicker.css" rel="stylesheet" type="text/css">
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
    <form novalidate class="form" role="form" autocomplete="off" name="NewRecordForm" action="interview.php" method="post">
      <div class="row">
        <div class="col-md-12">
          <div class="title-icon"><img src="/images/interview-icon.png"></div>
          <div class="title-h1">
            <h1>Demographics 2</h1>
          </div>
          
          <div class="spacer"></div>
          
          
          <div class="form-group">
            <label for="studyID">Study ID *</label>
            <input type="text" class="form-control" id="studyID" value="John Doe - 276723"  readonly>
          </div>
          
          
           <div class="col-md-4 first">
            <div class="form-group">
              <label for="firstName" class="required">First Name *</label>
              <input type="text" class="form-control" id="firstName" placeholder="" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="middleName">Middle Name</label>
              <input type="text" class="form-control" id="middleName" placeholder="">
            </div>
          </div>
          <div class="col-md-4 last" style="padding-right:0px;">
            <div class="form-group">
              <label for="lastName" class="required">Last Name *</label>
              <input type="text" class="form-control" id="lastName" placeholder="" required>
            </div>
          </div>
          
          <div class="clearboth"></div>
        
        <div class="form-group">
        <label for="ssn">What is your full Social Security Number? *</label>
        <input type="text" class="form-control" id="ssn" required>
        </div>
        
        <div class="spacer"></div>
          
          <div class="form-group">
          	<label for="ethnicity">What ethnicity do you most strongly identify with?</label>
            <div class="radio">
            <label>
            <input type="radio" name="ethnicity" id="ethnicity1" value="Non-Hispanic/Non-Latino    ">
            Non-Hispanic/Non-Latino         
            </label>
            </div>
            <div class="radio">
            <label>
            <input type="radio" name="ethnicity" id="ethnicity2" value="Hispanic/Latino">
            Hispanic/Latino
            </label>
            </div>
            <div class="radio">
            <label>
            <input type="radio" name="ethnicity" id="ethnicity3" value="Don't Know">
            Don't Know
            </label>
            </div>
            <div class="radio">
            <label>
            <input type="radio" name="ethnicity" id="ethnicity4" value="Declined to answer">
            Declined to answer
            </label>
            </div>
            
           </div>
           
           <div class="form-group">
          	<label for="race">In which component of the military did you serve the longest?</label>
            <div class="radio">
            <label>
            <input type="radio" name="race" id="race1" value="Active Duty (Regular)">
            Active Duty (Regular)        
            </label>
            </div>
            <div class="radio">
            <label>
            <input type="radio" name="race" id="race2" value="National Guard">
            National Guard
            </label>
            </div>
            <div class="radio">
            <label>
            <input type="radio" name="race" id="race3" value="Reserves">
            Reserves
            </label>
            </div>
            <div class="radio">
            <label>
            <input type="radio" name="race" id="race4" value="Veteran, declined to answer">
            Veteran, declined to answer
            </label>
            </div>            
           </div>
           
           
           <div class="form-group">
            <label for="longestrank">What was the rank status of your longest military service?</label>
            <select class="form-control" id="longestrank" name="longestrank" required>
              <option value="0">Select One</option>
              <option>E-1</option>
              <option>E-2</option>
              <option>E-3</option>
              <option>E-4</option>
              <option>E-5</option>
              <option>E-6</option>
              <option>E-7</option>
              <option>E-8</option>
              <option>E-9</option>
              <option>WO-1</option>
              <option>CWP-2</option>
              <option>CWO-3</option>
              <option>CWO-4</option>
              <option>CWO-5</option>
              <option>2LT</option>
              <option>1LT</option>
              <option>CPT</option>
              <option>MAJ</option>
              <option>LTC</option>
              <option>COL</option>
              <option>BG</option>
              <option>MG</option>
              <option>LTG</option>
              <option>GEN</option>
              <option>Refused</option>
            </select>
            </div>
            
            
            <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg pull-right" 
            value="Save" title="Login"> <span>NEXT</span> </button> 
            </div>
            
        
        </div>
      </div>
    </form>
  </div>
</div>

<script type="text/javascript">
$(document).ready(function () {
$("#ssn").mask("999-99-9999");
});
</script>


</body>
</html>
