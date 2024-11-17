@extends('layouts.app')

@section('content')
    <h1>会員情報を編集</h1>
    <form action="{{ route('members.update', $member->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">名前:</label>
            <input type="text" id="name" name="name" value="{{ $member->name }}" required>
        </div>
        <div>
            <label for="phone">電話番号:</label>
            <input type="text" id="phone" name="phone" value="{{ $member->phone }}" required>
        </div>
        <div>
            <label for="email">メールアドレス:</label>
            <input type="email" id="email" name="email" value="{{ $member->email }}" required>
        </div>
        <button type="submit">更新</button>
    </form>
    <form action="{{ route('members.destroy', $member->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">削除</button>
    </form>
@endsection
