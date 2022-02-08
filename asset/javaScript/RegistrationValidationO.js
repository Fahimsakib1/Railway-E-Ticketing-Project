function validateForm() {
				
				var name = document.getElementById('name').value;
				var email = document.getElementById('email').value;
				var username = document.getElementById('username').value;
				var pwdN = document.getElementById('pwdN').value;
				var pwdR = document.getElementById('pwdR').value;
				var dob = document.getElementById('dob').value;
				
				// console.log(x);
				if(name == "") 
				{
					document.getElementById('errorMsgName').innerHTML = "Name Field Empty. Give a Name";
					document.getElementById('errorMsgName').style.color = "red";
					return false;	
				}

				else if(email == "") 
				{
					document.getElementById('errorMsgEmail').innerHTML = "Invalid email... Email is Required";
					document.getElementById('errorMsgEmail').style.color = "red";
					return false;	
				}

				else if(username == "") 
				{
					document.getElementById('errorMsgUserName').innerHTML = "Invalid username.. User Name is Required";
					document.getElementById('errorMsgUserName').style.color = "red";
					return false;	
				}

				else if(pwdN == "") 
				{
					document.getElementById('errorMsgpwdN').innerHTML = "Invalid Password... Password is Required";
					document.getElementById('errorMsgpwdN').style.color = "red";
					return false;	
				}

				else if(pwdR == "") 
				{
					
				    document.getElementById('errorMsgpwdR').innerHTML = "Invalid Re-Password.... Repeat Password is Required";
					document.getElementById('errorMsgpwdR').style.color = "red";
					return false;
				}

				else if(dob == "") 
				{
					document.getElementById('errorMsgDOB').innerHTML = "Date-of-Birth is Required..";
					document.getElementById('errorMsgDOB').style.color = "red";
					return false;	
				}

				
				
				return true;
			}