<link href="{{ URL::asset('css/book/style.css') }}" rel="stylesheet" type="text/css" >


<div class="container">

  <table class="table_book">
    @foreach($records as $record)
    <tr>
      <td class="user_name">{{$record->name}}</td>
      <td class="user_text">{{$record->text}}</td>
      <td class="user_date">{{substr($record->created_at, 0, 10)}}</td>
      <td class="edit"><a href="/book/edit/{{$record->id}}">edit</a></td>
      <td class="delete"><a href="/book/delete/{{$record->id}}">delete</a></td>
    </tr>
    @endforeach
  </table>
</div>
