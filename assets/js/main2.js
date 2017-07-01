$(function () {
    $('#myfrom').submit(function(e) {
        var form = $(this);
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: base_url + "index.php/form/add_user",
            data: form.serialize(),
            dataType: "html",
            success: function(data){
            $('#myfrom').trigger("reset");
            swal({
              title:'Utilisateur bien ajouté !',
              type: 'success',
              timer: 2000
            })
                //console.log(form.serialize())
            },
            error: function(e) { 
                console.log(e); 
            }
        });
        return false;
    });

    $('.fa-trash-o').click(function(e) { 
        var $this = this
        var id = this.id
        e.preventDefault();        
        swal({
            title: 'Êtes-vous sûr ?',
              text: "après confirmation l'enregistrement sera detruit!",
              type: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Oui, supprimer!'
            }).then(function () {
            var request = $.ajax({
                type: "POST",
                url: base_url + "index.php/form/del_user",
                data: ({id_user : id}),
                success: function(data){
                    $($this).parents('tr').hide();
                    //console.log(data)
                    swal(
                        'Supprimé!',
                        'votre enregistrement a bien été supprimé.',
                        'success'
                    )
                },
                error: function(e) { 
                    console.log(e); 
                }
            });
            })
        return false;
    });
});

