  function validate_fname(){
    var first_name=login.first_name.value;
    var user=  /^[A-Z a-z]\w{2,10}$/;
    if(!document.login.first_name.value.match(user)){
          alert("Please provide Your valid First Name.");
          document.login.first_name.focus();
      }
        if(first_name==null || first_name=="")
            {
            alert("Please enter your First Name");
            login.first_name.focus();
            return false;
            }
  }
  function validate_lname() {
    var last_name=login.last_name.value;
    var user=  /^[A-Za-z]\w{2,10}$/;
    if(!document.login.last_name.value.match(user)){
          alert("Please provide Your valid Last Name.");
          document.login.last_name.focus();
      }
        if(last_name==null || last_name=="")
            {
            alert("Please enter your Last Name");
            login.last_name.focus();
            return false;
            }
  }
  
  function validate_email() {
      var email = document.getElementById('emailaddr');
      var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+\.([a-zA-Z0-9]{2,4})+$/;
      if ( document.login.emailaddr.value == ""  || !document.login.emailaddr.value.match(filter)) {
          alert('Please provide a valid Email.');
          document.login.emailaddr.focus();
      }
  }

  function validate_DOB(){
      if (!document.login.DOB.value.match(/^\d{1,2}\/\d{1,2}\/\d{4}$/)) {
          alert('Please enter your valid Date Of Birth.');
          document.login.DOB.focus();            
      }
      var today = new Date();
      if (today <= document.login.DOB.value) {
          alert("Current or future date is not allowed.");
          document.login.DOB.focus(); 
      }
  }
  
  function validate_Mobile(){
      var m_check = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
      if(!document.login.Mobile.value.match(m_check)){
          alert("Please provide Your valid Mobile Number.");
          document.login.Mobile.focus();
      }
  }

  function validate_pass() 
{ 
var password=login.password.value;
var passw=  /^[A-Za-z0-9]\w{7,14}$/;
if(!document.login.password.value.match(passw)){
          alert("Please provide Your valid Password.");
          document.login.password.focus();
      }
      if(password==null || password=="")
{
alert("Please enter your password");
login.usrpassword.focus();
return false;
}
}

function validate_user()
{
var username=login.username.value;
var user=  /^[A-Za-z]\w{7,14}$/;
if(!document.login.username.value.match(user)){
          alert("Please provide Your valid Username.");
          document.login.username.focus();
      }
      if(username==null || username=="")
{
alert("Please enter your Username");
login.username.focus();
return false;
}
}

