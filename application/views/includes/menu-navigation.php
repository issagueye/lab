<div class="navbar-custom" style="border:2px solid black;">
                <div class="container">
                    <div id="navigation">
                    <?php 
                    if (isset($_GET['page'])) {

                        $pageGet = $_GET['page'];
                        $pageActive = "";

                        if ($_GET['page'] == 'archivesana') {
                            $tt = $_GET['table'];
                            switch ($tt) {
                                case 'anapath':
                                    $pageActive = 1;
                                    break;
                                case 'frottismilieuliquide':
                                    $pageActive = 2;
                                    break;
                                case 'frottisvaginal':
                                    $pageActive = 3;
                                    break;
                                case 'spermogramme':
                                    $pageActive = 4;
                                    break;
                                case 'coital':
                                    $pageActive = 5;
                                    break;
                                case 'myelogramme':
                                    $pageActive = 6;
                                    break;
                                
                                default:
                                    # code...
                                    break;
                            }
                        }

                        switch ($pageGet) {
                            case 'histologie':
                                $pageActive = 1;
                                break;
                            case 'frottisM':
                                $pageActive = 2;
                                break;
                            case 'frottisV':
                                $pageActive = 3;
                                break;
                            case 'spermo':
                                $pageActive = 4;
                                break;
                            case 'coital':
                                $pageActive = 5;
                                break;
                            case 'myelo':
                                $pageActive = 6;
                                break;
                            
                            default:
                                # code...
                                break;
                        }


                    }
                     ?>
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu">
                                        
                                        <li class="nav-item <?php if (isset($pageActive) && $pageActive==1) echo 'active' ?> ">
                                        <a class="nav-link "  href="index.php?page=lastrec&table=anapath">Histologie</a>
                                        </li>
                                        <li class="nav-item <?php if (isset($pageActive) && $pageActive==2) echo 'active' ?>">
                                        <a class="nav-link  " href="index.php?page=lastrec&table=frottismilieuliquide">Frottis en milieu liquide</a>
                                        </li>
                                        <li class="nav-item <?php if (isset($pageActive) && $pageActive==3) echo 'active' ?> ">
                                        <a class="nav-link " href="index.php?page=lastrec&table=frottisvaginal">Frottis vaginal</a>
                                        </li>
                                        <li class="nav-item <?php if (isset($pageActive) && $pageActive==6) echo 'active' ?>">
                                        <a class="nav-link  " href="index.php?page=lastrec&table=myelogramme">Myelogramme</a>
                                        </li>
                                        <li class="nav-item <?php if (isset($pageActive) && $pageActive==4) echo 'active' ?>">
                                        <a class="nav-link " href="index.php?page=lastrec&table=spermogramme">Spermogramme</a>
                                        </li>
                                        <li class="nav-item <?php if (isset($pageActive) && $pageActive==5) echo 'active' ?>">
                                        <a class="nav-link  " href="index.php?page=lastrec&table=coital">Test Post Coital</a>
                                        </li>
                                        
                         
                                        
                        </ul>
                    </div>
                </div>
</div>

</div>