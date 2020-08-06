<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document ready-to-print | PO - 1</title>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/Chart.min.css')}}">
    <link href="{{ URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ URL::asset('assets/css/cetak.css')}}" rel="stylesheet">
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
    </div>@foreach($po1s as $i)
    <div class="judul text-center pt-2">
    RESULT OF ASSESSMENT
    </div>
      <div class="container pt-2">
  <div class="row pt-2">
    <div class="col info">
        Process: &nbsp;Define IT Strategic Plan (PO1)
    </div>
    <div class="col text-right info">
      Assessment Date: {{$i->date}}
    </div>
  </div>
  <div class="row pt-1">
      <div class="col info">
          Person: {{$i->full_name}}
      </div>
      <div class="col text-right info">
          Organization: {{$i->name}}
      </div>
  </div>
  <div class="row pt-1">
      <div class="col info">
          Email:{{$i->email}}
      </div>
      <div class="col text-right info">
          Org. Address:{{$i->address}}
      </div>
  </div>
</div>
       <div class="container">
        <div class="row mr-auto p-5 d-flex justify-content-center">
          <div class="chart ">
<canvas id="myChart"></canvas>
</div>
        </div>
           
      
   <div class="table-responsive">
         <table class="table table-bordered" id="dataTable">
  <thead>
    <tr>
      <th scope="col">Kode</th>
      <th scope="col">Atribut</th>
      <th scope="col">Kondisi Eksisting</th>
      <th scope="col">Skor Maturity</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Q1</td>
      <td  class="font-weight-bold">Perencanaan, Kebijakan,  dan Prosedur</td>
      <td scope="row">1.{{$i->question1}} <br>
      2a.  {{$i->question2a}}
      <br>2b. {{$i->question2b}}
      <br>2c. {{$i->question2c}}</td>
      <td >{{$i->rate1*0.5+$i->rate2a*16.65/100+$i->rate2b*16.65/100+$i->rate2c*16.65/100}}</td>
    </tr>
    <tr>
      <td>Q2</td>
      <td class="font-weight-bold">Responsibility & Accountability</td>
      <td>3. {{$i->question3}}<br>
      4. {{$i->question4}}</td>
      <td>{{$i->rate3*0.5+$i->rate4*0.5}}</td>
    </tr>
    <tr>
      <td >Q3</td>
      <td class="font-weight-bold">Goal Setting & Measurement</td>
      <td>5. {{$i->question5}}<br>
      6.{{$i->question6}}
      </td>
      <td >{{$i->rate5*0.5+$i->rate6*0.5}}</td>
    </tr>
      <tr>
      <td >Q4</td>
      <td class="font-weight-bold">Skill & Expertise</td>
      <td>7. {{$i->question7}}
      <br>8. {{$i->question8}}</td>
      <td>{{$i->rate7*0.5+$i->rate8*0.5}}</td>
    </tr>
       
      <tr>
      <td >Q5</td>
      <td class="font-weight-bold">Awareness & Communication</td>
      <td>9. {{$i->question9}}
      <br>10. {{$i->question10}}</td>
      <td>{{$i->rate9*0.5+$i->rate10*0.5}}</td>
    </tr>
     <tr>
      <td >Q6</td>
      <td class="font-weight-bold">Tools & Automation</td>
      <td>11. {{$i->question11}}
      <br>12. {{$i->question12}}</td>
      <td >{{$i->rate11*0.5+$i->rate12*0.5}}</td>
    </tr>
    <tr>
    <td colspan="3">TOTAL</td>
    <td><b>{{(($i->rate1*0.5+$i->rate2a*16.65/100+$i->rate2b*16.65/100+$i->rate2c*16.65/100)+($i->rate3*0.5+$i->rate4*0.5)+($i->rate5*0.5+$i->rate6*0.5)+($i->rate7*0.5+$i->rate8*0.5)+($i->rate9*0.5+$i->rate10*0.5)+($i->rate11*0.5+$i->rate12*0.5))*1/6}}</b></td>
    </tr>
    
  </tbody>
</table><div class="d-flex justify-content-end"><a href="/initiation/assesment/{{$i->id}}/download" class="btn btn-primary " target="_blank"><i class="ri-inbox-archive-line"></i>Download as .pdf</a></div>
@endforeach
        </div>
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
   
    <script type="text/javascript" src="{{ URL::asset('assets/js/Chart.min.js')}}"></script>
      <script type="text/javascript" src="{{ URL::asset('assets/js/moment.js')}}"></script>
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