@extends('layouts.common.allCommon')

@section('title', 'メインページ')

@push('styles')
<link rel="stylesheet" href="{{ asset('css/common/main.css') }}">
@endpush

@section('content')
    <div class = "courseExplainElementParent">
        <h2>コース進捗</h2>
        <div class = "courseExplainElement">
            <div class = "explainElementIcon">
                icon
            </div>
            <div class = "courseProgressExplainElement">
                <div class = "courseName">コース名1</div>
                <div class = "courseProgressBar">
                    progress bar
                </div>
            </div>
            <div class = "continueOrEndButton">
                <div class = "continueButton">続きから</div>
                <div class = "endButton">終了</div>
            </div>
        </div>
    </div>
    <div class = "allRecordArea">
        <h2>活動記録 概略</h2>
        <div class = "detailRecordArea">
            <div class = "shortHistory">
                <div class = "doneCourseHistory">
                    完了したコース
                </div>
                <div class = "progressCourseHistory">
                    対処中コース
                </div>
            </div>
            <div class = "montryActiveHistory">
                <div class = "recordArea">
                    カレンダー
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- @push('scripts')
<script src="{{ asset('js/home.js') }}"></script>
@endpush --}}