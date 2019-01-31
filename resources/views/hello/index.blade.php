@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection
@section('content')
    @if(count($errors) > 0)
        <p>入力に問題があります。再入力お願いします</p>
    @else
        <p>{{$msg}}</p>
    @endif
    <form action="/hello" method="POST">
        {{csrf_field()}}
        <table>
            @if($errors->has('msg'))
                <tr>
                    <th>ERROR:</th>
                    <td>{{$errors->first('msg')}}</td>
                </tr>
            @endif
            <tr>
                <th></th>
                <td><input type="text" name="msg" value="{{old('msg')}}"></td>
            </tr>
                <tr>
                    <th></th>
                    <td><input type="submit" value="send"></td>
                </tr>
        </table>
    </form>
@endsection
@section('footer')
    copyright 2019 riku.
@endsection
