<?php
  namespace App\Http\Controllers;
  use App\Http\Controllers\Controller;
  use Illuminate\Http\Request;
  use Illuminate\Support\Facades\DB;


  class BookController extends Controller{
    public function show(Request $request){
      if($request->name != '' &&  $request->text != ''){
        DB::table('book')->insert([
            'name'       => $request->name,
            'text'       => $request->text,
            'created_at' => date('Y-m-d H:i:s'),
          ]);
      }

      $records = DB::table('book')
      ->orderBy('created_at', 'desc')->get();

      return view('book.show', [
        'records' => $records,
      ]);
    }

    public function admin(Request $request){
      $records = DB::table('book')
      ->orderBy('created_at', 'desc')->get();

      return view('book.booka', [
        'records' => $records,
      ]);
    }

    public function edit($id){
      $record = DB::table('book')->where('id', $id)->first();
      return view('book.edit', [
        'record' => $record,
      ]);
    }

    public function save(Request $request){
      DB::table('book')->where('id', $request->id)
      ->update([
        'name' => $request->name,
        'text' => $request->text,
      ]);
      return redirect('/booka');
    }

    public function delete($id){
      DB::table('book')->where('id', $id)
      ->delete();
      return redirect('/booka');
    }
  }
