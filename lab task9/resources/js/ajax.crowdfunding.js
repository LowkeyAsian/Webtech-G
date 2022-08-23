function showDonation(str) 
{
    if (str == "") 
    {
      document.getElementById("TransactionResult").innerHTML = "No Input";
      return;
    }
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() 
    {
      document.getElementById("TransactionResult").innerHTML = this.responseText;
    }
    xhttp.open("GET", "../view/ajax_DonationSearch.php?ajax_query="+str);
    xhttp.send();
}
