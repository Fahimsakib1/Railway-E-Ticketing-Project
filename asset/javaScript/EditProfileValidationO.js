function validateForm() {
				
				var name = document.getElementById('name').value;
				var email = document.getElementById('email').value;
				var gender = document.getElementById('gender').value;
				var dob = document.getElementById('dob').value;
				var address = document.getElementById('address').value;

				var flag1=true;
				var flag2=true;
				var flag3=true;
				var flag4=true;
				var flag5=true;
				
             
				console.log(name);
				
				if(name == "") 
				{
					document.getElementById('errorMsgName').innerHTML = "Name is empty";
					document.getElementById('errorMsgName').style.color = "red";
					//return false;
					flag1 = false;	
				}

				else if(email == "") 
				{
					document.getElementById('errorMsgEmail').innerHTML = "Email is empty";
					document.getElementById('errorMsgEmail').style.color = "red";
					//return false;	
					flag2 = false;
				}

				else if(gender == "") 
				{
					document.getElementById('errorMsgGender').innerHTML = "Gender is empty";
					document.getElementById('errorMsgGender').style.color = "red";
					//return false;
					flag3 = false;	
				}


				else if(dob == "") 
				{
					document.getElementById('errorMsgDOB').innerHTML = "Date-of-Birth is empty";
					document.getElementById('errorMsgDOB').style.color = "red";
					//return false;	
					flag4 = false;
				}

				else if(address == "") 
				{
					document.getElementById('errorMsgAddress').innerHTML = "Address is empty";
					document.getElementById('errorMsgAddress').style.color = "red";
					//return false;	
					flag5 = false;
				}

				
				if(flag1==true && flag2==true && flag3==true && flag4==true && flag5 ==true){
					return true;
				}
				else{
					return false;
				}
				
				
			}