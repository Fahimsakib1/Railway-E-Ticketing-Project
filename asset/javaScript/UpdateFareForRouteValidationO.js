function validateForm() {
				
				var StartingStation = document.getElementById('StartingStation').value;
				var ArrivalStation = document.getElementById('ArrivalStation').value;
				
				var flag1=true;
				var flag2=true;
				
				// console.log(x);
				if(StartingStation == "") 
				{
					document.getElementById('errorMsgStartingStation').innerHTML = "Starting Station Field is empty";
					document.getElementById('errorMsgStartingStation').style.color = "red";
					flag1=false;
				}

				else if(ArrivalStation == "") 
				{
					document.getElementById('errorMsgArrivalStation').innerHTML = "Arrival Station Field is empty";
					document.getElementById('errorMsgArrivalStation').style.color = "red";
					flag2=false;
				}

				if(flag1==true && flag2==true){
					return true;
				}
				else{
					return false;
				}

				
				
				
			}