@extends('base')
@section('content')
  <div class="container">
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">検索条件</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form id="filter" method="GET" action="{{ route('index') }}" id="myform">
            <div class="modal-body">
              <!-- Todo: 検索フォーム -->
              <div class="form-group">
                <label for="name">名前</label>
                <input type="text" name="name" class="form-control" />
              </div>
              <div class="form-group">
                <label for="sex">性別</label>
                <select name="sex" id="sex" class="form-control">
                  <option value="">----</option>
                  <option value="1">男性</option>
                  <option value="2">女性</option>
                  <option value="3">指定なし</option>
                </select>
              </div>
              <div class="form-group">
                <label for="memo">備考</label>
                <textarea name="mamo" class="form-control"></textarea>
              </div>
            </div>
          </form>
          <div class="modal-footer">
            <a class="btn btn-outline-secondary" data-dismiss="modal">戻る</a>
            <button type="submit" class="btn btn-outline-secondary" form="filter">検索</button>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
          <a href="/?page=1" class="btn btn-secondary filtered" style="visibility: hidden">検索を解除</a>
          <div class="float-right">
          {{-- Todo: リンク先追加 --}}
          @if(isset($user->id))
          <a href="{{ action('ItemController@create') }}" class="btn btn-outline-secondary">新規</a>
          @endif
          <a href="#" class="btn btn-outline-secondary" data-toggle="modal" data-target="#myModal">検索</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <!-- Todo: ページネーション -->
        {{ $items->links() }}
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <ul class="list-group">
          @empty(count($items))
          <li class="list-group-item">
            対象のデータがありません
          </li>              
          @endempty
          @foreach ($items as $item)
            <li class="list-group-item">
              <div class="row">
                <div class="col-3">
                  <p>名前</p>
                </div>
                <div class="col-9">
                  <p>{{ $item->name }}</p>
                </div>
              </div>
              <div class="row">
                <div class="col-3">
                  <p>登録日</p>
                </div>
                <div class="col-3">
                  <p>{{ $item->created_at }}</p>
                </div>    
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="float-left">
                    <!-- Todo: リンク先追加 -->
                    <a href="{{ route('show', ['id' => $item->id]) }}" class="btn btn-outline-secondary">詳細</a>
                    @if (isset($user->id))
                    <!-- Todo: リンク先追加 -->
                    <a href="{{ route('edit', ['id' => $item->id]) }}" class="btn btn-outline-secondary">編集</a>
                    <!-- Todo: リンク先追加 -->
                    <a href="{{ route('delete', ['item' => $item]) }}" class="btn btn-outline-secondary">削除</a>
                    @endif
                  </div>
                </div>    
              </div>
            </li>
          @endforeach
        </ul>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="float-right">
          {{-- Todo: リンク先追加 --}}
          @if(isset($user->id))
          <a href="{{ action('ItemController@create') }}" class="btn btn-outline-secondary">新規</a>
          @endif
          <a href="#" class="btn btn-outline-secondary" data-toggle="modal" data-target="#myModal">検索</a>
        </div>
      </div>
    </div>

  </div>
@endsection
