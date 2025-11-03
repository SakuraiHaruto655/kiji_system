@extends('layouts.common')

@section('title', 'BLOGIFY')

@section('content')
<div class="main-container">
    <div class="column">
        <div class="card">
            <div class="card-header">
                <h3>記事一覧</h3>
            </div>

            <div class="card-body">
                {{-- 検索 --}}
                <form method="GET" action="{{ route('show') }}"
                    style="display: flex; justify-content: center; align-items: center; gap: 8px; margin-bottom: 25px; width: 100%;">
                    <input type="text"
                        name="keyword"
                        value="{{ old('keyword', $keyword ?? '') }}"
                        placeholder="タイトルまたは本文を検索"
                        style="flex: 4; padding: 8px 10px; border-radius: 4px; border: 1px solid #ccc;
                               font-size: 0.9em; box-sizing: border-box; width: 100%;">
                    <button type="submit"
                        style="flex: 1; min-width: 80px; padding: 8px 0; font-size: 0.85em;
                               border: none; border-radius: 4px; background-color: #007bff;
                               color: #fff; cursor: pointer; transition: background 0.2s;">
                        検索
                    </button>
                </form>

                {{-- 記事一覧 --}}
                @if(isset($kijis) && $kijis->count() > 0)
                @foreach($kijis as $kiji)
                <div class="article-item" style="border-bottom: 1px solid #000000ff; padding: 15px 10px;">
                    <span class="user-label">👤 {{ $kiji->user->name ?? '不明なユーザー' }}</span>
                    <div class="article-title" style="margin-top: 8px;">
                        <a href="/kiji/detail/{{ $kiji->id }}"
                            style="color: #007bff; text-decoration: none; font-weight: bold;">
                            {{ $kiji->title }}
                        </a>
                    </div>
                    <div style="color: #666; margin-top: 10px;">
                        {{ Str::limit($kiji->body, 80) }}
                    </div>
                    <div style="font-size: 0.9em; color: #aaa; margin-top: 10px;">
                        投稿日時：{{ $kiji->created_at->format('Y-m-d H:i') }}
                    </div>
                </div>
                @endforeach

                <div style="margin-top: 25px; text-align: center;">
                    <ul style="display: inline-flex; list-style: none; padding: 0; margin: 0;">
                        {{-- 前へ --}}
                        @if ($kijis->onFirstPage())
                        <li style="margin: 0 4px;">
                            <span style="padding: 6px 10px; background: #f0f0f0; border-radius: 4px; color: #999;">« 前へ</span>
                        </li>
                        @else
                        <li style="margin: 0 4px;">
                            <a href="{{ $kijis->previousPageUrl() }}"
                                style="padding: 6px 10px; background: #007bff; border-radius: 4px; color: white; text-decoration: none;">
                                « 前へ
                            </a>
                        </li>
                        @endif

                        {{-- ページ番号 --}}
                        @foreach ($kijis->getUrlRange(1, $kijis->lastPage()) as $page => $url)
                        @if ($page == $kijis->currentPage())
                        <li style="margin: 0 4px;">
                            <span style="padding: 6px 10px; background: #0056b3; border-radius: 4px; color: white; font-weight: bold;">
                                {{ $page }}
                            </span>
                        </li>
                        @else
                        <li style="margin: 0 4px;">
                            <a href="{{ $url }}"
                                style="padding: 6px 10px; background: #007bff; border-radius: 4px; color: white; text-decoration: none;">
                                {{ $page }}
                            </a>
                        </li>
                        @endif
                        @endforeach

                        {{-- 次へ --}}
                        @if ($kijis->hasMorePages())
                        <li style="margin: 0 4px;">
                            <a href="{{ $kijis->nextPageUrl() }}"
                                style="padding: 6px 10px; background: #007bff; border-radius: 4px; color: white; text-decoration: none;">
                                次へ »
                            </a>
                        </li>
                        @else
                        <li style="margin: 0 4px;">
                            <span style="padding: 6px 10px; background: #f0f0f0; border-radius: 4px; color: #999;">次へ »</span>
                        </li>
                        @endif
                    </ul>
                </div>
                @else
                <p style="text-align: center; color: #777; margin-top: 20px;">記事はありません。</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
