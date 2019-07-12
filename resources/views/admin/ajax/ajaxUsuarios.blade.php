<script>
/*Exibir*/
    $(document).ready(function() {
        $('#dt').DataTable({
            processing: true,
            serverSide: true,
            order: [[0, "desc"]],
            ajax: "{{ url('admin/usuarios/get') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'perm', name: 'perm'},
                {data: 'action', name: 'action', orderable: false, searchable: false}
            ],
            language: {
                "url": "{{asset('public/adminlte/Json/Traducao_datatables.json')}}"
            }
        });
    });
/*Salvar*/
    $('#formSave').submit(function(e){
        e.preventDefault();
        var request = new FormData(this);
        $.ajax({
            url: "{{ url('admin/usuarios/save') }}",
            method: "POST",
            data: request,
            contentType: false,
            cache: false,
            processData: false,
            success:function(data){
                if(data == "sucesso"){
                    $('#closeCriar').click();
                    $('#formSave')[0].reset();
                    Swal.fire({
                        title: 'Sucesso!!',
                        text: 'Usuario Salvo com Sucesso!!',
                        type: 'success',
                        showConfirmButton: false,
                        timer: 2000
                    });
                    var table = $('#dt').DataTable();
                    table.ajax.reload(function(json) {
                        $('#dt').val( json.lastInput );
                    });
                }
            }
        });
    });
/*Atualizar*/
    $(document).on('click', '.edit', function(e){
        e.preventDefault();
        var id = $(this).attr('data-id');
        $.ajax({
            url: "{{ url('admin/usuarios/show') }}/"+id,
            method: "GET",
            dataType: "JSON",
            success:function(data){
                if(data != ""){
                    $('#openEdit').click();
                    $('#name_edit').val(data.name);
                    $('#email_edit').val(data.email);
                    $('#password_edit').val(data.password);
                    $('#perm_edit').val(data.perm);
                    $('#id_edit').val(data.id);
                    $('#status_edit').val(data.status);
                    $('#id_data').attr("id__", data.id);
                }
            }
        });
    });

    $('#formEdit').submit(function(e){
        e.preventDefault();
        var request = new FormData(this);
        var id = document.getElementById('id_edit').value;
        $.ajax({
            url: "{{ url('admin/usuarios/update') }}/"+ id,
            method: "POST",
            data: request,
            contentType: false,
            cache: false,
            processData: false,
            success:function(data){
                if(data == "Atualizado"){
                    $('#closeEdit').click();
                    $('#formSave')[0].reset();
                    Swal.fire({
                        title: 'Sucesso!!',
                        text: 'Usuario Atualizado com Sucesso!!',
                        type: 'success',
                        showConfirmButton: false,
                        timer: 2000
                    });
                    var table = $('#dt').DataTable();
                    table.ajax.reload(function(json) {
                        $('#dt').val( json.lastInput );
                    }); 
                }
            }
        });
    });
/*Excluir*/
    $(document).on('click', '.delete', function(e){
        e.preventDefault();
        var id = $(this).attr('id');
        Swal.fire({
            title: 'Tem certeza?',
            text: "deseja realmente deletar este Usuario?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim',
            cancelButtonText: 'Não'
        }).then((result) => {
            $.ajax({
                url: "{{ url('admin/usuarios/delete') }}/"+id,
                method: "GET",
                success:function(data){
                    Swal.fire({
                        title: 'Deletado!!',
                        text: 'Usuario deletado com Sucesso!!',
                        type: 'success',
                        showConfirmButton: false,
                        timer: 1000
                    })
                    var table = $('#dt').DataTable();
                    table.ajax.reload(function(json) {
                        $('#dt').val( json.Input );
                    })
                }
            })
        });
    });
/*Desativar*/
    $(document).on('click', '.desativar', function(e){
        e.preventDefault();
        var id = $(this).attr('id');
        $.ajax({
            url: "{{ url('admin/usuarios/desativar') }}/"+ id,
            method: "GET",
            success:function(data){
                if(data == "Desativou"){
                    Swal.fire({
                        title: 'Desativado!!',
                        text: 'Usuario Desativado com Sucesso!!',
                        type: 'error',
                        showConfirmButton: false,
                        timer: 2000
                    });
                    var table = $('#dt').DataTable();
                    table.ajax.reload(function(json) {
                        $('#dt').val( json.lastInput );
                    }); 
                }
            }
        });
    });
/*Ativar*/
    $(document).on('click', '.ativar', function(e){
        e.preventDefault();
        var id = $(this).attr('id');
        $.ajax({
            url: "{{ url('admin/usuarios/ativar') }}/"+ id,
            method: "GET",
            success:function(data){
                if(data == "Ativou"){
                    Swal.fire({
                        title: 'Ativado!!',
                        text: 'Usuario Ativado com Sucesso!!',
                        type: 'success',
                        showConfirmButton: false,
                        timer: 2000
                    });
                    var table = $('#dt').DataTable();
                    table.ajax.reload(function(json) {
                        $('#dt').val( json.lastInput );
                    }); 
                }
            }
        });
    });

</script>