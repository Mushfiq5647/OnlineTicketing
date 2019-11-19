<?php
session_start(); 

$s=$_GET["s"];
$d=$_GET["d"];
$departure=$_GET["dep"];
$bus=$_GET["bus"];


?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

body
{
	background-color: #e6e6e6;

	font-family: sans-serif;

}
	.div
      	{
       background-color: #f2f2f2;
		margin: 40px 680px 50px 320px;
		border: 5px solid gray;
	}

#id
{
	 margin: -710px 100px 50px 770px;
	
}

	
		.common
		{
			width: 70px;
			height: 40px;
			line-height: 50px;
			border: 5px solid #333;
			background-color: gray;
			text-align: center;
			font-size: 02px;
			vertical-align: middle;
			cursor: pointer;
			transition: ease-in-out 0.1s;
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-weight: bold;
			font-size: 13px;
		}

	
		.common1
		{
				width: 70px;
			height: 40px;
			line-height: 50px;
			border: 5px solid green;
			background-color: lightgreen;
			color: #333;
			text-align: center;
			vertical-align: middle;
			cursor: pointer;
			transition: ease-in-out 0.1s;
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-weight: bold;
			font-size: 13px;
		}
		

	div.form
	{
      margin: -40px 100px 50px 770px;

      width: 320px;
	height: 475px;
	background: #8c8c8c;
	color: white;
	
	padding: 55px 30px;
	}


::placeholder {
	color: white;
	opacity: 1;

}
	.form input
{

	width: 100%;
	margin-bottom: 20px;
}

input, select, textarea{
    color: white;
}
.form input[type="text"]
{

border: none;
border-bottom: 1px solid #fff;
background: transparent;
outline: none;
height: 40px;
}


	 input[type="submit"]

{
	height: 40px;
	background-color: red;
	color: white;
	display: block;
	
	border-radius: 20px;
}


	
		.common_p
		{
			width: 40px;
			height: 30px;
			line-height: 50px;
			border: 5px solid #333;
			background-color: gray;
			text-align: center;
			vertical-align: middle;
			cursor: pointer;
			transition: ease-in-out 0.1s;
			font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
			font-weight: bold;
			font-size: 12px;
		}
		.common_p:hover
		{
			background-color: lightgray;
		}
		.common_p.active
		{
			border:5px solid green;
			color: #333;
			background-color: lightgreen;
		}
	</style>
</head>
<body>

	<div class="div">
	<table>
		<tr>
			<td>
				<p class="common_p" onclick="select_p(event, 'A1', 480);">A1</p>
			</td>
			<td>
				<p class="common_p" onclick="select_p(event, 'A2', 480);">A2</p>
			</td>
			<td>
				<p style="width: 100px;">&nbsp;</p>
			</td>
			<td>
				<p class="common_p" onclick="select_p(event, 'A3', 480);">A3</p>
			</td>
			<td>
				<p class="common_p" onclick="select_p(event, 'A4', 480);">A4</p>
			</td>
		</tr>
		<tr>
			<td>
				<p class="common_p" onclick="select_p(event, 'B1', 480);">B1</p>
			</td>
			<td>
				<p class="common_p" onclick="select_p(event, 'B2', 480);">B2</p>
			</td>
			<td>
				<p style="width: 100px;">&nbsp;</p>
			</td>
			<td>
				<p class="common_p" onclick="select_p(event, 'B3', 480);">B3</p>
			</td>
			<td>
				<p class="common_p" onclick="select_p(event, 'B4', 480);">B4</p>
			</td>
		</tr>
		<tr>
			<td>
				<p class="common_p" onclick="select_p(event, 'C1', 480);">C1</p>
			</td>
			<td>
				<p class="common_p" onclick="select_p(event, 'C2', 480);">C2</p>
			</td>
			<td>
				<p style="width: 100px;">&nbsp;</p>
			</td>
			<td>
				<p class="common_p" onclick="select_p(event, 'C3', 480);">C3</p>
			</td>
			<td>
				<p class="common_p" onclick="select_p(event, 'C4', 480);">C4</p>
			</td>
		</tr>

		<tr>
				<td>
				<p class="common_p" onclick="select_p(event, 'D1', 480);">D1</p>
			</td>
			<td>
				<p class="common_p" onclick="select_p(event, 'D2', 480);">D2</p>
			</td>
			<td>
				<p style="width: 100px;">&nbsp;</p>
			</td>
			<td>
				<p class="common_p" onclick="select_p(event, 'D3', 480);">D3</p>
			</td>
			<td>
				<p class="common_p" onclick="select_p(event, 'D4', 480);">D4</p>
			</td>
		</tr>
		<tr>
			<td>
				<p class="common_p" onclick="select_p(event, 'E1', 480);">E1</p>
			</td>
			<td>
				<p class="common_p" onclick="select_p(event, 'E2', 480);">E2</p>
			</td>
			<td>
				<p style="width: 100px;">&nbsp;</p>
			</td>
			<td>
				<p class="common_p" onclick="select_p(event, 'E3', 480);">E3</p>
			</td>
			<td>
				<p class="common_p" onclick="select_p(event, 'E4', 480);">E4</p>
			</td>
		</tr>
		<tr>
				<td>
				<p class="common_p" onclick="select_p(event, 'F1', 480);">F1</p>
			</td>
			<td>
				<p class="common_p" onclick="select_p(event, 'F2', 480);">F2</p>
			</td>
			<td>
				<p style="width: 100px;">&nbsp;</p>
			</td>
			<td>
				<p class="common_p" onclick="select_p(event, 'F3', 480);">F3</p>
			</td>
			<td>
				<p class="common_p" onclick="select_p(event, 'F4', 480);">F4</p>
			</td>
		</tr>
		<tr>
			<td>
				<p class="common_p" onclick="select_p(event, 'G1', 480);">G1</p>
			</td>
			<td>
				<p class="common_p" onclick="select_p(event, 'G2', 480);">G2</p>
			</td>
			<td>
				<p style="width: 100px;">&nbsp;</p>
			</td>
			<td>
				<p class="common_p" onclick="select_p(event, 'G3', 480);">G3</p>
			</td>
			<td>
				<p class="common_p" onclick="select_p(event, 'G4', 480);">G4</p>
			</td>
		</tr>
		<tr>
				<td>
				<p class="common_p" onclick="select_p(event, 'H1', 480);">H1</p>
			</td>
			<td>
				<p class="common_p" onclick="select_p(event, 'H2', 480);">H2</p>
			</td>
			<td>
				<p style="width: 100px;">&nbsp;</p>
			</td>
			<td>
				<p class="common_p" onclick="select_p(event, 'H3', 480);">H3</p>
			</td>
			<td>
				<p class="common_p" onclick="select_p(event, 'H4', 480);">H4</p>
			</td>
		</tr>
		<tr>
			<td>
				<p class="common_p" onclick="select_p(event, 'I1', 480);">I1</p>
			</td>
			<td>
				<p class="common_p" onclick="select_p(event, 'I2', 480);">I2</p>
			</td>
			<td>
			<p style="width: 100px;">&nbsp;</p>	
			</td>
			<td>
				<p class="common_p" onclick="select_p(event, 'I3', 480);">I3</p>
			</td>
			<td>
				<p class="common_p" onclick="select_p(event, 'I4', 480);">I4</p>
			</td>
		</tr>
	</table>

	</div>

	    <div id="id">
	<table>
		<tr>
			<td>
				<p class="common" >Available</p>
			</td>
			<td>
				<p class="common1">Booked</p>
			</td>
		</tr>
	</table>
	</div>
	<div class="form">
		  <form class="form-content" action="booking.php" method="POST">
    <div class="container">
   
        <h2 align="center">Ticket Booking</h2> 
      <hr>
      
     <label for="username"><b>Username</b></label>
      <input type="text" name="username" value=" <?php  echo  $_SESSION['username']; ?>" />

          <label for="username"><b>Journey</b></label>
      <input type="text" name="journey"  value="<?php echo $s; echo"-"; echo $d; ?>"/>
       <br>
       <label for="departure"><b>Departure Time</b></label>
      <input type="text"  name="departure"  value="<?php echo $departure; ?>" />
        
            <br>
        <label for="seat"><b>Seat</b></label>
      <input type="text"  name="seat"  id="seat" />

              <label for="price"><b>Price</b></label>
      <input type="text"  name="price" id="price" />
        
      <div class="clearfix">
        	<input type="submit" name="book" value="Book Now!!"/>
	</form>
	</div>
</div>

	
</body>
<script type="text/javascript">

	var a=0;
	function select_p(evt,str,price) {
        

   

	      
            if (evt.currentTarget.className.indexOf(" active") >= 0) {

            	a--;

                evt.currentTarget.className = evt.currentTarget.className.replace(" active","");

                      document.getElementById("seat").value = document.getElementById("seat").value.replace(str+ " "," ");

                       
                      document.getElementById("price").value = document.getElementById("price").value.replace(price,a*price);
               }

           else {
                evt.currentTarget.className += " active";
          a++;
  
          document.getElementById("seat").value += " "+str+ " ";


          document.getElementById("price").value = a*price;

        





            }

                   
        }




       

   
</script>
</html>