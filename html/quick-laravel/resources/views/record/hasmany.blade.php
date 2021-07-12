{{--ベーステンプレートの宣言--}}
@extends('layouts.base')
{{--yieldのtitleに'リレーションの基本'を格納--}}
@section('title','リレーションの基本')
@section('main')
<h3>「{{$book->title}}」のレビュー</h3>
<ul>
@foreach($book->reviews as $rev)
  <li>{{$rev->body}}（{{$rev->name}}）</li>
@endforeach
</ul>
@endsection