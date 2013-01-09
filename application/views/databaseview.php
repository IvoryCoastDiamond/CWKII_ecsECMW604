
<html>
<head>	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.0.4/css/bootstrap-combined.min.css"/>
</head>
<body>
<?php $this->load->view ('header')?>

 <form name="input" action="<?php echo site_url('find/findemp') ?>" method="get">
	
	
	<fieldset>
	<legend> Search </legend>
 First Name: <input type="text" name="firstname" id="firstname"><br>
 Last Name: <input type="text" name="lastname" id="lastname"><br>
 Department: <input type="text" name="department" id="department"><br>
 Title: <input type="text" name="title" id="title"><br>
 <input type="submit" id="search_submit" value="Search" class="btn btn-primary">
	<fieldset>
 </form>
	<table class="search_results">
		<thead>
			<th>First name  </th>
			<th>Last Name</th>
			<th>Department Name </th>
			<th>Title</th>
		</thead>
		<tbody>

		
		</tbody>
	
	
	</table>
	
	
<?php $this->load->view ('footer')?>
</body>
</html>