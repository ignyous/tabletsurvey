<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<title>Post Interview Information</title>
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
    <form novalidate class="form" role="form" autocomplete="off" name="NewRecordForm" action="interview.php" method="post">
      <div class="row">
        <div class="col-md-12">
          <div class="title-icon"><img src="/images/interview-icon.png"></div>
          <div class="title-h1">
            <h1>Post Interview Information</h1>
          </div>
          
          <div class="spacer"></div>
          
          <div class="form-group">
            <label for="studyID">Study ID *</label>
            <input type="text" class="form-control" id="studyID" value="John Doe - 276723"  readonly>
          </div>
          
          <div class="col-md-6"> 
               
              <div class="form-group">
                <label for="interviewtype" class="required">Interview Type *</label>
                <div class="radio">
                <label>
                <input type="radio" name="interviewtype" value="Baseline">
                Baseline         
                </label>
                </div>
                <div class="radio">
                <label>
                <input type="radio" name="interviewtype"  value="6 month">
                6 month
                </label>
                </div> 
                <div class="radio">
                <label>
                <input type="radio" name="interviewtype"  value="12 month">
                12 month
                </label>
                </div>    
                <div class="radio">
                <label>
                <input type="radio" name="interviewtype"  value="24 month">
                24 month
                </label>
                </div>    
                <div class="radio">
                <label>
                <input type="radio" name="interviewtype"  value="36 month">
                36 month
                </label>
                </div>              
              </div>
              
              <div class="form-group">
                <label for="interviewconducted" class="required">How was the interview conducted? *</label>
                <div class="radio">
                <label>
                <input type="radio" name="interviewconducted" value="In person">
                In person         
                </label>
                </div>
                <div class="radio">
                <label>
                <input type="radio" name="interviewconducted"  value="Telephone">
                Telephone
                </label>
                </div> 
              </div>
          </div>
          
          <div class="col-md-6">
          <div class="form-group">
            <label for="comments">Comments</label>
            <textarea name="comments" rows="6" class="form-control" id="comments" placeholder="" required></textarea>
          </div>
          </div>
          
          <div class="spacer"></div>          
          
            
          <div class="col-md-6">  
              <div class="form-group">
                <label for="interviewlocation" class="required">Where did the interview take place? *</label>
                <select class="form-control" id="interviewlocation" name="interviewlocation" required>
                  <option>Veteran’s Home</option>
                  <option>VAMC/VAOPC/VARO/CBOC</option>
                  <option>Shelter of temporary housing for the homeless</option>
                  <option>Soup kitchen</option>
                  <option>Street, Park, Outdoors</option>
                  <option>Prison</option>
                  <option>Jail</option>
                  <option>Court</option>
                  <option>Other Community Location</option>
                </select>
              </div></div>
         <div class="col-md-6">     
            <div class="form-group" id="interviewlocation_Other" style="display:none;">
                <div class="form-group">
                  <label for="interviewlocationOther">Other (Specify)</label>
                  <input type="text" class="form-control" id="interviewlocationOther" placeholder="">
                </div>
            </div></div>
           
          <div class="spacer"></div>
            
            
            <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg pull-right" 
            value="Save" title="Login"> <span>END INTERVIEW PROCESS</span> </button> 
            </div>
            
        
        </div>
      </div>
    </form>
  </div>
</div>

<script type="text/javascript">
    $('#interviewlocation').on('change', function() {
		  if ( this.value == 'Other Community Location')
		  {			$("#interviewlocation_Other").show();		  }
		  else
		  {			$("#interviewlocation_Other").hide();		  }
		});
</script>

<script src="/js/signature_pad.min.js"></script>
<script src="/js/app.js"></script>

</body>
</html>
