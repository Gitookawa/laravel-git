@extends('test.helloapp2')

@section('title', 'Index')

@section('menubar')
        @parent
        インデックスページ
@endsection

@section('content')
      <p>ここに本文が入ります</p>
      <p>ここにも本文が入ります</p>
@endsection

@section('footer')
        copyright 2020 ookawa.
@endsection


