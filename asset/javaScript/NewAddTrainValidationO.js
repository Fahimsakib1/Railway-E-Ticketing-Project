function validateForm() {
				
				var Tid = document.getElementById('Tid').value;
				var Tname = document.getElementById('Tname').value;
				var StartingStation = document.getElementById('StartingStation').value;
				var ArrivalStation = document.getElementById('ArrivalStation').value;

				var flag1=true;
				var flag2=true;
				var flag3=true;
				var flag4=true;


				// console.log(x);
				if(Tid == "") 
				{
					document.getElementById('errorMsgTid').innerHTML = "Train ID Field is empty";
					document.getElementById('errorMsgTid').style.color = "red";
					flag1=false;	
				}

				else if(Tname == "") 
				{
					document.getElementById('errorMsgTname').innerHTML = "Train Name Field is empty";
					document.getElementById('errorMsgTname').style.color = "red";
					flag2=false;
				}

				else if(StartingStation == "") 
				{
					document.getElementById('errorMsgStartingStation').innerHTML = "Starting Station Field is empty";
					document.getElementById('errorMsgStartingStation').style.color = "red";
					flag3=false;
				}

				else if(ArrivalStation == "") 
				{
					document.getElementById('errorMsgArrivalStation').innerHTML = "Arrival Station Field is empty";
					document.getElementById('errorMsgArrivalStation').style.color = "red";
					flag4=false;
				}



				if(flag1==true && flag2==true && flag3==true && flag4==true){
					return true;
				}
				else{
					return false;
				}
				
				
				
			}