@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>必要なだけ記述ができます。</p>
    @component('components.message')
    @slot('msg_title')
    <ul>
    <li>CAUTION!</li>
    <li>aaaa</li>
    </ul>
    @endslot

    @slot('msg_content')
    これはメッセージ
    @endslot
    @endcomponent
@endsection
@section('footer')
    coptyright 2018 VVVVVV.
@endsection