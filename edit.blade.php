<link href="{{ URL::asset('css/book/style.css') }}" rel="stylesheet" type="text/css" >

<div class="container">
  <form class="form" action="/book/save" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{$record->id}}">
    <input type="text" name="name" class="input_name" placeholder="name" value="{{$record->name}}">
    <input type="text" name="text" class="input_text" placeholder="text" value="{{$record->text}}">
    <input type="submit">
  </form>
  </div>
