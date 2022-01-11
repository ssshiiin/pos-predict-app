@extends('layouts.index')
@section("content")
        <div>
            <h2 class="page_head">Profit</h2>
            <div>
                日曜日 : {{$data["sun"]}}
            </div>
            <div>
                月曜日 : {{$data["mon"]}}
            </div>
            <div>
                火曜日 : {{$data["thu"]}}
            </div>
            <div>
                水曜日 : {{$data["wed"]}}
            </div>
            <div>
                木曜日 : {{$data["thr"]}}
            </div>
            <div>
                金曜日 : {{$data["fri"]}}
            </div>
            <div>
                土曜日 : {{$data["sat"]}}
            </div>
        </div>
@endsection
