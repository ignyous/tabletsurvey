<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Demographics 1</title>
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
            <h1>Demographics 1</h1>
          </div>
          
          <div class="spacer"></div>
          
          <div class="form-group">
            <label for="studyID">Study ID *</label>
            <input type="text" class="form-control" id="studyID" value="John Doe - 276723"  readonly>
          </div>
          
          <div class="form-group">
          	<label for="studyID" class="required">Which of the following best describes your current legal status? *</label>
            <div class="radio">
            <label>
            <input type="radio" name="legalStatus" id="legalStatus1" value="legalStatusPrison">
            Released from prison within the past 30 dates.            
            
                <div class="form-group-inline" id="legalStatusPrison_Other">
                -- Date Released: <input type="text" class="form-control-inline" id="legalStatusPrisonDate" placeholder="01-01-2014" required>
                </div>
                
            </label>
            </div>
            <div class="radio">
            <label>
            <input type="radio" name="legalStatus" id="legalStatus2" value="legalStatusJail">
            Released from jail within the past 30 dates.
            
            	<div class="form-group-inline" id="legalStatusJail_Other">
                -- Date Released: <input type="text" class="form-control-inline" id="legalStatusJailDate" placeholder="01-01-2014" required>
                </div>
            </label>
            </div>
            <div class="radio">
            <label>
            <input type="radio" name="legalStatus" id="legalStatus3" value="legalStatusCourt">
            Accepted to Specialty Treatment Court.
            
            	<div class="form-group-inline" id="legalStatusCourt_Other">
                -- Date Released: <input type="text" class="form-control-inline" id="legalStatusCourtDate" placeholder="01-01-2014" required>
                </div>
            </label>
            </div>
            <div class="radio">
            <label>
            <input type="radio" name="legalStatus" id="legalStatus4" value="refuse">
            Refuse to answer or answer unknown.
            </label>
            </div>
            
           </div>
            
            <div class="spacer"></div>
            
            <div class="col-md-6 first">
            <div class="form-group">
            <label for="birthDate" class="required">What is your Date of Birth *</label>
            <input type="text" class="form-control" id="birthDate" placeholder="01-01-1978" required>
            </div>
            </div>
            <div class="col-md-6 last">            
            <div class="form-group">
            <label for="gender" class="required">What is your gender *</label>
            <select class="form-control" id="gender" name="gender" required>
              <option>Male</option>
              <option>Female</option>
              <option>Transgender</option>
            </select>
            </div>
            </div>
            <div class="spacer"></div>
            
            <div class="form-group">
            <label>What race do you most strongly identify with: Please answer yes or no for each of the following. You may say yes to more than one.</label>
            <div class="row">
            <div class="col-xs-1"></div>
            <div class="col-xs-5"><label style="padding-top:7px;">1. American Indian</label></div>
            <div class="col-xs-6 text-right">
            <label class="radio-inline">
              <input type="radio" name="americanindian" id="inlineRadio1" value="Yes"> Yes
            </label>
            <label class="radio-inline">
              <input type="radio" name="americanindian" id="inlineRadio2" value="No"> No
            </label>
            <label class="radio-inline">
              <input type="radio" name="americanindian" id="inlineRadio3" value="refused"> Refused
            </label>
            </div>
            </div>
            
            <div class="row">
            <div class="col-xs-1"></div>
            <div class="col-xs-5"><label style="padding-top:7px;">2. Alaskan Indian</label></div>
            <div class="col-xs-6 text-right">
            <label class="radio-inline">
              <input type="radio" name="alaskanindian" id="inlineRadio1" value="Yes"> Yes
            </label>
            <label class="radio-inline">
              <input type="radio" name="alaskanindian" id="inlineRadio2" value="No"> No
            </label>
            <label class="radio-inline">
              <input type="radio" name="alaskanindian" id="inlineRadio3" value="refused"> Refused
            </label>
            </div>
            </div>
            
            <div class="row">
            <div class="col-xs-1"></div>
            <div class="col-xs-5"><label style="padding-top:7px;">3. Asian</label></div>
            <div class="col-xs-6 text-right">
            <label class="radio-inline">
              <input type="radio" name="asian" id="inlineRadio1" value="Yes"> Yes
            </label>
            <label class="radio-inline">
              <input type="radio" name="asian" id="inlineRadio2" value="No"> No
            </label>
            <label class="radio-inline">
              <input type="radio" name="asian" id="inlineRadio3" value="refused"> Refused
            </label>
            </div>
            </div>
            
            <div class="row">
            <div class="col-xs-1"></div>
            <div class="col-xs-5"><label style="padding-top:7px;">4. Black or African American</label></div>
            <div class="col-xs-6 text-right">
            <label class="radio-inline">
              <input type="radio" name="black" id="inlineRadio1" value="Yes"> Yes
            </label>
            <label class="radio-inline">
              <input type="radio" name="black" id="inlineRadio2" value="No"> No
            </label>
            <label class="radio-inline">
              <input type="radio" name="black" id="inlineRadio3" value="refused"> Refused
            </label>
            </div>
            </div>
            
            <div class="row">
            <div class="col-xs-1"></div>
            <div class="col-xs-5"><label style="padding-top:7px;">5. Native Hawaiian</label></div>
            <div class="col-xs-6 text-right">
            <label class="radio-inline">
              <input type="radio" name="hawaiian" id="inlineRadio1" value="Yes"> Yes
            </label>
            <label class="radio-inline">
              <input type="radio" name="hawaiian" id="inlineRadio2" value="No"> No
            </label>
            <label class="radio-inline">
              <input type="radio" name="hawaiian" id="inlineRadio3" value="refused"> Refused
            </label>
            </div>
            </div>
            
            <div class="row">
            <div class="col-xs-1"></div>
            <div class="col-xs-5"><label style="padding-top:7px;">6. Pacific Islander</label></div>
            <div class="col-xs-6 text-right">
            <label class="radio-inline">
              <input type="radio" name="pacific" id="inlineRadio1" value="Yes"> Yes
            </label>
            <label class="radio-inline">
              <input type="radio" name="pacific" id="inlineRadio2" value="No"> No
            </label>
            <label class="radio-inline">
              <input type="radio" name="pacific" id="inlineRadio3" value="refused"> Refused
            </label>
            </div>
            </div>
            
            <div class="row">
            <div class="col-xs-1"></div>
            <div class="col-xs-5"><label style="padding-top:7px;">7. White</label></div>
            <div class="col-xs-6 text-right">
            <label class="radio-inline">
              <input type="radio" name="white" id="inlineRadio1" value="Yes"> Yes
            </label>
            <label class="radio-inline">
              <input type="radio" name="white" id="inlineRadio2" value="No"> No
            </label>
            <label class="radio-inline">
              <input type="radio" name="white" id="inlineRadio3" value="refused"> Refused
            </label>
            </div>
            </div>
            
            <div class="row">
            <div class="col-xs-1"></div>
            <div class="col-xs-5"><label style="padding-top:7px;">8. Declined to answer</label></div>
            <div class="col-xs-6 text-right">
            <label class="radio-inline">
              <input type="radio" name="declined" id="inlineRadio1" value="Yes"> Yes
            </label>
            <label class="radio-inline">
              <input type="radio" name="declined" id="inlineRadio2" value="No"> No
            </label>
            <label class="radio-inline">
              <input type="radio" name="declined" id="inlineRadio3" value="refused"> Refused
            </label>
            </div>
            </div>
            </div>
            
            <div class="spacer"></div>
            
            <div class="form-group">
            <label for="military" class="required">In which branch of the military did you serve the longest? *</label>
            <select class="form-control" id="military" name="military" required>
              <option>Army</option>
              <option>Navy</option>
              <option>Marines</option>
              <option>Air Force</option>
              <option>Coast Guard</option>
              <option>Declined to answer</option>
            </select>
            </div>
            
            <div class="spacer"></div>
            
            <div class="form-group">
            <label>Did you serve in the theatre of operations for any of the following military conflicts?</label>
            <div class="row">
            <div class="col-xs-1"></div>
            <div class="col-xs-5"><label style="padding-top:7px;">1. World War II</label></div>
            <div class="col-xs-6 text-right">
            <label class="radio-inline">
              <input type="radio" name="ww2" id="inlineRadio1" value="Yes"> Yes
            </label>
            <label class="radio-inline">
              <input type="radio" name="ww2" id="inlineRadio2" value="No"> No
            </label>
            <label class="radio-inline">
              <input type="radio" name="ww2" id="inlineRadio3" value="refused"> Refused
            </label>
            </div>
            </div>
            
            <div class="row">
            <div class="col-xs-1"></div>
            <div class="col-xs-5"><label style="padding-top:7px;">2. Korean War</label></div>
            <div class="col-xs-6 text-right">
            <label class="radio-inline">
              <input type="radio" name="korean" id="inlineRadio1" value="Yes"> Yes
            </label>
            <label class="radio-inline">
              <input type="radio" name="korean" id="inlineRadio2" value="No"> No
            </label>
            <label class="radio-inline">
              <input type="radio" name="korean" id="inlineRadio3" value="refused"> Refused
            </label>
            </div>
            </div>
            
            <div class="row">
            <div class="col-xs-1"></div>
            <div class="col-xs-5"><label style="padding-top:7px;">3. Vietnam War</label></div>
            <div class="col-xs-6 text-right">
            <label class="radio-inline">
              <input type="radio" name="vietnam" id="inlineRadio1" value="Yes"> Yes
            </label>
            <label class="radio-inline">
              <input type="radio" name="vietnam" id="inlineRadio2" value="No"> No
            </label>
            <label class="radio-inline">
              <input type="radio" name="vietnam" id="inlineRadio3" value="refused"> Refused
            </label>
            </div>
            </div>
            
            <div class="row">
            <div class="col-xs-1"></div>
            <div class="col-xs-5"><label style="padding-top:7px;">4. Persian Gulf War (Operation Desert Storm)</label></div>
            <div class="col-xs-6 text-right">
            <label class="radio-inline">
              <input type="radio" name="persian" id="inlineRadio1" value="Yes"> Yes
            </label>
            <label class="radio-inline">
              <input type="radio" name="persian" id="inlineRadio2" value="No"> No
            </label>
            <label class="radio-inline">
              <input type="radio" name="persian" id="inlineRadio3" value="refused"> Refused
            </label>
            </div>
            </div>
            
            <div class="row">
            <div class="col-xs-1"></div>
            <div class="col-xs-5"><label style="padding-top:7px;">5. Afghanistan (Operation Enduring Freedom)</label></div>
            <div class="col-xs-6 text-right">
            <label class="radio-inline">
              <input type="radio" name="afghanistan" id="inlineRadio1" value="Yes"> Yes
            </label>
            <label class="radio-inline">
              <input type="radio" name="afghanistan" id="inlineRadio2" value="No"> No
            </label>
            <label class="radio-inline">
              <input type="radio" name="afghanistan" id="inlineRadio3" value="refused"> Refused
            </label>
            </div>
            </div>
            
            <div class="row">
            <div class="col-xs-1"></div>
            <div class="col-xs-5"><label style="padding-top:7px;">6. Iraq (Operation Iraqi Freedom)</label></div>
            <div class="col-xs-6 text-right">
            <label class="radio-inline">
              <input type="radio" name="iraq" id="inlineRadio1" value="Yes"> Yes
            </label>
            <label class="radio-inline">
              <input type="radio" name="iraq" id="inlineRadio2" value="No"> No
            </label>
            <label class="radio-inline">
              <input type="radio" name="iraq" id="inlineRadio3" value="refused"> Refused
            </label>
            </div>
            </div>
            
            <div class="row">
            <div class="col-xs-1"></div>
            <div class="col-xs-5"><label style="padding-top:7px;">7. Iraq (Operation New Dawn)</label></div>
            <div class="col-xs-6 text-right">
            <label class="radio-inline">
              <input type="radio" name="iraqnewdawn" id="inlineRadio1" value="Yes"> Yes
            </label>
            <label class="radio-inline">
              <input type="radio" name="iraqnewdawn" id="inlineRadio2" value="No"> No
            </label>
            <label class="radio-inline">
              <input type="radio" name="iraqnewdawn" id="inlineRadio3" value="refused"> Refused
            </label>
            </div>
            </div>
            
            <div class="row">
            <div class="col-xs-1"></div>
            <div class="col-xs-5"><label style="padding-top:7px;">8. Other peace-keeping operations or military interventions (such as Lebanon, Panama, Somalia, Bosnia, Kosovo)</label></div>
            <div class="col-xs-6 text-right">
            <label class="radio-inline">
              <input type="radio" name="other" id="inlineRadio1" value="Yes"> Yes
            </label>
            <label class="radio-inline">
              <input type="radio" name="other" id="inlineRadio2" value="No"> No
            </label>
            <label class="radio-inline">
              <input type="radio" name="other" id="inlineRadio3" value="refused"> Refused
            </label>
            </div>
            </div>
            
            
            </div>
            
            
            <div class="form-group">
            <button type="submit" class="btn btn-error btn-lg pull-right" 
            value="Refused" title="Login" style="margin-left:10px;"> <span>REFUSED</span> </button>

            <button type="submit" class="btn btn-success btn-lg pull-right" 
            value="Save" title="Login"> <span>NEXT</span> </button> 
            </div>
            
        
        </div>
      </div>
    </form>
  </div>
</div>

<script type="text/javascript">
$(function(){
$('#legalStatusPrisonDate').datepicker();
$('#legalStatusJailDate').datepicker();
$('#legalStatusCourtDate').datepicker();
$('#birthDate').datepicker();
})

</script>


</body>
</html>
