<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Refused Form</title>
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
            <h1>Refused/Ineligible</h1>
          </div>
          
          <div class="spacer"></div> 
          
          <div class="form-group">
            <label for="studyID">Study ID *</label>
            <input type="text" class="form-control" id="studyID" value="John Doe - 276723"  readonly>
          </div>
          
          <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="refused" name="refused">
                Refused
              </label>
            </div>
          </div>
          
          <div class="form-group">
          	<label for="studyID" class="required">If refused, what was the primary reason for refusal? *</label>
            <div class="radio">
            <label>
            <input type="radio" name="refusedreason" value="Time">
            No Time           
            </label>
            </div>
            <div class="radio">
            <label>
            <input type="radio" name="refusedreason"  value="Privacy">
            Concerned re: study information collected
            </label>
            </div>
            <div class="radio">
            <label>
            <input type="radio" name="refusedreason"  value="Other">
            Other (specify)
            </label>
            </div>
            
                <div class="form-group" id="refused_Other" style="display:none;">
                <div class="col-sm-12">
                <input type="text" class="form-control" id="refusedOther" placeholder="">
                </div>
                </div>         
            
           </div>
           
           <div class="form-group">
            <div class="checkbox">
              <label>
                <input type="checkbox" value="ineligible" name="ineligible">
                Veteran is ineligible for the study
              </label>
            </div>
          </div>
            
            <div class="spacer"></div>
         
            
            
            <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg pull-right" 
            value="Save" title="Login"> <span>END INTERVIEW</span> </button> 
            </div>
            
        
        </div>
      </div>
    </form>
  </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $("input[name=refusedreason]:radio").on('change', function() {
		  if ( this.value == 'Other')
		 {			$("#refused_Other").show();		  }
		  else
		  {			$("#refused_Other").hide();		  }
		});
    });
</script>


</body>
</html>
