@isset($msg)
  <p>変数msgは「{{$msg}}」です</p>
@endisset

@isset($msg)
  <p>変数msgは「{{$msg}}」です</p>
@else
<p>メッセージがありません！</p>
@endisset

@empty($msg)
  <p>メッセージがありません！</p>
@endempty