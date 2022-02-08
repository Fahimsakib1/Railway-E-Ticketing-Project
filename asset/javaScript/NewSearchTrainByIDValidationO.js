function validateForm() 

{
			
				var tid = document.getElementById('tid').value;
				
				// console.log(x);
				if(tid == "") 
				{
					document.getElementById('errorMsgtid').innerHTML = "Enter Train ID To Search Train";
					document.getElementById('errorMsgtid').style.color = "red";
					return false;	
				}

				

				
				
				return true;
			
}