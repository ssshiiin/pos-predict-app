@extends('layouts.index')
@section("content")
        <div>
            <h2 class="page_head">Profit</h2>
            <div class="wrapper">
                        <canvas id="test"></canvas>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
                        <script>
                            var ctx = document.getElementById("test");
                            var testData = [120000, 80000, 70000, 100000, 190000, 270000, 210000]
                            var myLineChart = new Chart(ctx, {
                                type: 'line',
                                data: {
                                    labels: ["月", "火", "水", "木", "金", "土", "日"],
                                    datasets: [
                                    {
                                        label: '売上予測',
                                        data: testData,
                                        borderColor: "rgba(255,0,0,1)",
                                        backgroundColor: "rgba(0,0,0,0)"
                                    },
                                ],
                            },
                            options: {
                                title: {
                                    display: true,
                                    text: "2021/12/24 ~ 2021/12/31"
                                },
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            suggestedMax: 300000,
                                            suggestedMin: 0,
                                            stepSize: 50000,
                                            callback: function(value, index, values){
                                                return  value +  '円'
                                            }
                                        }
                                    }]
                                },
                            }
                        });
                    </script>
            </div>
            <div class="wrapper">
                        <canvas id="test2"></canvas>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
                        <script>
                            var ctx = document.getElementById("test2");
                            var testData = [120000, 80000, 70000, 100000, 190000, 270000, 210000, 140000, 100000, 90000, 120000, 170000, 210000, 190000, 120000, 90000, 150000, 90000, 210000, 250000, 220000, 110000, 150000, 80000, 110000, 210000, 250000, 200000, 100000, 140000, 160000]
                            var myLineChart = new Chart(ctx, {
                                type: 'line',
                                data: {
                                    labels: ["1/1", "1/2", "1/3", "1/4", "1/5", "1/6","1/7","1/8","1/9","1/10","1/11","1/12","1/13","1/14","1/15","1/16","1/17","1/18","1/19","1/20","1/21","1/22","1/23","1/24","1/25","1/26","1/27","1/28","1/29","1/30","1/31"],
                                    datasets: [
                                    {
                                        label: '売上予測',
                                        data: testData,
                                        borderColor: "rgba(255,0,0,1)",
                                        backgroundColor: "rgba(0,0,0,0)"
                                    },
                                ],
                            },
                            options: {
                                title: {
                                    display: true,
                                    text: "2022/1/1 ~ 2022/1/31"
                                },
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            suggestedMax: 300000,
                                            suggestedMin: 0,
                                            stepSize: 50000,
                                            callback: function(value, index, values){
                                                return  value +  '円'
                                            }
                                        }
                                    }]
                                },
                            }
                        });
                    </script>
                </div>
        </div>
@endsection
