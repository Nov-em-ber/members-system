@extends('layouts.app')

@section('content')
    <h1>新しい会員を登録</h1>
    <form action="{{ route('members.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">名前:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="phone">電話番号:</label>
            <input type="text" id="phone" name="phone" required>
        </div>
        <div>
            <label for="email">メールアドレス:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <button type="submit">登録</button>
    </form>
@endsection
