function deleteUserProgram(product,id) //get the product id and user regNo from php so it can be set in url
{
    if (confirm("Do you really want to Remove this program?")) //display a confirm box asking if user wants to remove the program.
	{
        location.href = 'deleteYourProgram.php?product='+ product+'&id='+id; 
		/*if user clicks ok it will be directed to deleteYourProgram.php.The product id and regNo will be sent to url*/
    }
}//used in yourPrograms.php 
