function validateForm()
{
var x=document.forms["form1"]["first_name"].value;
var y=document.forms["form1"]["last_name"].value;
var z=document.forms["form1"]["preferred_times"].value;
var a=document.forms["form1"]["phone_number"].value;
var b=document.forms["form1"]["skypename"].value;
if (x==null || x=="")
  {
  alert("First name must be filled out.");
  return false;
  }
else if (y==null || y=="")
  {
  alert("Last name must be filled out.");
  return false;
  }  
else if (z==null || z=="")
  {
  alert("Preferred dates and times must be filled out.");
  return false;
  }  
else if ((a==null || a=="")&&(b==null || b==""))
  {
  alert("A phone number or Skypename must be filled out.");
  return false;
  }  
}