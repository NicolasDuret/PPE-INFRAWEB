<div class="modal fade" id="myModalRenouvellementMp" role="dialog" style="color:#000;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><span class="fas fa-lock"></span> Mot de passe perdu !</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" id="renouvellementMp" method="post">
                    <div class="form-group">
                        <label for="id"><span class="fas fa-user"></span> Identifiant</label>
                        <input type="text" class="form-control" id="id2" name="id2" placeholder="Identifiant" required>
                    </div>
                    <div class="form-group">
                        <label for="mp1"><span class="fas fa-eye"></span> Mot de passe</label>
                        <input type="password" class="form-control" id="mp1" name="mp1" placeholder="Mot de passe" autocomplete="off" required>
                        <input type="password" class="form-control" id="mp2" name="mp2" placeholder="Mot de passe-confirmation" autocomplete="off" required>
                    </div>
                    <button type="submit" class="btn btn-success btn-block" class="submit" ><span class="fas fa-power-off"></span> Envoyer</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button"  class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="fas fa-times"></span> Cancel</button>
            </div>
        </div>
    </div>
</div>