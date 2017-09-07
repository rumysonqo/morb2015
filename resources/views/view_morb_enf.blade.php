@extends('layouts.main')
@section('content')
<br>
<div class="panel-body">
<center><h3>Morbilidad General por Enfermedades CIE-10 Red Cusco Norte 2015</h3></center>


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
  </div>

  </div>



  <div class="row">
      <div class="col-xs-12">
        <div style="width: 100%;">
          
          <table class="pretty cell-border compact" cellspacing="0" cellpadding="0" id="mitabla">
          <thead>
            <th>Enfermedad CIE-10</th>
            <th>Número de Casos</th>
            <th>Grafico de %</th>
            <th>% del Total</th>
            <tbody>
          @foreach($morb_enf as $mrb)
            <tr>
              <td>{{ $mrb->enfermedad }}</td>
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
  $.getJSON("act_morb_enf/"+sx+"/"+event.target.value,function(data){
    var linea="<tbody>";
    $.each(data, function(){
      linea+="<tr>";
      linea+="<td>"+this.enfermedad+"</td>";
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

    var grp="";
    switch(gr)
    {
      case '1':grp="De 0 a 28 Dias";break;
      case '2':grp="De 1 a 11 Meses";break;
      case '3':grp="1 Año";break;
      case '4':grp="De 2 a 4 Años";break;
      case '5':grp="De 5 a 9 Años";break;
      case '6':grp="De 10 a 11 Años";break;
      case '7':grp="De 12 a 14 Años";break;
      case '8':grp="De 15 a 17 Años";break;
      case '9':grp="De 18 a 24 Años";break;
      case '10':grp="De 25 a 29 Años";break;
      case '11':grp="De 30 a 34 Años";break;
      case '12':grp="De 35 a 39 Años";break;
      case '13':grp="De 40 a 44 Años";break;
      case '14':grp="De 45 a 49 Años";break;
      case '15':grp="De 50 a 54 Años";break;
      case '16':grp="De 55 a 59 Años";break;
      case '17':grp="De 60 a Mas Años";break;
      case '18':grp="Todos los Grupos";break;
    }


    $('h3').text("Morbilidad por Enfermedades CIE-10 Año: 2015 Sexo: "+sex+" - Grupo de Edad: "+grp);

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