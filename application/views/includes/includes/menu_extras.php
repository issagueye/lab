<div class="menu-extras">
                        <ul class="nav navbar-nav pull-right">
                            <?php if ($_SESSION['type'] !=0) echo ' 
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
                            </li>' 
                            ;?>
                            

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