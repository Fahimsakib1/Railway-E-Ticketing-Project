
/*function validateForm() 

{
				
				var name = document.getElementById('name').value;
				var ticketID = document.getElementById('ticketID').value;
				var mobile = document.getElementById('mobile').value;
				
				// console.log(x);
				if(name == "") 
				{
					document.getElementById('errorMsgName').innerHTML = "User Name Is Empty";
					document.getElementById('errorMsgName').style.color = "red";
					return false;	
				}

				else if(ticketID == "") 
				{
					document.getElementById('errorMsgticketID').innerHTML = "Ticket ID Field Is empty";
					document.getElementById('errorMsgticketID').style.color = "red";
					return false;	
				}

				else if(mobile == "") 
				{
					document.getElementById('errorMsgMobile').innerHTML = "Mobile Number is Required";
					document.getElementById('errorMsgMobile').style.color = "red";
					return false;	
				}

				
				
				return true;
			} */



			function validateForm() 

{
				
				
			

				var mobile = document.getElementById('mobile').value;
				
				// console.log(x);
				if(mobile == "") 
				{
					document.getElementById('errorMsgMobile').innerHTML = "Mobile Number is Required";
					document.getElementById('errorMsgMobile').style.color = "red";
					return false;	
				}

				

				
				
				return true;
			

}