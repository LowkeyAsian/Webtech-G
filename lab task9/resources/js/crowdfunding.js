
function peymentGetway()
{
    var getwayLoad = document.getElementById("payment_method").value;
    document.getElementById("paymentGetwayLabelLoad").innerHTML = "Type your " + getwayLoad + " Number";
    document.getElementById("paymentGetwayBoxlLoad").innerHTML = ": <input type='text' name='phone_number' id='phone_number'><span id='phone_numberErr' class='error'> *</span>";
    document.getElementById("privacyPolicyLoad").innerHTML = "<input type='checkbox' name='privacyPolicy' id='privacyPolicy'><label for='privacyPolicy'> I have read <a href='../aboutus/privacy_policy.php' target='_blank' class='link-hvr'>Privacy Policy</a></label><span id='privacyPolicyErr' class='error'> *</span>";
}
function peymentGetwayErrRemove()
{
    var payment_method = document.getElementById("payment_method").value;
    
    if (payment_method == "") 
    {
        document.getElementById("payment_methodErr").innerHTML = "";
    }
}

function createDonationValidation() 
{
    var phone_number = document.getElementById("phone_number").value;
    var policyCkeck = document.getElementById("privacyPolicy");

    if (phone_number == "") 
    {
        document.getElementById("phone_numberErr").innerHTML =
        " ⚠ Please fill the Phone Number field";
        return false;
    }
    else{
        document.getElementById("phone_numberErr").innerHTML = "";
    }
    if (policyCkeck.checked == false) 
    {
        document.getElementById("privacyPolicyErr").innerHTML =
        " ⚠ Please check our Privacy Policy!";
        return false;
    }
    else{
        document.getElementById("privacyPolicyErr").innerHTML = "";
    }
}

//Back Function
function goBack()
{
    window.history.back()
}

function Reload()
{
    location.reload();
}

// Login Validation 
function LoginValidation() 
{
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    if (username == "") 
    {
        document.getElementById("usernameErr").innerHTML =
        " ⚠ Please fill the username field";
        return false;
    }
    else{
        document.getElementById("usernameErr").innerHTML = "";
    }
    if (username.length <= 2 || username.length > 20) 
    {
        document.getElementById("usernameErr").innerHTML =
        " ⚠ Username lenght must be between 2 and 20";
        return false;
    }
    else{
        document.getElementById("usernameErr").innerHTML = "";
    }
    if (!isNaN(username)) 
    {
        document.getElementById("usernameErr").innerHTML =
        " ⚠ only characters are allowed";
        return false;
    }
    else{
        document.getElementById("usernameErr").innerHTML = "";
    }
    if (password == "") 
    {
        document.getElementById("passwordErr").innerHTML =
        " ⚠ Please fill the password field";
        return false;
    }
    else{
        document.getElementById("passwordErr").innerHTML = "";
    }
}

function RegistrationValidation() 
{
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var cPassword = document.getElementById("cpass").value;
    var phone = document.getElementById("phone").value;
    var address = document.getElementById("address").value;
    var dob = document.getElementById("dob").value;
    var usertype = document.getElementById("usertype").value;
    var genderM = document.getElementById("Male");
    var genderF = document.getElementById("Female");
    var genderO = document.getElementById("Other");
    var image = document.getElementById("image").value;
    
    if (name == "") 
    {
        document.getElementById("nameErr").innerHTML =
        " ⚠ Please fill the name field";
        return false;
    }
    else{
        document.getElementById("nameErr").innerHTML = "";
    }
    if (email == "") 
    {
        document.getElementById("emailErr").innerHTML =
        " ⚠ Please fill the email field";
        return false;
    }
    else{
        document.getElementById("emailErr").innerHTML = "";
    }
    if (username == "") 
    {
        document.getElementById("usernameErr").innerHTML =
        " ⚠ Please fill the username field";
        return false;
    }
    else{
        document.getElementById("usernameErr").innerHTML ="";
    }
    if (username.length <= 2 || username.length > 20) 
    {
        document.getElementById("usernameErr").innerHTML =
        " ⚠ Username lenght must be between 2 and 20";
        return false;
    }
    if (!isNaN(username)) 
    {
        document.getElementById("usernameErr").innerHTML =
        " ⚠ only characters are allowed";
        return false;
    }
    if (password == "") 
    {
        document.getElementById("passwordErr").innerHTML =
        " ⚠ Please fill the password field";
        return false;
    }
    else{
        document.getElementById("passwordErr").innerHTML = "";
    }
    if (password.length <= 5 || password.length > 20) 
    {
        document.getElementById("passwordErr").innerHTML =
        " ⚠ Passwords lenght must be between  5 and 20";
        return false;
    }
    if (cPassword == "") 
    {
        document.getElementById("cpassErr").innerHTML =
        " ⚠ Please fill the Confirm Password field";
        return false;
    }
    else{
        document.getElementById("cpassErr").innerHTML = "";
    }
    if (password !== cPassword) 
    {
        document.getElementById("cpassErr").innerHTML =
        " ⚠ Password does not match the confirm password";
        return false;
    }
    if (phone == "") 
    {
        document.getElementById("phoneErr").innerHTML =
        " ⚠ Please input a Phone Number";
        return false;
    }
    else{
        document.getElementById("phoneErr").innerHTML = "";
    }
    if (isNaN(phone)) 
    {
        document.getElementById("phoneErr").innerHTML =
        " ⚠ Please input a valid Phone Number";
        return false;
    }
    else{
        document.getElementById("phoneErr").innerHTML = "";
    }
    if (address == "") 
    {
        document.getElementById("addressErr").innerHTML =
        " ⚠ Please fill the address field";
        return false;
    }
    else{
        document.getElementById("addressErr").innerHTML = "";
    }
    if (dob == "") 
    {
        document.getElementById("dobErr").innerHTML =
        " ⚠ Please select your Date of Birth";
        return false;
    }
    else{
        document.getElementById("dobErr").innerHTML = "";
    }
    if (usertype == "") 
    {
        document.getElementById("usertypeErr").innerHTML =
        " ⚠ Please a usertype";
        return false;
    }
    else{
        document.getElementById("usertypeErr").innerHTML = "";
    }
    if (genderM.checked == false && genderF.checked == false && genderO.checked == false ) 
    {
        document.getElementById("genderErr").innerHTML =
        " ⚠ Please select your gender";
        return false;
    }
    else{
        document.getElementById("genderErr").innerHTML = "";
    }
    if (image == "") 
    {
        document.getElementById("imageErr").innerHTML =
        " ⚠ Please your profile Image";
        return false;
    }
    else{
        document.getElementById("imageErr").innerHTML = "";
    }
}
