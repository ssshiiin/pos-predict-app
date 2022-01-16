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
                    backgroundColor: 'dodgerblue',
                    borderColor: 'royalblue',
                    data: [{{$data["sun"]}}, {{$data["mon"]}}, {{$data["tue"]}}, {{$data["wed"]}}, {{$data["thu"]}}, {{$data["fri"]}}, {{$data["sat"]}}]
                }]
            }, 

            // Configuration options go here
            options: {}
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
                <th scope="col"> Saty</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">売り上げ</th>
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

        
        
        
        

</body>
</html>
@endsection