<!DOCTYPE html>

<html lang="en">
<?php include"head.php";?>
<body>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5feed054df060f156a92f4f1/1equdrjb7';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<?php include"top_nav.php";?>

    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
     <div class="fill" style="background-image:url('images/slide-2.jpg');">
         <h1 style="font-size: 120px;text-align: center;padding-top: 150px;">Services</h1>    
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12" style="padding-top: 50px;">
              
            </div>
            		 <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-user"></i> E-Medi Shop </h4>
                    </div>
                    <div class="panel-body">
                        <p>...<br>
						<a href=" " class="btn btn-primary">Owner Login</a>
						<a href=" " class="btn btn-primary">User Login</a>
                    </div>
                </div>
            </div>
			 <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-medkit"></i>E-Medi Hospital</h4>
                    </div>
                    <div class="panel-body">
                        <p>...<br>
						<a href=" " class="btn btn-primary">Owner Login</a>
						<a href=" " class="btn btn-primary">User Login</a>
                    </div>
                </div>
            </div>
			
			  <div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-search"></i>E-Medi Doctor</h4>
                    </div>
                    <div class="panel-body">
                        <p>...<br>
						<a href=" " class="btn btn-primary">Owner Login</a>
						<a href=" " class="btn btn-primary">User Login</a>
                    </div>
                </div>
            </div>
			
			<div class="col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-search"></i>E-Medi Camp</h4>
                    </div>
                    <div class="panel-body">
                        <p>...<br>
						<a href=" " class="btn btn-primary">Owner Login</a>
						<a href=" " class="btn btn-primary">User Login</a>
                    </div>
                </div>
            </div>
	    </div>     

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>We expect your loyal feedback to improve our standard.<br>For more details and any subject related queries..</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-primary btn-block" href="contact.php"><i class="fa fa-phone"></i> Call to Action</a>
                </div>
            </div>
        </div>
		
		<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
		<img src='' width="100%" height="100%" id='ModalImg'>
    </div>
  </div>
</div>

        <hr>

        <!-- Footer -->
		<?php include"footer.php"; ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
	
	$(".img-portfolio").click(function(){
		var a=$(this).attr("src");
		$("#ModalImg").attr("src",a);
       $('#myModal').modal();
    })
    </script>

</body>

</html>
