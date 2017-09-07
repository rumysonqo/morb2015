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

        <div style="width: 100%;" class="panel panel-primary" id="ambito">
            <div class="panel-heading">
                Ambito
            </div>
            <div class="panel-body">
                {{ Form::radio('Ambito','R','true') }} Red
                {{ Form::radio('Ambito','M') }} Micro Red
                {{ Form::radio('Ambito','E') }} EESS
            </div>
        </div>


        <div style="width: 100%; display:none;" class="panel panel-primary" id="micro_red">
            <div class="panel-heading">
                Micro Red
            </div>
            <div class="panel-body">
                {{ Form::select('micro',$micro,null,['placeholder'=>'Selecciona...', 'class'=>'form-control input-md','id'=>'micro']) }}
            </div>
        </div>

        <div style="width: 100%; display:none;" class="panel panel-primary" id="eess">
            <div class="panel-heading">
                Establecimiento
            </div>
            <div class="panel-body">
                {{ Form::select('estab',['data-placeholder'=>'Selecciona...'],null,['class'=>'form-control input-md','id'=>'estab']) }}   
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
          <center> <h3>10 Primeras Causas de Morbilidad</h3></center>
          <center> <h4></h4></center>
          <div style="width: 100%; min-height: 650px;" id="chartdiv"></div>
          

        </div>

        </div>

      </div>

  </div>

  </div>



    </div>
	
</div>

@endsection

@section('script')

<script>
    $(document).ready(function(){
        $('#ambito').hide();
    });

</script>


<script>
  $('input:radio[name=Ambito]').click(function() {
    var val = $('input:radio[name=Ambito]:checked').val(); // o solo esta linea
    switch (val)
    {
      case 'R':
            $('#eess').hide("slow");
            $('#micro_red').hide("slow");break;
      case 'M':
            $('#eess').hide("slow");
            $('#micro_red').show("slow");break;
      case 'E':
            $('#micro_red').hide("fast");
            $('#micro_red').show("slow");
            $('#eess').show("slow");
            break;
    }

    var sx=$("input[name='Sexo']:checked").val();
      var amv = $("input:radio[name='Ambito']:checked").val();
      //var gr=event.target.value;

      var mr=document.getElementById("micro");
      var mrv=mr.options[mr.selectedIndex].value;
      var mrt=mr.options[mr.selectedIndex].text;

      var ed=document.getElementById("edad");
      var edv=ed.options[ed.selectedIndex].value;
      var edt=ed.options[ed.selectedIndex].text;

      var es=document.getElementById("estab");
      var esv=es.options[es.selectedIndex].value;
      var est=es.options[es.selectedIndex].text;

      if(edv>0)
      {
        $('#ambito').show("slow");

      }

      switch(amv)
      {
        case 'R':
              mrv=0;esv=0;break;
        case 'M':
              esv=0;break;
      }

      var sex="";
        switch(sx)
        {
          case 'M':sex="Masculino";break;
          case 'F':sex="Femenino";break;
          case 'A':sex="Ambos";break;
        }


      $.getJSON("act_graf_cap_estab/"+sx+"/"+edv+"/"+amv+"/"+mrv+"/"+esv,function(data){
        graf_cap_est(data);
        switch(amv)
        {
            case 'R':
                    $("h3").text("10 Primeras Causas de Morbilidad");
                    break;
            case 'M':
                    $("h3").text("10 Primeras Causas de Morbilidad Micro Red "+$("#micro option:selected").text());
                    break;
            case 'E':
                    $("h3").text("10 Primeras Causas de Morbilidad "+$("#estab option:selected").text());
                    break;

        }
        $("h4").text("Edad: "+$("#edad option:selected").text()+" - Sexo: "+sex);
          });




  });
</script>

<script>
$("#edad").change(function(event){
  
  var sx=$("input[name='Sexo']:checked").val();
  var amv = $("input:radio[name='Ambito']:checked").val();
  //var gr=event.target.value;

  var mr=document.getElementById("micro");
  var mrv=mr.options[mr.selectedIndex].value;
  var mrt=mr.options[mr.selectedIndex].text;

  var ed=document.getElementById("edad");
  var edv=ed.options[ed.selectedIndex].value;
  var edt=ed.options[ed.selectedIndex].text;

  var es=document.getElementById("estab");
  var esv=es.options[es.selectedIndex].value;
  var est=es.options[es.selectedIndex].text;

  if(edv>0)
  {
    $('#ambito').show("slow");

  }

  switch(amv)
  {
    case 'R':
          mrv=0;esv=0;break;
    case 'M':
          esv=0;break;
  }

  var sex="";
    switch(sx)
    {
      case 'M':sex="Masculino";break;
      case 'F':sex="Femenino";break;
      case 'A':sex="Ambos";break;
    }


  $.getJSON("act_graf_cap_estab/"+sx+"/"+edv+"/"+amv+"/"+mrv+"/"+esv,function(data){
    graf_cap_est(data);
    switch(amv)
    {
        case 'R':
                $("h3").text("10 Primeras Causas de Morbilidad");
                break;
        case 'M':
                $("h3").text("10 Primeras Causas de Morbilidad Micro Red "+$("#micro option:selected").text());
                break;
        case 'E':
                $("h3").text("10 Primeras Causas de Morbilidad "+$("#estab option:selected").text());
                break;

    }
    $("h4").text("Edad: "+$("#edad option:selected").text()+" - Sexo: "+sex);
      });

  });


</script>


<script>
$("#micro").change(function(event){

    $.get("dat_eess/"+event.target.value+"", function(response, state){
          $("#estab").empty();
      for(i=0; i<response.length; i++)
          {
              $("#estab").append("<option value='"+response[i].id+"'>"+response[i].nombre+"</option>");
          }
    });


  
  var sx=$("input[name='Sexo']:checked").val();
  var amv = $("input:radio[name='Ambito']:checked").val();
  //var gr=event.target.value;

  var mr=document.getElementById("micro");
  var mrv=mr.options[mr.selectedIndex].value;
  var mrt=mr.options[mr.selectedIndex].text;

  var ed=document.getElementById("edad");
  var edv=ed.options[ed.selectedIndex].value;
  var edt=ed.options[ed.selectedIndex].text;

  var es=document.getElementById("estab");
  var esv=es.options[es.selectedIndex].value;
  var est=es.options[es.selectedIndex].text;

  switch(amv)
  {
    case 'R':
          mrv=0;esv=0;break;
    case 'M':
          esv=0;break;
  }

  var sex="";
    switch(sx)
    {
      case 'M':sex="Masculino";break;
      case 'F':sex="Femenino";break;
      case 'A':sex="Ambos";break;
    }


  $.getJSON("act_graf_cap_estab/"+sx+"/"+edv+"/"+amv+"/"+mrv+"/"+esv,function(data){
    graf_cap_est(data);
    $("h3").text("10 Primeras Causas de Morbilidad Micro Red "+$("#micro option:selected").text());
    $("h4").text("Edad: "+$("#edad option:selected").text()+" - Sexo: "+sex);


      });

  });



</script>

<script>
$("#estab").change(function(event){
  
  var sx=$("input[name='Sexo']:checked").val();
  var amv = $("input:radio[name='Ambito']:checked").val();
  //var gr=event.target.value;

  var mr=document.getElementById("micro");
  var mrv=mr.options[mr.selectedIndex].value;
  var mrt=mr.options[mr.selectedIndex].text;

  var ed=document.getElementById("edad");
  var edv=ed.options[ed.selectedIndex].value;
  var edt=ed.options[ed.selectedIndex].text;

  var es=document.getElementById("estab");
  var esv=es.options[es.selectedIndex].value;
  var est=es.options[es.selectedIndex].text;

  switch(amv)
  {
    case 'R':
          mrv=0;esv=0;break;
    case 'M':
          esv=0;break;
  }

  var sex="";
    switch(sx)
    {
      case 'M':sex="Masculino";break;
      case 'F':sex="Femenino";break;
      case 'A':sex="Ambos";break;
    }


  $.getJSON("act_graf_cap_estab/"+sx+"/"+edv+"/"+amv+"/"+mrv+"/"+esv,function(data){
    graf_cap_est(data);
    $("h3").text("10 Primeras Causas de Morbilidad "+$("#estab option:selected").text());
    $("h4").text("Edad: "+$("#edad option:selected").text()+" - Sexo: "+sex);
      });

  });
    
    
    


</script>



<script>
$("input[name='Sexo']").change(function(event){
  
  var sx=$("input[name='Sexo']:checked").val();
  var amv = $("input:radio[name='Ambito']:checked").val();
  //var gr=event.target.value;

  var mr=document.getElementById("micro");
  var mrv=mr.options[mr.selectedIndex].value;
  var mrt=mr.options[mr.selectedIndex].text;

  var ed=document.getElementById("edad");
  var edv=ed.options[ed.selectedIndex].value;
  var edt=ed.options[ed.selectedIndex].text;

  var es=document.getElementById("estab");
  var esv=es.options[es.selectedIndex].value;
  var est=es.options[es.selectedIndex].text;

  switch(amv)
  {
    case 'R':
          mrv=0;esv=0;break;
    case 'M':
          esv=0;break;
  }

  var sex="";
    switch(sx)
    {
      case 'M':sex="Masculino";break;
      case 'F':sex="Femenino";break;
      case 'A':sex="Ambos";break;
    }


  $.getJSON("act_graf_cap_estab/"+sx+"/"+edv+"/"+amv+"/"+mrv+"/"+esv,function(data){
    graf_cap_est(data);
    switch(amv)
    {
        case 'R':
                $("h3").text("10 Primeras Causas de Morbilidad");
                break;
        case 'M':
                $("h3").text("10 Primeras Causas de Morbilidad Micro Red "+$("#micro option:selected").text());
                break;
        case 'E':
                $("h3").text("10 Primeras Causas de Morbilidad "+$("#estab option:selected").text());
                break;

    }
    $("h4").text("Edad: "+$("#edad option:selected").text()+" - Sexo: "+sex);
      });

  });
    
    
    


</script>



<script>
    function graf_cap_est(datos) {
        var chart;
        var chartData = [];

                var cont=0;
                var RESTO=0;
                var TOTAL=0;
                $.each(datos,function(i,n){
                if(cont<10 && parseInt(n['total'])>0)
                {
                    chartData.push({"capitulo":n['capitulo'],
                    "total":n['total'],
                    "porcentaje":n['porcentaje']
                    });
                    TOTAL+=parseInt(n['total']);
                }
                else
                {
                    RESTO+=Number(n['total']);
                }
                cont++;
                });
                if(RESTO>0)
                {
                    TOTAL+=RESTO;
                    var porc=0;
                    porc=(RESTO/TOTAL)*100;
                    chartData.push({"capitulo":"Otros",
                    "total":RESTO,
                    "porcentaje":porc.toFixed(2)
                    });
                    
                }

                // SERIAL CHART
                chart = new AmCharts.AmSerialChart();
                chart.dataProvider = chartData;
                chart.categoryField = "capitulo";
                chart.theme="light";
                chart.marginLeft=400;

                chart.color = "#000000";
                chart.fontSize = 12;
                chart.startDuration = 1;
                chart.plotAreaFillAlphas = 2;
                // the following two lines makes chart 3D
                chart.angle = 25;
                chart.depth3D = 30;
                chart.rotate=true;
                //chart.addTitle("10 Primeras Causas de Morbilidad "+$("#estab option:selected").text(),18);

                // AXES
                // category
                var categoryAxis = chart.categoryAxis;
                categoryAxis.gridAlpha = 5;
                categoryAxis.gridPosition = "start";
                categoryAxis.gridColor = "#FFFFFF";
                categoryAxis.axisColor = "#000000";
                categoryAxis.axisAlpha = 0.5;
                categoryAxis.dashLength = 0.5;
                //categoryAxis.labelRotation= 90;
                categoryAxis.ignoreAxisWidth=true;
                categoryAxis.autoWrap=true;

                // value
                var valueAxis = new AmCharts.ValueAxis();
                valueAxis.stackType = "3d"; // This line makes chart 3D stacked (columns are placed one behind another)
                valueAxis.gridAlpha = 2;
                valueAxis.gridColor = "#FFFFFF";
                valueAxis.axisColor = "#000000";
                valueAxis.axisAlpha = 5;
                valueAxis.dashLength = 5;
                valueAxis.title = "Número de Casos";
                valueAxis.titleColor = "#000000";
                //valueAxis.unit = "%";
                chart.addValueAxis(valueAxis);

                // GRAPHS
                // first graph
                var graph1 = new AmCharts.AmGraph();
                graph1.title = "total";
                graph1.valueField = "total";
                graph1.type = "column";
                graph1.lineAlpha = 2;
                graph1.lineColor = "#08BBF1";
                //graph1.categoryAxis.position=left;

                graph1.fillAlphas = 3;
                graph1.balloonText = "[[category]]: <b>[[value]]</b>"+"  ([[porcentaje]])%";
                graph1.labelText = "[[total]]";
                graph1.position="left";


                chart.addGraph(graph1);

                // CURSOR
                var chartCursor = new AmCharts.ChartCursor();
                chart.creditsPosition = "bottom-right";
                chart.write("chartdiv");
};
</script>




@endsection