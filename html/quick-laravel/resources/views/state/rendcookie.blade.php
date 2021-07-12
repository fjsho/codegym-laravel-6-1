{{-- ベーステンプレートの宣言 --}}
@extends('layouts.base')
{{-- ベーステンプレートの@yield('title')に'クッキー'を格納 --}}
@section('title','クッキー')
{{-- ベーステンプレートの@section('main')に@endsectionまでの内容を入れる。 --}}
@section('main')
  <p>{{ $app_title }}</p>
@endsection