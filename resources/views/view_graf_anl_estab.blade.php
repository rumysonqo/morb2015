@extends('layouts.main')
@section('content')
<br>
<br>
<br>
<!--<center><h2>Morbilidad General por Enfermedades CIE-10 Red Cusco Norte 2015</h3></center>
<center><h3>Por Micro Redes y Establecimientos</h4></center>
-->

<div class="container-fluid">
  <div class="row">
      <div class="col-xs-3">

        <div style="width: 100%;" class="panel panel-primary">
          <div class="panel-heading">
              Sexo
          </div>
          <div class="panel-body">
            <div class="form-group">
            <center>  
              {{ Form::radio('Sexo','M') }} Masculino
              {{ Form::radio('Sexo','F') }} Femenino
              {{ Form::radio('Sexo','A','true') }} Ambos
              </center>
            </div>
          </div>
        </div>

        <div style="width: 100%;" class="panel panel-primary">
        <div class="panel-heading">
            Grupos de Edad
        </div>
        <div class="panel-body">
            {{ Form::select('edad',$edad,null,['placeholder'=>'Selecciona...', 'class'=>'form-control input-md','id'=>'edad']) }}
        </div>
        </div>

        <div style="width: 100%;" class="panel panel-primary" id="clasificacion">
            <div class="panel-heading">
                Clasificación CIE-10
            </div>
            <div class="panel-body">
                {{ Form::radio('CIE','C','true') }} Capitulo
                {{ Form::radio('CIE','G') }} Grupo 
                {{ Form::radio('CIE','T') }} Categoria <br>
                {{ Form::radio('CIE','E') }} Enfermedad
            </div>
        </div>


        <div style="width: 100%; display:none;" class="panel panel-primary" id="capitulo_pan">
            <div class="panel-heading">
                Capitulo
            </div>
            <div class="panel-body">
                {{ Form::select('capitulo',['data-placeholder'=>'Selecciona...'],null,['class'=>'form-control input-md','id'=>'capitulo']) }}   
            </div>
        </div>

        <div style="width: 100%; display:none;" class="panel panel-primary" id="grupo_pan">
            <div class="panel-heading">
                Grupo
            </div>
            <div class="panel-body">
                {{ Form::select('grupo',['data-placeholder'=>'Selecciona...'],null,['class'=>'form-control input-md','id'=>'grupo']) }}   
            </div>
        </div>

        <div style="width: 100%; display:none;" class="panel panel-primary" id="categoria_pan">
            <div class="panel-heading">
                Categoria
            </div>
            <div class="panel-body">
                {{ Form::select('categoria',['data-placeholder'=>'Selecciona...'],null,['class'=>'form-control input-md','id'=>'categoria']) }}   
            </div>
        </div>

        <div style="width: 100%; display:none;" class="panel panel-primary" id="enfermedad_pan">
            <div class="panel-heading">
                Enfermedad
            </div>
            <div class="panel-body">
                {{ Form::select('enfermedad',['data-placeholder'=>'Selecciona...'],null,['class'=>'form-control input-md','id'=>'enfermedad']) }}   
            </div>
        </div>


      </div>


      <div class="col-xs-9">
    
      <div style="width: 100%; min-height: 550px;" class="panel panel-primary">
        <div class="panel-heading">
            Grafico
        </div>

        <div class="panel-body">
          <!-- <div style="width: 100%; min-height: 550px;" id="graf_cap"></div>-->
          <center> <h3>Morbilidad por Micro Red/Establecimiento</h3></center>
          <center> <h4></h4></center>
          <div style="width: 100%; min-height: 650px;" id="chartdiv"></div>
          

        </div>

        </div>

      </div>

  </div>

  </div>



    </div>
	
</div>
<br>
<br>
<br>
<br>

@endsection

@section('script')

<script>
    $(document).ready(function(){
        $('#clasificacion').hide();
    });

</script>


<script>
  $('input:radio[name=CIE]').click(function() {
    var sx=$("input[name='Sexo']:checked").val();
    var clf=$("input[name='CIE']:checked").val();
    var ed=document.getElementById("edad");
    var edv=ed.options[ed.selectedIndex].value;
    var edt=ed.options[ed.selectedIndex].text;

    var cp=document.getElementById("capitulo");
    var cpv=cp.options[cp.selectedIndex].value;
    var cpt=cp.options[cp.selectedIndex].text;

    var gr=document.getElementById("grupo");
    var grv=gr.options[gr.selectedIndex].value;
    var grt=gr.options[gr.selectedIndex].text;

    var ct=document.getElementById("categoria");
    var ctv=ct.options[ct.selectedIndex].value;
    var ctt=ct.options[ct.selectedIndex].text;

    var en=document.getElementById("enfermedad");
    var env=en.options[en.selectedIndex].value;
    var ent=en.options[en.selectedIndex].text;

    switch (clf)
    {
      case 'C':
            $('#capitulo_pan').show("slow");
            $('#grupo_pan').hide("slow");
            $('#categoria_pan').hide("slow");
            $('#enfermedad_pan').hide("slow");
            break;
      case 'G':
            $('#capitulo_pan').show("slow");
            $('#grupo_pan').show("slow");
            $('#categoria_pan').hide("slow");
            $('#enfermedad_pan').hide("slow");
            break;
      case 'T':
            $('#capitulo_pan').show("fast");
            $('#grupo_pan').show("slow");
            $('#categoria_pan').show("slow");
            $('#enfermedad_pan').hide("slow");
            break;
      case 'E':
            $('#capitulo_pan').show("fast");
            $('#grupo_pan').show("slow");
            $('#categoria_pan').show("slow");
            $('#enfermedad_pan').show("slow");
            break;
    }


  switch(clf)
  {
    case 'C':
          $.getJSON("dat_capitulo/"+sx+"/"+edv, function(response, state){
              $("#capitulo").empty();
              $("#capitulo").append("<option value=0'>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#capitulo").append("<option value='"+response[i].id_capitulo+"'>"+response[i].capitulo+"</option>");
                }
          });break;

    case 'G':
          $.getJSON("dat_grupo/"+sx+"/"+edv+"/"+cpv, function(response, state){
              $("#grupo").empty();
              $("#grupo").append("<option value=0>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#grupo").append("<option value='"+response[i].id_grupo+"'>"+response[i].grupo+"</option>");
                }
          });break;


    case 'T':

          $.getJSON("dat_categoria/"+sx+"/"+edv+"/"+grv, function(response, state){
              $("#categoria").empty();
               $("#categoria").append("<option value=0>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#categoria").append("<option value='"+response[i].id_categoria+"'>"+response[i].categoria+"</option>");
                }
          });break;
    case 'E':
          $.getJSON("dat_capitulo/"+sx+"/"+edv, function(response, state){
              $("#capitulo").empty();
              $("#capitulo").append("<option value=0'>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#capitulo").append("<option value='"+response[i].id_capitulo+"'>"+response[i].capitulo+"</option>");
                }
          });

          $.getJSON("dat_grupo/"+sx+"/"+edv+"/"+cpv, function(response, state){
              $("#grupo").empty();
              $("#grupo").append("<option value=0>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#grupo").append("<option value='"+response[i].id_grupo+"'>"+response[i].grupo+"</option>");
                }
          });

          $.getJSON("dat_categoria/"+sx+"/"+edv+"/"+grv, function(response, state){
              $("#categoria").empty();
               $("#categoria").append("<option value=0>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#categoria").append("<option value='"+response[i].id_categoria+"'>"+response[i].categoria+"</option>");
                }
          });

          $.getJSON("dat_enfermedad/"+sx+"/"+edv+"/"+ctv, function(response, state){
              $("#enfermedad").empty();
               $("#enfermedad").append("<option value=0>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#enfermedad").append("<option value='"+response[i].id_enfermedad+"'>"+response[i].enfermedad+"</option>");
                }
          });break;
  }



    sx=$("input[name='Sexo']:checked").val();
    clf=$("input[name='CIE']:checked").val();

    edv=ed.options[ed.selectedIndex].value;
    edt=ed.options[ed.selectedIndex].text;

    cpv=cp.options[cp.selectedIndex].value;
    cpt=cp.options[cp.selectedIndex].text;

    grv=gr.options[gr.selectedIndex].value;
    grt=gr.options[gr.selectedIndex].text;

    ctv=ct.options[ct.selectedIndex].value;
    ctt=ct.options[ct.selectedIndex].text;

    env=en.options[en.selectedIndex].value;
    ent=en.options[en.selectedIndex].text;
  
    var sex="";
    switch(sx)
    {
      case 'M':sex="Masculino";break;
      case 'F':sex="Femenino";break;
      case 'A':sex="Ambos";break;
    }

  var cod=0;
  var tit="";
  switch(clf)
  {
    case 'C':cod=cpv;tit=cpt;break;
    case 'G':cod=grv;tit=grt;break;
    case 'T':cod=ctv;tit=ctt;break;
    case 'E':cod=env;tit=ent;break;
  }
  $.getJSON("act_graf_anl_estab/"+sx+"/"+edv+"/"+clf+"/"+cod,function(data){
    graf_anl_est(data);
    $("h3").text(tit);
    $("h4").text("Edad: "+$("#edad option:selected").text()+" - Sexo: "+sex);
    });
  });
</script>

<script>
$("#edad").change(function(event){
  var sx=$("input[name='Sexo']:checked").val();
  var clf=$("input[name='CIE']:checked").val();
  var ed=document.getElementById("edad");
  var edv=ed.options[ed.selectedIndex].value;
  var edt=ed.options[ed.selectedIndex].text;

  var cp=document.getElementById("capitulo");
  var cpv=cp.options[cp.selectedIndex].value;
  var cpt=cp.options[cp.selectedIndex].text;

  var gr=document.getElementById("grupo");
  var grv=gr.options[gr.selectedIndex].value;
  var grt=gr.options[gr.selectedIndex].text;

  var ct=document.getElementById("categoria");
  var ctv=ct.options[ct.selectedIndex].value;
  var ctt=ct.options[ct.selectedIndex].text;

  var en=document.getElementById("enfermedad");
  var env=en.options[en.selectedIndex].value;
  var ent=en.options[en.selectedIndex].text;

  if(edv>0)
  {
    $('#clasificacion').show("slow");
    $('#capitulo_pan').show("slow");
  }

  switch(clf)
  {
    case 'C':
          $.getJSON("dat_capitulo/"+sx+"/"+edv, function(response, state){
              $("#capitulo").empty();
              $("#capitulo").append("<option value=0'>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#capitulo").append("<option value='"+response[i].id_capitulo+"'>"+response[i].capitulo+"</option>");
                }
          });break;
    case 'G':
          $.getJSON("dat_capitulo/"+sx+"/"+edv, function(response, state){
              $("#capitulo").empty();
              $("#capitulo").append("<option value=0'>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#capitulo").append("<option value='"+response[i].id_capitulo+"'>"+response[i].capitulo+"</option>");
                }
          });

          $.getJSON("dat_grupo/"+sx+"/"+edv+"/"+cpv, function(response, state){
              $("#grupo").empty();
              $("#grupo").append("<option value=0>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#grupo").append("<option value='"+response[i].id_grupo+"'>"+response[i].grupo+"</option>");
                }
          });break;
    case 'T':
          $.getJSON("dat_capitulo/"+sx+"/"+edv, function(response, state){
              $("#capitulo").empty();
              $("#capitulo").append("<option value=0'>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#capitulo").append("<option value='"+response[i].id_capitulo+"'>"+response[i].capitulo+"</option>");
                }
          });

          $.getJSON("dat_grupo/"+sx+"/"+edv+"/"+cpv, function(response, state){
              $("#grupo").empty();
              $("#grupo").append("<option value=0>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#grupo").append("<option value='"+response[i].id_grupo+"'>"+response[i].grupo+"</option>");
                }
          });

          $.getJSON("dat_categoria/"+sx+"/"+edv+"/"+grv, function(response, state){
              $("#categoria").empty();
               $("#categoria").append("<option value=0>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#categoria").append("<option value='"+response[i].id_categoria+"'>"+response[i].categoria+"</option>");
                }
          });break;
    case 'E':
          $.getJSON("dat_capitulo/"+sx+"/"+edv, function(response, state){
              $("#capitulo").empty();
              $("#capitulo").append("<option value=0'>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#capitulo").append("<option value='"+response[i].id_capitulo+"'>"+response[i].capitulo+"</option>");
                }
          });

          $.getJSON("dat_grupo/"+sx+"/"+edv+"/"+cpv, function(response, state){
              $("#grupo").empty();
              $("#grupo").append("<option value=0>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#grupo").append("<option value='"+response[i].id_grupo+"'>"+response[i].grupo+"</option>");
                }
          });

          $.getJSON("dat_categoria/"+sx+"/"+edv+"/"+grv, function(response, state){
              $("#categoria").empty();
               $("#categoria").append("<option value=0>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#categoria").append("<option value='"+response[i].id_categoria+"'>"+response[i].categoria+"</option>");
                }
          });

          $.getJSON("dat_enfermedad/"+sx+"/"+edv+"/"+ctv, function(response, state){
              $("#enfermedad").empty();
               $("#enfermedad").append("<option value=0>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#enfermedad").append("<option value='"+response[i].id_enfermedad+"'>"+response[i].enfermedad+"</option>");
                }
          });break;
  }

  sx=$("input[name='Sexo']:checked").val();
  clf=$("input[name='CIE']:checked").val();
  ed=document.getElementById("edad");
  edv=ed.options[ed.selectedIndex].value;
  edt=ed.options[ed.selectedIndex].text;

  cp=document.getElementById("capitulo");
  cpv=cp.options[cp.selectedIndex].value;
  cpt=cp.options[cp.selectedIndex].text;

  gr=document.getElementById("grupo");
  grv=gr.options[gr.selectedIndex].value;
  grt=gr.options[gr.selectedIndex].text;

  ct=document.getElementById("categoria");
  ctv=ct.options[ct.selectedIndex].value;
  ctt=ct.options[ct.selectedIndex].text;

  en=document.getElementById("enfermedad");
  env=en.options[en.selectedIndex].value;
  ent=en.options[en.selectedIndex].text;

  var sex="";
    switch(sx)
    {
      case 'M':sex="Masculino";break;
      case 'F':sex="Femenino";break;
      case 'A':sex="Ambos";break;
    }


  var cod=0;
  var tit="";
  switch(clf)
  {
    case 'C':cod=cpv;tit=cpt;break;
    case 'G':cod=grv;tit=grt;break;
    case 'T':cod=ctv;tit=ctt;break;
    case 'E':cod=env;tit=ent;break;
  }
  $.getJSON("act_graf_anl_estab/"+sx+"/"+edv+"/"+clf+"/"+cod,function(data){
    graf_anl_est(data);
    $("h3").text(tit);
    $("h4").text("Edad: "+$("#edad option:selected").text()+" - Sexo: "+sex);
    });
  
  
 
});


</script>


<script>
$("#capitulo").change(function(event){
  var sx=$("input[name='Sexo']:checked").val();
  var clf=$("input[name='CIE']:checked").val();

  var ed=document.getElementById("edad");
  var edv=ed.options[ed.selectedIndex].value;
  var edt=ed.options[ed.selectedIndex].text;

  var cp=document.getElementById("capitulo");
  var cpv=cp.options[cp.selectedIndex].value;
  var cpt=cp.options[cp.selectedIndex].text;

  var gr=document.getElementById("grupo");
  var grv=gr.options[gr.selectedIndex].value;
  var grt=gr.options[gr.selectedIndex].text;

  var ct=document.getElementById("categoria");
  var ctv=ct.options[ct.selectedIndex].value;
  var ctt=ct.options[ct.selectedIndex].text;

  var en=document.getElementById("enfermedad");
  var env=en.options[en.selectedIndex].value;
  var ent=en.options[en.selectedIndex].text;

  switch(clf)
  {
    case 'G':
          $.getJSON("dat_grupo/"+sx+"/"+edv+"/"+cpv, function(response, state){
              $("#grupo").empty();
              $("#grupo").append("<option value=0>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#grupo").append("<option value='"+response[i].id_grupo+"'>"+response[i].grupo+"</option>");
                }
          });break;

    case 'T':
          $.getJSON("dat_grupo/"+sx+"/"+edv+"/"+cpv, function(response, state){
              $("#grupo").empty();
              $("#grupo").append("<option value=0>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#grupo").append("<option value='"+response[i].id_grupo+"'>"+response[i].grupo+"</option>");
                }
          });
          
          $.getJSON("dat_categoria/"+sx+"/"+edv+"/"+grv, function(response, state){
              $("#categoria").empty();
               $("#categoria").append("<option value=0>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#categoria").append("<option value='"+response[i].id_categoria+"'>"+response[i].categoria+"</option>");
                }
          });break;
    case 'E':
          $.getJSON("dat_grupo/"+sx+"/"+edv+"/"+cpv, function(response, state){
              $("#grupo").empty();
              $("#grupo").append("<option value=0>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#grupo").append("<option value='"+response[i].id_grupo+"'>"+response[i].grupo+"</option>");
                }
          });
          
          $.getJSON("dat_categoria/"+sx+"/"+edv+"/"+grv, function(response, state){
              $("#categoria").empty();
               $("#categoria").append("<option value=0>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#categoria").append("<option value='"+response[i].id_categoria+"'>"+response[i].categoria+"</option>");
                }
          });
          
          $.getJSON("dat_enfermedad/"+sx+"/"+edv+"/"+ctv, function(response, state){
              $("#enfermedad").empty();
               $("#enfermedad").append("<option value=0>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#enfermedad").append("<option value='"+response[i].id_enfermedad+"'>"+response[i].enfermedad+"</option>");
                }
          });break;
  }

  
  var sex="";
  switch(sx)
  {
    case 'M':sex="Masculino";break;
    case 'F':sex="Femenino";break;
    case 'A':sex="Ambos";break;
  }


  sx=$("input[name='Sexo']:checked").val();
  clf=$("input[name='CIE']:checked").val();

  ed=document.getElementById("edad");
  edv=ed.options[ed.selectedIndex].value;
  edt=ed.options[ed.selectedIndex].text;

  cp=document.getElementById("capitulo");
  cpv=cp.options[cp.selectedIndex].value;
  cpt=cp.options[cp.selectedIndex].text;

  gr=document.getElementById("grupo");
  grv=gr.options[gr.selectedIndex].value;
  grt=gr.options[gr.selectedIndex].text;

  ct=document.getElementById("categoria");
  ctv=ct.options[ct.selectedIndex].value;
  ctt=ct.options[ct.selectedIndex].text;

  en=document.getElementById("enfermedad");
  env=en.options[en.selectedIndex].value;
  ent=en.options[en.selectedIndex].text;

  var cod=0;
  var tit="";
  switch(clf)
  {
    case 'C':cod=cpv;tit=cpt;break;
    case 'G':cod=grv;tit=grt;break;
    case 'T':cod=ctv;tit=ctt;break;
    case 'E':cod=env;tit=ent;break;
  }
  $.getJSON("act_graf_anl_estab/"+sx+"/"+edv+"/"+clf+"/"+cod,function(data){
    graf_anl_est(data);
    $("h3").text(tit);
    $("h4").text("Edad: "+$("#edad option:selected").text()+" - Sexo: "+sex);
    });
});
</script>



<script>
$("#grupo").change(function(event){
  var sx=$("input[name='Sexo']:checked").val();
  var clf=$("input[name='CIE']:checked").val();

  var ed=document.getElementById("edad");
  var edv=ed.options[ed.selectedIndex].value;
  var edt=ed.options[ed.selectedIndex].text;

  var cp=document.getElementById("capitulo");
  var cpv=cp.options[cp.selectedIndex].value;
  var cpt=cp.options[cp.selectedIndex].text;

  var gr=document.getElementById("grupo");
  var grv=gr.options[gr.selectedIndex].value;
  var grt=gr.options[gr.selectedIndex].text;

  var ct=document.getElementById("categoria");
  var ctv=ct.options[ct.selectedIndex].value;
  var ctt=ct.options[ct.selectedIndex].text;

  var en=document.getElementById("enfermedad");
  var env=en.options[en.selectedIndex].value;
  var ent=en.options[en.selectedIndex].text;

  switch(clf)
  {
    case 'T':
  
          $.getJSON("dat_categoria/"+sx+"/"+edv+"/"+grv, function(response, state){
              $("#categoria").empty();
               $("#categoria").append("<option value=0>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#categoria").append("<option value='"+response[i].id_categoria+"'>"+response[i].categoria+"</option>");
                }
          });break;
    case 'E':
 
          $.getJSON("dat_categoria/"+sx+"/"+edv+"/"+grv, function(response, state){
              $("#categoria").empty();
               $("#categoria").append("<option value=0>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#categoria").append("<option value='"+response[i].id_categoria+"'>"+response[i].categoria+"</option>");
                }
          });
          
          $.getJSON("dat_enfermedad/"+sx+"/"+edv+"/"+ctv, function(response, state){
              $("#enfermedad").empty();
               $("#enfermedad").append("<option value=0>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#enfermedad").append("<option value='"+response[i].id_enfermedad+"'>"+response[i].enfermedad+"</option>");
                }
          });break;
  }


  sx=$("input[name='Sexo']:checked").val();
  clf=$("input[name='CIE']:checked").val();

  edv=ed.options[ed.selectedIndex].value;
  edt=ed.options[ed.selectedIndex].text;

  cpv=cp.options[cp.selectedIndex].value;
  cpt=cp.options[cp.selectedIndex].text;

  grv=gr.options[gr.selectedIndex].value;
  grt=gr.options[gr.selectedIndex].text;

  ctv=ct.options[ct.selectedIndex].value;
  ctt=ct.options[ct.selectedIndex].text;

  env=en.options[en.selectedIndex].value;
  ent=en.options[en.selectedIndex].text;

  var sex="";
    switch(sx)
    {
      case 'M':sex="Masculino";break;
      case 'F':sex="Femenino";break;
      case 'A':sex="Ambos";break;
    }


  var cod=0;
  var tit="";
  switch(clf)
  {
    case 'C':cod=cpv;tit=cpt;break;
    case 'G':cod=grv;tit=grt;break;
    case 'T':cod=ctv;tit=ctt;break;
    case 'E':cod=env;tit=ent;break;
  }

  $.getJSON("act_graf_anl_estab/"+sx+"/"+edv+"/"+clf+"/"+cod,function(data){
    graf_anl_est(data);
    $("h3").text(tit);
    $("h4").text("Edad: "+$("#edad option:selected").text()+" - Sexo: "+sex);
  });

  });
</script>


<script>
$("#categoria").change(function(event){
  var sx=$("input[name='Sexo']:checked").val();
  var clf=$("input[name='CIE']:checked").val();

  var ed=document.getElementById("edad");
  var edv=ed.options[ed.selectedIndex].value;
  var edt=ed.options[ed.selectedIndex].text;

  var cp=document.getElementById("capitulo");
  var cpv=cp.options[cp.selectedIndex].value;
  var cpt=cp.options[cp.selectedIndex].text;

  var gr=document.getElementById("grupo");
  var grv=gr.options[gr.selectedIndex].value;
  var grt=gr.options[gr.selectedIndex].text;

  var ct=document.getElementById("categoria");
  var ctv=ct.options[ct.selectedIndex].value;
  var ctt=ct.options[ct.selectedIndex].text;

  var en=document.getElementById("enfermedad");
  var env=en.options[en.selectedIndex].value;
  var ent=en.options[en.selectedIndex].text;

  switch(clf)
  {
    case 'C':
          $.getJSON("dat_capitulo/"+sx+"/"+edv, function(response, state){
              $("#capitulo").empty();
              $("#capitulo").append("<option value=0'>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#capitulo").append("<option value='"+response[i].id_capitulo+"'>"+response[i].capitulo+"</option>");
                }
          });break;
    case 'G':
          $.getJSON("dat_capitulo/"+sx+"/"+edv, function(response, state){
              $("#capitulo").empty();
              $("#capitulo").append("<option value=0'>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#capitulo").append("<option value='"+response[i].id_capitulo+"'>"+response[i].capitulo+"</option>");
                }
          });

          $.getJSON("dat_grupo/"+sx+"/"+edv+"/"+cpv, function(response, state){
              $("#grupo").empty();
              $("#grupo").append("<option value=0>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#grupo").append("<option value='"+response[i].id_grupo+"'>"+response[i].grupo+"</option>");
                }
          });break;
  
    case 'E':
          $.getJSON("dat_enfermedad/"+sx+"/"+edv+"/"+ctv, function(response, state){
              $("#enfermedad").empty();
               $("#enfermedad").append("<option value=0>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#enfermedad").append("<option value='"+response[i].id_enfermedad+"'>"+response[i].enfermedad+"</option>");
                }
          });break;
  }

  edv=ed.options[ed.selectedIndex].value;
  edt=ed.options[ed.selectedIndex].text;

  cpv=cp.options[cp.selectedIndex].value;
  cpt=cp.options[cp.selectedIndex].text;

  grv=gr.options[gr.selectedIndex].value;
  grt=gr.options[gr.selectedIndex].text;

  ctv=ct.options[ct.selectedIndex].value;
  ctt=ct.options[ct.selectedIndex].text;

  env=en.options[en.selectedIndex].value;
  ent=en.options[en.selectedIndex].text;

  //var gr=event.target.value;
 
  var sex="";
    switch(sx)
    {
      case 'M':sex="Masculino";break;
      case 'F':sex="Femenino";break;
      case 'A':sex="Ambos";break;
    }

  var cod=0;
  var tit="";
  switch(clf)
  {
    case 'C':cod=cpv;tit=cpt;break;
    case 'G':cod=grv;tit=grt;break;
    case 'T':cod=ctv;tit=ctt;break;
    case 'E':cod=env;tit=ent;break;
  }

  $.getJSON("act_graf_anl_estab/"+sx+"/"+edv+"/"+clf+"/"+cod,function(data){
    graf_anl_est(data);
    $("h3").text(tit);
    $("h4").text("Edad: "+$("#edad option:selected").text()+" - Sexo: "+sex);
  });

  });
</script>




<script>
$("#enfermedad").change(function(event){
  
  var sx=$("input[name='Sexo']:checked").val();
  var clf=$("input[name='CIE']:checked").val();
  //var gr=event.target.value;

  var ed=document.getElementById("edad");
  var edv=ed.options[ed.selectedIndex].value;
  var edt=ed.options[ed.selectedIndex].text;

  var en=document.getElementById("enfermedad");
  var env=en.options[en.selectedIndex].value;
  var ent=en.options[en.selectedIndex].text;

  var sex="";
    switch(sx)
    {
      case 'M':sex="Masculino";break;
      case 'F':sex="Femenino";break;
      case 'A':sex="Ambos";break;
    }

  var cod=0;
  var tit="";
  switch(clf)
  {
    case 'C':cod=cpv;tit=cpt;break;
    case 'G':cod=grv;tit=grt;break;
    case 'T':cod=ctv;tit=ctt;break;
    case 'E':cod=env;tit=ent;break;
  }

  $.getJSON("act_graf_anl_estab/"+sx+"/"+edv+"/"+clf+"/"+cod,function(data){
    graf_anl_est(data);
    $("h3").text(tit);
    $("h4").text("Edad: "+$("#edad option:selected").text()+" - Sexo: "+sex);
  });

  });
    
    
    


</script>

<script>
  var chart;
  var chartData = [];

</script>

<script>
$("input[name='Sexo']").change(function(event){
  
  var sx=$("input[name='Sexo']:checked").val();
  var clf=$("input[name='CIE']:checked").val();

  var ed=document.getElementById("edad");
  var edv=ed.options[ed.selectedIndex].value;
  var edt=ed.options[ed.selectedIndex].text;

  var cp=document.getElementById("capitulo");
  var cpv=cp.options[cp.selectedIndex].value;
  var cpt=cp.options[cp.selectedIndex].text;

  var gr=document.getElementById("grupo");
  var grv=gr.options[gr.selectedIndex].value;
  var grt=gr.options[gr.selectedIndex].text;

  var ct=document.getElementById("categoria");
  var ctv=ct.options[ct.selectedIndex].value;
  var ctt=ct.options[ct.selectedIndex].text;

  var en=document.getElementById("enfermedad");
  var env=en.options[en.selectedIndex].value;
  var ent=en.options[en.selectedIndex].text;

  switch(clf)
  {
    case 'C':
          $.getJSON("dat_capitulo/"+sx+"/"+edv, function(response, state){
              $("#capitulo").empty();
              $("#capitulo").append("<option value=0'>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#capitulo").append("<option value='"+response[i].id_capitulo+"'>"+response[i].capitulo+"</option>");
                }
          });break;
    case 'G':
          $.getJSON("dat_capitulo/"+sx+"/"+edv, function(response, state){
              $("#capitulo").empty();
              $("#capitulo").append("<option value=0'>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#capitulo").append("<option value='"+response[i].id_capitulo+"'>"+response[i].capitulo+"</option>");
                }
          });

          $.getJSON("dat_grupo/"+sx+"/"+edv+"/"+cpv, function(response, state){
              $("#grupo").empty();
              $("#grupo").append("<option value=0>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#grupo").append("<option value='"+response[i].id_grupo+"'>"+response[i].grupo+"</option>");
                }
          });break;
    case 'T':
          $.getJSON("dat_capitulo/"+sx+"/"+edv, function(response, state){
              $("#capitulo").empty();
              $("#capitulo").append("<option value=0'>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#capitulo").append("<option value='"+response[i].id_capitulo+"'>"+response[i].capitulo+"</option>");
                }
          });

          $.getJSON("dat_grupo/"+sx+"/"+edv+"/"+cpv, function(response, state){
              $("#grupo").empty();
              $("#grupo").append("<option value=0>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#grupo").append("<option value='"+response[i].id_grupo+"'>"+response[i].grupo+"</option>");
                }
          });

          $.getJSON("dat_categoria/"+sx+"/"+edv+"/"+grv, function(response, state){
              $("#categoria").empty();
              $("#categoria").append("<option value=0>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#categoria").append("<option value='"+response[i].id_categoria+"'>"+response[i].categoria+"</option>");
                }
          });break;
  
    case 'E':
          $.getJSON("dat_capitulo/"+sx+"/"+edv, function(response, state){
              $("#capitulo").empty();
              $("#capitulo").append("<option value=0'>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#capitulo").append("<option value='"+response[i].id_capitulo+"'>"+response[i].capitulo+"</option>");
                }
          });

          $.getJSON("dat_grupo/"+sx+"/"+edv+"/"+cpv, function(response, state){
              $("#grupo").empty();
              $("#grupo").append("<option value=0>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#grupo").append("<option value='"+response[i].id_grupo+"'>"+response[i].grupo+"</option>");
                }
          });

          $.getJSON("dat_categoria/"+sx+"/"+edv+"/"+grv, function(response, state){
              $("#categoria").empty();
              $("#categoria").append("<option value=0>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#categoria").append("<option value='"+response[i].id_categoria+"'>"+response[i].categoria+"</option>");
                }
          });
          $.getJSON("dat_enfermedad/"+sx+"/"+edv+"/"+ctv, function(response, state){
              $("#enfermedad").empty();
               $("#enfermedad").append("<option value=0>"+'Selecciona...'+"</option>");
              for(i=0; i<response.length; i++)
                {
                    $("#enfermedad").append("<option value='"+response[i].id_enfermedad+"'>"+response[i].enfermedad+"</option>");
                }
          });break;
  }


  sx=$("input[name='Sexo']:checked").val();
  clf=$("input[name='CIE']:checked").val();

  ed=document.getElementById("edad");
  edv=ed.options[ed.selectedIndex].value;
  edt=ed.options[ed.selectedIndex].text;

  cp=document.getElementById("capitulo");
  cpv=cp.options[cp.selectedIndex].value;
  cpt=cp.options[cp.selectedIndex].text;

  gr=document.getElementById("grupo");
  grv=gr.options[gr.selectedIndex].value;
  grt=gr.options[gr.selectedIndex].text;

  ct=document.getElementById("categoria");
  ctv=ct.options[ct.selectedIndex].value;
  ctt=ct.options[ct.selectedIndex].text;

  en=document.getElementById("enfermedad");
  env=en.options[en.selectedIndex].value;
  ent=en.options[en.selectedIndex].text;



  var sex="";
  switch(sx)
  {
    case 'M':sex="Masculino";break;
    case 'F':sex="Femenino";break;
    case 'A':sex="Ambos";break;
  }

  var cod=0;
  var tit="";
  switch(clf)
  {
    case 'C':cod=cpv;tit=cpt;break;
    case 'G':cod=grv;tit=grt;break;
    case 'T':cod=ctv;tit=ctt;break;
    case 'E':cod=env;tit=ent;break;
  }


  $.getJSON("act_graf_anl_estab/"+sx+"/"+edv+"/"+clf+"/"+cod,function(data){
  graf_anl_est(data);
  $("h3").text(tit);
  $("h4").text("Edad: "+$("#edad option:selected").text()+" - Sexo: "+sex);
    });


  });

</script>



<script>
function resetChart() {
  chart.dataProvider = chartData;
  //chart.titles[0].text = 'Casos ';

  // remove the "Go back" label
  chart.allLabels = [];

  chart.validateData();
  chart.animateAgain();
}
</script>


<script>
    function graf_anl_est(datos) {
        
        var cont=0;
        var MICRO="";
        chartData=[];
        $.each(datos,function(i,n){
          //alert("micro red "+n['microred']+":"+total_mic(datos,n['microred']));
          if(MICRO!=n['microred'])
          {
            chartData.push({"microred":n['microred'],
            "total":total_tot(datos,n['microred']),
            "porcentaje":total_por(datos,n['microred']).toFixed(2),
            "url":"#",
            "descripcion":"Click para Ver Establecimientos",
            //"estab":[estabs(datos,n['microred'])]
            "estab":[].concat(estabs(datos,n['microred']))
            });
          }
          
          MICRO=n['microred'];
        });
        console.log(chartData);
        

        function total_tot(dat, mc)
        {
          var TOT=0;
          $.each(dat,function(i,n){
            if(mc==n['microred'])
            {
              TOT+=parseInt(n['total']);
            }
          });
          return TOT;
        }

        function total_por(dat, mc)
        {
          var POR=0;
          $.each(dat,function(i,n){
            if(mc==n['microred'])
            {
              POR+=parseFloat(n['porcentaje']);
            }
          });
          return POR;
        }

        function estabs(dat, mc)
        {
          var est=[];
          $.each(dat, function(i,n){
            if(mc==n['microred'])
            {
              est.push({"microred":n['eess'],
              "total":parseInt(n['total']),
              "porcentaje":parseFloat(n['porcentaje'])
              });
            }
          });
          return est;
        }

        // function which resets the chart back to yearly data


        // SERIAL CHART

        chart = AmCharts.makeChart("chartdiv", {
        "type": "serial",
        "creditsPosition": "top-right",
        "autoMargins": false,
        "marginLeft": 30,
        "marginRight": 8,
        "marginTop": 50,
        //"marginBottom": 26,
        /*"titles": [{
          "text": "Casos por Micro Red"
        }],*/
        "dataProvider": chartData,
        "startDuration": 1,
        "marginBottom":130,

        "graphs": [{
          "alphaField": "alpha",
          "balloonText": "<span style='font-size:13px;'>[[title]] Casos en [[category]]:<b>[[value]]</b><br> porcentaje [[porcentaje]] %</span> <br>[[descripcion]]",
          "dashLengthField": "dashLengthColumn",
          "fillAlphas": 0.85,
          "lineAlpha": 0.1,
          "title": "total",
          "type": "column",
          "labelText":"[[total]]",
          "lineColor" : "#0D8ECF",
          "topRadius":1,

          "valueField": "total",
          "urlField": "url"
        }],
        "depth3D": 40,
  "angle": 30,

        
"export": {
      "enabled": true
     },
        "categoryField": "microred",
        "categoryAxis": {
          "gridPosition": "start",
          "axisAlpha": 0,
          "labelRotation": 45,
          "tickLength": 0
        }
      });
   

  chart.addListener("clickGraphItem", function(event) {
    if ('object' === typeof event.item.dataContext.estab) {
      // set the monthly data for the clicked month
      event.chart.dataProvider = event.item.dataContext.estab;
      // update the chart title
      //event.chart.titles[0].text = event.item.dataContext.category + ' monthly data';
      event.chart.addLabel(
        35, 20,
        "< Retornar a Micro Redes",
        undefined,
        15,
        undefined,
        undefined,
        undefined,
        true,
        'javascript:resetChart();');

      // validate the new data and make the chart animate again
      event.chart.validateData();
      event.chart.animateAgain();
      }
  });

       
  }

</script>




@endsection