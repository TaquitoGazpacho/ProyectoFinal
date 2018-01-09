    <div id="editarOficinaDiv" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Registrar Empresa</h4>
                </div>
                <form id="editarOficina" method="POST" action="{{ route('editarOficina.actualizarOficina') }}">
                    {{ csrf_field() }}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="oficinaId">Id</label>
                            <input type="text" name="id" class="form-control" id="oficinaId" value="" readonly>
                        </div>
                        <div class="form-group">
                            <label for="oficinaCiudad">Ciudad</label>
                            <input type="text" name="ciudad" class="form-control" id="oficinaCiudad" value="" readonly>
                        </div>
                        <div class="form-group">
                            <label for="oficinaCalle">Calle</label>
                            <input type="text" name="calle" class="form-control" id="oficinaCalle" value="">
                        </div>
                        <div class="form-group">
                            <label for="oficinaNum">Número</label>
                            <input type="text" name="num_calle" class="form-control" id="oficinaNum" value="">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-warning" value="Editar Oficina" />
                        <button type="button" class="btn btn-error" data-dismiss="modal">Close</button>
                    </div>

                </form>
            </div>
        </div>
    </div>