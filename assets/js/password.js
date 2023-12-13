

function formValidator(){
 var pw = document.form1.password.value;
 if(CheckPassword(pw))
 {
  alert("Please input your password");
  return false;
 }
 else
 {
  var valid=isValidPassword(pw);
  if(valid==false)
  {
   alert("Weak!! Your password should have at least 8 characters, capital letter and number!");
   return false;
  }
 else
 {
   alert("Strong!! Your password is valid!!");
   return true;
 } 
 }
}

function CheckPassword(pw)
{
 if(pw=="")
 {
  return true;
 }
else return false;
}

/*(?=.*[!#$%&? "])*/

function isValidPassword(pw)
{
 /*var re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}$/;*/
 var re=/^.*(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).*$/;
 return (re.test(pw));
}

function isValidEmail( emailAddress )
{
  var emailRegExp = /^(([^<>()\[\]\\.,;:@"\x00-\x20\x7F]|\\.)+|("""
  ([^\x0A\x0D"\\]|\\\\)+"""))@(([a-z]|#\d+?)([a-z0-9-]|#\d+?)*
  ([a-z0-9]|#\d+?)\.)+([a-z]{2,4})$/i
  return emailRegExp.test( emailAddress );           
}
