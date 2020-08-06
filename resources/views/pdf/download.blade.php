<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Document ready-to-print | PO - 1</title>
    
    <link rel="stylesheet" href="{{ url('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css')}}" >
    <link href="{{ url('assets/css/cetak.css')}}" rel="stylesheet">
 
</head>
<body>
<div class="kepala">
        <div class="layanan">
            AuditMe - Self Assesment Service
            </div>
            <div class="alamat pt-2">
            Jl. Sukabirus Gg. Slamat II Bandung
                Jawa Barat 40191
            </div>
            <div class="kontak pt-2">
            Email : aldopanjaitan23@gmail.com | +62 81313177665
            </div>
            <hr class="hr"></hr>
    </div>
   @yield('pdf')
         <div class="row">
            <div class="col-lg-6 mx-auto">

                <!-- CUSTOM BLOCKQUOTE -->
                <blockquote class="blockquote blockquote-custom bg-white p-5 shadow rounded">
                    <div class="blockquote-custom-icon bg-info shadow-sm"><i class="fa fa-quote-left text-white"></i></div>
                    <p class="mb-0 mt-2 font-italic">“SI Auditing is the process of collecing and evaluating evidence to determine whether a computer system safeguards assets, maintains data integrity, allows organizational goals to the achieved effectively and uses resources efficiently”.<a href="#" class="text-info"></a></p>
                    <footer class="blockquote-footer pt-4 mt-4 border-top">
                        <cite title="Source Title"> Ron Weber,1999</cite>
                    </footer>
                </blockquote><!-- END -->

            </div>
        </div>
         <div class="d-flex justify-content-center">Copyright © 2020 AuditMe</div>
    </div>
   
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
      <script type="text/javascript" src="https://momentjs.com/downloads/moment.js"></script>
      <script type="text/javascript">
         function BuildChart(labels, values, chartTitle) {
    var ctx = document.getElementById("myChart").getContext('2d');
   
       
 
    ctx.height = 1500;
    var myChart = new Chart(ctx, {
        type: 'horizontalBar',
        data: {
            labels: labels, // Our labels
            datasets: [{
                label: chartTitle, // Name the series
                data: values, // Our values
                backgroundColor: [ // Specify custom colors
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [ // Add custom color borders
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1 // Specify bar border width
            }]
        },
        options: {
            responsive: true, // Instruct chart js to respond nicely.
            maintainAspectRatio: false, // Add to prevent default behaviour of full-width/height 
            scales: {
        xAxes: [{
            ticks: {
                max: 4,
                min: 0,
                stepSize: 1
            }
        }]
    }
        }
        
    });
    return myChart;
}


// HTML To JSON Script 
// *Forked* from https://johndyer.name/html-table-to-json/
var table = document.getElementById('dataTable');
var json = []; // first row needs to be headers 
var headers = [];
for (var i = 0; i < table.rows[0].cells.length; i++) {
    headers[i] = table.rows[0].cells[i].innerHTML.toLowerCase().replace(/ /gi, '');
}
// go through cells 
for (var i = 1; i < table.rows.length; i++) {
    var tableRow = table.rows[i];
    var rowData = {};
    for (var j = 0; j < tableRow.cells.length; j++) {
        rowData[headers[j]] = tableRow.cells[j].innerHTML;
    }
    json.push(rowData);
}
console.log(json);
// Map json values back to label array
var labels = json.map(function (e) {
    return e.kode;
});
console.log(labels);
// Map json values back to values array
var values = json.map(function (e) {
    return e.skormaturity;
});
console.log(values);
var chart = BuildChart(labels, values, "Define IT Strategic Plan");
      </script>
    
      
</body>
</html>