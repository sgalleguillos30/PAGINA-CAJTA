(function ($) {

    function onBtnClick(e) {
        var $this = $(this),
            $selectors = $('.menu-principal-mobile'),
            $header = $('.header-navbar-mobile');

        $this.toggleClass('is-open');
        $selectors.toggleClass('is-open');
        $header.toggleClass('is-open');
        e.preventDefault();

    };

    $(document).ready(function(){

        var $mobileNav = $('.trigger');

        $mobileNav.on("click", onBtnClick);

        $(".carousel").carousel();

    });

    $(".widget-centros-atencion a.trigger").click(function(){
        var region = $(this).attr('data-region');
        $(".widget-centros-atencion a.trigger#t-" +region).toggleClass("on");
        $(".widget-centros-atencion .lista-centros-atencion#c-" + region).slideToggle("fast");
        e.preventDefault();
    });

})(jQuery);



$(window).scroll(function(e){

    parallaxScroll();

});



function parallaxScroll() {
    var wScroll = $(window).scrollTop();

    $('.item').css('background-position','center calc(50% + ' + wScroll + 'px)');
}



$(function(){
    CheckDiag();
    CheckDiagSolicitante();
    CheckDiagSolicitado();
    ConfirmDiag();
    // Check();
    CentraCSSimgNoticia();
    CentrarImgListaNoticia();
    BigImg();
});



function CheckDiag(){

    $('#DiagCheck').click(function(){

        if ( $('#DiagCheck').is(':checked') ) {
            $('#txtRut').attr('value','0000000-0');
            $('#txtRut').prop('readonly' , true );
            $('#DiagCheck').val('true');
        } else {
            $('#txtRut').prop('readonly' , false );
            $('#txtRut').attr('value','');
            $('#DiagCheck').val('false');
        };
    });
} //end function



function CheckDiagSolicitante(){

    $('#DiagCheck_p1').click(function(){

        if ( $('#DiagCheck_p1').is(':checked') ) {
            $('#txtRut_p1').attr('value','0000000-0');
            $('#txtRut_p1').prop('readonly' , true );
            $('#DiagCheck_p1').val('true');
        } else {
            $('#txtRut_p1').prop('readonly' , false );
            $('#txtRut_p1').attr('value','');
            $('#DiagCheck_p1').val('false');
        };
    });
} //end function



function CheckDiagSolicitado(){

    $('#DiagCheck_p2').click(function(){

        if ( $('#DiagCheck_p2').is(':checked') ) {
            $('#txtRut_p2').attr('value','0000000-0');
            $('#txtRut_p2').prop('readonly' , true );
            $('#DiagCheck_p2').val('true');
        } else {
            $('#txtRut_p2').prop('readonly' , false );
            $('#txtRut_p2').attr('value','');
            $('#DiagCheck_p2').val('false');
        };
    });
} //end function



function ConfirmDiag(){

    $('#confirmCheck').click(function(){

        if ( $('#confirmCheck').is(':checked') ) {
            $('#btnMensaje').prop('disabled' , false );
            $('#confirmCheck').val('true');

        } else {
            $('#btnMensaje').prop('disabled' , true );
            $('#confirmCheck').val('false');

        };
    });
} //end function


function CentraCSSimgNoticia(){
    $( $('#imgDestacado') ).ready(function(){
        if ( $('#imgDestacado').get(0).naturalHeight > $('#imgDestacado').get(0).naturalWidth ) {
            $("#imgDestacado").css("max-height" , "430px" );
            $('#imgDestacado').css('width' , 'auto' );
        }
    });
}

function CentrarImgListaNoticia(){
    $('.imgDestacado').ready(function(){
        $('.imgDestacado').each(function( index ){

            if ( $('.imgDestacado').get(index).naturalHeight > $('.imgDestacado').get(index).naturalWidth ) {
                // $(this).css("max-height" , "212px" );
                // $(this).css('width' , 'auto' );
                $(this).addClass('largo');
                $(this).removeClass('ancho');
            } else {
                // $(this).css("height" , "auto" );
                // $(this).css("max-height" , "210px" );
                // $(this).css('width' , '100%' );
                $(this).addClass('ancho');
                $(this).removeClass('largo');
            }
        });
    });
}

function BigImg(){
    $( $('#imgSize') ).ready(function(){
        if ( $('#imgSize').get(0).naturalWidth < 660 && ($('#imgSize').get(0).naturalHeight < $('#imgSize').get(0).naturalWidth) ) {
            $('#imgSize').css('width', "100%");
        }
    });
}
