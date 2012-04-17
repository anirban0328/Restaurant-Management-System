<script type="text/javascript">
function addinventoryvalidate()
{
var name=document.getElementById("name").value;
var qty=document.getElementById("qty").value;
submitOK="true";
 if(name.length==0 || qty.length==0)
 {
	alert("No field should be left empty");
	submitOK="false";
 } 
 else
 {
	if(qty<=0)
	{
		alert("QTY must be positive");
		submitOK="false";
	}
 }
 if (submitOK=="false")
	{
		return false;
	}
} 
 
</script> 