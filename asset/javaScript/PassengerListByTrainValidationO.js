function validateForm() {
				
				var trainID = document.getElementById('trainID').value;
				var trainName = document.getElementById('trainName').value;
				
				
				// console.log(x);
				if(trainID == "") 
				{
					document.getElementById('errorMsgtrainID').innerHTML = "Train ID Field is empty";
					document.getElementById('errorMsgtrainID').style.color = "red";
					return false;	
				}

				else if(trainName == "") 
				{
					document.getElementById('errorMsgtrainName').innerHTML = "New Password Field is empty";
					document.getElementById('errorMsgtrainName').style.color = "red";
					return false;	
				}

				return true;
			}