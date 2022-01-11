@extends('layouts.index')
@section("content")
    <div>
        <h2 class="page_head">Order</h2>
        <div class="wrapper">
            {{-- <form method="POST" action="/products/update" enctype="multipart/form-data">
                @csrf
                @foreach($categories as $category => $products)
                    <h4>{{$category}}</h4>
                    @foreach($products as $product)
                        <h5>{{$product->product}}</h5>
                        <p>次回発注日 => {{$product->next_order}}</p>
                        <div>
                            <label>店内在庫 現在{{$product->stock}}</label>
                            <select name={{$product->product . "[]"}}>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div>
                            <label>発注頻度（例１０注文に１回）現在{{$product->order_interval}}</label>
                            <select name={{$product->product . "[]"}}>
                                <option value="0">0</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    @endforeach
                <input type="submit" value="更新する">
            @endforeach
            </form> --}}
            <form method="POST" action="/products/update" enctype="multipart/form-data">
                @csrf
                    <div class="flex__row__between">
                        <h4 class="order__category">焼き鳥</h4>
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
                            <td class="order__name">ももタレ</td><td>2021/2/1</td>
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
                            <td class="order__name">やげん</td><td>2021/2/1</td>
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
                            <td class="order__name">軟骨</td><td>2021/2/1</td>
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
        <div class="wrapper">
            <form method="POST" action="/products/update" enctype="multipart/form-data">
                @csrf
                    <div class="flex__row__between">
                        <h4 class="order__category">アルコール</h4>
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
                            <td class="order__name">レモンサ</td><td>2021/2/1</td>
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
                            <td class="order__name">緑茶ハイ</td><td>2021/2/1</td>
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
                            <td class="order__name">オレンジ</td><td>2021/2/1</td>
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
    </div>
@endsection
