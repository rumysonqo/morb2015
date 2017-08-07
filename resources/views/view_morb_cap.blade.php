@extends('layouts.main')
@section('content')
<br>
<div class="panel-body">
<center><h3>Morbilidad por Capitulos Red Cusco Norte 2015</h3></center>


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
            <th>Capitulo</th>
            <th>Número de Casos</th>
            <th>Grafico de %</th>
            <th>% del Total</th>
            <tbody>
          @foreach($morb_cap as $mrb)
            <tr>
              <td>{{ $mrb->capitulo }}</td>
              <td align='right'>{{ number_format($mrb->total) }}</td>
              <td>
                <div class="progress progress-xs progress-striped active">
                    <div class="progress-bar progress-bar-danger" style="width:{{ round($mrb->porcentaje,1).'%' }}" ></div>
                </div>
              </td>
              <td align='center'><span class='badge bg-green'> {{ round($mrb->porcentaje,1)."%" }} </span></td>
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
  $.getJSON("act_morb_cap/"+sx+"/"+event.target.value,function(data){
    console.log(data);
    var linea="<tbody>";
    $.each(data, function(){
      linea+="<tr>";
      linea+="<td>"+this.capitulo+"</td>";
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

    $('#mitabla').html(linea);
    $("#mitabla").dataTable().fnDestroy();
            $("#mitabla").dataTable( {
                        // sDom: hace un espacio entre la tabla y los controles 
                      "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
                  } );
  });
});




</script>



@endsection