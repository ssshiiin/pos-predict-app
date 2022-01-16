@extends('layouts.index')
@section("content")
    <div>
        <h2 class="page_head">Product</h2>
        <nav class="wrapper">
            @foreach($categories_index as $category) 
                <a href={{"/dashboard/product" . "?category=" . $category["category"]}}>{{$category["category"]}}</a>
            @endforeach
        </nav>
        <ul class="product">
        @foreach($data as $item)
            <li class="product__chart">
                <canvas id={{$item["product"]}}></canvas>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
                <script>
                    var product = @json($item);
                    var ctx = document.getElementById(product.product);
                    var removeProduct = (obj) => {
                        const { product, ...res } = obj
    
                        return res
                    }
                    var myLineChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                        labels: Object.keys(removeProduct(product)),
                        datasets: [
                            {
                            label: '今週',
                            data: Object.values(removeProduct(product)),
                            borderColor: "rgba(255,0,0,1)",
                            backgroundColor: "rgba(0,0,0,0)"
                            },
                        ],
                        },
                        options: {
                        title: {
                            display: true,
                            text: product.product
                        },
                        scales: {
                            yAxes: [{
                            ticks: {
                                suggestedMax: 16,
                                suggestedMin: 0,
                                stepSize: 3,
                                callback: function(value, index, values){
                                return  value +  '個'
                                }
                            }
                            }]
                        },
                        }
                    });
                    </script>
            </li>
        @endforeach
        </ul>
    </div>
@endsection