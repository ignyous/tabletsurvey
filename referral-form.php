<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Referral Form</title>
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

<nav class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      </button>
      <a class="navbar-brand" href="#">Main Menu</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      	
        <ul class="nav navbar-nav navbar-left">
        <li class="grey90"><a href="#">Welcome, User</a></li>
        <li class="grey80"><a href="#">Records</a></li>
        <li class="grey70"><a href="#"><span class="edit-icon"></span> Edit Existing</a></li>
        <li class="grey60"><a href="#">Intitiate Interview Process</a></li>
      </ul>        
      </ul>
      
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div id="content">

	<div class="container">
    <div class="row">
    
    <div class="col-md-12">
        <div class="title-icon"><img src="images/plus.png"></div>
        <div class="title-h1">
        <h1>Referral Form</h1>
        </div>
        <div class="spacer"></div>
      </div>
    <form class="form" role="form" autocomplete="off" name="theForm">
    
    
    <div class="col-md-6">
        <div class="form-group">
        <label for="studyID">Study ID *</label>
        <input type="text" class="form-control" id="studyID" placeholder="hgfhgfhf" disabled>
      </div>
        <div class="form-group">
        <label for="firstName" class="required">First Name *</label>
        <input type="text" class="form-control" id="firstName" placeholder="" required>
        </div>
        <div class="form-group">
        <label for="middleName">Middle Name</label>
        <input type="text" class="form-control" id="middleName" placeholder="">
      </div>
        <div class="form-group">
        <label for="lastName" class="required">Last Name *</label>
        <input type="text" class="form-control" id="lastName" placeholder="" required>
        </div>
        
    </div>
    <div class="col-md-6">
       <div class="form-group">
        <label for="firstName" class="required">Phone (Home) *</label>        
        <input type="text" class="form-control" id="phoneHome" placeholder="555-555-5555" ng-model="x" ui-mask="999-999-9999" required>
       </div>
        <div class="form-group">
        <label for="middleName">Phone (Cell)</label>
        <input type="text" class="form-control" id="phoneCell" ng-model="x" ui-mask="999-999-9999">
      </div>
      <div class="form-group">
        <label for="lastName" class="required">Email Address *</label>
        <input type="email" class="form-control" id="Email" placeholder="" required>
      </div>
        <div class="form-group">
        <label for="MethodofContact" class="required">Preferred Method of Contact *</label>
        <select class="form-control" id="methodofContact" name="methodofContact" required>
          <option>Email</option>
          <option>Text</option>
          <option>Call</option>
          <option>Other</option>
        </select>
        </div>
       <div class="form-group" id="methodofContact_Other" style="display:none;">
        <label for="contactOther">Please Specify</label>
        <input type="text" class="form-control" id="contactOther" placeholder="">
       </div>
     </div>
       
     <div class="rowspacer"></div>   
        
     <div class="col-md-6">  
      
        <div class="form-group">
        <label for="altContactName" class="required">Name of Alternate Contact *</label>
        <input type="text" class="form-control" id="altContactName" placeholder="" required>
        </div>
        <div class="form-group">
        <label for="phone">Phone *</label>
        <input type="text" class="form-control" id="phone" ng-model="x" ui-mask="999-999-9999" required>
        </div>
     </div>
     <div class="col-md-6">   
        <div class="form-group">
        <label for="relationship" class="required">Relationship *</label>
        <select class="form-control" id="relationship" name="relationship" required>
          <option>Mother</option>
          <option>Father</option>
          <option>Spouse</option>
          <option>Friend</option>
          <option>Grandparent</option>
          <option>Aunt</option>
          <option>Uncle</option>
          <option>Child</option>
          <option>Sibling</option>
          <option>Significant other</option>
          <option>Other</option>
        </select>
        </div>
        
        <div class="form-group" id="relationship_Other" style="display:none;">
        <label for="relationshipOther">Please Specify</label>
        <input type="text" class="form-control" id="relationshipOther" placeholder="">
        </div>
        
        <div class="form-group">
        <label for="email" class="required">Email Address *</label>
        <input type="text" class="form-control" id="email" placeholder="" required>
        </div>
        
        </div>
        
        <div class="rowspacer"></div>  
        
        <div class="col-md-6"> 
        
        <div class="form-group">
        <label for="homesComplete" class="required">HOMES Complete? *</label>
        <div class="form-row">
        <label class="radio-inline">
          <input type="radio" name="homesComplete" id="radioyes" value="yes"> Yes
        </label>
        <label class="radio-inline">
          <input name="homesComplete" type="radio" id="radiono" value="no" checked> No
        </label> 
        </div></div> 
        
        <div class="form-group">
        <label for="homesNumber">HOMES #</label>
        <input type="text" class="form-control" id="homesNumber">
        </div>  
        
        </div>
        
        
        <div class="col-md-6">         
         
        <div class="form-group">
        <label for="sample" class="required">Sample *</label>
        <div class="form-row">
        <label class="radio-inline">
          <input type="radio" name="sample" id="radiojail" value="jail" checked> Jail
        </label>
        <label class="radio-inline">
          <input type="radio" name="sample" id="radioprison" value="prison"> Prison
        </label> 
        <label class="radio-inline">
          <input type="radio" name="sample" id="radiotreatment" value="treatment"> Treatment Count
        </label>
        </div>
        </div>   
        
        <div class="form-group">
        <label for="datereleased">Date released from jail/prison or accepted into treatment court. *</label>
        <input type="text" class="form-control" id="datereleased" placeholder="01-01-2014" required>
        </div>  
        
        </div>
        
        <div class="rowspacer"></div>  
        
        <div class="col-md-6"> 
            <div class="form-group">
            <label for="referralName" class="required">Referral made by *</label>
            <select class="form-control" id="referralName" name="referralName" required>
              <option>Users to be populated</option>
            </select>
            </div> 
            
            <div class="form-group">
            <label for="referralDate" class="required">Referral Date *</label>
            <input type="text" class="form-control" id="referralDate" placeholder="01-01-2014" required>
            </div> 
        </div>

		<div class="rowspacer"></div> 
      
      	<div class="col-md-12">
        
      	<div class="form-group">
        <label for="comments">Comments</label>
        <textarea name="comments" rows="6" class="form-control" id="comments" placeholder=""></textarea>
        </div>
        
        <div class="form-group">
        <button type="submit" class="btn btn-success btn-lg pull-right" 
                   value="Login" title="Login"> <span>NEXT</span> </button>
        </div>
        
        </div>
      
      
      
      
      </form>
  </div>
        
        
    </div>

</div>


<script type="text/javascript">
    $(document).ready(function(){
        $('#methodofContact').on('change', function() {
		  if ( this.value == 'Other')
		  {			$("#methodofContact_Other").show();		  }
		  else
		  {			$("#methodofContact_Other").hide();		  }
		});
		 $('#relationship').on('change', function() {
		  if ( this.value == 'Other')
		  {			$("#relationship_Other").show();		  }
		  else
		  {			$("#relationship_Other").hide();		  }
		});
    });

$(function(){
$('#datereleased').datepicker();
$('#referralDate').datepicker();
})
angular.module('myApp', ['ui.mask'])

</script>


</body>
</html>
