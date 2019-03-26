<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TO DO LIST</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" /> -->
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>
		<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h3 class="display-5 text-center ">TO DO LIST</h3>
			<!-- <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p> -->
		</div>
		</div>


          <!-- form -->
		<form class="text-center" method="post" action="save.php" id="getTaskData">
			<div class="container">
				<div class="form-row align-items-center">
					<div class="col-4"></div>
						<div class="col-4">
							<div class="input-group mb-2">
								<div class="input-group-prepend">
								<div class="input-group-text">TASK</div>
								</div>
								<input type="text" name="task" class="form-control" id="task" placeholder="Enter the task" required>
							</div>
							<div class="input-group mb-2">
							
								<input type="text" name="date" class="form-control" id="datepicker">
								<div class="input-group-prepend">
								<div class="input-group-text">DATE</div>
								</div>
							</div>
						</div> 
						<!-- col-4 close -->
			
						<!-- checkbox -->
						<div class="w-100"></div>
						<div class="col-5"></div>
							<div class="col-12">
								<div class="form-check form-check-inline">
										<input class="form-check-input" type="radio" name="radio" id="inlineRadio1" value="1">
										<label class="form-check-label" for="inlineRadio1">Task 1</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="radio" id="inlineRadio2" value="2">
									<label class="form-check-label" for="inlineRadio2">Task 2</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="radio" id="inlineRadio3" value="3">
									<label class="form-check-label" for="inlineRadio3">Task 3</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="radio" id="inlineRadio4" value="4">
									<label class="form-check-label" for="inlineRadio4">Task 4</label>
								</div>
							</div>
							<!-- submit -->
						<div class="w-100"></div>
							<div class="col-12 pt-2">
								<input type="submit" name="submit" value="ADD" class="btn btn-primary btn-sm btn-danger mb-2 px-5" id="saveTask">
							</div>
						</div>
				<div class="col-4"></div>
				</div>
				<!-- row close -->
			</div>
			<!-- container close -->
		</form>
		<hr>
<!-- To DO SHOW -->

<div class="container-fluid">
    <div class="row overflow">
<div id="first" class="col">
	<div class="card bg-secondary border-0 " style="width: 38rem;">
	<!-- <img src="..." class="card-img-top" alt="..."> -->
	<div class="card-body ">
		<h5 class="card-title text-center">TASK 1</h5>
		<!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
	</div>

	<ul class="list-group list-group-flush">
			<?php foreach($result as $data):?>
			<?php if($data["position"]=='1'):?>
				
				<!-- <form method="post"> -->
		<li class="list-group-item bg-secondary border-0"><?=$data["task"]; ?>
		<!-- <a href="index.php?id=<?=$data["id"];?>">
		<input type="submit" name="submit" value="EDIT" class="btn btn-primary btn-sm btn-danger float-right">
		</a> -->

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm btn-danger float-right" data-toggle="modal" data-target="#exampleModalCenter" id="modalOpen">
  EDIT
</button><br>
<small class="text-center text-muted"><?=$data["dueTask"]; ?></small>

<!-- Modal -->
<form>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">UPDATE</h5>
          
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
          </div>
            <div class="modal-body">
                    <div class="input-group mb-2">
                      <div class="input-group-prepend">
                      <div class="input-group-text">TASK</div>
                      </div>
                      <input type="text" name="task" class="form-control" id="inlineFormInputGroup" placeholder="Enter the task" required>
                    </div>
                  <div class="w-100"></div>
                  <div class="col-5 ml-5"></div>
                  <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="radio" id="inlineRadio1" value="1">
                        <label class="form-check-label" for="inlineRadio1">1</label>
                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="radio" id="inlineRadio2" value="2">
                                  <label class="form-check-label" for="inlineRadio2">2</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="radio" id="inlineRadio3" value="3">
                                  <label class="form-check-label" for="inlineRadio3">3</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="radio" id="inlineRadio4" value="4">
                                  <label class="form-check-label" for="inlineRadio4">4</label>
                                </div>
              
            
            </div>
            <!-- modal body close -->
            <div class="modal-footer">
            
              <input type="submit" data-dismiss="modal" name="submit1" value="Close" class="btn btn-primary btn-sm btn-primary"
              id="btnClosePopup">

              <input type="submit" name="submit2" value="SAVE" class="btn btn-primary btn-sm btn-danger">

            </div>
      </div>
  </div>
</div>
</form>



                </li>
                
               
                       <?php endif;?>
                       <?php endforeach; ?>
            </ul>
            <!-- <div class="card-body">
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div> -->

            
            </div>




</div>
<div id="second" class="col ">


            <div class="card bg-secondary border-0" style="width: 38rem;">
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            <div class="card-body">
                <h5 class="card-title text-center">TASK 2</h5>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
            </div>
            <ul class="list-group list-group-flush">
                                <?php foreach($result as $data):?>

                                <?php if($data["position"]=='2'):?>
                    <li class="list-group-item bg-secondary border-0"><?=$data["task"]; ?>
                    <input type="submit" name="submit" value="EDIT" class="btn btn-primary btn-sm btn-danger float-right">
                    <br><small class="text-center text-muted"><?=$data["dueTask"]; ?></small>

                    
                    </li>

                    <?php endif;?>
                    <?php endforeach; ?>
            </ul>
            <!-- <div class="card-body">
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div> -->
           
            </div>




</div>
<div class="w-100"></div><hr>
<div id="third" class="col ">


            <div class="card bg-secondary border-0" style="width: 38rem;">
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            <div class="card-body ">
                <h5 class="card-title text-center">TASK 3</h5>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
            </div>
            <ul class="list-group list-group-flush">
                                        <?php foreach($result as $data):?>

                                        <?php if($data["position"]=='3'):?>
                            <li class="list-group-item bg-secondary border-0"><?=$data["task"]; ?>
                            <input type="submit" name="submit" value="EDIT" class="btn btn-primary btn-sm btn-danger float-right">
                            <br><small class="text-center text-muted"><?=$data["dueTask"]; ?></small>

                            </li>

                            <?php endif;?>
                            <?php endforeach; ?>
            </ul>
            <!-- <div class="card-body">
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div> -->
           
            </div>




</div>
<div id="fourth" class="col ">


            <div class="card bg-secondary border-0" style="width: 38rem;">
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            <div class="card-body ">
                <h5 class="card-title text-center">TASK 4</h5>
                <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
            </div>
                            <ul class="list-group list-group-flush">
                            <?php foreach($result as $data):?>

                            <?php if($data["position"]=='4'):?>
                <li class="list-group-item bg-secondary border-0"><?=$data["task"]; ?>
                <input type="submit" name="submit" value="EDIT" class="btn btn-primary btn-sm btn-danger float-right">
               <br> <small class="text-center text-muted"><?=$data["dueTask"]; ?></small>

                </li>

                <?php endif;?>
                <?php endforeach; ?>
            </ul>
            <!-- <div class="card-body">
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div> -->
            
            </div>




</div>

</div>
<!-- rowclose -->
</div>
<!-- container close -->
<script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="script.js">
 
</script>


</body>
</html>