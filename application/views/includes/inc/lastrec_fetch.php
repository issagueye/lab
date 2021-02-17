<?php if (isset($_GET['table'])) {
                                $table = $_GET['table'];
                                $page = '';
                                $ana = '';
                                switch ($table) {
                                    case 'anapath':
                                        $ana = "HISTOLOGIE";
                                        $page = "histologie";
                                        break;
                                    case 'frottismilieuliquide':
                                        $ana = "FROTTIS EN MILIEU LIQUIDE";
                                        $page = "frottisM";
                                        break;
                                    case 'frottisvaginal':
                                        $ana = "FROTTIS VAGINAL";
                                        $page = "frottisV";
                                        break;
                                    case 'myelogramme':
                                        $ana = "MYELOGRAMME";
                                        $page = "myelo";
                                        break;
                                    case 'spermogramme':
                                        $ana = "SPERMOGRAMME";
                                        $page = "spermo";
                                        break;
                                    case 'reception':
                                        $ana = "SPERMOGRAMME";
                                        $page = "spermo";
                                        break;
                                    case 'coital':
                                        $ana = "TEST POST COITAL";
                                        $page = "coital";
                                        break;
                                    case 'reception':
                                        $ana = "RECEPTION";
                                        break;
                                    
                                    default:
                                        # code...
                                        break;
                                }
 } ?>