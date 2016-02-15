function setImageModal(imagePath){
    document.getElementById('imageOfModal').src=imagePath;
}

function submitControl(actionDest){
    document.form1.action=actionDest;
    document.form1.submit();
}

function showDialogDelete(actionDest,id){
    document.getElementById('confirmDeleteSpecialty').setAttribute('onclick', "submitControl('" + actionDest+id+ "')");
}

function getEspecialidadeDinamyc(id){
    $.ajax({
        url: '/admin/especialidades/preparaedicao/'+id,
        type: 'post',
        cache: false,
        success: function(json) {
            $.each(json, function(i, item) {
                if(typeof item == 'object') {
                    document.getElementsByName('titulo')[0].value=item.titulo;
                    document.getElementsByName('descricao')[0].value=item.descricao;
                    document.getElementsByName('icoEspecialidadePreview')[0].src='/'+item.image;
                    document.getElementsByName('submitEsp')[0].setAttribute('onclick',"submitControl('/admin/especialidades/add/"+ item.id + "')")
                }
                else {
                    return false;
                }
            }) // end $.each() loop

        },
        error: function(xhr, desc, err) {
            console.log(xhr + "\n" + err);
        }
    });
}

function addFixClear(){
    document.getElementsByName('submitEsp')[0].setAttribute('onclick',"submitControl('/admin/especialidades/add')")
}

jQuery.fn.toggleText = function(a,b) {
    return   this.html(this.html().replace(new RegExp("("+a+"|"+b+")"),function(x){return(x==a)?b:a;}));
}

$(document).ready(function(){
    $('.tgl').before('<span onclick="addFixClear();" class="btn-show-toggle btn btn-primary link">Adicionar</span>');
    $('.tgl').css('display', 'none')
    $('span', '#box-toggle').click(function() {
        $(this).next().slideToggle('slow')
            .siblings('.tgl:visible').slideToggle('fast');
        $(this).toggleText('Adicionar','Ocultar')
            .siblings('span').next('.tgl:visible').prev()
            .toggleText('Adicionar','Ocultar')
    });
})


function showModal(obj){
    $(obj).click(function() {
        $('.tgl').slideToggle('slow')
            .siblings('.tgl:visible').slideToggle('fast');
        $('.btn-show-toggle').toggleText('Adicionar','Ocultar')
            .siblings('span').next('.tgl:visible').prev()
            .toggleText('Adicionar','Ocultar')
    });
}
