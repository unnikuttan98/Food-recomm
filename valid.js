function validation(){
    var name=document.form.name.value;
    var email=document.form.email.value;
    var phone=document.form.phone.value;
    var address=document.form.address.value;
    var gender=document.form.gender.value;
    var password=document.form.password.value;

    if (name=="") {
        document.getElementById('message_error').style.display='block';
        document.form.name.focus();
    }
    if (email=="") {
        document.getElementById('message_error').style.display='block';
        document.form.email.focus();
    }
    if (phone=="") {
        document.getElementById('message_error').style.display='block';
        document.form.phone.focus();
    }
    if (address=="") {
        document.getElementById('message_error').style.display='block';
        document.form.address.focus();
    }
    if (gender=="") {
        document.getElementById('message_error').style.display='block';
        document.form.gender.focus();
    }
    if (password=="") {
        document.getElementById('message_error').style.display='block';
        document.form.password.focus();
    }
}
function valid(){
    var name=document.form.name.value;
    var password=document.form.password.value;
    if (name=="") {
        document.getElementById('message_error').style.display='block';
        document.form.name.focus();
    }
    if (password=="") {
        document.getElementById('message_error').style.display='block';
        document.form.password.focus();
    }
}