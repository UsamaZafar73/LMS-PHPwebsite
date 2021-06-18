	<div class="tab-content ">
						<div id="itemDetailsTab" class="container-fluid tab-pane active  text-dark" style="background-color:darkcyan">
							<br>
							<!-- Div to show the ajax message from validations/db submission -->
							<div id="itemDetailsMessage"></div>
                            
                           
                            
							<form action="generateAlert.php" method="post">
                                
                                  <div class="form-row">
<!--
							 
-->
                                       <div class="form-group col-md-6">
									<label for="camera">Patient name<span class="requiredIcon">*</span></label>
									<input type="text" class="form-control" name="camera" id="camera" autocomplete="off">
									<div id="itemDetailsItemNameSuggestionsDiv" class="customListDivWidth"></div>
								  </div>
                                      
                                       <div class="form-group col-md-6">
									<label for="road">Age<span class="requiredIcon">*</span></label>
									<input type="text" class="form-control" name="road" id="road" autocomplete="off">
									<div id="itemDetailsItemNameSuggestionsDiv" class="customListDivWidth"></div>
								  </div>
							  </div>
                                  <div class="form-row">
								  <div class="form-group col-md-6">
									<label for="location">Symptoms<span class="requiredIcon">*</span></label>
									<input type="text" class="form-control" name="location" id="location" autocomplete="off">
									<div id="itemDetailsItemNameSuggestionsDiv" class="customListDivWidth"></div>
								  </div>
								  <div class="form-group col-md-6">
									<label for="type">Doctor</label>
									<select id="type" name="type" class="form-control chosenSelect">
										<?php include('inc/statusList.html'); ?>
									</select>
								  </div>
							  </div>
                                
                                
							  <div class="form-row col-md-6">
								<label for="date">Date</label>
                    <input type="date" onload="getDate()" class="form-control" id="date" 
                      name="date">
							  </div>
                                  
<script>

                                function getDate(){
    var today = new Date();

document.getElementById("date").value = today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2);


}
    
    
                                </script>
                                
                                
                                
                                
<!--
                                 <div class="form-row">
								<div class="form-group col-md-3" style="display:inline-block">
								  <label for="itemImageItemNumber">Camera name<span class="requiredIcon">*</span></label>
								  <input type="text" class="form-control" name="itemImageItemNumber" id="itemImageItemNumber" autocomplete="off">
								  <div id="itemImageItemNumberSuggestionsDiv" class="customListDivWidth"></div>
								</div>
								<div class="form-group col-md-4">
									<label for="itemImageItemName">Road name</label>
									<input type="text" class="form-control" name="itemImageItemName" id="itemImageItemName" readonly>
								</div>
							  </div>
-->
                                
                                
                                
                               
							  <br>
							 
                               
                                <div class="row" style="padding-left:5%; padding-bottom:5%">
                                    
                                    
							  <input type="submit" id="addItem" class="btn btn-success col-4"  >
							 
							  <button type="reset" class="btn btn-danger" id="itemClear col-2" style="margin-left:5%">Clear</button>
							
                                    </div>
                                    </form>
                                    
						</div>
                        
                                    
						</div>
                        
                                    
                         
                        