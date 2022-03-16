<?php
$status = session_status();
if($status == PHP_SESSION_NONE){
 
	 session_start(); 
 } 
 if(!isset($_SESSION['id']))
 {
  header('location:Login.php');
 }
 include('Include/Header.php');
 include('Include/Connection.php');
 $userid=$_SESSION['id'];
 $Health_query="select * from health_details where health_details.P_id = '$userid'";
 $query = mysqli_query($con,$Health_query);

?>
 <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="services.php" class="nav-link">Services</a></li>
                    <li  class="dropdown">
                  <button class="dropbtn nav-item " style="background:#fff;color:#299adc;">Patient Portal</button>
  <div class="dropdown-content nav-item nav-link">
    <a href="Health.php">Ask Query</a>
    <a href="GetSolution.php">My Queries</a>
    <a href="Medical_History.php">Medical History</a>
    <a href="Appointment.php">Make Appointment</a>
  </div>
  </li>
                    <li class="nav-item"><a href="doctors.php" class="nav-link">Doctors</a></li>
                    <li class="nav-item"><a href="department.php" class="nav-link">Departments</a></li>

                    <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
                    <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->
<!-- END nav -->

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate pb-5">
       <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Solutions <i class="fa fa-chevron-right"></i></span></p>
       <h1 class="mb-3 bread">Solutions</h1>
     </div>
   </div>
 </div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb ftco-services-2 bg-light">
<div class="col-md-12 heading-section ftco-animate">
         <h2 class="mb-3">Get <span>Solutions</span></h2>
       </div>
       <div class="col-md-8 " style="margin:auto;">
       <?php
             if(mysqli_num_rows($query)<1)
             {
               echo "<h4>Your did nt ask any question</h4>";
             }
            while($fetch = mysqli_fetch_array($query))
            {
           ?>
            
					<div class="py-md-5">
						<div class="row justify-content-start pb-3">
           
							<div class="col-md-12 heading-section ftco-animate p-4 p-lg-5 " style="font-size: 24px;color: #000;font-weight: bold;">
								<p style="background-color: #f0f4fa; border-radius: 10px;padding-left: inherit; padding: 10px;font-family: monospace">Symptoms:<span style="font-weight: 400;">  <?php echo $fetch['Symptoms']?></span></p>
                <p style="background-color: #f0f4fa; border-radius: 10px;padding-left: inherit; padding: 10px;font-family: monospace">Disease: <span style="font-weight: 400;">  <?php echo $fetch['Desease']?></span></p>
								<p style="background-color: #f0f4fa; border-radius: 10px;padding-left: inherit; padding: 10px;font-family: monospace">Details: <span style="font-weight: 400;"><br/><?php echo $fetch['Comments']?></span></p>
                <p style="background-color: #f0f4fa; border-radius: 10px;padding-left: inherit; padding: 10px;font-family: monospace">Mental Condition: <span style="font-weight: 400;"><br/><?php echo $fetch['Mental_Condition']?></span></p>
                
                <?php
                 $Question_Id= $fetch['H_id'];
                $Sugeestion_query="select * from suggestion where  suggestion.Relation_id =  '$Question_Id' ";
                $Solution_query =mysqli_query($con,$Sugeestion_query);
                 if(mysqli_num_rows($Solution_query)<1)
                 {
                   ?>
                   <p style="border: solid;border-color: red;padding: inherit; border-radius: 10px; background: #fff5f5; font-family: monospace">We will Reply You Soon</p>
                   <p style="float: right;"><a href="Health.php?id=<?php echo $fetch['H_id']?>" class="btn btn-primary py-3 px-4">Update Query</a> 
                <a class='delete btn btn-danger py-3 px-4' data-toggle="modal" href="#exampleModal" data-href="GetSolution.php?id=  <?php echo $fetch['H_id']?>">Delete Query</a></p>
                
                <?php
                 }
                 else{
                while($Sol = mysqli_fetch_array($Solution_query))
            {
              ?>
              <h4>Reply By:<?php echo $Sol['Reply By']?></h4>
                <p style="border: solid;border-color: green;padding: inherit; border-radius: 10px; background: #f5fff8;"><u>Suggestions:</u><br/> <span style="font-weight: 400;"><?php echo $Sol['Suggestion_Details']?></span></p>
                <p style="border: solid;border-color: green;padding: inherit; border-radius: 10px; background: #f5fff8;"><u>Treatment:</u><br/>Treatment Type:<br/><span style="font-weight: 400;"><?php echo $Sol['Treatment_Type']?></span><br/>Details:<br/><span style="font-weight: 400;"><?php echo $Sol['Treatment_Details']?></span></p>
            <?php }
            } ?>
                
                <hr style="height:2px;border-width:0;color:gray;background-color:gray; margin-top:100px;"/>
              
              </div>
             
              </div>
              </div>
              <?php 
              } ?>
              </div>
              
</section>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Are You Sure?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
        <a href="" id='confirm_delete'><button type="button" class="btn btn-primary">Yes</button></a>
        
      </div>
    </div>
  </div>
</div>
<?php
    if(isset($_GET['id']))
    {
        $id= $_GET['id'];
        $query = mysqli_query($con, "DELETE from health_details where H_id = '$id'");
        if($query)
        {
          echo '<script language="javascript">';
          echo 'alert("Your Query has been Deleted")';
          echo '</script>';
        }
    }
?>

<?php
 include('Include/Footer.php');
?>
<script>
   $(document).ready(function(){
       $('.delete').click(function(){
           var url=$(this).data('href');
           $('#confirm_delete').attr('href',url);
       });

});
</script>