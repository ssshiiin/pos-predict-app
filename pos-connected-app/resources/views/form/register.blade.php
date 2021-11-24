@extends('layouts.index')
@section("content")
      <h2>csv form</h2>
      <form method="POST" action="/csvs/register" enctype="multipart/form-data" >
        @csrf
        <div>
          <label for="csv">csv</label>
          <input type="file" id="file" name="file[]" multiple>
        </div>
        <input type="submit" value="送信する">
      </form>
      <div>
        <ul>
          @foreach ($data as $item)
          <li>
            {{$item->year}}年{{$item->month}}月{{$item->date}}日までアップロード済み: {{$item->count}}件
          </li>
          @endforeach
        </ul>
      </div>
@endsection
