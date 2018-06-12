import axios from 'axios'

$(function (){
    $(".sidenav-trigger").sideNav();
    $('.slider').slider({indicators: false});
    $('select').material_select();
    $('.materialboxed').materialbox();
    $(".dropdown-button").dropdown();
    $('#modal1').modal();

    $("#btn_request").on("click", function () {
        $(".preloader-content").removeClass('hide');
        var frm = document.getElementById('frm_request')
        var form = new FormData(frm)
        axios ({
            method  : 'POST',
            url    : '/property/request',
            data   : form
        }).then ( response => {
            if ( response.status == 200 ) {
                $("#modal1").modal('close')
                Materialize.toast('Su información ha sido enviada...', 4000)
                $(".preloader-content").addClass('hide')
                frm.reset()
            }
        })
    })
})
