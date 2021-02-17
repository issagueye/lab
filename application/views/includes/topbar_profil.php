


		<!-- Header -->
	
		<div class="topbar-main" style="height: 50px;">
			<div class="container">
		 		
                    <!-- LOGO -->
                    <div class="topbar-left">

                        <a href="index.php?page=<?php echo $_SESSION['page']; ?>" class="logo">
                            
                            <span>LAB+</span>
                        </a>
                    </div>
                    <div class="menu-extras">
                    	<ul class="nav navbar-nav pull-right">
                            <li class="nav-item dropdown notification-list">
                                <a class="nav-link waves-effect waves-light right-bar-toggle" href="javascript:void(0);">
                                   <button class="btn btn-primary waves-effect waves-light btn-sm">Lancer une Rechercher</button>
                                </a>
                            </li>
                            <li class="nav-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="zmdi zmdi-notifications noti-icon"></i>
                                    <span class="noti-icon-badge"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5><small>
                                        <span class="label label-danger pull-xs-right notif_count00" >0</span>
                                        
                                        
                                        Notifications</small></h5>
                                    </div>
                                    <div  class="notif_elements"> 
                                    

                                    </div>
                                   
                                

                                </div>
                            </li>
                            
                            <li class="nav-item dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <img src="../application/views/assets/images/users/avatar.jpg" alt="user" class="img-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-arrow profile-dropdown " aria-labelledby="Preview">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="text-overflow"><small>Bienvenue <?php echo $_SESSION['username']; ?></small> </h5>
                                    </div>

    
                                     
                                    <a href="#custom-modal" class="dropdown-item notify-item" data-animation="fadein" data-plugin="custommodal"
                                                data-overlaySpeed="200" data-overlayColor="#36404a"><i class="zmdi zmdi-edit"></i>Mot de passe</a>
                                    <form action="">
                                    <button type="submit" name="deconect" class="dropdown-item notify-item">
                                        <i class="zmdi zmdi-power"></i> Deconnexion </button>
                                    </form>

                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <!-- End Logo container-->
            </div>
        </div>
        <div id="custom-modal" class="modal-demo">
                    <button type="button" class="close" onclick="Custombox.close();">
                        <span>&times;</span><span class="sr-only">Close</span>
                    </button>
                    <h4 class="custom-modal-title">Modification de mot de passe</h4>
                    <div class="custom-modal-text">
                       <div class="form-group">
                                            
                                            <input type="text" class="form-control" id="login"
                                                   placeholder="Nom d'utilisateur">
                        </div>
                        <div class="form-group">
                                            
                                            <input type="password" class="form-control" id="oldpassword"
                                                   placeholder="Ancien mot de passe">
                        </div>
                        <div class="form-group">
                                            
                                            <input type="password" class="form-control" id="newpassword"
                                                   placeholder="Nouveau mot de passe">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary ">Enregistrer</button>
                        <button type="reset" name="reset" class="btn btn-default">Annuler</button>
                    </div>
                </div>
        
<?php include ('footer_end.php');?>



	<!-- End Header -->
