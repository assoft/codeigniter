<!-- Start: Page Wrap -->
<div id="wrap" class="container_24">

	<!-- Header Grid Container: Start -->
	<div class="login">
		
	<!-- Info Notice: Start -->

	<?php if(isset($message)):?>
    	<div class="notice error">
    		<p><?= $message;?></p>
    	</div>     
	<?php endif;?>

	<!-- Info Notice: End -->
	
		<!-- Header: Start -->
		<div id="header">

			<!-- Logo: Start -->
			<a href="#" id="logo">Simplpan - Admin Panel</a>
			<!-- Logo: End -->
			
			<!-- Login: Start -->
			<?php echo form_open("admin/login", "id=\"login\"");?>
				<!-- Username Input: Start -->
				<label for="username" class="label_username">E-mail</label>
				<input type="text" name="email" value="E-mail" id="email" title="Email Adresiniz" />

				<!-- Username Input: End -->
				
				<!-- Password Input: Start -->
				<label for="password" class="label_password">Password</label>
				<input type="password" name="password" value="Password" id="password" class="password tip-stay validate" title="Parola" />
				<!-- Password Input: End -->
				
				
				<!-- Login Button: Start -->
				<input type="submit" value="login" class="tip" title="Login" />
				<!-- Login Button: End -->
				
			<?php echo form_close();?>
			<!-- Login: End -->
			
		</div>
		<!-- Header: End -->
		
		<!-- Breadcrumb Bar: Start -->
		<div id="breadcrumb">
			
			<!-- Breadcrumb: Start -->
			<ul class="left">
				<li class="icon key"><a href="#">Forgot password?</a></li>

			</ul>
			<!-- Breadcrumb: End -->
			
			<!-- Breadcrumb Icon Links: Start -->
			<ul class="right">
				<li><a href="#" class="icon home tip" title="Home">Home</a></li>
			</ul>
			<!-- Breadcrumb Icon Links: End -->
			
		</div>

		<!-- Breadcrumb Bar: End -->
		
	</div>
	<!-- Header Grid Container: End -->

</div>
<!-- End: Page Wrap -->