function carga_graficos(){
  set_contenedor(".contenedor_graficos");
  
  data_send = {id_servicio :  get_servicio() };  
  url =  "../ranking/index.php/api/graficos/general/format/json/";      
  $.ajax({
    url : url , 
    type : "GET" , 
    data : data_send , 
    beforeSend: function(){
      show_load_enid(".seccion_load_general" ,  "Cargando ... " , 1 );
    }
  }).done(function(data){
    
    $(".seccion_load_general").empty();
    grafico_barras(data);

  }).fail(function(){
    $(".seccion_load_general").empty();
    show_error_enid("..contenedor_graficos" , "Error al cargar los gráficos.");
  });

}
/**/
function grafico_barras(data_complete){
    get_info_completento_grafica(data_complete);    
    info_resumen = data_complete["resumen"][0];  

    estrella1 = parseFloat(info_resumen.estrella1);
    estrella2 = parseFloat(info_resumen.estrella2);
    estrella3 = parseFloat(info_resumen.estrella3);
    estrella4 = parseFloat(info_resumen.estrella4);
    estrella5 = parseFloat(info_resumen.estrella5);
    total_respuestas = info_resumen.total_respuestas;
    
      var data = google.visualization.arrayToDataTable([
        ["Element", "Personas ", { role: "style" } ],
        ["Cobre ★", estrella1, "color: #EA2A61"],
        ["Plata ★★",estrella2, "color: #EA2A61"],
        ["Oro ★★★", estrella3 , "color: #EA2A61"],
        ["Platino ★★★★", estrella4, "color: #EA2A61"],
        ["Diamante ★★★★★", estrella5 , "color: #EA2A61"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: total_respuestas + ' Opiniones de  tus consumidores frente a tu servicio  - ' + get_nombre_servicio(),
        width: "100%",
        height: "100%",
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("chart_div_barras"));
      chart.draw(view, options);
  
      
      

}
/**/
function get_info_completento_grafica(data_complete){

    info_resumen = data_complete["resumen"][0];  

    estrella1 = parseFloat(info_resumen.estrella1);
    estrella2 = parseFloat(info_resumen.estrella2);
    estrella3 = parseFloat(info_resumen.estrella3);
    estrella4 = parseFloat(info_resumen.estrella4);
    estrella5 = parseFloat(info_resumen.estrella5);    

    


    total_respuestas = info_resumen.total_respuestas;    
    num_mail =  validador_num(info_resumen.num_mail);
    num_telefono = validador_num(info_resumen.num_telefono);
    num_nombre =  validador_num(info_resumen.num_nombre);

    table_info  =  "<span class='num_registros_encontrados'>";
    table_info  +=  "Respuestas recopiladas "+ total_respuestas;
    table_info  +=  "</span>";

      table_info  +=  "<table class='table_enid_service' >";
        table_info  += "<tr class='table_enid_service_header'>";      
         table_info += "<td NOWRAP >Correos</td>";
         table_info += "<td NOWRAP >Teléfonos </td>";
         table_info += "<td NOWRAP >Nombres </td>";         
        table_info  += "</tr>";           

        table_info  += "<tr>";      
         table_info += "<td NOWRAP >"+num_mail+"</td>";
         table_info += "<td NOWRAP >"+num_telefono +"</td>";
         table_info += "<td NOWRAP >"+num_nombre +"</td>";         
        table_info  += "</tr>";           

      table_info  +=  "</table>";
    
    

    llenaelementoHTML(".info_completento_grafica" , table_info);
}
/**/
function validador_num(val){

  valor = val;

  if (val == null  ) {
    valor = 0;    
  }
  return  valor;
}