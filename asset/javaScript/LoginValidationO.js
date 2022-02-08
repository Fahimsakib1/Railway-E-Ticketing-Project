function validateForm() {
				
				var name = document.getElementById('name').value;
				var pwd = document.getElementById('pwd').value;
				


				// console.log(x);
				if(name == "") 
				{
					document.getElementById('errorMsgName').innerHTML = "User Name is empty";
					document.getElementById('errorMsgName').style.color = "red";
					return false;	
				}

				else if(pwd == "") 
				{
					document.getElementById('errorMsgPwd').innerHTML = "Password is empty";
					document.getElementById('errorMsgPwd').style.color = "red";
					return false;	
				}

				
				
				return true;
			}