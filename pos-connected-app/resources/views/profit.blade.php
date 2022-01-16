@extends('layouts.index')
@section("content")

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    <!-- bootstrap -->

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</head>
<body>
    <br>
    <br>

    <!-- chart.js -->
    <canvas id="myChart"></canvas>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            
            data: {
                labels: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                datasets: [{
                    label: '週間売上',
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 0.2)',
                    pointBackgroundColor: 'rgba(3,169,244,0.8)',
                    data: [{{$data["sun"]}}, {{$data["mon"]}}, {{$data["tue"]}}, {{$data["wed"]}}, {{$data["thu"]}}, {{$data["fri"]}}, {{$data["sat"]}}]
                },           
                ]
            }, 

            // Configuration options go here
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

    </script>

        <br>
        <table class = "table">
            <thead class="thead-dark">
            <tr>
                <th scope="col"></th>
                <th scope="col"> Sun</th>
                <th scope="col"> Mon</th>
                <th scope="col"> Tue</th>
                <th scope="col"> Wed</th>
                <th scope="col"> Thu</th>
                <th scope="col"> Fri</th>
                <th scope="col"> Sat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">週間売り上げ</th>
                <td>{{$data["sun"]}}</td>
                <td>{{$data["mon"]}}</td>
                <td>{{$data["tue"]}}</td>
                <td>{{$data["wed"]}}</td>
                <td>{{$data["thu"]}}</td>
                <td>{{$data["fri"]}}</td>
                <td>{{$data["sat"]}}</td>
                </tr>
            </tbody>
        </table>
    
    <!-- month -->
    <!-- chart.js -->
    <canvas id="myChart2"></canvas>
    <script>
        var ctx = document.getElementById('myChart2').getContext('2d');
        var chart2 = new Chart(ctx, {
            // The type of chart we want to create
            type: 'bar',

            // The data for our dataset
            
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: '月間売上',
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 0.2)',
                    data: [{{$data["jan"]}}, {{$data["feb"]}}, {{$data["mar"]}}, {{$data["apr"]}}, {{$data["may"]}}, {{$data["jun"]}}, {{$data["jul"]}}, {{$data["aug"]}}, {{$data["sep"]}}, {{$data["oct"]}}, {{$data["nov"]}}, {{$data["dec"]}}]
                },               
                ]
            }, 

            // Configuration options go here
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });

    </script>

    <br>
        <table class = "table">
            <thead class="thead-dark">
            <tr>
                <th scope="col"></th>
                <th scope="col"> Jan</th>
                <th scope="col"> Feb</th>
                <th scope="col"> Mar</th>
                <th scope="col"> Apr</th>
                <th scope="col"> May</th>
                <th scope="col"> Jun</th>
                <th scope="col"> Jul</th>
                <th scope="col"> Aug</th>
                <th scope="col"> Sep</th>
                <th scope="col"> Oct</th>
                <th scope="col"> Nov</th>
                <th scope="col"> Dec</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">月間売り上げ</th>
                <td>{{$data["jan"]}}</td>
                <td>{{$data["feb"]}}</td>
                <td>{{$data["mar"]}}</td>
                <td>{{$data["apr"]}}</td>
                <td>{{$data["may"]}}</td>
                <td>{{$data["jun"]}}</td>
                <td>{{$data["jul"]}}</td>
                <td>{{$data["aug"]}}</td>
                <td>{{$data["sep"]}}</td>
                <td>{{$data["oct"]}}</td>
                <td>{{$data["nov"]}}</td>
                <td>{{$data["dec"]}}</td>
                </tr>
            </tbody>
        </table>

        <br>
        <br>
        

</body>
</html>
@endsection