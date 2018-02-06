<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Basic Bootstrap Template</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- Optional Bootstrap theme -->
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-8" style="background-color: #ababab;">
			<ul class="list-group">
			  <li class="list-group-item">Dapibus ac facilisis in</li>
			  <li class="list-group-item list-group-item-primary">This is a primary list group item</li>
			  <li class="list-group-item list-group-item-secondary">This is a secondary list group item</li>
			  <li class="list-group-item list-group-item-success">This is a success list group item</li>
			  <li class="list-group-item list-group-item-danger">This is a danger list group item</li>
			  <li class="list-group-item list-group-item-warning">This is a warning list group item</li>
			  <li class="list-group-item list-group-item-info">This is a info list group item</li>
			  <li class="list-group-item list-group-item-light">This is a light list group item</li>
			  <li class="list-group-item list-group-item-dark">This is a dark list group item</li>
			</ul>
		</div>
        <div class="col-2" style="background-color: #abcabc;"><p>Box 1</p>
            <!--Column right with nested rows and columns-->
            <div class="row-fluid">
                <div class="col-12" style="background-color: #a3ba3b;"><p>Box 10</p></div>
				<div class="col-12" style="background-color: #a2ba3b;"><p>Box 10</p></div>
				<div class="col-12" style="background-color: #a1ba3b;"><p>Box 10</p></div>
            </div>
            <div class="row">
                <div class="col-12" style="background-color: #cdcdcd;"><p>Box 1</p></div>
            </div>
        </div>
    </div>
	<div class="row mt-5">
		<div class="col-8">
			<table class="table table-sm table-responsive table-striped table-dark table-bordered table-hover">
				<thead>
					<tr>
						<th scope="col">Row</th>
						<th scope="col">First Name</th>
						<th scope="col">Last Name</th>
						<th scope="col">Email</th>
					</tr>
				</thead>
				<tbody>
					<tr class="active">
						<th scope="row">1</th>
						<td>John</td>
						<td>Carter</td>
						<td>johncarter@mail.com</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Peter Peterr</td>
						<td>Parker</td>
						<td>peterparker@mail.com</td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td>John</td>
						<td>Rambo</td>
						<td>johnrambo@mail.com</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
 
    <!--<div class="row">
        <div class="col-md-4" style="background-color: #cdcdcd;"><p>Box 1</p></div>
        <div class="col-md-12" style="background-color: #bcbcbc;">
		    <div class="col-md-4 offset-md-4" style="background-color: #cdcdcd;"><p>Box 3</p></div>
		</div>
        <div class="col-md-4" style="background-color: #ababab;"><p>Box 4</p></div>
        <div class="col-md-4" style="background-color: #cdcdcd;"><p>Box 5</p></div>
        <div class="col-md-4" style="background-color: #ababab;"><p>Box 6</p></div>
		<div class="clearfix visible-md-block"></div>
        <div class="col-md-4" style="background-color: #cdcdcd;"><p>Box 7<br /><br /><br /><br /><br /><br /><br /><br /><br /></p></div>
        <div class="col-md-4" style="background-color: #ababab;"><p>Box 8</p></div>
        <div class="col-md-4" style="background-color: #cdcdcd;"><p>Box 9</p></div>
        <div class="col-md-4" style="background-color: #ababab;"><p>Box 10</p></div>
        <div class="col-md-4" style="background-color: #cdcdcd;"><p>Box 11</p></div>
        <div class="col-md-4" style="background-color: #ababab;"><p>Box 12</p></div>
    </div>-->
	
	
	
    <!-- wrapping example 
	<div class="row">
		<div class="col-sm-3 col-md-2"  style="background-color: #cdcdcd;">x<!--Column one--><!--</div>
		<div class="col-sm-9 col-md-8"  style="background-color: #ababab;">y<!--Column two--><!--</div>
		<div class="col-sm-12 col-md-2" style="background-color: #cdcdcd;">z<!--Column three--><!--</div>
	</div>-->

    <!--Row with two equal columns
    <div class="row">
        <div class="col-sm-4" style="background-color: #cdcdcd;">a<!--Column left--><!--</div>
        <div class="col-sm-4"style="background-color: #ababab;">b<!--Column right--><!--</div>
		<div class="col-sm-4" style="background-color: #cdcdcd;">a<!--Column left--><!--</div>
    </div>-->
    
    <!--Row with two columns divided in 1:2 ratio
    <div class="row">
        <div class="col-sm-4" style="background-color: #efefef;">c<!--Column left--><!--</div>
        <div class="col-sm-8" style="background-color: #bcbcbc;">d<!--Column right--><!--</div>
    </div>-->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>