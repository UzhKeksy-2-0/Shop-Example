<script>
    (function(d, link) {
        link = d.createElement('link');
        link.rel = "stylesheet";
        link.href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css";
        d.head.appendChild(link);
    }(document));

    //
</script>
<style type="text/css">
</style>
<style type="text/css">
    <!--
    .ddr-page-wrapper * {
        box-sizing: border-box;
    }

    .ddr-page-wrapper {
        position: relative;
        padding: 0px;
        margin: 0px;
        font-family: sans-serif;
        font-size: 16px;
    }

    .ddr-page-wrapper .ddr-page {
        position: relative;
    }

    .ddr-page-wrapper .ddr-page .ddr-page-section-pre-content::after,
    .ddr-page-wrapper .ddr-page .ddr-page-section-pre-content::before,
    .ddr-page-wrapper .ddr-page>div::after,
    .ddr-page-wrapper .ddr-page>div::before {
        content: "";
        display: table;
        clear: both;
    }

    .ddr-page-wrapper div,
    .ddr-page-wrapper h1,
    .ddr-page-wrapper h2,
    .ddr-page-wrapper h3,
    .ddr-page-wrapper h4,
    .ddr-page-wrapper h5,
    .ddr-page-wrapper h6,
    .ddr-page-wrapper p,
    .ddr-page-wrapper span {
        line-height: normal;
    }

    .ddr-page-row,
    .ddr-page-section-wrapper .ddr-page-section {
        position: relative;
        box-sizing: border-box;
    }

    .ddr-page-row {
        display: flex;
        width: 100%;
    }

    .ddr-page-row__wrap {
        flex-wrap: wrap;
    }

    .ddr-page-row__wrap .ddr-page-column__wrap {
        width: 100% !important;
    }

    .ddr-page-row__wrap-reverse {
        flex-wrap: wrap-reverse;
    }

    .ddr-page-row__wrap-reverse .ddr-page-column__wrap-reverse {
        width: 100% !important;
    }

    .ddr-page-column {
        display: flex;
        flex-wrap: wrap;
        box-sizing: border-box;
        position: relative;
        align-content: flex-start;
    }

    .ddr-page-widget {
        width: 100%;
        position: relative;
        overflow: hidden;
    }

    .dashed-border {
        border: 1px dashed rgb(135, 135, 135);
    }

    .headline-edit-wrapper {
        cursor: text;
    }

    .section-slider .ddr-page-section-widget-drop-suggestion-wrapper {
        padding-bottom: 7px;
    }

    .ddr-page-widget__sections-slider .toolbox-controls {
        justify-content: flex-start !important;
    }

    .slide-options-wrapper {
        border-bottom: 1px solid rgb(226, 118, 37);
    }

    .slide-options-wrapper .rc-collapse-content-active {
        background-color: rgb(23, 23, 23);
    }

    .slide-options-wrapper .rc-collapse-content-active .section-slider-delete-icon.slide-delete-icon {
        background: rgb(239, 83, 80);
        color: rgb(255, 255, 255);
        align-items: center;
        border-radius: 3px;
    }

    .slide-options-wrapper .rc-collapse-content-active .section-slider-delete-icon.slide-delete-icon i {
        color: rgb(255, 255, 255) !important;
    }

    .slide-options-wrapper .rc-collapse-content-active .switch-wrapper .switch {
        margin-left: -10px;
    }

    .slide-options-wrapper:last-child {
        margin-bottom: 24px;
    }

    .ddr-widget-toolbox--section-slider .toolbox-controls .ddr-widget-toolbox__sub-tool--duplicate,
    .ddr-widget-toolbox--section-slider .toolbox-controls .ddr-widget-toolbox__tool--duplicate,
    .ddr-widget-toolbox--section-slider .toolbox-controls .ddr-widget-toolbox__tool--move,
    .ddr-widget-toolbox--section-slider .toolbox-controls .ddr-widget-toolbox__tool--settings {
        background-color: rgb(226, 118, 37);
    }

    .ddr-widget-toolbox--section-slider .toolbox-controls .ddr-widget-toolbox__tool--delete {
        background-color: rgb(72, 72, 72);
    }

    .ddr-widget-toolbox--section-slider .toolbox-controls .ddr-widget-toolbox__tool.ddr-widget-toolbox__tool--delete:hover {
        background-color: rgb(58, 65, 74);
    }

    .ddr-widget-toolbox--section-slider .toolbox-controls .ddr-widget-toolbox__tool:hover {
        background-color: rgb(239, 56, 27);
    }

    .ddr-page-widget-overlay-wrapper:hover .ddr-widget-toolbox--section-slider {
        border: 2px solid rgb(226, 118, 37) !important;
    }

    .ddr-widget-toolbox--active.ddr-widget-toolbox--section-slider {
        border: 2px solid rgb(226, 118, 37);
    }

    .ddr-widget {
        background-color: transparent;
        background-image: none;
        inset: auto;
        height: auto;
        width: auto;
        max-height: none;
        max-width: none;
        min-height: 0px;
        min-width: 0px;
        padding: 0px;
        margin: 0px;
        overflow: hidden;
    }

    .ddr-widget__rich-text {
        position: relative;
        cursor: auto;
        overflow-wrap: break-word;
        overflow: hidden;
    }

    .ddr-widget__image {
        position: relative;
        max-width: 100%;
        height: auto;
        margin: auto;
        display: flex;
    }

    .ddr-widget__image a,
    .ddr-widget__image img {
        overflow: hidden;
        width: 100%;
        max-width: 100%;
        max-height: 100%;
    }

    .ddr-widget__image a,
    .ddr-widget__image a:active,
    .ddr-widget__image a:focus,
    .ddr-widget__image a:hover,
    .ddr-widget__image a:link,
    .ddr-widget__image a:visited {
        display: inline-block;
        vertical-align: middle;
        color: inherit;
        text-decoration: none;
        border: none;
        box-shadow: none;
    }

    .ddr-widget__spacer {
        position: relative;
        overflow: hidden;
    }

    .ddr-widget__button {
        position: relative;
        display: flex;
    }

    .ddr-widget__button a {
        overflow: hidden;
    }

    .ddr-widget__button>a>div {
        display: block;
        overflow: hidden;
        background-color: rgb(0, 143, 162);
        box-sizing: content-box;
        word-break: break-all;
        transition: all 0.5s ease 0s;
    }

    .ddr-widget__button a,
    .ddr-widget__button a:active,
    .ddr-widget__button a:focus,
    .ddr-widget__button a:hover,
    .ddr-widget__button a:link,
    .ddr-widget__button a:visited {
        display: inline-block;
        vertical-align: middle;
        color: inherit;
        text-decoration: none;
        border: none;
        box-shadow: none;
    }

    .ddr-widget__icon {
        position: relative;
        text-align: center;
        overflow: hidden;
        display: flex;
    }

    .ddr-widget__icon>div {
        display: inline-block;
    }

    .ddr-widget__icon a,
    .ddr-widget__icon i {
        font: initial;
        overflow: hidden;
    }

    .ddr-widget__icon i {
        display: block;
    }

    .ddr-widget__icon a,
    .ddr-widget__icon a:active,
    .ddr-widget__icon a:focus,
    .ddr-widget__icon a:hover,
    .ddr-widget__icon a:link,
    .ddr-widget__icon a:visited {
        display: inline-block;
        vertical-align: middle;
        color: inherit;
        text-decoration: none;
        box-sizing: border-box;
        border: none;
        box-shadow: none;
    }

    @media (min-width: 1281px) {
        .ddr-page-row__wrap--max {
            flex-wrap: wrap;
        }

        .ddr-page-row__wrap--max .ddr-page-column__wrap--max {
            width: 100% !important;
        }

        .ddr-page-row__wrap-reverse--max {
            flex-wrap: wrap-reverse;
        }

        .ddr-page-row__wrap-reverse--max .ddr-page-column__wrap-reverse--max {
            width: 100% !important;
        }

        .ddr-page-column__hide--max,
        .ddr-page-widget__hide--max {
            display: none;
        }
    }

    @media (max-width: 1280px) and (min-width: 1025px) {
        .ddr-page-row__wrap--1280 {
            flex-wrap: wrap;
        }

        .ddr-page-row__wrap--1280 .ddr-page-column__wrap--1280 {
            width: 100% !important;
        }

        .ddr-page-row__wrap-reverse--1280 {
            flex-wrap: wrap-reverse;
        }

        .ddr-page-row__wrap-reverse--1280 .ddr-page-column__wrap-reverse--1280 {
            width: 100% !important;
        }

        .ddr-page-column__hide--1280,
        .ddr-page-widget__hide--1280 {
            display: none;
        }
    }

    @media (max-width: 1024px) and (min-width: 769px) {
        .ddr-page-row__wrap--1024 {
            flex-wrap: wrap;
        }

        .ddr-page-row__wrap--1024 .ddr-page-column__wrap--1024 {
            width: 100% !important;
        }

        .ddr-page-row__wrap-reverse--1024 {
            flex-wrap: wrap-reverse;
        }

        .ddr-page-row__wrap-reverse--1024 .ddr-page-column__wrap-reverse--1024 {
            width: 100% !important;
        }

        .ddr-page-column__hide--1024,
        .ddr-page-widget__hide--1024 {
            display: none;
        }
    }

    @media (max-width: 768px) and (min-width: 481px) {
        .ddr-page-row__wrap--768 {
            flex-wrap: wrap;
        }

        .ddr-page-row__wrap--768 .ddr-page-column__wrap--768 {
            width: 100% !important;
        }

        .ddr-page-row__wrap-reverse--768 {
            flex-wrap: wrap-reverse;
        }

        .ddr-page-row__wrap-reverse--768 .ddr-page-column__wrap-reverse--768 {
            width: 100% !important;
        }

        .ddr-page-column__hide--768,
        .ddr-page-widget__hide--768 {
            display: none;
        }
    }

    @media (max-width: 480px) and (min-width: 321px) {
        .ddr-page-row__wrap--480 {
            flex-wrap: wrap;
        }

        .ddr-page-row__wrap--480 .ddr-page-column__wrap--480 {
            width: 100% !important;
        }

        .ddr-page-row__wrap-reverse--480 {
            flex-wrap: wrap-reverse;
        }

        .ddr-page-row__wrap-reverse--480 .ddr-page-column__wrap-reverse--480 {
            width: 100% !important;
        }

        .ddr-page-column__hide--480,
        .ddr-page-widget__hide--480 {
            display: none;
        }
    }

    @media (max-width: 320px) and (min-width: 0px) {
        .ddr-page-row__wrap--320 {
            flex-wrap: wrap;
        }

        .ddr-page-row__wrap--320 .ddr-page-column__wrap--320 {
            width: 100% !important;
        }

        .ddr-page-row__wrap-reverse--320 {
            flex-wrap: wrap-reverse;
        }

        .ddr-page-row__wrap-reverse--320 .ddr-page-column__wrap-reverse--320 {
            width: 100% !important;
        }

        .ddr-page-column__hide--320,
        .ddr-page-widget__hide--320 {
            display: none;
        }
    }

    .ddr-page-wrapper {
        font-family: 'Open Sans', sans-serif;
    }

    #button-1211 {
        background-color: rgba(159, 191, 27, 1);
        color: rgba(255, 255, 255, 1);
    }

    #button-1211 {
        background-color: rgba(159, 191, 27, 1);
        color: rgba(255, 255, 255, 1);
    }

    #button-4002 {
        background-color: rgba(159, 191, 27, 1);
        color: rgba(255, 255, 255, 1);
    }

    #button-4002 {
        background-color: rgba(159, 191, 27, 1);
        color: rgba(255, 255, 255, 1);
    }

    #button-4012 {
        background-color: rgba(159, 191, 27, 1);
        color: rgba(255, 255, 255, 1);
    }

    #button-4012 {
        background-color: rgba(159, 191, 27, 1);
        color: rgba(255, 255, 255, 1);
    }

    #button-4022 {
        background-color: rgba(159, 191, 27, 1);
        color: rgba(255, 255, 255, 1);
    }

    #button-4022 {
        background-color: rgba(159, 191, 27, 1);
        color: rgba(255, 255, 255, 1);
    }

    #button-4032 {
        background-color: rgba(159, 191, 27, 1);
        color: rgba(255, 255, 255, 1);
    }

    #button-4032 {
        background-color: rgba(159, 191, 27, 1);
        color: rgba(255, 255, 255, 1);
    }

</style>
</style>
<div class="ddr-page-wrapper" data-ddr-page-id="64122914-349e-11eb-9913-0242ac140009" style="background-color: rgb(255, 255, 255);">
    <div class="ddr-page">
        <div id="ddr-2feaf2cf9d" class="ddr-page-section-wrapper ddr-page-section-wrapper-0" style="background-color: rgb(255, 255, 255);">
            <div class="ddr-page-section-pre-content ddr-page-section-pre-content-0">
                <div class="ddr-page-section ddr-page-section-0">
                    <div class="ddr-page-row ddr-page-row-0 ddr-page-row__wrap--320 ddr-page-row__wrap--480">
                        <div class="ddr-page-column ddr-page-column-0 ddr-page-column__wrap--320 ddr-page-column__wrap--480 " style="width: 22.619%;">
                            <div id="ddr-f8fa81e279" class="ddr-page-widget ddr-page-widget__image ddr-page-widget-0 ">
                                <div class="ddr-widget ">
                                    <div class="ddr-widget__image " style="justify-content: center;"><a target="_self" style="width: 213px; height: auto; margin-left: 25px; margin-top: 10px; margin-bottom: 10px;"><img src="https://cdn.dragdropr.com/2f52f560-c931-4ad8-9fa0-1353b8566afc/" style="height: auto; width: 213px;"></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="ddr-page-column ddr-page-column-1 ddr-page-column__wrap--320 ddr-page-column__wrap--480 ddr-page-column__hide--320 ddr-page-column__hide--480 ddr-page-column__hide--768" style="width: 5.95238%;">
                            <div id="ddr-ff4181475c" class="ddr-page-widget ddr-page-widget__spacer ddr-page-widget-0 ddr-page-widget__hide--320 ddr-page-widget__hide--480 ddr-page-widget__hide--768">
                                <div class="ddr-widget ">
                                    <div class="ddr-widget__spacer " style="height: 40px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="ddr-page-column ddr-page-column-2 ddr-page-column__wrap--320 ddr-page-column__wrap--480 " style="width: 47.619%;">
                            <div id="ddr-6a52b8f51d" class="ddr-page-widget ddr-page-widget__rich-text ddr-page-widget-0 ">
                                <div class="ddr-widget ">
                                    <div id="ddr-rich-text-020" class="ddr-widget__rich-text " style="margin: 10px 0px;">
                                        <p style="text-align: center;">Shop&nbsp; Colection&nbsp; News Contact&nbsp;&nbsp;</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ddr-page-column ddr-page-column-3 ddr-page-column__wrap--320 ddr-page-column__wrap--480 ddr-page-column__hide--320 ddr-page-column__hide--480 ddr-page-column__hide--768" style="width: 5.95238%;">
                            <div id="ddr-3d041d2e13" class="ddr-page-widget ddr-page-widget__spacer ddr-page-widget-0 ddr-page-widget__hide--320 ddr-page-widget__hide--480 ddr-page-widget__hide--768">
                                <div class="ddr-widget ">
                                    <div class="ddr-widget__spacer " style="height: 40px;"></div>
                                </div>
                            </div>
                        </div>
                        <div class="ddr-page-column ddr-page-column-4 ddr-page-column__wrap--320 ddr-page-column__wrap--480 " style="width: 5.95238%;">
                            <div id="ddr-2578caa290" class="ddr-page-widget ddr-page-widget__image ddr-page-widget-0 ">
                                <div class="ddr-widget ">
                                    <div class="ddr-widget__image " style="justify-content: center;"><a target="_self" style="width: 30px; height: auto; margin: 10px;"><img src="https://cdn.dragdropr.com/811ae882-6c91-4c06-8c3f-c369d43b5c36/" style="height: auto; width: 30px;"></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="ddr-page-column ddr-page-column-5 ddr-page-column__wrap--320 ddr-page-column__wrap--480 " style="width: 5.95238%;">
                            <div id="ddr-01108ef78d" class="ddr-page-widget ddr-page-widget__icon ddr-page-widget-0 ">
                                <div class="ddr-widget ">
                                    <div class="ddr-widget__icon " style="justify-content: center;"><a target="_self" style="margin: 10px;"><i class="fa fa-user-o" style="font-size: 30px; font-family: FontAwesome;"></i></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="ddr-page-column ddr-page-column-6 ddr-page-column__wrap--320 ddr-page-column__wrap--480 " style="width: 5.95238%;">
                            <div id="ddr-299df53135" class="ddr-page-widget ddr-page-widget__image ddr-page-widget-0 ">
                                <div class="ddr-widget ">
                                    <div class="ddr-widget__image " style="justify-content: center;"><a target="_self" style="width: 30px; height: auto; margin: 10px;"><img src="https://cdn.dragdropr.com/4bd16b66-0065-41bc-8727-bace919f0dbb/" style="height: auto; width: 30px;"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <form method="POST" action="https://app.dragdropr.com/api/forms/fd8c529a-cf0f-11e9-b533-0242ac140005/submissions">
            <div id="ddr-b23136b43f" class="ddr-page-section-wrapper ddr-page-section-wrapper-1" style="background-color: rgb(246, 246, 246);">
                <div class="ddr-page-section-pre-content ddr-page-section-pre-content-1" style="max-width: 1200px; margin: auto;">
                    <div class="ddr-page-section ddr-page-section-1">
                        <div class="ddr-page-row ddr-page-row-0 ddr-page-row__wrap--320 ddr-page-row__wrap--480 ddr-page-row__wrap--768">
                            <div class="ddr-page-column ddr-page-column-0 ddr-page-column__wrap--320 ddr-page-column__wrap--480 ddr-page-column__wrap--768 " style="width: 100%;">
                                <div id="ddr-82aba10fc2" class="ddr-page-widget ddr-page-widget__rich-text ddr-page-widget-0 ">
                                    <div class="ddr-widget ">
                                        <div id="ddr-rich-text-1000" class="ddr-widget__rich-text " style="margin: 5px 30px;">
                                            <p>Home &gt;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <span style="color: #999999;">Collection</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ddr-page-row ddr-page-row-1 ddr-page-row__wrap--320 ddr-page-row__wrap--480 ddr-page-row__wrap--768">
                            <div class="ddr-page-column ddr-page-column-0 ddr-page-column__wrap--320 ddr-page-column__wrap--480 ddr-page-column__wrap--768 " style="width: 100%;">
                                <div id="ddr-8bf1caefd8" class="ddr-page-widget ddr-page-widget__spacer ddr-page-widget-0 ">
                                    <div class="ddr-widget ">
                                        <div class="ddr-widget__spacer " style="height: 50px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ddr-page-row ddr-page-row-2 ddr-page-row__wrap--320 ddr-page-row__wrap--480 ddr-page-row__wrap--768">
                            <div class="ddr-page-column ddr-page-column-0 ddr-page-column__wrap--320 ddr-page-column__wrap--480 ddr-page-column__wrap--768 " style="width: 58.3333%;">
                                <div id="ddr-6a9d3d4339" class="ddr-page-widget ddr-page-widget__image ddr-page-widget-0 ">
                                    <div class="ddr-widget ">
                                        <div class="ddr-widget__image " style="justify-content: center;"><a target="_self" style="border-style: solid; border-width: 0px; border-color: rgb(86, 86, 86); width: 700px; height: 431px;"><img src="https://cdn.dragdropr.com/e4de667a-f4c5-4e1e-84b5-fc149f62f937/" style="height: 431px; width: 700px;"></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="ddr-page-column ddr-page-column-1 ddr-page-column__wrap--320 ddr-page-column__wrap--480 ddr-page-column__wrap--768 " style="width: 41.6667%;">
                                <div id="ddr-9c9a19c796" class="ddr-page-widget ddr-page-widget__rich-text ddr-page-widget-0 ">
                                    <div class="ddr-widget ">
                                        <div id="ddr-rich-text-1210" class="ddr-widget__rich-text " style="margin: 30px 30px 0px;">
                                            <p><span style="font-size: 30px; color: #565656;"><?=$name?></span></p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.&nbsp;</p>
                                            <p><span style="font-size: 30px;"><span style="color: #9fbf1b;"><?=$price?></span></span><span style="text-decoration: line-through; color: #565656;">€ 49.99</span></p>
                                        </div>
                                    </div>
                                </div>
                                <div id="ddr-53fd5f28f0" class="ddr-page-widget ddr-page-widget__button ddr-page-widget-1 ">
                                    <div class="ddr-widget " style="background-position: center center; background-repeat: no-repeat; background-size: 600px;">
                                        <div class="ddr-widget__button " style="justify-content: flex-start;"><a target="_self" style="margin: 30px 0px 30px 30px;">
                                                <div id="button-1211" style="padding: 10px 35px; font-size: 16px;">ADD TO CART</div>
                                            </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ddr-page-row ddr-page-row-3 ddr-page-row__wrap--320 ddr-page-row__wrap--480 ddr-page-row__wrap--768">
                            <div class="ddr-page-column ddr-page-column-0 ddr-page-column__wrap--320 ddr-page-column__wrap--480 ddr-page-column__wrap--768 " style="width: 58.3333%;">
                                <div id="ddr-ceafdce56f" class="ddr-page-widget ddr-page-widget__spacer ddr-page-widget-0 ">
                                    <div class="ddr-widget ">
                                        <div class="ddr-widget__spacer " style="height: 50px;"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="ddr-page-column ddr-page-column-1 ddr-page-column__wrap--320 ddr-page-column__wrap--480 ddr-page-column__wrap--768 " style="width: 41.6667%;">
                                <div id="ddr-731fc0b31e" class="ddr-page-widget ddr-page-widget__rich-text ddr-page-widget-0 ">
                                    <div class="ddr-widget ">
                                        <div id="ddr-rich-text-1310" class="ddr-widget__rich-text " style="margin: 0px 0px 0px 5px;">
                                            <p>Share on:</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ddr-page-row ddr-page-row-4 ddr-page-row__wrap--320 ddr-page-row__wrap--480">
                            <div class="ddr-page-column ddr-page-column-0 ddr-page-column__wrap--320 ddr-page-column__wrap--480 " style="width: 11.1111%;">
                                <div id="ddr-4f6da31dfc" class="ddr-page-widget ddr-page-widget__image ddr-page-widget-0 ">
                                    <div class="ddr-widget ">
                                        <div class="ddr-widget__image " style="justify-content: center;"><a target="_self" style="padding-left: 0px; padding-right: 0px; margin-left: 5px; margin-right: 5px; border-style: solid; border-width: 1px; border-color: rgb(86, 86, 86);"><img src="https://cdn.dragdropr.com/c4d059d7-3dcb-4fde-9caa-36766b62fd77/-/crop/171x146/0,85/-/preview/" style="height: auto; width: 100%;"></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="ddr-page-column ddr-page-column-1 ddr-page-column__wrap--320 ddr-page-column__wrap--480 " style="width: 11.1111%;">
                                <div id="ddr-35d0841599" class="ddr-page-widget ddr-page-widget__image ddr-page-widget-0 ">
                                    <div class="ddr-widget ">
                                        <div class="ddr-widget__image " style="justify-content: center;"><a target="_self" style="padding-left: 0px; padding-right: 0px; width: 100%; height: auto; border-style: solid; border-width: 1px; border-color: rgb(86, 86, 86); margin-left: 5px; margin-right: 5px;"><img src="https://cdn.dragdropr.com/c4d059d7-3dcb-4fde-9caa-36766b62fd77/-/crop/171x146/0,85/-/preview/" style="height: auto; width: 100%;"></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="ddr-page-column ddr-page-column-2 ddr-page-column__wrap--320 ddr-page-column__wrap--480 " style="width: 11.1111%;">
                                <div id="ddr-1bc58cb260" class="ddr-page-widget ddr-page-widget__image ddr-page-widget-0 ">
                                    <div class="ddr-widget ">
                                        <div class="ddr-widget__image " style="justify-content: center;"><a target="_self" style="padding-left: 0px; padding-right: 0px; width: 100%; height: auto; border-style: solid; border-width: 1px; border-color: rgb(86, 86, 86); margin-left: 5px; margin-right: 5px;"><img src="https://cdn.dragdropr.com/c4d059d7-3dcb-4fde-9caa-36766b62fd77/-/crop/171x146/0,85/-/preview/" style="height: auto; width: 100%;"></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="ddr-page-column ddr-page-column-3 ddr-page-column__wrap--320 ddr-page-column__wrap--480 " style="width: 11.1111%;">
                                <div id="ddr-c780724c2f" class="ddr-page-widget ddr-page-widget__image ddr-page-widget-0 ">
                                    <div class="ddr-widget ">
                                        <div class="ddr-widget__image " style="justify-content: center;"><a target="_self" style="padding-left: 0px; padding-right: 0px; border-style: solid; border-width: 1px; border-color: rgb(86, 86, 86); margin-left: 5px; margin-right: 5px;"><img src="https://cdn.dragdropr.com/c4d059d7-3dcb-4fde-9caa-36766b62fd77/-/crop/171x146/0,85/-/preview/" style="height: auto; width: 100%;"></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="ddr-page-column ddr-page-column-4 ddr-page-column__wrap--320 ddr-page-column__wrap--480 " style="width: 11.1111%;">
                                <div id="ddr-b96b8e0233" class="ddr-page-widget ddr-page-widget__image ddr-page-widget-0 ">
                                    <div class="ddr-widget ">
                                        <div class="ddr-widget__image " style="justify-content: center;"><a target="_self" style="padding-left: 0px; padding-right: 0px; border-style: solid; border-width: 1px; border-color: rgb(86, 86, 86); margin-left: 5px; margin-right: 5px;"><img src="https://cdn.dragdropr.com/c4d059d7-3dcb-4fde-9caa-36766b62fd77/-/crop/171x146/0,85/-/preview/" style="height: auto; width: 100%;"></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="ddr-page-column ddr-page-column-5 ddr-page-column__wrap--320 ddr-page-column__wrap--480 " style="width: 11.1111%;">
                                <div id="ddr-b00166def7" class="ddr-page-widget ddr-page-widget__icon ddr-page-widget-0 ">
                                    <div class="ddr-widget ">
                                        <div class="ddr-widget__icon " style="justify-content: center;"><a target="_self" style="margin: 30px 0px;"><i class="fa fa-facebook" style="font-size: 30px; color: rgb(86, 86, 86); font-family: FontAwesome;"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="ddr-page-column ddr-page-column-6 ddr-page-column__wrap--320 ddr-page-column__wrap--480 " style="width: 11.1111%;">
                                <div id="ddr-8707a322a8" class="ddr-page-widget ddr-page-widget__icon ddr-page-widget-0 ">
                                    <div class="ddr-widget ">
                                        <div class="ddr-widget__icon " style="justify-content: center;"><a target="_self" style="margin: 30px 0px;"><i class="fa fa-instagram" style="font-size: 30px; color: rgb(86, 86, 86); font-family: FontAwesome;"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="ddr-page-column ddr-page-column-7 ddr-page-column__wrap--320 ddr-page-column__wrap--480 " style="width: 11.1111%;">
                                <div id="ddr-b36b628b7c" class="ddr-page-widget ddr-page-widget__icon ddr-page-widget-0 ">
                                    <div class="ddr-widget ">
                                        <div class="ddr-widget__icon " style="justify-content: center;"><a target="_self" style="margin: 30px 0px;"><i class="fa fa-twitter" style="font-size: 30px; color: rgb(86, 86, 86); font-family: FontAwesome;"></i></a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="ddr-page-column ddr-page-column-8 ddr-page-column__wrap--320 ddr-page-column__wrap--480 " style="width: 11.1111%;">
                                <div id="ddr-d1fec89465" class="ddr-page-widget ddr-page-widget__icon ddr-page-widget-0 ">
                                    <div class="ddr-widget ">
                                        <div class="ddr-widget__icon " style="justify-content: center;"><a target="_self" style="margin: 30px 0px;"><i class="fa fa-google-plus" style="font-size: 30px; color: rgb(86, 86, 86); font-family: FontAwesome;"></i></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div id="ddr-e4e9bef17c" class="ddr-page-section-wrapper ddr-page-section-wrapper-2" style="background-color: rgba(243, 243, 243, 0.8);">
            <div class="ddr-page-section-pre-content ddr-page-section-pre-content-2" style="max-width: 1200px; margin: auto;">
                <div class="ddr-page-section ddr-page-section-2">
                    <div class="ddr-page-row ddr-page-row-0 ddr-page-row__wrap--320 ddr-page-row__wrap--480 ddr-page-row__wrap--768">
                        <div class="ddr-page-column ddr-page-column-0 ddr-page-column__wrap--320 ddr-page-column__wrap--480 ddr-page-column__wrap--768 " style="width: 100%;">
                            <div id="ddr-a02db889bf" class="ddr-page-widget ddr-page-widget__rich-text ddr-page-widget-0 ">
                                <div class="ddr-widget ">
                                    <div id="ddr-rich-text-2000" class="ddr-widget__rich-text " style="margin: 30px 30px 0px 0px;">
                                        <p><span style="color: #9fbf1b;">MORE INFO</span></p>
                                    </div>
                                </div>
                            </div>
                            <div id="ddr-d59c435c7c" class="ddr-page-widget ddr-page-widget__rich-text ddr-page-widget-1 ">
                                <div class="ddr-widget ">
                                    <div id="ddr-rich-text-2001" class="ddr-widget__rich-text " style="margin: 30px 0px; border-style: solid; border-width: 1px; border-color: rgb(86, 86, 86); padding: 5px 30px;">
                                        <p style="text-align: justify;"><span style="color: #565656; font-size: 15px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua sed do eiusmod tempor incididunt.</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="ddr-4d9b1979cf" class="ddr-page-section-wrapper ddr-page-section-wrapper-3" style="background-color: rgba(243, 243, 243, 0.8);">
            <div class="ddr-page-section-pre-content ddr-page-section-pre-content-3" style="max-width: 1200px; margin: auto;">
                <div class="ddr-page-section ddr-page-section-3">
                    <div class="ddr-page-row ddr-page-row-0 ddr-page-row__wrap--320 ddr-page-row__wrap--480">
                        <div class="ddr-page-column ddr-page-column-0 ddr-page-column__wrap--320 ddr-page-column__wrap--480 " style="width: 100%;">
                            <div id="ddr-b4151c61ce" class="ddr-page-widget ddr-page-widget__rich-text ddr-page-widget-0 ">
                                <div class="ddr-widget ">
                                    <div id="ddr-rich-text-3000" class="ddr-widget__rich-text " style="margin: 30px;">
                                        <p style="text-align: center;"><span style="font-size: 30px; color: #565656;">RELATED PRODUCT</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="ddr-ecb4eff319" class="ddr-page-section-wrapper ddr-page-section-wrapper-4" style="background-color: rgba(243, 243, 243, 0.8);">
            <div class="ddr-page-section-pre-content ddr-page-section-pre-content-4" style="max-width: 1200px; margin: auto;">
                <div class="ddr-page-section ddr-page-section-4">
                    <div class="ddr-page-row ddr-page-row-0 ddr-page-row__wrap--320 ddr-page-row__wrap--480">
                        <div class="ddr-page-column ddr-page-column-0 ddr-page-column__wrap--320 ddr-page-column__wrap--480 " style="width: 25%;">
                            <div id="ddr-ee004f8b1d" class="ddr-page-widget ddr-page-widget__image ddr-page-widget-0 ">
                                <div class="ddr-widget " style="background-image: url(&quot;https://cdn.dragdropr.com/09d9d814-0d15-4de8-9698-aa928174cc5d/&quot;); background-position: center top; background-repeat: no-repeat; background-size: 600px;">
                                    <div class="ddr-widget__image " style="justify-content: center;"><a target="_self" style="width: 248px; height: auto; margin-top: 30px; padding-top: 0px;"><img src="https://cdn.dragdropr.com/1b2b2271-74ee-4b4c-9956-6624f557d4e8/" style="height: auto; width: 248px;"></a></div>
                                </div>
                            </div>
                            <div id="ddr-d0f997db65" class="ddr-page-widget ddr-page-widget__rich-text ddr-page-widget-1 ">
                                <div class="ddr-widget " style="background-position: center center; background-size: 600px; background-repeat: no-repeat; background-image: url(&quot;https://cdn.dragdropr.com/928e60ea-56a5-4eec-a112-76643cc6c0d6/&quot;);">
                                    <div id="ddr-rich-text-4001" class="ddr-widget__rich-text " style="margin: 0px 30px;">
                                        <p style="text-align: center;"><?=$name?></p>
                                        <p style="text-align: center;"><strong><?=$price?></strong></p>
                                    </div>
                                </div>
                            </div>
                            <div id="ddr-25ee41ea09" class="ddr-page-widget ddr-page-widget__button ddr-page-widget-2 ">
                                <div class="ddr-widget " style="background-image: url(&quot;https://cdn.dragdropr.com/24872350-20ab-4d7f-a18a-fafaf4dd49e3/&quot;); background-position: center center; background-repeat: no-repeat; background-size: 600px;">
                                    <div class="ddr-widget__button " style="justify-content: center;"><a target="_self" style="margin: 0px 0px 35px;">
                                            <div id="button-4002" style="padding: 10px 35px; font-size: 16px;">ADD TO CART</div>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                        <div class="ddr-page-column ddr-page-column-1 ddr-page-column__wrap--320 ddr-page-column__wrap--480 " style="width: 25%;">
                            <div id="ddr-109819bf69" class="ddr-page-widget ddr-page-widget__image ddr-page-widget-0 ">
                                <div class="ddr-widget " style="background-image: url(&quot;https://cdn.dragdropr.com/09d9d814-0d15-4de8-9698-aa928174cc5d/&quot;); background-position: center top; background-repeat: no-repeat; background-size: 600px;">
                                    <div class="ddr-widget__image " style="justify-content: center;"><a target="_self" style="width: 248px; height: auto; margin-top: 30px; padding-top: 0px;"><img src="https://cdn.dragdropr.com/a95b93e7-c700-4dc6-9996-0875938253f5/" style="height: auto; width: 248px;"></a></div>
                                </div>
                            </div>
                            <div id="ddr-b90078c60c" class="ddr-page-widget ddr-page-widget__rich-text ddr-page-widget-1 ">
                                <div class="ddr-widget " style="background-position: center center; background-size: 600px; background-repeat: no-repeat; background-image: url(&quot;https://cdn.dragdropr.com/928e60ea-56a5-4eec-a112-76643cc6c0d6/&quot;);">
                                    <div id="ddr-rich-text-4011" class="ddr-widget__rich-text " style="margin: 0px 30px;">
                                        <p style="text-align: center;"><?=$name?></p>
                                        <p style="text-align: center;"><strong><?=$price?></strong></p>
                                    </div>
                                </div>
                            </div>
                            <div id="ddr-860bb81ce7" class="ddr-page-widget ddr-page-widget__button ddr-page-widget-2 ">
                                <div class="ddr-widget " style="background-image: url(&quot;https://cdn.dragdropr.com/24872350-20ab-4d7f-a18a-fafaf4dd49e3/&quot;); background-position: center center; background-repeat: no-repeat; background-size: 600px;">
                                    <div class="ddr-widget__button " style="justify-content: center;"><a target="_self" style="margin: 0px 0px 35px;">
                                            <div id="button-4012" style="padding: 10px 35px; font-size: 16px;">ADD TO CART</div>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                        <div class="ddr-page-column ddr-page-column-2 ddr-page-column__wrap--320 ddr-page-column__wrap--480 " style="width: 25%;">
                            <div id="ddr-e17244904a" class="ddr-page-widget ddr-page-widget__image ddr-page-widget-0 ">
                                <div class="ddr-widget " style="background-image: url(&quot;https://cdn.dragdropr.com/09d9d814-0d15-4de8-9698-aa928174cc5d/&quot;); background-position: center top; background-repeat: no-repeat; background-size: 600px;">
                                    <div class="ddr-widget__image " style="justify-content: center;"><a target="_self" style="width: 248px; height: auto; margin-top: 30px; padding-top: 0px;"><img src="https://cdn.dragdropr.com/47c96630-6685-46d3-a6bd-70140e173bd4/" style="height: auto; width: 248px;"></a></div>
                                </div>
                            </div>
                            <div id="ddr-a5f545d241" class="ddr-page-widget ddr-page-widget__rich-text ddr-page-widget-1 ">
                                <div class="ddr-widget " style="background-position: center center; background-size: 600px; background-repeat: no-repeat; background-image: url(&quot;https://cdn.dragdropr.com/928e60ea-56a5-4eec-a112-76643cc6c0d6/&quot;);">
                                    <div id="ddr-rich-text-4021" class="ddr-widget__rich-text " style="margin: 0px 30px;">
                                        <p style="text-align: center;"><?=$name?></p>
                                        <p style="text-align: center;"><strong><?=$price?></strong></p>
                                    </div>
                                </div>
                            </div>
                            <div id="ddr-8b10982c75" class="ddr-page-widget ddr-page-widget__button ddr-page-widget-2 ">
                                <div class="ddr-widget " style="background-image: url(&quot;https://cdn.dragdropr.com/24872350-20ab-4d7f-a18a-fafaf4dd49e3/&quot;); background-position: center center; background-repeat: no-repeat; background-size: 600px;">
                                    <div class="ddr-widget__button " style="justify-content: center;"><a target="_self" style="margin: 0px 0px 35px;">
                                            <div id="button-4022" style="padding: 10px 35px; font-size: 16px;">ADD TO CART</div>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                        <div class="ddr-page-column ddr-page-column-3 ddr-page-column__wrap--320 ddr-page-column__wrap--480 " style="width: 25%;">
                            <div id="ddr-b6f59a90f1" class="ddr-page-widget ddr-page-widget__image ddr-page-widget-0 ">
                                <div class="ddr-widget " style="background-image: url(&quot;https://cdn.dragdropr.com/09d9d814-0d15-4de8-9698-aa928174cc5d/&quot;); background-position: center top; background-repeat: no-repeat; background-size: 600px;">
                                    <div class="ddr-widget__image " style="justify-content: center;"><a target="_self" style="width: 248px; height: auto; margin-top: 30px; padding-top: 0px;"><img src="https://cdn.dragdropr.com/f5ca5582-ba21-4b73-a33d-f1cf33a8dbf0/" style="height: auto; width: 248px;"></a></div>
                                </div>
                            </div>
                            <div id="ddr-9813bf9415" class="ddr-page-widget ddr-page-widget__rich-text ddr-page-widget-1 ">
                                <div class="ddr-widget " style="background-position: center center; background-size: 600px; background-repeat: no-repeat; background-image: url(&quot;https://cdn.dragdropr.com/928e60ea-56a5-4eec-a112-76643cc6c0d6/&quot;);">
                                    <div id="ddr-rich-text-4031" class="ddr-widget__rich-text " style="margin: 0px 30px;">
                                        <p style="text-align: center;"><?=$name?></p>
                                        <p style="text-align: center;"><strong><?=$price?></strong></p>
                                    </div>
                                </div>
                            </div>
                            <div id="ddr-840d3a618f" class="ddr-page-widget ddr-page-widget__button ddr-page-widget-2 ">
                                <div class="ddr-widget " style="background-image: url(&quot;https://cdn.dragdropr.com/24872350-20ab-4d7f-a18a-fafaf4dd49e3/&quot;); background-position: center center; background-repeat: no-repeat; background-size: 600px;">
                                    <div class="ddr-widget__button " style="justify-content: center;"><a target="_self" style="margin: 0px 0px 35px;">
                                            <div id="button-4032" style="padding: 10px 35px; font-size: 16px;">ADD TO CART</div>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ddr-page-row ddr-page-row-5 ddr-page-row__wrap--320 ddr-page-row__wrap--480 ddr-page-row__wrap--768">
            <div class="ddr-page-column ddr-page-column-0 ddr-page-column__wrap--320 ddr-page-column__wrap--480 ddr-page-column__wrap--768 ddr-page-column__hide--480 ddr-page-column__hide--768" style="width: 100%;">
                <div id="ddr-fe23c29fb8" class="ddr-page-widget ddr-page-widget__spacer ddr-page-widget-0 ddr-page-widget__hide--480 ddr-page-widget__hide--768">
                    <div class="ddr-widget " style="background-color: rgba(243, 243, 243, 0.8);">
                        <div class="ddr-widget__spacer " style="height: 100px;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div id="ddr-2381c5757f" class="ddr-page-section-wrapper ddr-page-section-wrapper-6" style="background-color: rgb(255, 255, 255);">
            <div class="ddr-page-section-pre-content ddr-page-section-pre-content-6" style="max-width: 1200px; margin: auto;">
                <div class="ddr-page-section ddr-page-section-6">
                    <div class="ddr-page-row ddr-page-row-0 ddr-page-row__wrap--320 ddr-page-row__wrap--480">
                        <div class="ddr-page-column ddr-page-column-0 ddr-page-column__wrap--320 ddr-page-column__wrap--480 " style="width: 20%;">
                            <div id="ddr-c9acdfacc7" class="ddr-page-widget ddr-page-widget__image ddr-page-widget-0 ">
                                <div class="ddr-widget ">
                                    <div class="ddr-widget__image " style="justify-content: center;"><a target="_self" style="width: 213px; height: auto; margin-left: 25px; margin-top: 30px; margin-bottom: 0px;"><img src="https://cdn.dragdropr.com/2f52f560-c931-4ad8-9fa0-1353b8566afc/" style="height: auto; width: 213px;"></a></div>
                                </div>
                            </div>
                            <div id="ddr-0935c78cb0" class="ddr-page-widget ddr-page-widget__rich-text ddr-page-widget-1 ">
                                <div class="ddr-widget ">
                                    <div id="ddr-rich-text-6001" class="ddr-widget__rich-text " style="margin: 0px 30px 0px 25px;">
                                        <p><span style="font-size: 14px; color: #999999;">Address 1</span></p>
                                        <p><span style="font-size: 14px; color: #999999;">Address 2</span></p>
                                        <p><span style="font-size: 14px; color: #999999;">Tel: 0123456</span></p>
                                        <p><span style="font-size: 14px; color: #999999;">email: info@about.com</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ddr-page-column ddr-page-column-1 ddr-page-column__wrap--320 ddr-page-column__wrap--480 " style="width: 20%;">
                            <div id="ddr-baed2bc39e" class="ddr-page-widget ddr-page-widget__rich-text ddr-page-widget-0 ">
                                <div class="ddr-widget ">
                                    <div id="ddr-rich-text-6010" class="ddr-widget__rich-text " style="margin: 30px;">
                                        <p><strong>First Column</strong></p>
                                        <p><span style="font-size: 14px;">First Page</span></p>
                                        <p><span style="font-size: 14px;">Second Page</span></p>
                                        <p><span style="font-size: 14px;">Third Page</span></p>
                                        <p><span style="font-size: 14px;">Fourth Page</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ddr-page-column ddr-page-column-2 ddr-page-column__wrap--320 ddr-page-column__wrap--480 " style="width: 20%;">
                            <div id="ddr-4715ebb8b1" class="ddr-page-widget ddr-page-widget__rich-text ddr-page-widget-0 ">
                                <div class="ddr-widget ">
                                    <div id="ddr-rich-text-6020" class="ddr-widget__rich-text " style="margin: 30px;">
                                        <p><strong>Second Column</strong></p>
                                        <p><span style="font-size: 14px;">First Page</span></p>
                                        <p><span style="font-size: 14px;">Second Page</span></p>
                                        <p><span style="font-size: 14px;">Third Page</span></p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ddr-page-column ddr-page-column-3 ddr-page-column__wrap--320 ddr-page-column__wrap--480 " style="width: 20%;">
                            <div id="ddr-ce59e49c71" class="ddr-page-widget ddr-page-widget__rich-text ddr-page-widget-0 ">
                                <div class="ddr-widget ">
                                    <div id="ddr-rich-text-6030" class="ddr-widget__rich-text " style="margin: 30px;">
                                        <p><strong>Third Column</strong></p>
                                        <p><span style="font-size: 14px;">First Page</span></p>
                                        <p><span style="font-size: 14px;">Second Page</span></p>
                                        <p><span style="font-size: 14px;">Third Page</span></p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ddr-page-column ddr-page-column-4 ddr-page-column__wrap--320 ddr-page-column__wrap--480 " style="width: 20%;">
                            <div id="ddr-f8227ed1d9" class="ddr-page-widget ddr-page-widget__rich-text ddr-page-widget-0 ">
                                <div class="ddr-widget ">
                                    <div id="ddr-rich-text-6040" class="ddr-widget__rich-text " style="margin: 30px;">
                                        <p><strong>Follow Us</strong></p>
                                        <p><strong><span style="font-family: helvetica, arial, sans-serif;"><em><span style="font-size: 14px;">Instagram</span></em></span></strong></p>
                                        <p><strong><span style="font-family: helvetica, arial, sans-serif;"><em><span style="font-size: 14px;">Facebook </span></em></span></strong></p>
                                        <p><strong><span style="font-family: helvetica, arial, sans-serif;"><em><span style="font-size: 14px;">Twitter</span></em></span></strong></p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="ddr-c5735a6506" class="ddr-page-section-wrapper ddr-page-section-wrapper-7" style="background-color: rgb(236, 236, 236);">
            <div class="ddr-page-section-pre-content ddr-page-section-pre-content-7" style="max-width: 1200px; margin: auto;">
                <div class="ddr-page-section ddr-page-section-7">
                    <div class="ddr-page-row ddr-page-row-0 ddr-page-row__wrap--320 ddr-page-row__wrap--480">
                        <div class="ddr-page-column ddr-page-column-0 ddr-page-column__wrap--320 ddr-page-column__wrap--480 " style="width: 50%;">
                            <div id="ddr-a44a048835" class="ddr-page-widget ddr-page-widget__rich-text ddr-page-widget-0 ">
                                <div class="ddr-widget ">
                                    <div id="ddr-rich-text-7000" class="ddr-widget__rich-text " style="margin: 11px;">
                                        <p style="text-align: left;"><span style="font-size: 13px; color: #999999;">© 2019 Nelson / ALL RIGHTS RESERVED</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ddr-page-column ddr-page-column-1 ddr-page-column__wrap--320 ddr-page-column__wrap--480 " style="width: 50%;">
                            <div id="ddr-f400435da5" class="ddr-page-widget ddr-page-widget__rich-text ddr-page-widget-0 ">
                                <div class="ddr-widget ">
                                    <div id="ddr-rich-text-7010" class="ddr-widget__rich-text " style="margin: 11px;">
                                        <p style="text-align: right;"><span style="font-size: 13px; color: #999999;">Privacy Policy&nbsp; &nbsp; Terms of Service</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>