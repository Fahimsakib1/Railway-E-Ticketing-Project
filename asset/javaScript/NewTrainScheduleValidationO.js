function validateForm() {
				
				var id = document.getElementById('id').value;
				var name = document.getElementById('name').value;
				var startingstation= document.getElementById('startingstation').value;
				var departuretime = document.getElementById('departuretime').value;
				var arrivalstation = document.getElementById('arrivalstation').value;
				var arrivaltime = document.getElementById('arrivaltime').value;
				var offday = document.getElementById('offday').value;
				

				var flag1=true;
				var flag2=true;
				var flag3=true;
				var flag4=true;
				var flag5=true;
				var flag6=true;
				var flag7=true;
				
             
				//console.log(name);
				
				if(id == "") 
				{
					document.getElementById('errorMsgID').innerHTML = "Train ID is empty";
					document.getElementById('errorMsgID').style.color = "red";
					//return false;
					flag1 = false;	
				}

				else if(name == "") 
				{
					document.getElementById('errorMsgName').innerHTML = "Tain Name is empty";
					document.getElementById('errorMsgName').style.color = "red";
					//return false;	
					flag2 = false;
				}

				else if(startingstaion == "") 
				{
					document.getElementById('errorMsgStartingstaion').innerHTML = "Fill The Starting Station Text Field";
					document.getElementById('errorMsgStartingstaion').style.color = "red";
					//return false;
					flag3 = false;	
				}


				else if(departuretime == "") 
				{
					document.getElementById('errorMsgDeparturetime').innerHTML = "Add  Departure Time";
					document.getElementById('errorMsgDeparturetime').style.color = "red";
					//return false;	
					flag4 = false;
				}


				else if(arrivalstation == "") 
				{
					document.getElementById('errorMsgArrivalstation').innerHTML = "Fill The Arrival Station Text Field";
					document.getElementById('errorMsgArrivalstation').style.color = "red";
					//return false;	
					flag5 = false;
				}


				else if(arrivaltime == "") 
				{
					document.getElementById('errorMsgArrivaltime').innerHTML = "Add  Arrival Time";
					document.getElementById('errorMsgArrivaltime').style.color = "red";
					//return false;	
					flag6 = false;
				}


				else if(offday == "") 
				{
					document.getElementById('errorMsgOffday').innerHTML = "Add  An Off Day";
					document.getElementById('errorMsgOffday').style.color = "red";
					//return false;	
					flag7 = false;
				}

				
				if(flag1==true && flag2==true && flag3==true && flag4==true && flag5==true && flag6==true && flag7==true ){
					return true;
				}
				else{
					return false;
				}
				
				
			}