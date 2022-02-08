function validateForm() {
				
				var name = document.getElementById('name').value;
				var address = document.getElementById('address').value;
				var mobile = document.getElementById('mobile').value;
				var trainname = document.getElementById('trainname').value;
				var startingstation= document.getElementById('startingstation').value;
				var arrivalstation = document.getElementById('arrivalstation').value;
				

				var flag1=true;
				var flag2=true;
				var flag3=true;
				var flag4=true;
				var flag5=true;
				var flag6=true;
				
             
				//console.log(name);
				
				if(name == "") 
				{
					document.getElementById('errorMsgname').innerHTML = "Name is empty";
					document.getElementById('errorMsgname').style.color = "red";
					//return false;
					flag1 = false;	
				}

				else if(address == "") 
				{
					document.getElementById('errorMsgaddress').innerHTML = "Address is empty";
					document.getElementById('errorMsgaddress').style.color = "red";
					//return false;	
					flag2 = false;
				}

				else if(mobile == "") 
				{
					document.getElementById('errorMsgmobile').innerHTML = "Give Your Mobile Number";
					document.getElementById('errorMsgmobile').style.color = "red";
					//return false;
					flag3 = false;	
				}


				else if(trainname == "") 
				{
					document.getElementById('errorMsgtrainname').innerHTML = "Choose Train Name";
					document.getElementById('errorMsgtrainname').style.color = "red";
					//return false;	
					flag4 = false;
				}


				else if(startingstation == "") 
				{
					document.getElementById('errorMsgstartingstation').innerHTML = " Choose Starting Station";
					document.getElementById('errorMsgstartingstation').style.color = "red";
					//return false;	
					flag5 = false;
				}


				else if(arrivalstation == "") 
				{
					document.getElementById('errorMsgarrivalstation').innerHTML = "Choose Arrival Station ";
					document.getElementById('errorMsgarrivalstation').style.color = "red";
					//return false;	
					flag6 = false;
				}

				
				if(flag1==true && flag2==true && flag3==true && flag4==true && flag5==true && flag6==true){
					return true;
				}
				else{
					return false;
				}
				
				
			}