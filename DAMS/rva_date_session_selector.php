<tr>	
								<td>
									<div class="radio" id="srange">
										 <label style="padding-right:40px" for="range">Select Session Range</label>
										  <input type="radio" name="range" value="1">
									</div>
								</td>
							</tr>
							<tr>
								<td>
								
								<div class="row" id="srange_show">
									 <div class="form-group col-lg-4 col-sm-4 col-md-4 col-xs-6">
									  <label for="from_session">FROM:</label>
									  <select class="form-control" name="from_session" id="from_session">
										<?php include 'rva_selectsession.php';	?>
									  </select>
									</div>

									<div  class="form-group col-lg-4 col-sm-4 col-md-4 col-xs-6">
									  <label for="to_session">TO:</label>
									  <select class="form-control" name="to_session" id="to_session">
										<?php include 'rva_selectsession.php';	?>
									  </select>
									</div>
								</div>
								</td>
							</tr>
				
							<tr>
								<td>
									<div class="radio" id="drange">
										 <label style="padding-right:60px" for="range">Select Date Range</label>
										  <input type="radio" name="range" value="2">
									</div>
								</td>
							</tr>
							<tr>
								<td>
								<div class="row" id="drange_show">
									<div  class="form-group col-lg-4 col-sm-4 col-md-4 col-xs-6">	<label for="from">FROM:</label> <input type="date" name="from">
									</div>
									<div  class="form-group col-lg-4 col-sm-4 col-md-4 col-xs-6">
									<label for="to">TO:</label> <input type="date" name="to">
									</div>
								</div>
								</td>
							</tr>
