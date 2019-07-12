<!-- Cadastrar -->
<div class="modal fade" id="Criar" tabindex="-1" role="dialog" aria-labelledby="CriarLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form id="formSave" method="POST" enctype="">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="CriarLabel">Criar Usuário</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group sm">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" required minlength="4" maxlength="100">
                    </div>
                    <div class="form-group sm">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required minlength="4" maxlength="150">
                    </div>
                    <div class="form-group sm">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" id="password" name="password" required minlength="5">
                    </div>
                    <div class="form-group sm">
                        <label for="perm">Permissão</label>
                        <select class="form-control" id="perm" name="perm">
                            <option value="User">User</option>
                            <option value="Gerente">Gerente</option>
                            <option value="Admin">Administrador</option>
                        </select>
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="status" name="status" checked >
                        <label class="form-check-label" for="status">Publicação Automática.</label>
                        <input type="hidden" id="id_edit" name="id">
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
        <h5 class="modal-title" id="EditLabel">Editar Usuário</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group sm">
            <label for="name">Nome</label>
            <input type="text" class="form-control text-uppercase" id="name_edit" name="name">
        </div>
        <div class="form-group sm">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email_edit" name="email">
        </div>
        <div class="form-group sm">
            <label for="password">Senha</label>
            <input type="text" class="form-control" id="password_edit" name="password">
        </div>

        <div class="form-group">
            <label for="perm">Permissão</label>
            <select class="form-control" id="perm_edit" name="perm">
            <option value="User">User</option>
            <option value="Gerente">Gerente</option>
            <option value="Admin">Administrador</option>
            </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm col-md-6 bgs" data-dismiss="modal" id="closeEdit">Fechar</button>
        <button type="submit" class="btn btn-primary btn-sm col-md-6 bg2"  data-id="id_edit">Atualizar</button>
      </div>
    </form>
    </div>
  </div>
</div>