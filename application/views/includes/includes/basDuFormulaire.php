<div class="form-group">
				<div class="col-sm-10 col-offset-2">
				<?php if (!isset($recup)) {
					?>
					<button type="submit" name="submit" class="btn btn-primary">Enregistrer</button>
					<button type="reset" name="reset" class="btn btn-default">Annuler</button>
					<?php 
				}
				else { ?>
					<button class="btn btn-primary" name="update">Enregistrer</button>
					<a href=javascript:history.go(-1)><button class="btn btn-default" name="update" id="modifier">Annuler</button></a>
					<?php } ?>
				</div>

			</div>