@extends('layouts.main')
@section('content')
<br>
<div class="panel-body">
<center><h2>Morbilidad General por Grupos CIE-10 Red Cusco Norte 2015</h3></center>
<center><h3>Por Micro Redes</h4></center>


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
            {{ Form::radio('Sexo','1') }} Masculino
            {{ Form::radio('Sexo','2') }} Femenino
            {{ Form::radio('Sexo','3','true') }} Ambos
            </center>
          </div>
        </div>
        </div>
      </div>

      <div  class="col-xs-3">
        <div style="width: 100%;" class="panel panel-primary">
        <div class="panel-heading">
            Grupos de Edad
        </div>
        <div class="panel-body">
            {{ Form::select('edad',$edad,null,['placeholder'=>'Selecciona...', 'class'=>'form-control input-md','id'=>'edad']) }}
        </div>
        </div>
      </div>

      <div  class="col-xs-3">
        <div style="width: 100%;" class="panel panel-primary">
        <div class="panel-heading">
            Micro Red
        </div>
        <div class="panel-body">
            {{ Form::select('micro',$micro,null,['placeholder'=>'Selecciona...', 'class'=>'form-control input-md','id'=>'micro']) }}
        </div>
        </div>
      </div>



  </div>

  </div>



  <div class="row">
      <div class="col-xs-12">
        <div style="width: 100%;">
          
          <table class="pretty cell-border compact" cellspacing="0" cellpadding="0" id="mitabla">
          <thead>
            <th>Grupo CIE-10</th>
            <th>Número de Casos</th>
            <th>Grafico de %</th>
            <th>% del Total</th>
            <tbody>
          @foreach($morb_gru as $mrb)
            <tr>
              <td>{{ $mrb->grupo }}</td>
              <td align='right'>{{ number_format($mrb->total) }}</td>
              <td>
                <div class="progress progress-xs progress-striped active">
                    <div class="progress-bar progress-bar-danger" style="width:{{ round($mrb->porcentaje,1).'%' }}" ></div>
                </div>
              </td>
              <td align='center'><span class='badge bg-green'> {{ round($mrb->porcentaje,2)."%" }} </span></td>
            </tr>
            @endforeach
          </tbody>
          </thead>
        </table>
        </div>
      </div>
    </div>
    </div>
	
</div>

@endsection

@section('script')

<script>
        $(document).ready(function(){
        $('#mitabla').DataTable({
          "order": [[ 1, "desc" ]],

        //"dom": 'T<"clear">lfrtip',
        //"sDom": "T<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
        "pagingType": "simple_numbers",
        //Actualizo las etiquetas de mi tabla para mostrarlas en español
        "language": {
        "lengthMenu": "Mostrar _MENU_ registros por página.",
        "zeroRecords": "No se encontró registro.",
        "info": "  _START_ de _END_ (_TOTAL_ registros totales).",
        "infoEmpty": "0 de 0 de 0 registros",
        "infoFiltered": "(Encontrado de _MAX_registros)",
        "search": "Buscar: ",
        "processing": "Procesando la información",
        "paginate": {
        "first": " |< ",
        "previous": "Anterior",
        "next": "Siguiente",
        "last": " >| "
        }
        }
        });
        });
</script>



<script>

$("#edad").change(function(event){
  var sx=$("input[name='Sexo']:checked").val();
  var gr=event.target.value;
  var mc=document.getElementById("micro");
  var mcr=mc.options[mc.selectedIndex].value;
  var nommic=mc.options[mc.selectedIndex].text;

  var ed=document.getElementById("edad");
  var edad=ed.options[ed.selectedIndex].text;



  if(mcr < 1)
  {
    alert("no ha seleccionado micro red"); 
    return; 
  }
  



  $.getJSON("act_morb_gru_micro/"+sx+"/"+event.target.value+"/"+mcr,function(data){
    var linea="<tbody>";
    $.each(data, function(){
      linea+="<tr>";
      linea+="<td>"+this.grupo+"</td>";
      linea+="<td align='right'>"+this.total+"</td>";
      
      linea+="<td>";
      linea+="<div class='progress progress-xs progress-striped active'>";
      linea+="<div class='progress-bar progress-bar-danger' style="+'"'+ 'width:'+this.porcentaje +'%"'+">";
      linea+="</div>";
      linea+="</div>";
      linea+="</td>";

      linea+="<td align='center'>";
      linea+="<span class='badge bg-green'>"+this.porcentaje+"%";
      linea+="</span>";
      linea+="</td>";
      linea+="</tr>";
    });
    linea+="</tbody>"
    var sex="";
    switch(sx)
    {
      case '1':sex="Masculino";break;
      case '2':sex="Femenino";break;
      case '3':sex="Ambos";break;
    }


    $('h2').text("Morbilidad 2015 por Grupos CIE-10");
    $('h3').text("Micro Red : "+nommic+" - "+"Sexo: "+sex+" - Edad: "+edad);

    $('#mitabla').html(linea);
    $("#mitabla").dataTable().fnDestroy();
    $('#mitabla').DataTable({
        "order": [[ 1, "desc" ]],

        //"dom": 'T<"clear">lfrtip',
        //"sDom": "T<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
        "pagingType": "simple_numbers",
        //Actualizo las etiquetas de mi tabla para mostrarlas en español
        "language": {
        "lengthMenu": "Mostrar _MENU_ registros por página.",
        "zeroRecords": "No se encontró registro.",
        "info": "  _START_ de _END_ (_TOTAL_ registros totales).",
        "infoEmpty": "0 de 0 de 0 registros",
        "infoFiltered": "(Encontrado de _MAX_registros)",
        "search": "Buscar: ",
        "processing": "Procesando la información",
        "paginate": {
        "first": " |< ",
        "previous": "Anterior",
        "next": "Siguiente",
        "last": " >| "
        }
        }
        });
    
            
  });
});




</script>




<script>

$("#micro").change(function(event){
  var sx=$("input[name='Sexo']:checked").val();
  var gr=event.target.value;
  var mc=document.getElementById("micro");
  var mcr=mc.options[mc.selectedIndex].value;
  var nommic=mc.options[mc.selectedIndex].text;

  var ed=document.getElementById("edad");
  var edv=ed.options[ed.selectedIndex].value;
  var edt=ed.options[ed.selectedIndex].text;



  if(edv < 1)
  {
    alert("no ha seleccionado Grupo de Edad"); 
    return; 
  }
  



  $.getJSON("act_morb_gru_micro/"+sx+"/"+edv+"/"+mcr,function(data){
    var linea="<tbody>";
    $.each(data, function(){
      linea+="<tr>";
      linea+="<td>"+this.grupo+"</td>";
      linea+="<td align='right'>"+this.total+"</td>";
      
      linea+="<td>";
      linea+="<div class='progress progress-xs progress-striped active'>";
      linea+="<div class='progress-bar progress-bar-danger' style="+'"'+ 'width:'+this.porcentaje +'%"'+">";
      linea+="</div>";
      linea+="</div>";
      linea+="</td>";

      linea+="<td align='center'>";
      linea+="<span class='badge bg-green'>"+this.porcentaje+"%";
      linea+="</span>";
      linea+="</td>";
      linea+="</tr>";
    });
    linea+="</tbody>"
    var sex="";
    switch(sx)
    {
      case '1':sex="Masculino";break;
      case '2':sex="Femenino";break;
      case '3':sex="Ambos";break;
    }


    $('h2').text("Morbilidad 2015 por Grupos CIE-10");
    $('h3').text("Micro Red : "+nommic+" - "+"Sexo: "+sex+" - Edad: "+edt);

    $('#mitabla').html(linea);
    $("#mitabla").dataTable().fnDestroy();
    $('#mitabla').DataTable({
        "order": [[ 1, "desc" ]],

        //"dom": 'T<"clear">lfrtip',
        //"sDom": "T<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
        "pagingType": "simple_numbers",
        //Actualizo las etiquetas de mi tabla para mostrarlas en español
        "language": {
        "lengthMenu": "Mostrar _MENU_ registros por página.",
        "zeroRecords": "No se encontró registro.",
        "info": "  _START_ de _END_ (_TOTAL_ registros totales).",
        "infoEmpty": "0 de 0 de 0 registros",
        "infoFiltered": "(Encontrado de _MAX_registros)",
        "search": "Buscar: ",
        "processing": "Procesando la información",
        "paginate": {
        "first": " |< ",
        "previous": "Anterior",
        "next": "Siguiente",
        "last": " >| "
        }
        }
        });
    
            
  });
});




</script>




@endsection