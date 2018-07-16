import axios from 'axios'

$(document).ready(function () {
    $('.modal').modal()
    $('ul.tabs').tabs()
    $('select').material_select();
    $('#textarea2').trigger('autoresize')
    $('#add_detail').on('click', function (e) {
        add_field()
    })
    $('.materialboxed').materialbox()

    $('body').on('click', '.delete-detail', function (e) {
        var input = $(e.currentTarget)
        if (input.attr('data-id')) {
            axios ({
                method  : 'GET',
                url    : `/admin/delete_property/${input.attr('data-id')}`
            }).then ( response => {
                if ( response.status != 200 ) {
                    Materialize.toast("No se pudo eliminar el detalle", 4000)
                    return
                }
            })
        }
        Materialize.toast("Se ha eliminado el detalle", 4000)
        input.parent().remove()
    })

    $('#content-details').keypress(function (e) {
        if (e.which == 13) {
            e.preventDefault()
            add_field()
        }
    })

    function add_field() {
        var text = $('#text-detail')
        var cont = $('#content-details .input-field.add')
        if (text.val() != '') {
            cont.before(`
                <div class="input-field">
                   <input id="" name="details[]" type="text" value="${text.val()}" required>
                   <label for="" class="active">Descripción</label>
                   <button class="btn btn-floating delete-detail" type="button">
                       <i class="large material-icons">delete</i>
                   </button>
                </div>
                `)
            text.val('')
            text.focus()
        }
        else {
            Materialize.toast('Debe ingresar una descripción', 4000)
            text.focus()
        }
    }

    $('body').on('click', '.add-image', function (e) {
        add_field_img(e)
    })

    function add_field_img (e) {
        var btn = $(e.currentTarget)
        var parent = btn.parent()
        var input = parent.find('input')
        var cont = $('#content-images')
        if (input[0].files.length > 0 && input[1].value != '') {
            $(input[0]).attr('name', 'images[]')
            $(input[1]).attr('name', 'titles[]')
            btn.removeClass('add-image')
            btn.addClass('delete-img')
            btn.find('i').text('delete')
            cont.append(`
                <div class="row-image">
                    <div class="file-field input-field">
                        <div>
                            <img class="left" width="80" src="/images/default.jpg" alt="">
                        </div>
                        <div class="content_img">
                            <div class="btn" style="position: relative;">
                                <span>imagen</span>
                                <input type="file" class="file">
                            </div>
                            <div class="file-path-wrapper">
                                <input class="truncate" type="text" placeholder="Nombre de la imagen">
                            </div>
                            <button class="btn btn-floating add-image" type="button">
                                <i class="large material-icons">add</i>
                            </button>
                        </div>
                    </div>
                </div>
                `)
        }
        else {
            Materialize.toast('Debe ingresar una imagen y un nombre', 4000)
        }
    }

    $('body').on('click', '.delete-img', function (e) {
        var input = $(e.currentTarget)
        if (input.attr('data-id')) {
            axios ({
                method  : 'GET',
                url    : `/admin/delete_img/${input.attr('data-id')}`
            }).then ( response => {
                if ( response.status != 200 ) {
                    Materialize.toast("Ocurrio un error al eliminar la imagen", 4000)
                    return
                }
            })
        }
        Materialize.toast("Se ha eliminado la imagen", 4000)
        input.parent().parent().remove()
    })

    $('body').on('click', '.delete_service', function (e) {
        var btn = $(e.currentTarget)
        var id = btn.attr('data-id')
        axios({
            method   : 'GET',
            url      : `/admin/services/delete/${id}`
        }).then ( response => {
            if (response.status == 200) {
                Materialize.toast( response.data, 4000)
                btn.parent().parent().remove()
            }
        }).catch ( err => {
            Materialize.toast("Ocurrio un error al eliminar el servicio", 4000)
        })
    })

    $('body').on('click', '.delete_tinmueble', function (e) {
        var btn = $(e.currentTarget)
        var id = btn.attr('data-id')
        axios({
            method   : 'GET',
            url      : `/admin/tipo/delete/${id}`
        }).then ( response => {
            if (response.status == 200) {
                Materialize.toast( response.data, 4000)
                btn.parent().parent().remove()
            }
        }).catch ( err => {
            Materialize.toast("Ocurrio un error al eliminar el tipo de inmueble", 4000)
        })
    })

    $('body').on('click', '.delete_property', function (e) {
        var btn = $(e.currentTarget)
        var id = btn.attr('data-id')
        axios({
            method   : 'GET',
            url      : `/admin/property/delete/${id}`
        }).then ( response => {
            if (response.status == 200) {
                Materialize.toast( response.data, 4000)
                btn.parent().parent().remove()
            }
        }).catch ( err => {
            Materialize.toast("Ocurrio un error al eliminar el inmueble", 4000)
        })
    })

    $('#img_property').on('change', function (e) {
        var file = e.currentTarget.files[0];
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#view_img_property').attr('src', e.target.result);
        }
        reader.readAsDataURL(file);
    })

    $('body').on('change', '.file', function (e) {
        var file = $(e.currentTarget)
        var reader = new FileReader()
        reader.onload = function (e) {
            file.parent().parent().prev().children(':first-child').attr('src', e.target.result);
        }
        reader.readAsDataURL(file[0].files[0]);
    })
})
