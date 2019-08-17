@extends('base')
@section('content')
  <div class="container">
    <h2 class="text-center">データ削除</h2>
    <p>このデータを削除します。よろしいですか？</p>

    <form action="{{ route('destroy', ['item' => $item]) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <div class="row">
      <div class="col-12">
        <div class="float-right">
          <a href="{{ route('index') }}" class="btn btn-outline-secondary">戻る</a>
          <input type="submit" value="削除" class="btn btn-outline-secondary" />
        </div>
      </div>
    </div>
    
    @include('items.card')

    <div class="row">
      <div class="col-12">
        <div class="float-right">
          <a href="{{ route('index') }}" class="btn btn-outline-secondary">戻る</a>
          <input type="submit" value="削除" class="btn btn-outline-secondary" />
        </div>
      </div>
    </div>
    
    </form>
  </div>
    
@endsection