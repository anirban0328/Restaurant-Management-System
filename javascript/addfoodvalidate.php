<script type="text/javascript">
function addfoodvalidate()
{
var name=document.getElementById("name").value;
var cost=document.getElementById("cost").value;
var qty=document.getElementById("qty").value;
submitOK="true";
 if(name.length==0 || cost.length==0 || qty.length==0)
 {
	alert("No field should be left empty");
	submitOK="false";
 }
 if(cost<=0 || qty<=0)
 {
	alert("COST/QTY must be positive");
	submitOK="false";
 }
 if (submitOK=="false")
 {
 return false;
 }
 
}
 
 
</script> 