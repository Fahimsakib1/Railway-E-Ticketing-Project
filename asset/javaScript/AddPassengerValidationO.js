function validateForm() {
				
				var name = document.getElementById('name').value;
				var address = document.getElementById('address').value;
				var phone = document.getElementById('phone').value;
				var journeydate = document.getElementById('journeydate').value;
				

				var flag1=true;
				var flag2=true;
				var flag3=true;
				var flag4=true;
				
				
             
				console.log(name);
				
				if(name == "") 
				{
					document.getElementById('errorMsgname').innerHTML = "Name is empty";
					document.getElementById('errorMsgname').style.color = "red";
					//return false;
					flag1 = false;	
				}

				else if(address == "") 
				{
					document.getElementById('errorMsgaddress').innerHTML = "Address is empty";
					document.getElementById('errorMsgaddress').style.color = "red";
					//return false;	
					flag2 = false;
				}

				else if(phone == "") 
				{
					document.getElementById('errorMsgphone').innerHTML = "Phone is empty";
					document.getElementById('errorMsgphone').style.color = "red";
					//return false;
					flag3 = false;	
				}


				else if(journeydate == "") 
				{
					document.getElementById('errorMsgjourneydate').innerHTML = "Journey Date is empty";
					document.getElementById('errorMsgjourneydate').style.color = "red";
					//return false;	
					flag4 = false;
				}

				
				if(flag1==true && flag2==true && flag3==true && flag4==true){
					return true;
				}
				else{
					return false;
				}
				
				
			}