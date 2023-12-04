function ajax()
{
    let email = document.getElementById('email').value;
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controller/emailAvailabilityCheck.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200){
            document.getElementById('output').innerHTML = this.responseText;
        }
    }

    xhttp.send('email='+email);
}