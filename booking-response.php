<html>
 <body>

 <!DOCTYPE HTML>
 <html>
 	<head>
 		<title>Assignment 2</title>
 		<meta http-equiv="Content-type" content="text/html; charset=ISO-8859-1" >
 		<link rel="stylesheet" href="style.css">

 	</head>

 	<body>
 		<h2>Booking details</h2>

         <table border="2px">
                     <tr>
                         <td><b>First name</b></td>
                         <td><?php echo $_POST["firstname"]; ?></td>
                         <td><b>Last name</b></td>
                         <td><?php echo $_POST["lastname"]; ?></td>
                     </tr>
                     <tr>
                         <td colspan="2"><b>Email</b></td>
                         <td colspan="2"><?php echo $_POST["email"]; ?></td>
                     </tr>
                     <tr>
                         <td><b>Departure date</b></td>
                         <td><?php echo $_POST["dep-date"]; ?></td>
                         <td><b>Departure airport</b></td>
                         <td><?php echo $_POST["dep-city"]; ?></td>
                     </tr>
                     <tr>
                         <td><b>Return date</b></td>
                         <td><?php echo $_POST["ret-date"]; ?></td>
                         <td><b>Return airport</b></td>
                         <td><?php echo $_POST["ret-city"]; ?></td>
                     </tr>
                     <tr>
                         <td><b>Carrier</b></td>
                         <td><?php echo $_POST["carrier"]; ?></td>
                         <td><b>Direct connection</b></td>
                         <td><?php echo $_POST["direct"]; ?></td>
                     </tr>
                     <tr>
                         <td><b>Persons</b></td>
                         <td><?php echo $_POST["persons"]; ?></td>
                         <td><b>Class</b></td>
                         <td><?php echo $_POST["class"]; ?></td>
                     </tr>
                     <tr>
                         <td colspan="4"><b>Comment</b></td>
                     </tr>
                     <tr>
                         <td colspan="4"><?php echo $_POST["comment"]; ?></td>
                     </tr>
                 </table>
 	</body>
 </html>

 <style>

 body {
     font-family: "Arial", sans-serif;
     line-height: 120%;
 }

 table {
     margin: 12px;
     border: solid 2px #99bbff;
     width: 520px;
 }

 td {
     padding: 3px;

 }

 </style>