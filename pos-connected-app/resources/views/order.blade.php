@extends('layouts.index')
@section("content")
        order
        <div>
                @foreach($categories as $category) 
                        <h4>{{$category->category}}</h4>
                        <form>
                                @foreach($category->products as $product)
                                <h6>{{$product->product}} 次回注文日 ==> 2021/9/21</h6>
                                <label>在庫（１個 = １発注分）</label>
                                <select>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                </select>
                                <label>発注頻度（例１０注文に１回）</label>
                                <select>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                </select>
                                @endforeach
                                <button>更新する</button>
                        </form>
                @endforeach
        </div>
@endsection
