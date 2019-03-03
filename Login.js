function password() {
var testV = 1;
var pass1 = prompt('The Password is "sad" ',' ');
while (testV < 5) {
if (!pass1) 
history.go(-1);
if (pass1.toLowerCase() == "sad") {
window.open("main.html", "_self");
break;
} 
testV+=1;
var pass1 = 
prompt('Access Denied - Password Incorrect, Please Try Again.', 'Password');
}
if (pass1.toLowerCase()!="Enter password" & testV ==5) 
history.go(-1);
return " ";
}

