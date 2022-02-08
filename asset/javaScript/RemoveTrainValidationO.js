function validateForm() {
				
				var Tid = document.getElementById('Tid').value;
				

				// console.log(x);
				if(Tid == "") 
				{
					document.getElementById('errorMsgTid').innerHTML = "Train ID Field is empty";
					document.getElementById('errorMsgTid').style.color = "red";
					return false;	
				}

				else{
					return true;
				}
								
			}