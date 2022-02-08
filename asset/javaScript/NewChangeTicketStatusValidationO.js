function validateForm() {
				
				var id = document.getElementById('id').value;
				var name = document.getElementById('name').value;
				var previousdate= document.getElementById('previousdate').value;
				var newdate = document.getElementById('newdate').value;
				var previousdestination= document.getElementById('previousdestination').value;
				var newdestination = document.getElementById('newdestination').value;
				

				var flag1=true;
				var flag2=true;
				var flag3=true;
				var flag4=true;
				var flag5=true;
				var flag6=true;
				
             
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
					document.getElementById('errorMsgName').innerHTML = "Name is empty";
					document.getElementById('errorMsgName').style.color = "red";
					//return false;	
					flag2 = false;
				}

				else if(previousdate == "") 
				{
					document.getElementById('errorMsgPreviousdate').innerHTML = "Fill The Previous Journey Date";
					document.getElementById('errorMsgPreviousdate').style.color = "red";
					//return false;
					flag3 = false;	
				}


				else if(newdate == "") 
				{
					document.getElementById('errorMsgNewdate').innerHTML = "Fill The New Journey Date";
					document.getElementById('errorMsgNewdate').style.color = "red";
					//return false;	
					flag4 = false;
				}


				else if(previousdestination == "") 
				{
					document.getElementById('errorMsgPreviousdestination').innerHTML = "Fill The Previous Destination";
					document.getElementById('errorMsgPreviousdestination').style.color = "red";
					//return false;	
					flag5 = false;
				}


				else if(newdestination == "") 
				{
					document.getElementById('errorMsgNewdestination').innerHTML = "Fill The New Destination";
					document.getElementById('errorMsgNewdestination').style.color = "red";
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