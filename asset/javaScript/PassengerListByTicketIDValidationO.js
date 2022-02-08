function validateForm() {
				
				var ticketID = document.getElementById('ticketID').value;
				
				


				// console.log(x);
				if(ticketID == "") 
				{
					document.getElementById('errorMsgticketID').innerHTML = "Ticket ID Field is empty";
					document.getElementById('errorMsgticketID').style.color = "red";
					return false;	
				}
		
				return true;
			}