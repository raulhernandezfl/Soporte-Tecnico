<!-- Modal -->
<form id="frmAgregarSolucionReporte" method="POST" onsubmit="return agregarSolucionReporte()">
    <div class="modal fade" id="modalAgregarSolucionReporte" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Escribe la solución</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" id="idReporte" name="idReporte" hidden>
                    <label for="solucion">Descripción de la solución</label>
                    <textarea name="solucion" id="solucion" class="form-control" required></textarea>
                    <label for="estatus">Estatus</label>
                    <select name="estatus" id="estatus" class="form-control">
                        <option value="1">Abierto</option>
                        <option value="0">Cerrado</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</form>