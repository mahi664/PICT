<div class="container-fluid" >	
		<!--Card with Initial Information and images-->
			<div class="card mycard">
				<div class="card-header">
					<p>
						<b>Teacher's Photo and Personal Details:</b>
						<span>
							<button class="personalclick btn btn-primary" style="margin: 5px;float: right;" onclick="editpersonal()">
								Edit
							</button>
						</span>
					</p>
				</div>
				<div class="col-md-12" style="margin-top: 10px;">
					<img class=" img-responsive myimg" src="images/faculty.jpg" alt="Faculty Photos">
					<div class="card-body" style="margin-left: 300px; padding: 0px;">
						<form action="#">
							<table  id="PersonalTable table-striped">
								<tr>
									<td class="NameHeadings mytbstyle" >Name:</td>
									<td><input class="details" type="text" name="name" placeholder="Aditya Dikshit" disabled></td>
								</tr>
								<tr>
									<td class="NameHeadings mytbstyle">Email:</td>
									<td><input class="details" type="text" name="name" placeholder="dholya@gmail.com" disabled></td>
								</tr>
								<tr>
									<td class="NameHeadings mytbstyle">Phone:</td>
									<td><input class="details" type="number" name="name" placeholder="123456789" disabled></td>
								</tr>
								<tr>
									<td class="NameHeadings mytbstyle">Department:</td>
									<td><input class="details" type="text" name="name" placeholder="Comp" disabled></td>
								</tr>
								<tr>
									<td class="NameHeadings mytbstyle">Designation:</td>
									<td><input class="details" type="text" name="name" placeholder="Lab Assistant" disabled></td>
								</tr>
								<tr>
									<td class="NameHeadings mytbstyle">Responsibility:</td>
									<td><input class="details" type="text" name="name" placeholder="Lab Assistant" disabled></td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
		<!--Navigation bar to traverse through the profile-->
		<div id="navBar" class="card mycard">
			<nav class="navbar navbar-expand-sm bg-light navbar-light">
  				<ul class="navbar-nav">
    				<li class="nav-item active">
      					<a class="nav-link" href="#">Qualifiactions</a>
    				</li>
    				<li class="nav-item">
      					<a class="nav-link" href="#">Journals</a>
    				</li>
    				<li class="nav-item">
      					<a class="nav-link" href="#">Projects</a>
    				</li>
    				<li class="nav-item">
      					<a class="nav-link" href="#">Books</a>
    				</li>
    				<li class="nav-item">
      					<a class="nav-link" href="#">Conferences</a>
    				</li>
    				<li class="nav-item">
      					<a class="nav-link" href="#">Patents</a>
    				</li>
  				</ul>
			</nav>
		</div>

		<!--Qualification Details Table-->
		<div id="Qualifications" class="card mycard">
			<div class="card-header">
				<p>
					<b>Qualifications:</b>
					<span>
						<a href="#" class="btn btn-primary" style="float: right; margin: 5px;">Edit</a>
					</span>
				</p>
				
			</div>
			<table class="table-striped table-bordered card-body">
				<tr>
					<th class="mytbstyle">Level</th>
					<th>Degree</th>
					<th>Specialization</th>
					<th>Name of University</th>
					<th>Name of College</th>
					<th>Year of Passing</th>
				</tr>
				<tr>
					<td class="mytbstyle">Graduate</td>
					<td>BE</td>
					<td>Computer Science and Engineering</td>
					<td>Savitribai Fule Pune University</td>
					<td>Pune Institute of Computer Technology</td>
					<td>2019</td>
				</tr>
				<tr>
					<td class="mytbstyle">Post-Graduate</td>
					<td>ME</td>
					<td>Computer Engineering</td>
					<td>Savitribai Fule Pune University</td>
					<td>Pune Institute of Computer Technology</td>
					<td>2021</td>
				</tr>
			</table>
		</div>


		<!--<div class="card" style="margin: 0% 5%;">
			<p class="CardHeader"><b>Areas of Interest:</b></p>
			<p>DATA SECURITY, MACHINE LEARNING, BRAIN COMPUTER INTERFACE</p>
		</div>

		<div class="card" style="margin: 0% 5%;">
			<p class="CardHeader"><b>Teaching Experience:</b></p>
			<p>15 years 6 months</p>
		</div>

		<div class="card" style="margin: 0% 5%;">
			<p class="CardHeader"><b>Industrial Experience:</b></p>
			<p>0 years 0 months</p>
		</div>

		<div class="card" style="margin: 0% 5%;">
			<p class="CardHeader"><b>Other details:</b></p>
			<p>worked in various committee's in College level.</p>
		</div>-->
		<div class="card mycard">
			<table class="table-striped table-bordered">
				<tr><th></th></tr>

				<tr>
					<th class="card-header mytbstyle">
						Areas of Interest:
						<span>
						<a href="#" class="btn btn-primary" style="float: right; margin: 5px;">Edit</a>
						</span>
					</th>
				</tr>
				<tr><td style="padding: 10px;">DATA SECURITY, MACHINE LEARNING, BRAIN COMPUTER INTERFACE</td></tr>

				<tr><th class="card-header mytbstyle">Teaching Experience:
						<span>
						<a href="#" class="btn btn-primary" style="float: right; margin: 5px;">Edit</a>
						</span>
					</th>
				</tr>
				<tr><td style="paddineditbutton g: 10px;">15 years 6 months</td></tr>

				<tr><th class="card-header mytbstyle">Industrial Experience:
						<span>
						<a href="#" class="btn btn-primary" style="float: right; margin: 5px;">Edit</a>
						</span>
					</th>
				</tr>
				<tr><td style="padding: 10px;">0 years 0 months</td></tr>

				<tr><th class="card-header mytbstyle">Other details:
						<span>
						<a href="#" class="btn btn-primary" style="float: right; margin: 5px;">Edit</a>
						</span>
					</th>
				</tr>
				<tr><td style="padding: 10px;">Worked in various committee's in College level.</td></tr>
			</table>
			
		</div>


		<!-- Journal Details-->
		<div class="card mycard" id="Journals">
			<p class="card-header">
				<b>Journal Details:
					<span>
						<a href="#" class="btn btn-primary" style="float: right; margin: 5px;">Edit</a>
					</span>
				</b>
			</p>
			<p>Total Number of Journals: <a href="#">04</a></p>
			<table class="table-striped table-bordered card-body">
				<tr>
					<th class="mytbstyle">Journal Title</th>
					<th>Journal Type</th>
					<th>Journal Year</th>
					<th></th>
					
				</tr>
				<tr>
					<td class="mytbstyle">KIPS, Journal of Information Processing Systems</td>
					<td>International</td>
					<td>2014</td>
					<td><a href="#">View Details</a></td>
				</tr>
				<tr>
					<td class="mytbstyle">International Journal of information and computer security, Inderscience publications</td>
					<td>International</td>
					<td>2014</td>
					<td><a href="#">View Details</a></td>
				</tr>
				<tr>
					<td class="mytbstyle">Journal of Computer Science</td>
					<td>International</td>
					<td>2010</td>
					<td><a href="#">View Details</a></td>
				</tr>
				<tr>
					<td class="mytbstyle">Elixir Electrical Engineering Journal</td>
					<td>International</td>
					<td>2014</td>
					<td><a href="#">View Details</a></td>
				</tr>
			</table>
			
		</div>


		<!-- Book Details-->
		<div class="card mycard" id="Journals">
			<p class="card-header">
				<b>Book Details:</b>
				<span>
					<a href="#" class="btn btn-primary" style="float: right; margin: 5px;">Edit</a>
				</span>
			</p>
			<p>Total Number of Books: <a href="#">04</a></p>
			<table class="table-striped table-bordered card-body">
				<tr>
					<th class="mytbstyle">Book Name</th>
					<th>Publication</th>
					<th>Published year</th>
					<th></th>
					
				</tr>
				<tr>
					<td class="mytbstyle">Design and analysis of algorithms</td>
					<td>McGraw Hill</td>
					<td>2014</td>
					<td><a href="#">View Details</a></td>
				</tr>
				<tr>
					<td class="mytbstyle">Computer Networks and Technology</td>
					<td>McGraw Hill</td>
					<td>2014</td>
					<td><a href="#">View Details</a></td>
				</tr>
				<tr>
					<td class="mytbstyle">Fundamentals of Data structure</td>
					<td>McGraw Hill</td>
					<td>2010</td>
					<td><a href="#">View Details</a></td>
				</tr>
				<tr>
					<td class="mytbstyle">Theory of Computation</td>
					<td>McGraw Hill</td>
					<td>2014</td>
					<td><a href="#">View Details</a></td>
				</tr>
			</table>
			
		</div>


		<div class="card mycard">
			<table class="table-striped table-bordered card-header">
				<tr><th></th></tr>

				<tr>
					<th class="" style="padding: 10px;">Patent Details:
						<span>
							<a href="#" class="btn btn-primary" style="float: right; margin: 5px;">Edit</a>
						</span>
					</th>
				</tr>
				<tr><td class="mytbstyle"><p>Total Number of Patents: <a href="#">00</a></p></td></tr>

				<tr>
					<th class="" style="padding: 10px;">Conference Details
						<span>
							<a href="#" class="btn btn-primary" style="float: right; margin: 5px;">Edit</a>
						</span>
					</th>
				</tr>
				<tr><td class="mytbstyle"><p>Total Number of Conferences: <a href="#">04</a></p></td></tr>

				<tr>
					<th class="" style="padding: 10px;">Curriculum Vitae:
						<span>
							<a href="#" class="btn btn-primary" style="float: right; margin: 5px;">Edit</a>
						</span>
					</th>
				</tr>
				<tr><td class="mytbstyle"><a href="#">Click</a> to view Complete CV </p></td></tr>
			</table>
		</div>





		
	</div>