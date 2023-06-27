@extends('layouts.main')

@section('content')
    <!-- Banner -->
    <div class="visi-banner">
        <img style="width:100%;" class="visi-banner-img" src="Img/visi misi 1.png" alt="">
    </div>

    <div class="container">
        <h5 class="statistik-title">Statistik Alumni</h5>
       <div class="d-flex">
        <div id="piechart"></div>
        <div id="piechart2"></div>
       </div>
       <canvas id="myChart" style="width:100%;max-width:700px;margin-left: auto; margin-right: auto;"></canvas>
       <div class="d-flex">
        <div id="piechart3"></div>
        <div id="piechart4"></div>
       </div>
       <div class="d-flex">
        <div id="piechart5"></div>
        <div id="piechart6"></div>
       </div>
    </div>

    <style>
        .statistik-title {
        margin-top: 30px;
        font-size: 30px;
        text-align: center;
        color: #5FCF80;
}
    </style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    

    <script type="text/javascript">
        /
    </script>

<script>
    // Chart
new Chart("myChart", {
type: "bar",
data: {
    labels: xValues,
    datasets: [{
    backgroundColor: barColors,
    data: yValues
    }]
},
options: {}
});
</script>
    
    
    <script>
        var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
        var yValues = [55, 49, 44, 24, 15];
        var barColors = ["red", "green","blue","orange","brown"];
        
        new Chart("myChart", {
          type: "bar",
          data: {
            labels: xValues,
            datasets: [{
              backgroundColor: barColors,
              data: yValues
            }]
          },
          options: {
            legend: {display: false},
            title: {
              display: true,
              text: "World Wine Production 2018"
            }
          }
        });
        </script>
@endsection