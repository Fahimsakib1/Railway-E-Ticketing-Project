function validateForm() {
				
				var pwd = document.getElementById('pwd').value;
				var pwdN = document.getElementById('pwdN').value;
				var pwdR = document.getElementById('pwdR').value;
				
				// console.log(x);
				if(pwd == "") 
				{
					document.getElementById('errorMsgpwd').innerHTML = "Password Field is empty";
					document.getElementById('errorMsgpwd').style.color = "red";
					return false;	
				}

				else if(pwdN == "") 
				{
					document.getElementById('errorMsgpwdN').innerHTML = "New Password Field is empty";
					document.getElementById('errorMsgpwdN').style.color = "red";
					return false;	
				}

				else if(pwdR == "") 
				{
					document.getElementById('errorMsgpwdR').innerHTML = "Retype New Password Field is empty";
					document.getElementById('errorMsgpwdR').style.color = "red";
					return false;	
				}
				
				return true;
			}