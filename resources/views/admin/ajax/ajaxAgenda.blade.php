<script>
/*Exibir*/
    $(document).ready(function() {
        /*Mask*/
        $("#fone").mask("(99) 9999-9999#");
        $("#fone_edit").mask("(99) 9999-9999#");
        /**/
        $('#dt').DataTable({
            processing: true,
            serverSide: true,
            order: [[0, "desc"]],
            ajax: "{{ url('admin/agenda/get') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'nome', name: 'nome'},
                {data: 'email', name: 'email'},
                {data: 'fone', name: 'fone'},
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
            url: "{{ url('admin/agenda/save') }}",
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
                        text: 'Arquivo Salvo com Sucesso!!',
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
            url: "{{ url('admin/agenda/show') }}/"+id,
            method: "GET",
            dataType: "JSON",
            success:function(data){
                if(data != ""){
                    $('#openEdit').click();
                    $('#nome_edit').val(data.nome);
                    $('#email_edit').val(data.email);
                    $('#fone_edit').val(data.fone);
                    $('#obs_edit').val(data.obs);
                    $('#id_edit').val(data.id);
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
            url: "{{ url('admin/agenda/update') }}/"+ id,
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
                        text: 'Arquivo Atualizado com Sucesso!!',
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
            text: "deseja realmente deletar este arquivo?",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sim',
            cancelButtonText: 'Não'
        }).then((result) => {
            $.ajax({
                url: "{{ url('admin/agenda/delete') }}/"+id,
                method: "GET",
                success:function(data){
                    Swal.fire({
                        title: 'Deletado!!',
                        text: 'Arquivo deletado com Sucesso!!',
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
</script>