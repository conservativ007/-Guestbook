<link href="{{ URL::asset('css/book/style.css') }}" rel="stylesheet" type="text/css" >


<div class="container">

  <form class="form" action="/book" method="post">
    {{ csrf_field() }}
    <input type="text" name="name" class="input_name" placeholder="name">
    <input type="text" name="text" class="input_text" placeholder="text">
    <input type="submit">
  </form>

  <table class="table_book">
    @foreach($records as $record)
    <tr>
      <td class="user_name">{{$record->name}}</td>
      <td class="user_text">{{$record->text}}</td>
      <td class="user_date">{{substr($record->created_at, 0, 10)}}</td>
    </tr>
    @endforeach
  </table>
</div>
