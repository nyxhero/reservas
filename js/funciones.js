$(function() {
    $(".jcarousellite .carousel").jCarouselLite({
        auto: 800,
        speed: 1000,
        // visible: 2,
        vertical: true,

    });
    // $(".jcarousellite .carousel").jCarouselLite({
    //     auto: 800,
    //     speed: 1000,
    //     visible: 2,
    //     vertical: true,
    //
    // });


    $(".imagenes").attr("data-toggle", "modal").attr( "data-target", "#paramostrar").attr("style", "cursor:pointer;height: 220px");



    $(".imagenes").click(function () {

        $('#paramostrar').modal("show");

        $("#paramostrar").find(".id_lugar_turistico2").val(
            $(this).parent().find(".id_lugar_turistico").val()
        );


        // alert(id);

        var url = "modalimg.php"; // El script a dónde se realizará la petición.
        // var id = $("#id_lugar_turistico2").val();
        $.ajax({
            type: "POST",
            url: url,
            data: $("#formulario").serialize(), // Adjuntar los campos del formulario enviado.
            success: function(data)
            {
                $("#respuesta").html(data); // Mostrar la respuestas del script PHP.


            }
        });

        return false; // Evitar ejecutar el submit del formulario.

    });

    $(".idcircuitoclick").click(function () {

        $("#myModal").find(".idcircuito2").val(
            $(this).parent().find(".idcircuito").val()
        );

        $("#myModal").find(".reservas").val(
            $(this).parent().find(".maxres").val()
        );

        $("#myModal").find(".reservas").html('Maximo # reservas '+
            $(this).parent().find(".maxres").val()
        );


    });

    $("#salida").datepicker({
        dateFormat: 'yy-mm-dd',
        minDate: '+0d'
    });

    $("#calendar").on('click',function () {
        $('#salida').datepicker('show');
    });



    $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '<Ant',
        nextText: 'Sig>',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
        weekHeader: 'Sm',
        dateFormat: 'yy-mm-dd',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['es']);


    $('#btnProcesar').click(function(){

        if ($("#frm").validationEngine('validate')) {
        var datos = $('#frm').serialize();
        $.ajax({
            url: "add.php",
            type: "POST",
            data: datos,
            success: function(data){

                document.getElementById('frm').reset();
                console.log(data);

            }
        });
        $('#myModal').modal("hide");
        }
    });
});



function validar() {
    if ($("#personas").val() > $("#res").val()) {
        alert("No debe exeder el numero de reservas")
        $("#adultos, #ninios, #infantes,#personas").val("0");
    }
}

    function sumar()
{
    var valor1=verificar("adultos");
    var valor2=verificar("ninios");
    var valor3=verificar("infantes");

    document.getElementById("personas").value=parseFloat(valor1)+parseFloat(valor2)+parseFloat(valor3);


}

function verificar(id)
{
    var obj=document.getElementById(id);
    if(obj.value=="")
        value="0";
    else
        value=obj.value;
    obj.style.borderColor="#808080";
    return value;

}

function borracampoA(){
    if(document.frm.adultos.value == "0")document.frm.adultos.value = "";
}
function restauracampoA(){
    if(document.frm.adultos.value == "")document.frm.adultos.value = "0";
}
function borracampoN(){
    if(document.frm.ninios.value == "0")document.frm.ninios.value = "";
}
function restauracampoN(){
    if(document.frm.ninios.value == "")document.frm.ninios.value = "0";
}
function borracampoI(){
    if (document.frm.infantes.value == "0")document.frm.infantes.value = "";
}
function restauracampoI(){
    if (document.frm.infantes.value == "")document.frm.infantes.value = "0";
}

