<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Receipt</title>
</head>
<body onload="javascript:window.print()">
	<center>
		<table style="text-align: center;">
			<tr>
				<td><img src=""></td>
				<td style="font-family: sans-serif;text-align: center;">
					<div style="text-align: center;">
						<h2>receipt report</h2>
						<h2>Foreign Resto</h2>
					</div>
					<p style="text-align: center;">Jl. Kelet Ploso KM 36, Kelet, Keling, Jepara, Jawa Tengah 594554</p>
				</td>
				<hr style="text-align: center;">
				<td><img src=""></td>
			</tr>
		</table>
	</center>
	<br>
    <table cellspacing="0" width="100%" border="1">
    	 <tr>
            <th>#</th>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Date</th>
            <th>Time</th>
            <th>People</th>
            <th>Message</th>
         </tr>
           @foreach ($data as $query)
         <tr>
            <th>{{$loop->iteration}}</th>
            <th>{{$query->id}}</th>
            <th>{{$query->name}}</th>
            <th>{{$query->email}}</th>
            <th>{{$query->phone}}</th>
            <th>{{$query->date}}</th>
            <th>{{$query->time}}</th>
            <th>{{$query->people}}</th>
            <th>{{$query->message}}</th>
          </tr>
           @endforeach
    </table>
    <table style="text-align: center;">
    	<tr>
    		<td style="font-family: sans-serif;text-align: center;">
    			<div style="text-align: right;float: right;margin-left: 500px;margin-top: 25px;">
    				Jepara, {{date('Y-m-d')}}
    			</div>
    		</td>
    	</tr>
    </table>
    <table style="text-align: center;">
    	<tr>
    		<td style="font-family: sans-serif;text-align: center;">
    			<div style="text-align: center;float: right;margin-left: 520px;margin-top: 40px;">
    				Admin
    			</div>
    		</td>
    	</tr>
    </table>
</body>
</html>