@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Stock Overview</div>
                <div class="card-body">
                <canvas id="myChart" ></canvas>
<script>
var url = "{{url('stock/chart')}}";
var ctx = document.getElementById("myChart").getContext('2d');
var Labels = new Array();
 var stock = new Array();
 var color=new Array();
 var border=new Array();
 var dataSet=new Array();
 $(document).ready(function(){
          $.get(url, function(response){
            response.forEach(function(data){
                Labels.push(data.name);
                stock.push(data.rm);
                var f=getRandomColor();
                color.push(f);   
                border.push(f);      
            }); 
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: Labels,
        datasets: [{
            label: "Stock",
            data: stock,
            backgroundColor: color,
            borderColor: border,
            borderWidth: 1
        }]
    },
    options: {
        legend: {
    	display: false
    },
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero:false
                },
                gridLines: {
                offsetGridLines: true
            }
            }],
            xAxes: [{
            barPercentage: 0.4
        }]
        }
    }
});});
function getRandomColor() {
return "rgba(" + Math.floor(Math.random() * 255) + ","
                  + Math.floor(Math.random() * 255) + ","
                  + Math.floor(Math.random() * 255) + ",0.5)";

}
});
</script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
