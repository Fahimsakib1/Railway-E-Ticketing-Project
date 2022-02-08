<!DOCTYPE html>
<html>
<head>

	 <style> 
	 	body
        {
            
                
            background-color: #C5C4C1  ;
          
        }

        #pagetitle
       {

       	   background-color: #C303C5  ;
		   font-size: 20px;
		   text-align: center;          
       }

       .mainDivFormButton1{
    margin-top: 2%;
    margin-bottom: 40%;
    margin-left: 2px; */
    font-size: 25px;
    font-weight: bold;
    background-color:#3A43DC ;
   
    border: none;
    color: black;
    border-radius: 10px;
    padding: 15px 22px; 
    text-decoration: none;
    width:170px;
    margin-left: 470px;
}

.mainDivFormButton1:hover
{
	background-color:#4ACC55  ;
}
        
      </style>


	<title> AJAX Example</title>
</head>
<body>

	<div id = "pagetitle"> 

	<h2> AJAX </h2>

   </div>

	<p id = "t1"> </p>
	<button class = "mainDivFormButton1" onclick = "createAjaxRequest()">Click Here</button>

	<script>

		function createAjaxRequest() 

	{
		
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function()
		{
			if(this.readyState == 4 && this.status ==200)
			{
				console.log("Fahim");

				document.getElementById('t1').innerHTML = xhttp.responseText;
			}
		}

		xhttp.open("GET", "DataBaseForAJAXExampleO.php", true);
		xhttp.send();

	}
	</script>

</body>
</html>