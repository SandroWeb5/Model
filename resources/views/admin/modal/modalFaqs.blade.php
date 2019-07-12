<!-- Cadastrar -->
<div class="modal fade" id="Criar" tabindex="-1" role="dialog" aria-labelledby="CriarLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form id="formSave" method="POST" enctype="" action="{{route('faq_save')}}" >
        @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="CriarLabel">Criar Aviso Geral</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group sm">
            <label for="aviso">Aviso</label>
            <textarea class="form-control" id="aviso" name="aviso" autofocus required minlength="4"></textarea>
        </div>
      </div>
      <div class="modal-footer container-fluid">
        <button type="button" class="btn btn-secondary col-md-6 bgs" data-dismiss="modal" id="closeCriar">Fechar</button>
        <button type="submit" class="btn btn-primary col-md-6 bg2">Criar Aviso</button>      		
      </div>
    </form>
    </div>
  </div>
</div>

