function validateForm() {
				
				var startingstation = document.getElementById('startingstation').value;
				var arrivalstation = document.getElementById('arrivalstation').value;
				
				var flag1=true;
				var flag2=true;


				// console.log(x);
				if(startstation == "") 
				{
					document.getElementById('errorMsg1').innerHTML = "Starting Station is empty";
					document.getElementById('errorMsg1').style.color = "red";
					flag1=false;	
				}

				else if(arrivalstation == "") 
				{
					document.getElementById('errorMsg2').innerHTML = "Arrival Station is empty";
					document.getElementById('errorMsg2').style.color = "red";
					flag2=false;
				}

				if(flag1==true && flag2==true){
					return true;
				}
				else{
					return false;
				}
				
				
				
			}