@extends('layouts.index')
@section("content")
      <h2 class="page_head">FIle Upload</h2>
      <div class="wrapper">
        <div>
          <ul>
            @foreach ($data as $item)
            <li>
              {{$item->year}}年{{$item->month}}月{{$item->date}}日までアップロード済み: {{$item->count}}件
            </li>
            @endforeach
          </ul>
        </div>
        <div class="spacer__vert__4"></div>
        <div class="line__hori"></div>
        <div class="spacer__vert__8"></div>
        <form method="POST" action="/csvs/register" enctype="multipart/form-data" >
          @csrf
          <div class="flex__row__between">
            <div>
              <label for="csv">csv</label>
              <input type="file" id="file" name="file[]" multiple>
            </div>
            <input type="submit" value="アップロード" class="button">
          </div>
        </form>
        <div class="spacer__vert__8"></div>
        <div>
          <table class="order__table">
            <tr>
                <th><input type="checkbox"></th>
                <th>名前</th>
                <th>タイプ</th>
                <th>アップロード件数</th>
                <th>最終更新</th>
            </tr>
            <tr>
                <td><input type="checkbox"></td>
                <td><a href="">2020</a></td>
                <td>フォルダ</td>
                <td>365</td>
                <td></td>
            </tr>
            <tr>
                <td><input type="checkbox"></td>
                <td><a href="">2021</a></td>
                <td>フォルダ</td>
                <td>365</td>
                <td></td>
            </tr>
            <tr>
                <td><input type="checkbox"></td>
                <td><a href="">2022</a></td>
                <td>フォルダ</td>
                <td>30</td>
                <td></td>
            </tr>
        </div>
      </div>
@endsection
