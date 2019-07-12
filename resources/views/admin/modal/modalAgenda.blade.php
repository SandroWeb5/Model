<!-- Cadastrar -->
<div class="modal fade" id="Criar" tabindex="-1" role="dialog" aria-labelledby="CriarLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form id="formSave" method="POST" enctype="" >
        @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="CriarLabel">Criar Agenda</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group sm">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome"
            autofocus required minlength="4" maxlength="100">
        </div>
        <div class="form-group sm">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" minlength="3" maxlength="150">
        </div>
        <div class="form-group sm">
            <label for="fone">Fone</label>
            <input type="text" class="form-control" id="fone" name="fone" minlength="13" maxlength="14">
        </div>
        <div class="form-group sm">
            <label for="obs">Obs</label>
            <input type="text" class="form-control" id="obs" name="obs">
        </div>
      </div>
      <div class="modal-footer container-fluid">
        <button type="button" class="btn btn-secondary col-md-6 bgs" data-dismiss="modal" id="closeCriar">Fechar</button>
        <button type="submit" class="btn btn-primary col-md-6 bg2">Salvar</button>      		
      </div>
    </form>
    </div>
  </div>
</div>

<!-- Alterar -->
<div class="modal fade" id="Edit" tabindex="-1" role="dialog" aria-labelledby="EditLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    <form id="formEdit" method="POST">
        @csrf
      <div class="modal-header">
        <h5 class="modal-title" id="EditLabel">Editar Agenda</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group sm">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome_edit" name="nome" required>
        </div>
        <div class="form-group sm">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email_edit" name="email">
        </div>
        <div class="form-group sm">
            <label for="fone">Fone</label>
            <input type="text" class="form-control" id="fone_edit" name="fone">
        </div>
        <div class="form-group sm">
            <label for="obs">Obs</label>
            <input type="text" class="form-control" id="obs_edit" name="obs">
        </div>
        <input type="hidden" class="form-control" id="id_edit" name="id">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary col-md-6 bgs" data-dismiss="modal" id="closeEdit">Fechar</button>
        <button type="submit" class="btn btn-primary col-md-6 bg2"  data-id="id_edit">Atualizar</button>
      </div>
    </form>
    </div>
  </div>
</div>