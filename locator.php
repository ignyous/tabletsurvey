<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Locator</title>
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
            <h1>Locator</h1>
          </div>
          <div class="spacer"></div>
          <div class="form-group">
            <label for="studyID">Study ID *</label>
            <input type="text" class="form-control" id="studyID" value="John Doe - 276723"  readonly>
          </div>
          <div class="form-group">
            <label for="reach" class="required">What do you think is the best way for us to reach you for the next interview? *</label>
            <textarea name="reach" rows="6" class="form-control" id="reach" placeholder="" required></textarea>
          </div>
          <div class="row-label">
            <label class="required">First, Please tell us your full legal name: *</label>
          </div>
          <div class="col-md-4 first">
            <div class="form-group">
              <input type="text" class="form-control" id="firstName" placeholder="" required>
              <label for="firstName">First Name *</label>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <input type="text" class="form-control" id="middleName" placeholder="">
              <label for="middleName">Middle Name</label>
            </div>
          </div>
          <div class="col-md-4 last">
            <div class="form-group">
              <input type="text" class="form-control" id="lastName" placeholder="" required>
              <label for="lastName">Last Name *</label>
            </div>
          </div>
          <div class="clearboth"></div>
          <div class="row-label">
            <label>Please tell me any pervious last names (i.e. maiden or married)?</label>
          </div>
          <div class="col-md-3 first">
            <div class="form-group">
              <input type="text" class="form-control" id="previousnames1" placeholder="Previous Name 1">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <input type="text" class="form-control" id="previousnames2" placeholder="Previous Name 2">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <input type="text" class="form-control" id="previousnames3" placeholder="Previous Name 3">
            </div>
          </div>
          <div class="col-md-3 last">
            <div class="form-group">
              <input type="text" class="form-control" id="previousnames4" placeholder="Previous Name 4">
            </div>
          </div>
          <div class="clearboth"></div>
          <div class="form-group">
            <label for="alias">Do you use any other names or aliases?</label>
            <div class="radio">
              <label>
                <input type="radio" name="alias" value="Yes">
                Yes </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="alias"  value="No">
                No </label>
            </div>
            <div class="form-group" id="alias_Other" style="display:none;">
              <div class="col-md-3 first">
                <div class="form-group">
                  <input type="text" class="form-control" id="alias1" placeholder="Alias 1">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <input type="text" class="form-control" id="alias2" placeholder="Alias 2">
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <input type="text" class="form-control" id="alias3" placeholder="Alias 3">
                </div>
              </div>
              <div class="col-md-3 last">
                <div class="form-group">
                  <input type="text" class="form-control" id="alias4" placeholder="Alias 4">
                </div>
              </div>
            </div>
          </div>
          
          <div class="section"></div>
          
          <div class="form-group">
            <label for="birthDate" class="required">What is your Date of Birth *</label>
            <input type="text" class="form-control" id="birthDate" placeholder="01-01-1978" required>
          </div>
          <div class="form-group">
            <label for="ssn" class="required">What is your  Social Security Number? *</label>
            <input type="text" class="form-control" id="ssn" required>
          </div>
          <div class="spacer"></div>
          <div class="row-label">
            <label>Where were you born?</label>
          </div>
          <div class="col-md-9 first">
            <div class="form-group">
              <label for="city">City</label>
              <input type="text" class="form-control" id="borncity" placeholder="">
            </div>
          </div>
          <div class="col-md-3 last">
            <div class="form-group">
              <label for="bornstate">State</label>
              <select name="bornstate" class="form-control">
                <option value="">Select Below</option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
              </select>
            </div>
          </div>
          <div class="clearboth"></div>
          <div class="form-group">
            <label for="bornlocation">If not born in the US, where were you born?</label>
            <input type="text" class="form-control" id="bornlocation" placeholder="" required>
          </div>
          <div class="row-label">
            <label>What is your Driver’s License Number or State ID#?</label>
          </div>
          <div class="col-md-3 first">
            <div class="form-group">
              <label for="licensestate">State</label>
              <select name="licensestate" class="form-control">
                <option value="">Select Below</option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
              </select>
            </div>
          </div>
          <div class="col-md-9 last">
            <div class="form-group">
              <label for="licenseid">#</label>
              <input type="text" class="form-control" id="licenseid" placeholder="">
            </div>
          </div>
          <div class="clearboth"></div>
          <div class="form-group">
            <label for="firstName">I have your home phone number, is this correct?</label>
            <input type="text" class="form-control" id="phoneHome" placeholder="555-555-5555">
          </div>
          <div class="form-group">
            <label for="firstName">I have your cell phone number, is this correct?</label>
            <input type="text" class="form-control" id="phoneCell" placeholder="555-555-5555">
          </div>
          <div class="form-group">
            <label for="firstName">Do you have a work phone number?</label>
            <input type="text" class="form-control" id="phoneWork" placeholder="555-555-5555">
          </div>
          <div class="spacer"></div>
          <div class="row-label">
            <label class="required">What is you residence address? *</label>
          </div>
          <div class="col-md-10 first">
            <div class="form-group">
              <input type="text" class="form-control" id="streetAddress" placeholder="" required>
              <label for="streetAddress" class="required">Street *</label>
            </div>
          </div>
          <div class="col-md-2 last">
            <div class="form-group">
              <input type="text" class="form-control" id="apt" placeholder="">
              <label for="apt">Apt</label>
            </div>
          </div>
          <div class="clearboth"></div>
          <div class="col-md-6 first">
            <div class="form-group">
              <label for="city" class="required">City *</label>
              <input type="text" class="form-control" id="city" placeholder="" required>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="state" class="required">State</label>
              <select name="state" class="form-control" required>
                <option value="">Select Below</option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
              </select>
            </div>
          </div>
          <div class="col-md-2 last">
            <div class="form-group">
              <label for="zipcode" class="required">Zip code *</label>
              <input type="text" class="form-control" id="zipcode" placeholder="" required>
            </div>
          </div>
          <div class="clearboth"></div>
          <div class="form-group">
            <label for="lengthataddress">How long have you lived at this address?</label>
            <select name="lengthataddress" class="form-control" required>
              <option value="">Select Below</option>
              <option value="Less than 1 month">Less than 1 month</option>
              <option value="2-5 months">2-5 months</option>
              <option value="6-11 months">6-11 months</option>
              <option value="1-4 years">1-4 years</option>
              <option value="5-10 years">5-10 years</option>
              <option value="11-14 years">11-14 years</option>
              <option value="15+ years">15+ years</option>
            </select>
          </div>
          <div class="form-group">
            <label for="plantomove" class="required">Do you plan to move anytime soon? *</label>
            <div class="radio">
              <label>
                <input type="radio" name="plantomove" value="Yes">
                Yes </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="plantomove"  value="No">
                No </label>
            </div>
            <div class="form-group" id="plantomove_Other" style="display:none;">
              <div class="form-group">
                <label for="plantomovewhere">Where to?</label>
                <input type="text" class="form-control" id="plantomovewhere" placeholder="" required>
              </div>
            </div>
          </div>
          <div class="spacer"></div>
          <div class="form-group">
            <label for="typeofresidence" class="required">What type of residence is this? *</label>
            <select name="typeofresidence" id="typeofresidence" class="form-control" required>
              <option value="">Select Below</option>
              <option>Private residence</option>
              <option>Group home</option>
              <option>Shelter</option>
              <option>Residential Treatment Program</option>
            </select>
          </div>
          <div class="form-group" id="typeofresidence_Other" style="display:none;">
            <div class="row-label">
              <label>Who else lives in your residence?</label>
            </div>
            <div class="col-md-4 first">
              <div class="form-group">
                <label for="whoelsename1">Name</label>
                <input type="text" class="form-control" id="whoelsename1" placeholder="">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="whoelserelationship1">Relationship</label>
                <select name="whoelserelationship1" id="whoelserelationship1" class="form-control">
                  <option value="">Select Below</option>
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
            </div>
            <div class="col-md-4 last">
              <div class="form-group">
                <label for="whoelsedob1">DOB</label>
                <input type="text" class="form-control" id="whoelsedob1" placeholder="01-01-1978">
              </div>
            </div>
            <div class="clearboth"></div>
            <div class="col-md-4 first">
              <div class="form-group">
                <label for="whoelsename1">Name</label>
                <input type="text" class="form-control" id="whoelsename1" placeholder="">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="whoelserelationship2">Relationship</label>
                <select name="whoelserelationship2" id="whoelserelationship2" class="form-control">
                  <option value="">Select Below</option>
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
            </div>
            <div class="col-md-4 last">
              <div class="form-group">
                <label for="whoelsedob2">DOB</label>
                <input type="text" class="form-control" id="whoelsedob2" placeholder="01-01-1978">
              </div>
            </div>
            <div class="clearboth"></div>
            <div class="col-md-4 first">
              <div class="form-group">
                <label for="whoelsename3">Name</label>
                <input type="text" class="form-control" id="whoelsename3" placeholder="">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="whoelserelationship3">Relationship</label>
                <select name="whoelserelationship3" id="whoelserelationship3" class="form-control">
                  <option value="">Select Below</option>
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
            </div>
            <div class="col-md-4 last">
              <div class="form-group">
                <label for="whoelsedob3">DOB</label>
                <input type="text" class="form-control" id="whoelsedob3" placeholder="01-01-1978">
              </div>
            </div>
            <div class="spacer"></div>
            <div class="row-label">
              <label>Whose residence address is this?</label>
            </div>
            <div class="col-md-6 first">
              <div class="form-group">
                <label for="whoseaddressname">Name</label>
                <input type="text" class="form-control" id="whoseaddressname" placeholder="">
              </div>
            </div>
            <div class="col-md-6 last">
              <div class="form-group">
                <label for="whoseaddressrelationship">Relationship</label>
                <select name="whoseaddressrelationship" id="whoseaddressrelationship" class="form-control">
                  <option value="">Select Below</option>
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
            </div>
            <div class="clearboth"></div>
            <div class="row-label">
              <label>Whose residence phone is this?</label>
            </div>
            <div class="col-md-6 first">
              <div class="form-group">
                <label for="whoseaddressname">Name</label>
                <input type="text" class="form-control" id="whoseaddressname" placeholder="">
              </div>
            </div>
            <div class="col-md-6 last">
              <div class="form-group">
                <label for="whoseaddressrelationship">Relationship</label>
                <select name="whoseaddressrelationship" id="whoseaddressrelationship" class="form-control">
                  <option value="">Select Below</option>
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
            </div>
            <div class="spacer"></div>
          </div>
          <div class="spacer"></div>
          <div class="form-group">
            <label for="problemreturningaddress" class="required">Is there a problem with returning to this residence address? *</label>
            <div class="radio">
              <label>
                <input type="radio" name="problemreturningaddress" value="Yes">
                Yes </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="problemreturningaddress"  value="No">
                No </label>
            </div>
          </div>
          <div class="form-group">
            <label for="bestmailingaddress" class="required">Is this the best mailing address too? *</label>
            <div class="radio">
              <label>
                <input type="radio" name="bestmailingaddress" value="Yes">
                Yes </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="bestmailingaddress"  value="No">
                No </label>
            </div>
          </div>
          <div class="form-group" id="bestmailingaddress_Other" style="display:none;">
            <div class="row-label">
              <label>if no, could you please give me the best address?</label>
            </div>
            <div class="col-md-10 first">
              <div class="form-group">
                <input type="text" class="form-control" id="mailingstreetaddress" placeholder="">
                <label for="mailingstreetaddress">Street *</label>
              </div>
            </div>
            <div class="col-md-2 last">
              <div class="form-group">
                <input type="text" class="form-control" id="mailingApt" placeholder="">
                <label for="mailingApt">Apt</label>
              </div>
            </div>
            <div class="clearboth"></div>
            <div class="col-md-6 first">
              <div class="form-group">
                <label for="mailingcity">City *</label>
                <input type="text" class="form-control" id="mailingcity" placeholder="">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label for="mailingstate">State</label>
                <select name="mailingstate" class="form-control">
                  <option value="">Select Below</option>
                  <option value="AL">Alabama</option>
                  <option value="AK">Alaska</option>
                  <option value="AZ">Arizona</option>
                  <option value="AR">Arkansas</option>
                  <option value="CA">California</option>
                  <option value="CO">Colorado</option>
                  <option value="CT">Connecticut</option>
                  <option value="DE">Delaware</option>
                  <option value="DC">District of Columbia</option>
                  <option value="FL">Florida</option>
                  <option value="GA">Georgia</option>
                  <option value="HI">Hawaii</option>
                  <option value="ID">Idaho</option>
                  <option value="IL">Illinois</option>
                  <option value="IN">Indiana</option>
                  <option value="IA">Iowa</option>
                  <option value="KS">Kansas</option>
                  <option value="KY">Kentucky</option>
                  <option value="LA">Louisiana</option>
                  <option value="ME">Maine</option>
                  <option value="MD">Maryland</option>
                  <option value="MA">Massachusetts</option>
                  <option value="MI">Michigan</option>
                  <option value="MN">Minnesota</option>
                  <option value="MS">Mississippi</option>
                  <option value="MO">Missouri</option>
                  <option value="MT">Montana</option>
                  <option value="NE">Nebraska</option>
                  <option value="NV">Nevada</option>
                  <option value="NH">New Hampshire</option>
                  <option value="NJ">New Jersey</option>
                  <option value="NM">New Mexico</option>
                  <option value="NY">New York</option>
                  <option value="NC">North Carolina</option>
                  <option value="ND">North Dakota</option>
                  <option value="OH">Ohio</option>
                  <option value="OK">Oklahoma</option>
                  <option value="OR">Oregon</option>
                  <option value="PA">Pennsylvania</option>
                  <option value="RI">Rhode Island</option>
                  <option value="SC">South Carolina</option>
                  <option value="SD">South Dakota</option>
                  <option value="TN">Tennessee</option>
                  <option value="TX">Texas</option>
                  <option value="UT">Utah</option>
                  <option value="VT">Vermont</option>
                  <option value="VA">Virginia</option>
                  <option value="WA">Washington</option>
                  <option value="WV">West Virginia</option>
                  <option value="WI">Wisconsin</option>
                  <option value="WY">Wyoming</option>
                </select>
              </div>
            </div>
            <div class="col-md-2 last">
              <div class="form-group">
                <label for="zipcode">Zip code *</label>
                <input type="text" class="form-control" id="mailingzipcode" placeholder="">
              </div>
            </div>
            <div class="spacer"></div>
            <div class="row-label">
              <label>Who else lives there (at mailing address)?</label>
            </div>
            <div class="col-md-6 first">
              <div class="form-group">
                <label for="whoelsemailingname1">Name</label>
                <input type="text" class="form-control" id="whoelsemailingname1" placeholder="">
              </div>
            </div>
            <div class="col-md-6 last">
              <div class="form-group">
                <label for="whoelsemailingrelationship1">Relationship</label>
                <select name="whoelsemailingrelationship1" id="whoelsemailingrelationship1" class="form-control">
                  <option value="">Select Below</option>
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
            </div>
            <div class="clearboth"></div>
            <div class="col-md-6 first">
              <div class="form-group">
                <label for="whoelsemailingname1">Name</label>
                <input type="text" class="form-control" id="whoelsemailingname1" placeholder="">
              </div>
            </div>
            <div class="col-md-6 last">
              <div class="form-group">
                <label for="whoelsemailingrelationship1">Relationship</label>
                <select name="whoelsemailingrelationship1" id="whoelsemailingrelationship1" class="form-control">
                  <option value="">Select Below</option>
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
            </div>
            <div class="clearboth"></div>
            <div class="col-md-6 first">
              <div class="form-group">
                <label for="whoelsemailingname1">Name</label>
                <input type="text" class="form-control" id="whoelsemailingname1" placeholder="">
              </div>
            </div>
            <div class="col-md-6 last">
              <div class="form-group">
                <label for="whoelsemailingrelationship1">Relationship</label>
                <select name="whoelsemailingrelationship1" id="whoelsemailingrelationship1" class="form-control">
                  <option value="">Select Below</option>
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
            </div>
            <div class="clearboth"></div>
          </div>
          
          
          <div class="section"></div>
          
          
          <div class="form-group">
            <label for="email" class="required">What is your email address? *</label>
            <input type="email" class="form-control" id="email" placeholder="" required>
          </div>
          <div class="row-label">
            <label>Any other email addresses?</label>
          </div>
          <div class="col-md-6 first">
            <div class="form-group">
              <input type="email" class="form-control" id="emailother1" placeholder="Email">
            </div>
          </div>
          <div class="col-md-6 last">
            <div class="form-group">
              <input type="email" class="form-control" id="emailother2" placeholder="Email">
            </div>
          </div>
          <div class="spacer"></div>
          <div class="form-group">
            <label for="facebook">Do you have a Facebook account?</label>
            <div class="radio">
              <label>
                <input type="radio" name="facebook" value="Yes">
                Yes </label>
            </div>
            <div class="radio">
              <label>
                <input type="radio" name="facebook"  value="No">
                No </label>
            </div>
          </div>
          <div class="form-group">
            <label for="facebookname">What name do you use for your account?</label>
            <input type="text" class="form-control" id="facebookname" placeholder="">
          </div>
          
          
          <div class="section"></div>
          
          <div class="form-group">
            <label class="required">PLEASE LIST 5 FAMILY MEMBERS OR FRIENDS THAT YOU ARE IN CONTACT WITH WHO WOULD KNOW YOUR WHEREABOUTS</label>  
          </div>
          
          <div class="form-group">
            <label class="required">Contact #1</label>  
          </div>
          
          <div class="col-md-4 first">
              <div class="form-group">
                <label for="familycontactFirstName1" class="required">First Name</label>
                <input type="text" class="form-control" id="familycontactFirstName1" placeholder="" required>
              </div>
           </div>
          <div class="col-md-4">
              <div class="form-group">
                <label for="familycontactLastName1" class="required">Last Name</label>
                <input type="text" class="form-control" id="familycontactLastName1" placeholder="" required>
              </div>
           </div>
           <div class="col-md-4 last">
              <div class="form-group">
                <label for="familycontactRelationship1" class="required">Relationship</label>
                <select name="familycontactRelationship1" id="familycontactRelationship1" class="form-control">
                  <option value="">Select Below</option>
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
            </div>
            <div class="clearboth"></div>
            
            <div class="col-md-4 first">
            <div class="form-group">
            <label for="familycontactStreetAddress1" class="required">Street *</label>
              <input type="text" class="form-control" id="familycontactStreetAddress1" placeholder="" required>
              
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="familycontactCity1" class="required">City *</label>
              <input type="text" class="form-control" id="familycontactCity1" placeholder="" required>
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="familycontactState1" class="required">State</label>
              <select name="familycontactState1" id="familycontactState1" class="form-control" required>
                <option value="">Select</option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
              </select>
            </div>
          </div>
          <div class="col-md-2 last">
              <div class="form-group">
                <label for="familycontactZipcode1" class="required">Zip code *</label>
                <input type="text" class="form-control" id="familycontactZipcode1" placeholder="" required>
              </div>
            </div>
            <div class="clearboth"></div>
          
          <div class="col-md-6 first">
          <div class="form-group">
            <label for="familycontactPhone1" class="required">Phone Number *</label>
            <input type="text" class="form-control" id="familycontactPhone1" placeholder="555-555-5555" required>
          </div>
          </div>
          
          <div class="col-md-6 last">
          <div class="form-group">
            <label for="familycontactOther1">If relationship is other, please specify</label>
            <input type="text" class="form-control" id="familycontactOther1" placeholder="">
          </div>
          </div>
          
          <div class="spacer"></div>
          
          
          <div class="form-group">
            <label class="required">Contact #2</label>  
          </div>
          
          <div class="col-md-4 first">
              <div class="form-group">
                <label for="familycontactFirstName2">First Name</label>
                <input type="text" class="form-control" id="familycontactFirstName2" placeholder="">
              </div>
           </div>
          <div class="col-md-4">
              <div class="form-group">
                <label for="familycontactLastName2">Last Name</label>
                <input type="text" class="form-control" id="familycontactLastName2" placeholder="">
              </div>
           </div>
           <div class="col-md-4 last">
              <div class="form-group">
                <label for="familycontactRelationship2">Relationship</label>
                <select name="familycontactRelationship2" id="familycontactRelationship2" class="form-control">
                  <option value="">Select Below</option>
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
            </div>
            <div class="clearboth"></div>
            
           <div class="col-md-4 first">
            <div class="form-group">
            <label for="familycontactStreetAddress2">Street *</label>
              <input type="text" class="form-control" id="familycontactStreetAddress2" placeholder="">
              
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="familycontactCity2">City *</label>
              <input type="text" class="form-control" id="familycontactCity2" placeholder="">
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="familycontactState2">State</label>
              <select name="familycontactState2" id="familycontactState2" class="form-control">
                <option value="">Select</option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
              </select>
            </div>
          </div>
          <div class="col-md-2 last">
              <div class="form-group">
                <label for="familycontactZipcode2">Zip code *</label>
                <input type="text" class="form-control" id="familycontactZipcode2" placeholder="">
              </div>
            </div>
            <div class="clearboth"></div>
          
          <div class="col-md-6 first">
          <div class="form-group">
            <label for="familycontactPhone2" class="required">Phone Number *</label>
            <input type="text" class="form-control" id="familycontactPhone2" placeholder="555-555-5555">
          </div>
          </div>
          
          <div class="col-md-6 last">
          <div class="form-group">
            <label for="familycontactOther2">If relationship is other, please specify</label>
            <input type="text" class="form-control" id="familycontactOther2" placeholder="">
          </div>
          </div>
          
          <div class="spacer"></div>
          
          <div class="form-group">
            <label class="required">Contact #3</label>  
          </div>
          
          <div class="col-md-4 first">
              <div class="form-group">
                <label for="familycontactFirstName2">First Name</label>
                <input type="text" class="form-control" id="familycontactFirstName2" placeholder="">
              </div>
           </div>
          <div class="col-md-4">
              <div class="form-group">
                <label for="familycontactLastName2">Last Name</label>
                <input type="text" class="form-control" id="familycontactLastName2" placeholder="">
              </div>
           </div>
           <div class="col-md-4 last">
              <div class="form-group">
                <label for="familycontactRelationship2">Relationship</label>
                <select name="familycontactRelationship2" id="familycontactRelationship2" class="form-control">
                  <option value="">Select Below</option>
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
            </div>
            <div class="clearboth"></div>
            
           <div class="col-md-4 first">
            <div class="form-group">
            <label for="familycontactStreetAddress2">Street *</label>
              <input type="text" class="form-control" id="familycontactStreetAddress2" placeholder="">
              
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="familycontactCity2">City *</label>
              <input type="text" class="form-control" id="familycontactCity2" placeholder="">
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="familycontactState2">State</label>
              <select name="familycontactState2" id="familycontactState2" class="form-control">
                <option value="">Select</option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
              </select>
            </div>
          </div>
          <div class="col-md-2 last">
              <div class="form-group">
                <label for="familycontactZipcode2">Zip code *</label>
                <input type="text" class="form-control" id="familycontactZipcode2" placeholder="">
              </div>
            </div>
            <div class="clearboth"></div>
          
          <div class="col-md-6 first">
          <div class="form-group">
            <label for="familycontactPhone2" class="required">Phone Number *</label>
            <input type="text" class="form-control" id="familycontactPhone2" placeholder="555-555-5555">
          </div>
          </div>
          
          <div class="col-md-6 last">
          <div class="form-group">
            <label for="familycontactOther2">If relationship is other, please specify</label>
            <input type="text" class="form-control" id="familycontactOther2" placeholder="">
          </div>
          </div>
          
          <div class="spacer"></div>
          
          <div class="form-group">
            <label class="required">Contact #4</label>  
          </div>
          
          <div class="col-md-4 first">
              <div class="form-group">
                <label for="familycontactFirstName2">First Name</label>
                <input type="text" class="form-control" id="familycontactFirstName2" placeholder="">
              </div>
           </div>
          <div class="col-md-4">
              <div class="form-group">
                <label for="familycontactLastName2">Last Name</label>
                <input type="text" class="form-control" id="familycontactLastName2" placeholder="">
              </div>
           </div>
           <div class="col-md-4 last">
              <div class="form-group">
                <label for="familycontactRelationship2">Relationship</label>
                <select name="familycontactRelationship2" id="familycontactRelationship2" class="form-control">
                  <option value="">Select Below</option>
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
            </div>
            <div class="clearboth"></div>
            
           <div class="col-md-4 first">
            <div class="form-group">
            <label for="familycontactStreetAddress2">Street *</label>
              <input type="text" class="form-control" id="familycontactStreetAddress2" placeholder="">
              
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="familycontactCity2">City *</label>
              <input type="text" class="form-control" id="familycontactCity2" placeholder="">
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="familycontactState2">State</label>
              <select name="familycontactState2" id="familycontactState2" class="form-control">
                <option value="">Select</option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
              </select>
            </div>
          </div>
          <div class="col-md-2 last">
              <div class="form-group">
                <label for="familycontactZipcode2">Zip code *</label>
                <input type="text" class="form-control" id="familycontactZipcode2" placeholder="">
              </div>
            </div>
            <div class="clearboth"></div>
          
          <div class="col-md-6 first">
          <div class="form-group">
            <label for="familycontactPhone2" class="required">Phone Number *</label>
            <input type="text" class="form-control" id="familycontactPhone2" placeholder="555-555-5555">
          </div>
          </div>
          
          <div class="col-md-6 last">
          <div class="form-group">
            <label for="familycontactOther2">If relationship is other, please specify</label>
            <input type="text" class="form-control" id="familycontactOther2" placeholder="">
          </div>
          </div>
          
          <div class="spacer"></div>
          
          <div class="form-group">
            <label class="required">Contact #5</label>  
          </div>
          
          <div class="col-md-4 first">
              <div class="form-group">
                <label for="familycontactFirstName2">First Name</label>
                <input type="text" class="form-control" id="familycontactFirstName2" placeholder="">
              </div>
           </div>
          <div class="col-md-4">
              <div class="form-group">
                <label for="familycontactLastName2">Last Name</label>
                <input type="text" class="form-control" id="familycontactLastName2" placeholder="">
              </div>
           </div>
           <div class="col-md-4 last">
              <div class="form-group">
                <label for="familycontactRelationship2">Relationship</label>
                <select name="familycontactRelationship2" id="familycontactRelationship2" class="form-control">
                  <option value="">Select Below</option>
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
            </div>
            <div class="clearboth"></div>
            
           <div class="col-md-4 first">
            <div class="form-group">
            <label for="familycontactStreetAddress2">Street *</label>
              <input type="text" class="form-control" id="familycontactStreetAddress2" placeholder="">
              
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="familycontactCity2">City *</label>
              <input type="text" class="form-control" id="familycontactCity2" placeholder="">
            </div>
          </div>
          <div class="col-md-2">
            <div class="form-group">
              <label for="familycontactState2">State</label>
              <select name="familycontactState2" id="familycontactState2" class="form-control">
                <option value="">Select</option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
              </select>
            </div>
          </div>
          <div class="col-md-2 last">
              <div class="form-group">
                <label for="familycontactZipcode2">Zip code *</label>
                <input type="text" class="form-control" id="familycontactZipcode2" placeholder="">
              </div>
            </div>
            <div class="clearboth"></div>
          
          <div class="col-md-6 first">
          <div class="form-group">
            <label for="familycontactPhone2" class="required">Phone Number *</label>
            <input type="text" class="form-control" id="familycontactPhone2" placeholder="555-555-5555">
          </div>
          </div>
          
          <div class="col-md-6 last">
          <div class="form-group">
            <label for="familycontactOther2">If relationship is other, please specify</label>
            <input type="text" class="form-control" id="familycontactOther2" placeholder="">
          </div>
          </div>
          
          <div class="spacer"></div>
          
          
          
          
          
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
    $(document).ready(function(){
        $("input[name=alias]:radio").on('change', function() {
		  if ( this.value == 'Yes')
		 {			$("#alias_Other").show();		  }
		  else
		  {			$("#alias_Other").hide();		  }
		});
		$("input[name=plantomove]:radio").on('change', function() {
		  if ( this.value == 'Yes')
		 {			$("#plantomove_Other").show();		  }
		  else
		  {			$("#plantomove_Other").hide();		  }
		});
		$("input[name=bestmailingaddress]:radio").on('change', function() {
		  if ( this.value == 'No')
		 {			$("#bestmailingaddress_Other").show();		  }
		  else
		  {			$("#bestmailingaddress_Other").hide();		  }
		});
		$('#typeofresidence').on('change', function() {
		  if ( this.value == 'Residential Treatment Program')
		  {			$("#typeofresidence_Other").show();		  }
		  else
		  {			$("#typeofresidence_Other").hide();		  }
		});
		
		$("#ssn").mask("999-99-9999");
		$("#phoneHome").mask("999-999-9999");
		$("#phoneWork").mask("999-999-9999");
		$("#phoneCell").mask("999-999-9999");
		$("#familycontactPhone1").mask("999-999-9999");
		$("#zipcode").mask("99999");
		$('#birthDate').datepicker();
		$('#whoelsedob1').datepicker();
		$('#whoelsedob2').datepicker();
		$('#whoelsedob3').datepicker();
		
    });
</script>
</body>
</html>
