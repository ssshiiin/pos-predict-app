@extends('layouts.index')
@section("content")
        <div>
            dashboard
            <div>
                <a href="/dashboard/profit">売上予測グラフページ</a>
                <a href="/dashboard/product">商品ごとグラフページ</a>
                <a href="/dashboard/order">発注予測ページ</a>
                <a href="/dashboard/register">ファイルアップロードページ</a>
            </div>
        </div>
@endsection

