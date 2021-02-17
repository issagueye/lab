         <div id="custom-modal" class="modal-demo">
                    <button type="button" class="close" onclick="Custombox.close();">
                        <span>&times;</span><span class="sr-only">Close</span>
                    </button>
                    <h4 class="custom-modal-title ">Modification de mot de passe</h4>
                    <div class="custom-modal-text">
                    <form  role="form"  method="POST">
                       
                        <div class="form-group">
                                            
                                            <input type="password" class="form-control" name="password" id="oldpassword"
                                                   placeholder="Ancien mot de passe">
                        </div>
                        <div class="form-group">
                                            
                                            <input type="password" class="form-control" name="newpassword" id="newpassword"
                                                   placeholder="Nouveau mot de passe">
                        </div>
                        <div class="form-group">
                                            
                                            <input type="password" class="form-control" name="newpassword2"
                                                   placeholder="Confirmation du nouveau mot de passe">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Enregistrer</button>
                        <button type="reset" name="reset" class="btn btn-default">Annuler</button>
                    </div>
                    </form>
                </div>
        </div>