// JavaScript file

function check(form)
{
    if(form.Username.value == "myuserid" && form.password.value == "mypswrd") 
    {
        window.open('target.html')
    }
    
    else {
        alert("Error Password or Username")
    }
}

/*function contact()
{
	alert("You can contact us from the details that appears in the footer section");*/
}