@extends('pdf.download')
@section('pdf')

@foreach($po1s as $i)
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
      <td >{{$i->rate1*0.5+$i->rate2a*8.33/100+$i->rate2b*8.33/100+$i->rate2c*8.33/100}}</td>
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
    <td><b>{{(($i->rate1*0.5+$i->rate2a*8.33/100+$i->rate2b*8.33/100+$i->rate2c*8.33/100)+($i->rate3*0.5+$i->rate4*0.5)+($i->rate5*0.5+$i->rate6*0.5)+($i->rate7*0.5+$i->rate8*0.5)+($i->rate9*0.5+$i->rate10*0.5)+($i->rate11*0.5+$i->rate12*0.5))*1/6}}</b></td>
    </tr>
    
  </tbody>
</table>
@endforeach
        </div>
        @endsection