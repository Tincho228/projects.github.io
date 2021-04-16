
<!-- MODAL de Referidos -->


<div class="modal fade" id="link-referido" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-dark align-items-center">
                <img class="mail_icon" src="Images/Logo Favicon.png" alt="email icon">
                <h5 class="modal-title text-white" id="exampleModalLabel">Solicitud link de referido</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="text-white">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="contact.php" method="post">
                    <div class="form-group">
                        <label for="name" class="col-form-label">Nombre :</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Juan Perez" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email :</label>
                        <input type="email" name="email" class="form-control" id="email"
                            placeholder="ejemplo@mail.com.ar" required>
                    </div>
                    <div class="form-group">
                        <label for="celular" class="col-form-label">Celular:</label>
                        <div class="row">
                            <div class="col-3">
                                <input type="number"  class="form-control" name="cod_area" id="cod_area"required>
                                <label for="cod_area" style="font-size:12px;" class="col-form-label text-secondary">Cod. de area</label>
                            </div>
                            <div class="col-9">
                                <input type="number"  class="form-control" name="celular" id="celular"required>  
                                <label for="celular" style="font-size:12px;" class="col-form-label text-secondary">Numero de celular sin el 15</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" value="referido">Quiero mi link!</button>
                        <!-- Add the action name - value pair -->
                        <input type="hidden" name="action" value="referido">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>