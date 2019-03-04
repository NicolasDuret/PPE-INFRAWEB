<div class="modal fade" id="myModal" role="dialog" style="color:#000;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><span class="fas fa-lock"></span> Formulaire de connexion</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" ">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" id="login" method="post">
                    <div class="form-group">
                        <label for="id"><span class="fas fa-user"></span> Identifiant</label>
                        <input type="text" class="form-control" id="id" name="id" placeholder="Identifiant" required>
                    </div>
                    <div class="form-group">
                        <label for="mp"><span class="fas fa-eye"></span> Mot de passe</label>
                        <input type="password" class="form-control" id="mp" name="mp" placeholder="Mot de passe" required>
                    </div>
                    <div class="form-group">
                        <label class="radio-inline"><input type="radio" name="rblogin" id="rbs" value="rbs" required>Secretaire</label>
                        <label class="radio-inline"><input type="radio" name="rblogin" id="rba" value="rba" required>Administrateur</label>
                    </div>
                    <button type="submit" class="btn btn-success btn-block" class="submit"><span class="fas fa-power-off"></span> Login</button>
                </form>
            </div>
            <div class="modal-right">
                <button type="button"  class="btn btn-danger btn-default pull-left" data-dismiss="modal" ><span class="fas fa-times"></span>Mot de passe perdu</button>
            </div>
            <div class="modal-footer">
                <button type="button"  class="btn btn-danger btn-default pull-left" data-dismiss="modal" ><span class="fas fa-times"></span> Cancel</button>
            </div>
        </div>
    </div>
</div>