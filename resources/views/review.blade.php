@extends('layouts.app')

@section('content')
    <h1 class="pagetitle">レビュー投稿ページ</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <div class="row justify-content-center container">
        <div class="col-md-10">
            <form action="{{ route('store') }}" enctype="multipart/form-data" method="post">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">本のタイトル</label>
                            <input type="text" name="title" class="form-control" placeholder="タイトルを入力">
                        </div>
                        <div class="form-group">
                            <label for="body">レビュー本文</label>
                            <textarea name="body" class="form-control description" placeholder="本文を入力"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="file1">本のサムネイル</label>
                            <input type="file" name="image" id="file1" class="form-control-file">
                        </div>
                        <input type="submit" value="レビューを登録" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
