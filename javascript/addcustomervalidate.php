<script type="text/javascript">
function addcustomervalidate()
{
var name=document.getElementById("name").value;
var ph=document.getElementById("ph").value;
var add=document.getElementById("add").value;
submitOK="true";
 if(name.length==0 || ph.length==0 || add.length==0 )
 {
	alert("No field should be left empty");
	submitOK="false";
 } 
 else
 {
	if(ph.length>10)
	{
		alert("INVALID PHONE NUMBER!");
		submitOK="false";
	}
 }
 if (submitOK=="false")
	{
		return false;
	}
 else
	return true;
} 
 
</script> 