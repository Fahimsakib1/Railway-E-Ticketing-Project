function validateForm() {
				
				var email = document.getElementById('email').value;
				var pwdN = document.getElementById('pwdN').value;
				var pwdR = document.getElementById('pwdR').value;
				


				// console.log(x);
				if(email == "") 
				{
					document.getElementById('errorMsgemail').innerHTML = "Email is empty";
					document.getElementById('errorMsgemail').style.color = "red";
					return false;	
				}

				else if(pwdN == "") 
				{
					document.getElementById('errorMsgpwdN').innerHTML = "Password Field is empty";
					document.getElementById('errorMsgpwdN').style.color = "red";
					return false;
				}

				else if(pwdR == "") 
				{
					document.getElementById('errorMsgpwdR').innerHTML = "Confirm Password Field is empty";
					document.getElementById('errorMsgpwdR').style.color = "red";
					return false;	
				}

				
				
				return true;
			}