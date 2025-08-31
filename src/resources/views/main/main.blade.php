<!DOCTYPE html>
<html>
    <head>
        <link href="{{ asset('/css/common/header.css') }}" rel="stylesheet"  type="text/css"  media="all">
        <link href="{{ asset('/css/main/main.css') }}"  rel="stylesheet"  type="text/css"  media="all">
    </head>
    
    <body>
        <!-- header -->
        @include('/common/header/header')
        <!-- header -->
        <main>
            <div id="pageShowSegment">
                <div id="pageShowSegmentText">
                    top
                </div>
            </div>

            <div id="courseHistory">
                <div id="courseHistoryHeader">
                    <div class="courceHistoryIcon">
                        <img class="mainIcon" src="{{ asset('/images/barImage.png') }}">
                    </div>
                    <div class="courceHistoryText">コース履歴</div>
                    <div class="courceHistoryIcon">
                        <img class="mainIcon" src="{{ asset('/images/barImage.png') }}">
                    </div>
                </div>

                <div class="courceInformation">
                    <div class="classNameHeader">コース名</div>
                    <div class="className">AAAAAAAA</div>
                    <div class="continue_stop_button">
                        <div class="continueButton">続きから</div>
                        <div class="stopButton">終了　　</div>
                    </div>
                </div>
                <div class="courceSeparator">
                    <hr>
                </div>

                <div class="courceInformation">
                    <div class="classNameHeader">コース名</div>
                    <div class="className">AAAAAAAA</div>
                    <div class="continue_stop_button">
                        <div class="continueButton">続きから</div>
                        <div class="stopButton">終了　　</div>
                    </div>
                </div>
                <div class="courceSeparator">
                    <hr>
                </div>

                <div class="courceInformation">
                    <div class="classNameHeader">コース名</div>
                    <div class="className">AAAAAAAA</div>
                    <div class="continue_stop_button">
                        <div class="continueButton">続きから</div>
                        <div class="stopButton">終了　　</div>
                    </div>
                </div>
                <div class="courceSeparator">
                    <hr>
                </div>
            </div>

            <div id="courseHistory">
                <div id="courseHistoryHeader">
                    <div class="courceHistoryIcon">
                        <img class="mainIcon" src="{{ asset('/images/barImage.png') }}">
                    </div>
                    <div class="courceHistoryText">活動履歴</div>
                    <div class="courceHistoryIcon">
                        <img class="mainIcon" src="{{ asset('/images/barImage.png') }}">
                    </div>
                </div>

                <div id="biographyActivity">
                    <div id="doneCourceHeader">完了したコース</div>
                    <div id="doneCourceCountComponent">
                        <div id="doneCourceIcon"><img src="{{ asset('/images/oukan.png') }}"></div>
                        <div id="doneCourceCount">100</div>
                    </div>
                    <div id="doneCourceAfterPrifix">コース</div>
                </div>

                <div id="monthComponent">
                    <div id="month">1月</div>
                    <div id="calender">
                        <img src="{{ asset('/images/calender.png') }}">
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>