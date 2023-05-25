function validate()
{
var username=document.getElementById('username').value;
var password=document.getElementById('password').value;

if(password.length<6)
{
    alert("password must be at least 6 character long.");
    return false;
}
else 
{
    alert("login success")
}
}