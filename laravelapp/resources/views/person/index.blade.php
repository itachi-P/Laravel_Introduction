@extends('layouts.helloapp')

@section('title', 'Person.index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
    <!-- 投稿を1つ以上持つ人のリスト　-->
    <table>
        <tr><th>Person</th><th>Board</th></tr>
        @foreach ($hasItems as $item)
            <tr>
                <td>{{$item->getData()}}</td>
                <td>
                    <table width="100%">
                        @foreach ($item->boards as $obj)
                            <tr><td>{{$obj->getData()}}</td></tr>
                        @endforeach
                    </table>
                </td>
            </tr>
        @endforeach
    </table>
    <div style="margin:10px;"></div>
    <!-- 投稿を1つも持たない人のリスト -->
    <table>
        <tr><th>Person</th></tr>
        @foreach ($noItems as $item)
            <tr>
                <td>{{$item->getData()}}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
  copyright 2019 itachi-P.    
@endsection
