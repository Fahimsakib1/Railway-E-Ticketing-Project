function validateForm() {
				
				var startingstation = document.getElementById('startingstation').value;
				var arrivalstation = document.getElementById('arrivalstation').value;
				var shovonchair = document.getElementById('shovonchair').value;
				var acchair = document.getElementById('acchair').value;
				var acberth = document.getElementById('acberth').value;
				var nonacberth = document.getElementById('nonacberth').value;
				

				
				var flag1=true;
				var flag2=true;
				var flag3=true;
				var flag4=true;
				var flag5=true;
				var flag6=true;
				
				// console.log(x);
				if(startingstation == "") 
				{
					document.getElementById('errorMsgstartingstation').innerHTML = "Add Starting Station";
					document.getElementById('errorMsgstartingstation').style.color = "red";
					flag1=false;
				}

				else if(arrivalstation == "") 
				{
					document.getElementById('errorMsgarrivalstation').innerHTML = "Add Arrival Station";
					document.getElementById('errorMsgarrivalstation').style.color = "red";
					flag2=false;
				}

				else if(shovonchair == "") 
				{
					document.getElementById('errorMsgshovonchair').innerHTML = "Add Fare For Shovon Chair";
					document.getElementById('errorMsgshovonchair').style.color = "red";
					flag3=false;
				}

				else if(acchair == "") 
				{
					document.getElementById('errorMsgacchair').innerHTML = "Add Fare For AC Chair";
					document.getElementById('errorMsgacchair').style.color = "red";
					flag4=false;
				}

				else if(acberth == "") 
				{
					document.getElementById('errorMsgacberth').innerHTML = "Add Fare For AC Berth";
					document.getElementById('errorMsgacberth').style.color = "red";
					flag5=false;
				}

				else if(nonacberth == "") 
				{
					document.getElementById('errorMsgnonacberth').innerHTML = "Add Fare For Non AC Berth";
					document.getElementById('errorMsgnonacberth').style.color = "red";
					flag6=false;
				}



				if(flag1==true && flag2==true && flag3==true && flag4==true && flag5==true && flag6==true){
					return true;
				}
				else{
					return false;
				}

				
				
				
			}