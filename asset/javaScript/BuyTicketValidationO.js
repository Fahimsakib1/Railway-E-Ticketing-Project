function validateForm() {
				
				var name = document.getElementById('name').value;
				var trainname = document.getElementById('trainname').value;
				var destination = document.getElementById('destination').value;
				var mobile = document.getElementById('mobile').value;



				var flag1=true;
				var flag2=true;
				var flag3=true;
				var flag4=true;
				
				// console.log(x);
				if(name == "") 
				{
					document.getElementById('errorMsgName').innerHTML = "User Name Is Empty";
					document.getElementById('errorMsgName').style.color = "red";
					flag1 = false;		
				}

				else if(trainname == "") 
				{
					document.getElementById('errorMsgTrainname').innerHTML = "Train Name Field Is empty";
					document.getElementById('errorMsgTrainname').style.color = "red";
					flag2 = false;		
				}


				else if(destination == "") 
				{
					document.getElementById('errorMsgDestination').innerHTML = "Add Destination";
					document.getElementById('errorMsgDestination').style.color = "red";
					flag3 = false;	
				}



				else if(mobile == "") 
				{
					document.getElementById('errorMsgMobile').innerHTML = "Add A Mobile Number";
					document.getElementById('errorMsgMobile').style.color = "red";
					flag4 = false;		
				}



				if(flag1==true && flag2==true && flag3==true && flag4==true )
				{
					return true;
				}
				else
				{
					return false;
				}

				
				
				
			}