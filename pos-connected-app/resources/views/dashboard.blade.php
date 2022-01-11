@extends('layouts.index')
@section("content")
        <div>
            <h2 class="page_head">DashBoard</h2>
            <div class="dashboard__top__wrapper">
                <div class="dashboard__top__wrapper__left">
                    <div class="wrapper">
                        <canvas id="test"></canvas>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
                        <script>
                            var ctx = document.getElementById("test");
                            var testData = [120000, 80000, 70000, 100000, 190000, 270000, 210000]
                            var myLineChart = new Chart(ctx, {
                                type: 'line',
                                data: {
                                    labels: ["月", "火", "水", "木", "土", "日"],
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
                </div>
                <div class="dashboard__top__wrapper__right">
                    <div class="wrapper">
                        <div class="flex__column__between">
                            <h4 class="dashboard__profit__head">今週の売上高：1,200,000</h4>
                            <div class="line__hori"></div>
                            <h5>2021/12/24(月)：120,000</h5>
                            <h5>2020/12/25(火)：120,000</h5>
                            <h5>2020/12/26(水)：120,000</h5>
                            <h5>2020/12/27(木)：120,000</h5>
                            <h5>2020/12/28(金)：120,000</h5>
                            <h5>2020/12/29(土)：120,000</h5>
                            <h5>2020/12/30(日)：120,000</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrapper">
                <div class="dashboard__middle__wrapper">
                    <div class="pie">
                        <canvas id="PieChart1" width="200" height="200"></canvas>
                    </div>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
                    <script>
                        var ctx = document.getElementById("PieChart1");
                        var PieChart = new Chart(ctx, {
                            type: 'pie',
                            data: {
                                labels: ["ビール", "レモン"], //円グラフのラベル(円グラフのA学園,B学園と表示されている箇所)
                                datasets: [{
                                backgroundColor: [ //円グラフの色
                                    "#FF0000", //1つめの色(ラベルwin)は赤
                                    "#33CCFF", //2つめの色(ラベルlose)は水色
                                ],
                                data: [14, 5] //グラフの値 下記参照
                                }]
                            },
                            options: { //オプションでカスタマイズ？
                                title: {
                                display: true,
                                text: 'アルコール'//グラフのタイトル
                                }
                            }
                        });
                    </script>
                    <div class="pie">
                        <canvas id="PieChart2" width="200" height="200"></canvas>
                    </div>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
                    <script>
                        var ctx = document.getElementById("PieChart2");
                        var PieChart = new Chart(ctx, {
                            type: 'pie',
                            data: {
                                labels: ["ビール", "レモン"], //円グラフのラベル(円グラフのA学園,B学園と表示されている箇所)
                                datasets: [{
                                backgroundColor: [ //円グラフの色
                                    "#FF0000", //1つめの色(ラベルwin)は赤
                                    "#33CCFF", //2つめの色(ラベルlose)は水色
                                ],
                                data: [14, 5] //グラフの値 下記参照
                                }]
                            },
                            options: { //オプションでカスタマイズ？
                                title: {
                                display: true,
                                text: 'アルコール'//グラフのタイトル
                                }
                            }
                        });
                    </script>
                    <div class="pie">
                        <canvas id="PieChart3" width="200" height="200"></canvas>
                    </div>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
                    <script>
                        var ctx = document.getElementById("PieChart3");
                        var PieChart = new Chart(ctx, {
                            type: 'pie',
                            data: {
                                labels: ["ビール", "レモン"], //円グラフのラベル(円グラフのA学園,B学園と表示されている箇所)
                                datasets: [{
                                backgroundColor: [ //円グラフの色
                                    "#FF0000", //1つめの色(ラベルwin)は赤
                                    "#33CCFF", //2つめの色(ラベルlose)は水色
                                ],
                                data: [14, 5] //グラフの値 下記参照
                                }]
                            },
                            options: { //オプションでカスタマイズ？
                                title: {
                                display: true,
                                text: 'アルコール'//グラフのタイトル
                                }
                            }
                        });
                    </script>
                    <div class="pie">
                        <canvas id="PieChart4" width="200" height="200"></canvas>
                    </div>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
                    <script>
                        var ctx = document.getElementById("PieChart4");
                        var PieChart = new Chart(ctx, {
                            type: 'pie',
                            data: {
                                labels: ["ビール", "レモン"], //円グラフのラベル(円グラフのA学園,B学園と表示されている箇所)
                                datasets: [{
                                backgroundColor: [ //円グラフの色
                                    "#FF0000", //1つめの色(ラベルwin)は赤
                                    "#33CCFF", //2つめの色(ラベルlose)は水色
                                ],
                                data: [14, 5] //グラフの値 下記参照
                                }]
                            },
                            options: { //オプションでカスタマイズ？
                                title: {
                                display: true,
                                text: 'アルコール'//グラフのタイトル
                                }
                            }
                        });
                    </script>
                    <div class="pie">
                        <canvas id="PieChart5" width="200" height="200"></canvas>
                    </div>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
                    <script>
                        var ctx = document.getElementById("PieChart5");
                        var PieChart = new Chart(ctx, {
                            type: 'pie',
                            data: {
                                labels: ["ビール", "レモン"], //円グラフのラベル(円グラフのA学園,B学園と表示されている箇所)
                                datasets: [{
                                backgroundColor: [ //円グラフの色
                                    "#FF0000", //1つめの色(ラベルwin)は赤
                                    "#33CCFF", //2つめの色(ラベルlose)は水色
                                ],
                                data: [14, 5] //グラフの値 下記参照
                                }]
                            },
                            options: { //オプションでカスタマイズ？
                                title: {
                                display: true,
                                text: 'アルコール'//グラフのタイトル
                                }
                            }
                        });
                    </script>
                    <div class="pie">
                        <canvas id="PieChart6" width="200" height="200"></canvas>
                    </div>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
                    <script>
                        var ctx = document.getElementById("PieChart6");
                        var PieChart = new Chart(ctx, {
                            type: 'pie',
                            data: {
                                labels: ["ビール", "レモン"], //円グラフのラベル(円グラフのA学園,B学園と表示されている箇所)
                                datasets: [{
                                backgroundColor: [ //円グラフの色
                                    "#FF0000", //1つめの色(ラベルwin)は赤
                                    "#33CCFF", //2つめの色(ラベルlose)は水色
                                ],
                                data: [14, 5] //グラフの値 下記参照
                                }]
                            },
                            options: { //オプションでカスタマイズ？
                                title: {
                                display: true,
                                text: 'アルコール'//グラフのタイトル
                                }
                            }
                        });
                    </script>
                </div>
            </div>
            <h2 class="page_head">本日の発注</h2>
            <div class="wrapper">
                <form method="POST" action="/products/update" enctype="multipart/form-data">
                @csrf
                    <div class="flex__row__between">
                        <h4 class="order__category">2022/12/31</h4>
                        <input type="submit" value="更新する" class="button">
                    </div>
                    <div class="spacer__vert__4"></div>
                    <div class="line__hori"></div>
                    <div class="spacer__vert__4"></div>
                    <table class="order__table">
                        <tr>
                            <th>商品名</th>
                            <th>次回発注日</th>
                            <th><label class="order__label">店内在庫</label></th>
                            <th><label class="order__label">発注頻度</label></th>
                        </tr>
                        <tr>
                            <td class="order__name">もも塩</td><td>2021/2/1</td>
                            <td>
                                <select>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </td>
                            <td>
                                <select>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="order__name">ビール</td><td>2021/2/1</td>
                            <td>
                                <select>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </td>
                            <td>
                                <select>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="order__name">かわ</td><td>2021/2/1</td>
                            <td>
                                <select>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </td>
                            <td>
                                <select>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="order__name">唐揚げ</td><td>2021/2/1</td>
                            <td>
                                <select>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </td>
                            <td>
                                <select>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="order__name">手羽先</td><td>2021/2/1</td>
                            <td>
                                <select>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </td>
                            <td>
                                <select>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </td>
                        </tr>
                    </table>
            </form>
            </div>
            <div class="spacer__vert__16"></div>
        </div>
@endsection

