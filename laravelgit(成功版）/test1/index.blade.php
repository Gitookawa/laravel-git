@extends('test1.layouts')



<h1>ここが表題になります</h1>
@section('content')
<p>ここに本文が入ります</p>
<p>ここにも本文が入ります</p>
@each('components.naganuma',$data,'naganuma')
@component('components.message')
    @slot('msg_title')
    @CAUTION!
    @endslot

    @slot('msg_content')
    これはメッセージの表示です。
　　@endslot
@endcomponent
<p>警告メッセージの下に表示されています</p>
<p>ここにも警告メッセージが表示されます</p>
@endsection

@section('footer')
      copyright 2020 ookawa.
@endsection
