@extends('layouts.app')

@section('content')
    <h1>会員一覧</h1>
    <a href="{{ route('members.create') }}">新しい会員を登録</a>
    <ul>
        @foreach($members as $member)
            <li>
                {{ $member->name }} - {{ $member->phone }} - {{ $member->email }}
                <a href="{{ route('members.edit', $member->id) }}">編集</a>
                <form action="{{ route('members.destroy', $member->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">削除</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
