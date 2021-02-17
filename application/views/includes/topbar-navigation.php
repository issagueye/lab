<script src="../application/views/assets/js/jquery.min.js"></script>

<div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                            <li class="has-submenu  <?php if ($_GET['page'] == 'lastrec') echo 'active' ?>"  >
                                <a href="#"><i class="ion-beaker"></i> <span> Panel analyse </span> </a>
                                <?php if ($_GET['page'] != 'lastrec') { ?>
                                <ul class="submenu megamenu" id="dropdownCache">
                                    <li>
                                        <ul>
                                            <li><a href="index.php?page=lastrec&table=anapath">Histologie</a></li>
                                            <li><a href="index.php?page=lastrec&table=frottismilieuliquide">Frottis en milieu liquide</a></li>
                                            <li><a href="index.php?page=lastrec&table=frottisvaginal">Frottis vaginal</a></li>
                                            <li><a href="index.php?page=lastrec&table=myelogramme">Spermogramme</a></li>
                                            <li><a href="index.php?page=lastrec&table=spermogramme">Myelogramme</a></li>
                                            <li><a href="index.php?page=lastrec&table=coital">Test Post Coital</a></li>
                                            
                                        </ul>
                                    </li>
                                   
                                </ul>
                                <?php } ?>
                            </li>
                            <li class="<?php if ($_GET['page'] == 'charts') echo 'active' ?>">
                                <a href="index.php?page=charts"><i class="ion-stats-bars "></i> <span> Panel Statistiques </span> </a>
                            </li>
                            <li>
                                <a href="index.php?page=admin"><i class="ion-settings"></i> <span> Panel Administration </span> </a>
                            </li>
                            

                           

                            
                        </ul>
                        <!-- End navigation menu  -->
                    </div>
                </div>
            </div>
            
            