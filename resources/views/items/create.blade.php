@extends('base')
@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="text-center">
          データ入力
        </h2>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="float-right">
          {{-- Todo: route()を使う --}}
          <a href="../" class="btn btn-outline-secondary">戻る</a>
          <button class="btn btn-outline-secondary save" type="submit" form="myform">保存</button>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        {{-- Todo: actionの指定 --}}
        <form action="{{ route('store') }}" method="POST" id="myform">
          @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
              </ul>
            </div>
          @endif
          {{ csrf_field() }}
          <div class="form-group">
            <label for="name">名前</label>
            <input type="text" name="name" placeholder="記入例：山田　太郎" class="form-control" />
          </div>
          <div class="form-group">
            <label for="age">年齢</label>
            <input type="number" name="age" class="form-control" />
          </div>
          <div class="form-group">
            <label>性別</label>
            <div class="form-check">
              <input type="radio" name="sex" id="sex-male" value="1" class="form-check-input">
              <label class="form-check-label" for="sex">男性</label>
            </div>
            <div class="form-check">
              <input type="radio" name="sex" id="sex-female" value="2" class="form-check-input">
              <label class="form-check-label" for="sex">女性</label>
            </div>
            <div class="form-check">
              <input type="radio" name="sex" id="sex-undefined" value="3" class="form-check-input">
              <label class="form-check-label" for="sex">指定なし</label>
            </div>
          </div>
          <div class="form-group">
            <label for="memo">備考</label>
            <textarea name="memo" class="form-control"></textarea>
          </div>

        </form>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="float-right">
          <!-- Todo: route()を使う -->
          <a href="../" class="btn btn-outline-secondary">戻る</a>
          <button class="btn btn-outline-secondary save" type="submit" form="myform">保存</button>
        </div>
      </div>
    </div>

  </div>
    
@endsection