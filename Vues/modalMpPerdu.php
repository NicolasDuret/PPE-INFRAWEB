<div class="modal fade" id="myModalMpPerdu" role="dialog" style="color:#000;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><span class="fas fa-lock"></span> Mot de passe perdu !</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form role="form" id="mpperdu" method="post">
                    <div class="form-group">
                        <label for="id"><span class="fas fa-user"></span> Identifiant</label>
                        <input type="text" class="form-control" id="id1" name="id1" placeholder="Identifiant" required>
                    </div>
                    <button type="submit" id="mpperdu" class="btn btn-success btn-block" class="submit"><span class="fas fa-power-off"></span> Envoyer</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button"  class="btn btn-danger btn-default pull-left" data-dismiss="modal" ><span class="fas fa-times"></span> Cancel</button>
            </div>
        </div>
    </div>
</div>