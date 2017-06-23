function drawChart(div_id,chart_data, chart_title, h_title,v_title){
    var data = google.visualization.arrayToDataTable(chart_data);

    var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]); 
      var options = {
        title: chart_title,
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
        hAxis: {
            title:  h_title,
            minValue: 0,
            maxValue: 100
        },
            vAxis: {
            title: v_title 
        },
      };
      var chart = new google.visualization.BarChart(document.getElementById(div_id));
      chart.draw(view, options);
}







