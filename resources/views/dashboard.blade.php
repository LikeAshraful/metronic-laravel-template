@extends('layout.app')
@section('content')

    <div class="content d-flex flex-column flex-column-fluid pt-4" id="kt_content">
        <!--begin::Container-->
        <div id="kt_content_container" class=" container-xxl ">
            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
                   

                    {{-- <!--begin::Chart widget 11-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-dark">Delivery Stats</span>
                                <span class="text-gray-400 mt-1 fw-semibold fs-6">Users from all channels</span>
                            </h3>
                            <!--end::Title-->

                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <ul class="nav" id="kt_chart_widget_11_tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1"
                                            data-bs-toggle="tab" id="kt_charts_widget_11_tab_1"
                                            href="#kt_chart_widget_11_tab_content_1" aria-selected="false" tabindex="-1"
                                            role="tab">2020</a>
                                    </li>

                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1"
                                            data-bs-toggle="tab" id="kt_charts_widget_11_tab_2"
                                            href="#kt_chart_widget_11_tab_content_2" aria-selected="false" tabindex="-1"
                                            role="tab">2021</a>
                                    </li>

                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1 active"
                                            data-bs-toggle="tab" id="kt_charts_widget_11_tab_3"
                                            href="#kt_chart_widget_11_tab_content_3" aria-selected="true"
                                            role="tab">Month</a>
                                    </li>
                                </ul>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div class="card-body pb-0 pt-4">
                            <!--begin::Tab content-->
                            <div class="tab-content">
                                <!--begin::Tab pane-->
                                <div class="tab-pane fade" id="kt_chart_widget_11_tab_content_1" role="tabpanel"
                                    aria-labelledby="#kt_charts_widget_11_tab_1">
                                    <!--begin::Statistics-->
                                    <div class="mb-2">
                                        <!--begin::Statistics-->
                                        <span class="fs-2hx fw-bold d-block text-gray-800 me-2 mb-2 lh-1 ls-n2">1,349</span>
                                        <!--end::Statistics-->

                                        <!--begin::Description-->
                                        <span class="fs-6 fw-semibold text-gray-400">Avarage cost per iteraction</span>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Statistics-->

                                    <!--begin::Chart-->
                                    <div id="kt_charts_widget_11_chart_1" class="ms-n5 me-n3 min-h-auto w-100"
                                        style="height: 300px"></div>
                                    <!--end::Chart-->
                                </div>
                                <!--end::Tab pane-->

                                <!--begin::Tab pane-->
                                <div class="tab-pane fade" id="kt_chart_widget_11_tab_content_2" role="tabpanel"
                                    aria-labelledby="#kt_charts_widget_11_tab_2">
                                    <!--begin::Statistics-->
                                    <div class="mb-2">
                                        <!--begin::Statistics-->
                                        <span class="fs-2hx fw-bold d-block text-gray-800 me-2 mb-2 lh-1 ls-n2">3,492</span>
                                        <!--end::Statistics-->

                                        <!--begin::Description-->
                                        <span class="fs-6 fw-semibold text-gray-400">Avarage cost per iteraction</span>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Statistics-->

                                    <!--begin::Chart-->
                                    <div id="kt_charts_widget_11_chart_2" class="ms-n5 me-n3 min-h-auto"
                                        style="height: 300px"></div>
                                    <!--end::Chart-->
                                </div>
                                <!--end::Tab pane-->

                                <!--begin::Tab pane-->
                                <div class="tab-pane fade active show" id="kt_chart_widget_11_tab_content_3" role="tabpanel"
                                    aria-labelledby="#kt_charts_widget_11_tab_3">
                                    <!--begin::Statistics-->
                                    <div class="mb-2">
                                        <!--begin::Statistics-->
                                        <span class="fs-2hx fw-bold d-block text-gray-800 me-2 mb-2 lh-1 ls-n2">4,796</span>
                                        <!--end::Statistics-->

                                        <!--begin::Description-->
                                        <span class="fs-6 fw-semibold text-gray-400">Deliveries in 30 Days</span>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Statistics-->

                                    <!--begin::Chart-->
                                    <div id="kt_charts_widget_11_chart_3" class="ms-n5 me-n3 min-h-auto"
                                        style="height: 300px; min-height: 315px;">
                                        <div id="apexcharts5a8fkurok"
                                            class="apexcharts-canvas apexcharts5a8fkurok apexcharts-theme-light"
                                            style="width: 723px; height: 300px;"><svg id="SvgjsSvg1006" width="723"
                                                height="300" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
                                                class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
                                                transform="translate(0, 0)" style="background: transparent;">
                                                <g id="SvgjsG1008" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(43.015625, 30)">
                                                    <defs id="SvgjsDefs1007">
                                                        <clipPath id="gridRectMask5a8fkurok">
                                                            <rect id="SvgjsRect1013" width="676.984375"
                                                                height="223.74133333333333" x="-3.5" y="-1.5"
                                                                rx="0" ry="0" opacity="1"
                                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMask5a8fkurok"></clipPath>
                                                        <clipPath id="nonForecastMask5a8fkurok"></clipPath>
                                                        <clipPath id="gridRectMarkerMask5a8fkurok">
                                                            <rect id="SvgjsRect1014" width="673.984375"
                                                                height="224.74133333333333" x="-2" y="-2"
                                                                rx="0" ry="0" opacity="1"
                                                                stroke-width="0" stroke="none" stroke-dasharray="0"
                                                                fill="#fff"></rect>
                                                        </clipPath>
                                                        <linearGradient id="SvgjsLinearGradient1019" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop1020" stop-opacity="0.4"
                                                                stop-color="rgba(80,205,137,0.4)" offset="0"></stop>
                                                            <stop id="SvgjsStop1021" stop-opacity="0"
                                                                stop-color="rgba(255,255,255,0)" offset="0.8"></stop>
                                                            <stop id="SvgjsStop1022" stop-opacity="0"
                                                                stop-color="rgba(255,255,255,0)" offset="1"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <g id="SvgjsG1025" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG1026" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -10)"><text id="SvgjsText1028"
                                                                font-family="inherit" x="0"
                                                                y="243.74133333333333" text-anchor="end"
                                                                dominant-baseline="auto" font-size="13px"
                                                                font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1029"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1031" font-family="inherit"
                                                                x="23.10290948275862" y="243.74133333333333"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1032"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1034" font-family="inherit"
                                                                x="46.20581896551724" y="243.74133333333333"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1035"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1037" font-family="inherit"
                                                                x="69.30872844827587" y="243.74133333333333"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1038"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1040" font-family="inherit"
                                                                x="92.41163793103448" y="243.74133333333333"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1041"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1043" font-family="inherit"
                                                                x="115.51454741379311" y="243.74133333333333"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 116.51454162597656 237.7413330078125)">
                                                                <tspan id="SvgjsTspan1044">Apr 06</tspan>
                                                                <title>Apr 06</title>
                                                            </text><text id="SvgjsText1046" font-family="inherit"
                                                                x="138.61745689655174" y="243.74133333333333"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1047"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1049" font-family="inherit"
                                                                x="161.72036637931035" y="243.74133333333333"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1050"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1052" font-family="inherit"
                                                                x="184.82327586206895" y="243.74133333333333"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1053"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1055" font-family="inherit"
                                                                x="207.92618534482756" y="243.74133333333333"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1056"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1058" font-family="inherit"
                                                                x="231.02909482758616" y="243.74133333333333"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 232.02908325195312 237.7413330078125)">
                                                                <tspan id="SvgjsTspan1059">Apr 10</tspan>
                                                                <title>Apr 10</title>
                                                            </text><text id="SvgjsText1061" font-family="inherit"
                                                                x="254.13200431034477" y="243.74133333333333"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1062"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1064" font-family="inherit"
                                                                x="277.2349137931034" y="243.74133333333333"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1065"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1067" font-family="inherit"
                                                                x="300.337823275862" y="243.74133333333333"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1068"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1070" font-family="inherit"
                                                                x="323.4407327586206" y="243.74133333333333"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1071"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1073" font-family="inherit"
                                                                x="346.5436422413792" y="243.74133333333333"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 347.54364013671875 237.7413330078125)">
                                                                <tspan id="SvgjsTspan1074">Apr 14</tspan>
                                                                <title>Apr 14</title>
                                                            </text><text id="SvgjsText1076" font-family="inherit"
                                                                x="369.6465517241378" y="243.74133333333333"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1077"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1079" font-family="inherit"
                                                                x="392.7494612068964" y="243.74133333333333"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1080"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1082" font-family="inherit"
                                                                x="415.852370689655" y="243.74133333333333"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1083"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1085" font-family="inherit"
                                                                x="438.9552801724136" y="243.74133333333333"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1086"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1088" font-family="inherit"
                                                                x="462.0581896551722" y="243.74133333333333"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 463.0581970214844 237.7413330078125)">
                                                                <tspan id="SvgjsTspan1089">Apr 18</tspan>
                                                                <title>Apr 18</title>
                                                            </text><text id="SvgjsText1091" font-family="inherit"
                                                                x="485.1610991379308" y="243.74133333333333"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1092"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1094" font-family="inherit"
                                                                x="508.2640086206894" y="243.74133333333333"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1095"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1097" font-family="inherit"
                                                                x="531.366918103448" y="243.74133333333333"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1098"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1100" font-family="inherit"
                                                                x="554.4698275862066" y="243.74133333333333"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1101"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1103" font-family="inherit"
                                                                x="577.5727370689652" y="243.74133333333333"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;"
                                                                transform="rotate(0 578.6323852539062 237.7413330078125)">
                                                                <tspan id="SvgjsTspan1104">Apr 22</tspan>
                                                                <title>Apr 22</title>
                                                            </text><text id="SvgjsText1106" font-family="inherit"
                                                                x="600.6756465517238" y="243.74133333333333"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1107"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1109" font-family="inherit"
                                                                x="623.7785560344824" y="243.74133333333333"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1110"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1112" font-family="inherit"
                                                                x="646.881465517241" y="243.74133333333333"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1113"></tspan>
                                                                <title></title>
                                                            </text><text id="SvgjsText1115" font-family="inherit"
                                                                x="669.9843749999997" y="243.74133333333333"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;" transform="rotate(0 1 -1)">
                                                                <tspan id="SvgjsTspan1116"></tspan>
                                                                <title></title>
                                                            </text></g>
                                                    </g>
                                                    <g id="SvgjsG1134" class="apexcharts-grid">
                                                        <g id="SvgjsG1135" class="apexcharts-gridlines-horizontal">
                                                            <line id="SvgjsLine1137" x1="0" y1="0"
                                                                x2="669.984375" y2="0" stroke="#e1e3ea"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1138" x1="0"
                                                                y1="55.18533333333333" x2="669.984375"
                                                                y2="55.18533333333333" stroke="#e1e3ea"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1139" x1="0"
                                                                y1="110.37066666666666" x2="669.984375"
                                                                y2="110.37066666666666" stroke="#e1e3ea"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1140" x1="0"
                                                                y1="165.55599999999998" x2="669.984375"
                                                                y2="165.55599999999998" stroke="#e1e3ea"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1141" x1="0"
                                                                y1="220.74133333333333" x2="669.984375"
                                                                y2="220.74133333333333" stroke="#e1e3ea"
                                                                stroke-dasharray="3" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG1136" class="apexcharts-gridlines-vertical"></g>
                                                        <line id="SvgjsLine1143" x1="0" y1="220.74133333333333"
                                                            x2="669.984375" y2="220.74133333333333" stroke="transparent"
                                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        <line id="SvgjsLine1142" x1="0" y1="1"
                                                            x2="0" y2="220.74133333333333" stroke="transparent"
                                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                                    </g>
                                                    <g id="SvgjsG1015"
                                                        class="apexcharts-area-series apexcharts-plot-series">
                                                        <g id="SvgjsG1016" class="apexcharts-series"
                                                            seriesName="Deliveries" data:longestSeries="true"
                                                            rel="1" data:realIndex="0">
                                                            <path id="SvgjsPath1023"
                                                                d="M0 220.74133333333333L0 110.37066666666664C8.086018318965516 110.37066666666664 15.016891163793103 63.06895238095234 23.10290948275862 63.06895238095234C31.188927801724134 63.06895238095234 38.119800646551724 63.06895238095234 46.20581896551724 63.06895238095234C54.29183728448275 63.06895238095234 61.22271012931034 78.83619047619044 69.30872844827586 78.83619047619044C77.39474676724137 78.83619047619044 84.32561961206896 78.83619047619044 92.41163793103448 78.83619047619044C100.49765624999999 78.83619047619044 107.42852909482758 110.37066666666664 115.5145474137931 110.37066666666664C123.60056573275861 110.37066666666664 130.5314385775862 110.37066666666664 138.61745689655172 110.37066666666664C146.70347521551724 110.37066666666664 153.63434806034482 78.83619047619044 161.72036637931035 78.83619047619044C169.80638469827585 78.83619047619044 176.73725754310345 78.83619047619044 184.82327586206895 78.83619047619044C192.90929418103448 78.83619047619044 199.84016702586206 47.30171428571424 207.9261853448276 47.30171428571424C216.0122036637931 47.30171428571424 222.9430765086207 47.30171428571424 231.0290948275862 47.30171428571424C239.11511314655172 47.30171428571424 246.0459859913793 78.83619047619044 254.13200431034483 78.83619047619044C262.2180226293103 78.83619047619044 269.14889547413793 78.83619047619044 277.23491379310343 78.83619047619044C285.32093211206893 78.83619047619044 292.25180495689654 47.30171428571424 300.33782327586204 47.30171428571424C308.4238415948276 47.30171428571424 315.35471443965514 47.30171428571424 323.4407327586207 47.30171428571424C331.5267510775862 47.30171428571424 338.4576239224138 94.60342857142854 346.5436422413793 94.60342857142854C354.6296605603448 94.60342857142854 361.5605334051724 94.60342857142854 369.6465517241379 94.60342857142854C377.7325700431034 94.60342857142854 384.663442887931 126.13790476190474 392.7494612068965 126.13790476190474C400.83547952586207 126.13790476190474 407.7663523706896 110.37066666666664 415.8523706896552 110.37066666666664C423.9383890086207 110.37066666666664 430.8692618534483 110.37066666666664 438.9552801724138 110.37066666666664C447.0412984913793 110.37066666666664 453.9721713362069 78.83619047619044 462.0581896551724 78.83619047619044C470.1442079741379 78.83619047619044 477.0750808189655 78.83619047619044 485.161099137931 78.83619047619044C493.24711745689655 78.83619047619044 500.1779903017241 47.30171428571424 508.26400862068965 47.30171428571424C516.3500269396552 47.30171428571424 523.2808997844827 47.30171428571424 531.3669181034483 47.30171428571424C539.4529364224138 47.30171428571424 546.3838092672413 78.83619047619044 554.4698275862069 78.83619047619044C562.5558459051724 78.83619047619044 569.4867187499999 78.83619047619044 577.5727370689655 78.83619047619044C585.658755387931 78.83619047619044 592.5896282327585 110.37066666666664 600.6756465517241 110.37066666666664C608.7616648706896 110.37066666666664 615.6925377155171 110.37066666666664 623.7785560344827 110.37066666666664C631.8645743534482 110.37066666666664 638.7954471982758 94.60342857142854 646.8814655172414 94.60342857142854C654.967483836207 94.60342857142854 661.8983566810344 94.60342857142854 669.984375 94.60342857142854C669.984375 94.60342857142854 669.984375 94.60342857142854 669.984375 220.74133333333333M669.984375 94.60342857142854C669.984375 94.60342857142854 669.984375 94.60342857142854 669.984375 94.60342857142854 "
                                                                fill="url(#SvgjsLinearGradient1019)" fill-opacity="1"
                                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
                                                                stroke-dasharray="0" class="apexcharts-area"
                                                                index="0" clip-path="url(#gridRectMask5a8fkurok)"
                                                                pathTo="M 0 220.74133333333333L 0 110.37066666666664C 8.086018318965516 110.37066666666664 15.016891163793103 63.06895238095234 23.10290948275862 63.06895238095234C 31.188927801724134 63.06895238095234 38.119800646551724 63.06895238095234 46.20581896551724 63.06895238095234C 54.29183728448275 63.06895238095234 61.22271012931034 78.83619047619044 69.30872844827586 78.83619047619044C 77.39474676724137 78.83619047619044 84.32561961206896 78.83619047619044 92.41163793103448 78.83619047619044C 100.49765624999999 78.83619047619044 107.42852909482758 110.37066666666664 115.5145474137931 110.37066666666664C 123.60056573275861 110.37066666666664 130.5314385775862 110.37066666666664 138.61745689655172 110.37066666666664C 146.70347521551724 110.37066666666664 153.63434806034482 78.83619047619044 161.72036637931035 78.83619047619044C 169.80638469827585 78.83619047619044 176.73725754310345 78.83619047619044 184.82327586206895 78.83619047619044C 192.90929418103448 78.83619047619044 199.84016702586206 47.30171428571424 207.9261853448276 47.30171428571424C 216.0122036637931 47.30171428571424 222.9430765086207 47.30171428571424 231.0290948275862 47.30171428571424C 239.11511314655172 47.30171428571424 246.0459859913793 78.83619047619044 254.13200431034483 78.83619047619044C 262.2180226293103 78.83619047619044 269.14889547413793 78.83619047619044 277.23491379310343 78.83619047619044C 285.32093211206893 78.83619047619044 292.25180495689654 47.30171428571424 300.33782327586204 47.30171428571424C 308.4238415948276 47.30171428571424 315.35471443965514 47.30171428571424 323.4407327586207 47.30171428571424C 331.5267510775862 47.30171428571424 338.4576239224138 94.60342857142854 346.5436422413793 94.60342857142854C 354.6296605603448 94.60342857142854 361.5605334051724 94.60342857142854 369.6465517241379 94.60342857142854C 377.7325700431034 94.60342857142854 384.663442887931 126.13790476190474 392.7494612068965 126.13790476190474C 400.83547952586207 126.13790476190474 407.7663523706896 110.37066666666664 415.8523706896552 110.37066666666664C 423.9383890086207 110.37066666666664 430.8692618534483 110.37066666666664 438.9552801724138 110.37066666666664C 447.0412984913793 110.37066666666664 453.9721713362069 78.83619047619044 462.0581896551724 78.83619047619044C 470.1442079741379 78.83619047619044 477.0750808189655 78.83619047619044 485.161099137931 78.83619047619044C 493.24711745689655 78.83619047619044 500.1779903017241 47.30171428571424 508.26400862068965 47.30171428571424C 516.3500269396552 47.30171428571424 523.2808997844827 47.30171428571424 531.3669181034483 47.30171428571424C 539.4529364224138 47.30171428571424 546.3838092672413 78.83619047619044 554.4698275862069 78.83619047619044C 562.5558459051724 78.83619047619044 569.4867187499999 78.83619047619044 577.5727370689655 78.83619047619044C 585.658755387931 78.83619047619044 592.5896282327585 110.37066666666664 600.6756465517241 110.37066666666664C 608.7616648706896 110.37066666666664 615.6925377155171 110.37066666666664 623.7785560344827 110.37066666666664C 631.8645743534482 110.37066666666664 638.7954471982758 94.60342857142854 646.8814655172414 94.60342857142854C 654.967483836207 94.60342857142854 661.8983566810344 94.60342857142854 669.984375 94.60342857142854C 669.984375 94.60342857142854 669.984375 94.60342857142854 669.984375 220.74133333333333M 669.984375 94.60342857142854z"
                                                                pathFrom="M -1 378.41371428571426L -1 378.41371428571426L 23.10290948275862 378.41371428571426L 46.20581896551724 378.41371428571426L 69.30872844827586 378.41371428571426L 92.41163793103448 378.41371428571426L 115.5145474137931 378.41371428571426L 138.61745689655172 378.41371428571426L 161.72036637931035 378.41371428571426L 184.82327586206895 378.41371428571426L 207.9261853448276 378.41371428571426L 231.0290948275862 378.41371428571426L 254.13200431034483 378.41371428571426L 277.23491379310343 378.41371428571426L 300.33782327586204 378.41371428571426L 323.4407327586207 378.41371428571426L 346.5436422413793 378.41371428571426L 369.6465517241379 378.41371428571426L 392.7494612068965 378.41371428571426L 415.8523706896552 378.41371428571426L 438.9552801724138 378.41371428571426L 462.0581896551724 378.41371428571426L 485.161099137931 378.41371428571426L 508.26400862068965 378.41371428571426L 531.3669181034483 378.41371428571426L 554.4698275862069 378.41371428571426L 577.5727370689655 378.41371428571426L 600.6756465517241 378.41371428571426L 623.7785560344827 378.41371428571426L 646.8814655172414 378.41371428571426L 669.984375 378.41371428571426">
                                                            </path>
                                                            <path id="SvgjsPath1024"
                                                                d="M0 110.37066666666664C8.086018318965516 110.37066666666664 15.016891163793105 63.06895238095234 23.10290948275862 63.06895238095234C31.188927801724134 63.06895238095234 38.119800646551724 63.06895238095234 46.20581896551724 63.06895238095234C54.29183728448275 63.06895238095234 61.22271012931034 78.83619047619044 69.30872844827586 78.83619047619044C77.39474676724137 78.83619047619044 84.32561961206896 78.83619047619044 92.41163793103448 78.83619047619044C100.49765624999999 78.83619047619044 107.42852909482758 110.37066666666664 115.5145474137931 110.37066666666664C123.60056573275861 110.37066666666664 130.5314385775862 110.37066666666664 138.61745689655172 110.37066666666664C146.70347521551724 110.37066666666664 153.63434806034482 78.83619047619044 161.72036637931035 78.83619047619044C169.80638469827585 78.83619047619044 176.73725754310345 78.83619047619044 184.82327586206895 78.83619047619044C192.90929418103448 78.83619047619044 199.84016702586206 47.30171428571424 207.9261853448276 47.30171428571424C216.0122036637931 47.30171428571424 222.9430765086207 47.30171428571424 231.0290948275862 47.30171428571424C239.11511314655172 47.30171428571424 246.0459859913793 78.83619047619044 254.13200431034483 78.83619047619044C262.2180226293103 78.83619047619044 269.14889547413793 78.83619047619044 277.23491379310343 78.83619047619044C285.32093211206893 78.83619047619044 292.25180495689654 47.30171428571424 300.33782327586204 47.30171428571424C308.4238415948276 47.30171428571424 315.35471443965514 47.30171428571424 323.4407327586207 47.30171428571424C331.5267510775862 47.30171428571424 338.4576239224138 94.60342857142854 346.5436422413793 94.60342857142854C354.6296605603448 94.60342857142854 361.5605334051724 94.60342857142854 369.6465517241379 94.60342857142854C377.7325700431034 94.60342857142854 384.663442887931 126.13790476190474 392.7494612068965 126.13790476190474C400.83547952586207 126.13790476190474 407.7663523706896 110.37066666666664 415.8523706896552 110.37066666666664C423.9383890086207 110.37066666666664 430.8692618534483 110.37066666666664 438.9552801724138 110.37066666666664C447.0412984913793 110.37066666666664 453.9721713362069 78.83619047619044 462.0581896551724 78.83619047619044C470.1442079741379 78.83619047619044 477.0750808189655 78.83619047619044 485.161099137931 78.83619047619044C493.24711745689655 78.83619047619044 500.1779903017241 47.30171428571424 508.26400862068965 47.30171428571424C516.3500269396552 47.30171428571424 523.2808997844827 47.30171428571424 531.3669181034483 47.30171428571424C539.4529364224138 47.30171428571424 546.3838092672413 78.83619047619044 554.4698275862069 78.83619047619044C562.5558459051724 78.83619047619044 569.4867187499999 78.83619047619044 577.5727370689655 78.83619047619044C585.658755387931 78.83619047619044 592.5896282327585 110.37066666666664 600.6756465517241 110.37066666666664C608.7616648706896 110.37066666666664 615.6925377155171 110.37066666666664 623.7785560344827 110.37066666666664C631.8645743534482 110.37066666666664 638.7954471982758 94.60342857142854 646.8814655172414 94.60342857142854C654.967483836207 94.60342857142854 661.8983566810344 94.60342857142854 669.984375 94.60342857142854C669.984375 94.60342857142854 669.984375 94.60342857142854 669.984375 94.60342857142854 "
                                                                fill="none" fill-opacity="1" stroke="#50cd89"
                                                                stroke-opacity="1" stroke-linecap="butt" stroke-width="3"
                                                                stroke-dasharray="0" class="apexcharts-area"
                                                                index="0" clip-path="url(#gridRectMask5a8fkurok)"
                                                                pathTo="M 0 110.37066666666664C 8.086018318965516 110.37066666666664 15.016891163793103 63.06895238095234 23.10290948275862 63.06895238095234C 31.188927801724134 63.06895238095234 38.119800646551724 63.06895238095234 46.20581896551724 63.06895238095234C 54.29183728448275 63.06895238095234 61.22271012931034 78.83619047619044 69.30872844827586 78.83619047619044C 77.39474676724137 78.83619047619044 84.32561961206896 78.83619047619044 92.41163793103448 78.83619047619044C 100.49765624999999 78.83619047619044 107.42852909482758 110.37066666666664 115.5145474137931 110.37066666666664C 123.60056573275861 110.37066666666664 130.5314385775862 110.37066666666664 138.61745689655172 110.37066666666664C 146.70347521551724 110.37066666666664 153.63434806034482 78.83619047619044 161.72036637931035 78.83619047619044C 169.80638469827585 78.83619047619044 176.73725754310345 78.83619047619044 184.82327586206895 78.83619047619044C 192.90929418103448 78.83619047619044 199.84016702586206 47.30171428571424 207.9261853448276 47.30171428571424C 216.0122036637931 47.30171428571424 222.9430765086207 47.30171428571424 231.0290948275862 47.30171428571424C 239.11511314655172 47.30171428571424 246.0459859913793 78.83619047619044 254.13200431034483 78.83619047619044C 262.2180226293103 78.83619047619044 269.14889547413793 78.83619047619044 277.23491379310343 78.83619047619044C 285.32093211206893 78.83619047619044 292.25180495689654 47.30171428571424 300.33782327586204 47.30171428571424C 308.4238415948276 47.30171428571424 315.35471443965514 47.30171428571424 323.4407327586207 47.30171428571424C 331.5267510775862 47.30171428571424 338.4576239224138 94.60342857142854 346.5436422413793 94.60342857142854C 354.6296605603448 94.60342857142854 361.5605334051724 94.60342857142854 369.6465517241379 94.60342857142854C 377.7325700431034 94.60342857142854 384.663442887931 126.13790476190474 392.7494612068965 126.13790476190474C 400.83547952586207 126.13790476190474 407.7663523706896 110.37066666666664 415.8523706896552 110.37066666666664C 423.9383890086207 110.37066666666664 430.8692618534483 110.37066666666664 438.9552801724138 110.37066666666664C 447.0412984913793 110.37066666666664 453.9721713362069 78.83619047619044 462.0581896551724 78.83619047619044C 470.1442079741379 78.83619047619044 477.0750808189655 78.83619047619044 485.161099137931 78.83619047619044C 493.24711745689655 78.83619047619044 500.1779903017241 47.30171428571424 508.26400862068965 47.30171428571424C 516.3500269396552 47.30171428571424 523.2808997844827 47.30171428571424 531.3669181034483 47.30171428571424C 539.4529364224138 47.30171428571424 546.3838092672413 78.83619047619044 554.4698275862069 78.83619047619044C 562.5558459051724 78.83619047619044 569.4867187499999 78.83619047619044 577.5727370689655 78.83619047619044C 585.658755387931 78.83619047619044 592.5896282327585 110.37066666666664 600.6756465517241 110.37066666666664C 608.7616648706896 110.37066666666664 615.6925377155171 110.37066666666664 623.7785560344827 110.37066666666664C 631.8645743534482 110.37066666666664 638.7954471982758 94.60342857142854 646.8814655172414 94.60342857142854C 654.967483836207 94.60342857142854 661.8983566810344 94.60342857142854 669.984375 94.60342857142854"
                                                                pathFrom="M -1 378.41371428571426L -1 378.41371428571426L 23.10290948275862 378.41371428571426L 46.20581896551724 378.41371428571426L 69.30872844827586 378.41371428571426L 92.41163793103448 378.41371428571426L 115.5145474137931 378.41371428571426L 138.61745689655172 378.41371428571426L 161.72036637931035 378.41371428571426L 184.82327586206895 378.41371428571426L 207.9261853448276 378.41371428571426L 231.0290948275862 378.41371428571426L 254.13200431034483 378.41371428571426L 277.23491379310343 378.41371428571426L 300.33782327586204 378.41371428571426L 323.4407327586207 378.41371428571426L 346.5436422413793 378.41371428571426L 369.6465517241379 378.41371428571426L 392.7494612068965 378.41371428571426L 415.8523706896552 378.41371428571426L 438.9552801724138 378.41371428571426L 462.0581896551724 378.41371428571426L 485.161099137931 378.41371428571426L 508.26400862068965 378.41371428571426L 531.3669181034483 378.41371428571426L 554.4698275862069 378.41371428571426L 577.5727370689655 378.41371428571426L 600.6756465517241 378.41371428571426L 623.7785560344827 378.41371428571426L 646.8814655172414 378.41371428571426L 669.984375 378.41371428571426"
                                                                fill-rule="evenodd"></path>
                                                            <g id="SvgjsG1017" class="apexcharts-series-markers-wrap"
                                                                data:realIndex="0">
                                                                <g class="apexcharts-series-markers">
                                                                    <circle id="SvgjsCircle1151" r="0"
                                                                        cx="0" cy="0"
                                                                        class="apexcharts-marker wnfe5cu44 no-pointer-events"
                                                                        stroke="#50cd89" fill="#50cd89" fill-opacity="1"
                                                                        stroke-width="3" stroke-opacity="0.9"
                                                                        default-marker-size="0"></circle>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1018" class="apexcharts-datalabels"
                                                            data:realIndex="0"></g>
                                                    </g>
                                                    <line id="SvgjsLine1145" x1="0" y1="0"
                                                        x2="0" y2="220.74133333333333" stroke="#50cd89"
                                                        stroke-dasharray="3" stroke-linecap="butt"
                                                        class="apexcharts-xcrosshairs" x="0" y="0"
                                                        width="1" height="220.74133333333333" fill="#b1b9c4"
                                                        filter="none" fill-opacity="0.9" stroke-width="1"></line>
                                                    <line id="SvgjsLine1146" x1="0" y1="0"
                                                        x2="669.984375" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1147" x1="0" y1="0"
                                                        x2="669.984375" y2="0" stroke-dasharray="0"
                                                        stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1148" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1149" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1150" class="apexcharts-point-annotations"></g>
                                                    <rect id="SvgjsRect1152" width="0" height="0"
                                                        x="0" y="0" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect">
                                                    </rect>
                                                    <rect id="SvgjsRect1153" width="0" height="0"
                                                        x="0" y="0" rx="0" ry="0"
                                                        opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fefefe"
                                                        class="apexcharts-selection-rect"></rect>
                                                </g>
                                                <g id="SvgjsG1117" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(13.015625, 0)">
                                                    <g id="SvgjsG1118" class="apexcharts-yaxis-texts-g"><text
                                                            id="SvgjsText1120" font-family="inherit" x="20"
                                                            y="31.4" text-anchor="end" dominant-baseline="auto"
                                                            font-size="13px" font-weight="400" fill="#a1a5b7"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1121">24</tspan>
                                                            <title>24</title>
                                                        </text><text id="SvgjsText1123" font-family="inherit"
                                                            x="20" y="86.58533333333334" text-anchor="end"
                                                            dominant-baseline="auto" font-size="13px" font-weight="400"
                                                            fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1124">21</tspan>
                                                            <title>21</title>
                                                        </text><text id="SvgjsText1126" font-family="inherit"
                                                            x="20" y="141.77066666666667" text-anchor="end"
                                                            dominant-baseline="auto" font-size="13px" font-weight="400"
                                                            fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1127">17</tspan>
                                                            <title>17</title>
                                                        </text><text id="SvgjsText1129" font-family="inherit"
                                                            x="20" y="196.956" text-anchor="end"
                                                            dominant-baseline="auto" font-size="13px" font-weight="400"
                                                            fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1130">14</tspan>
                                                            <title>14</title>
                                                        </text><text id="SvgjsText1132" font-family="inherit"
                                                            x="20" y="252.14133333333334" text-anchor="end"
                                                            dominant-baseline="auto" font-size="13px" font-weight="400"
                                                            fill="#a1a5b7" class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1133">10</tspan>
                                                            <title>10</title>
                                                        </text></g>
                                                </g>
                                                <rect id="SvgjsRect1144" width="0" height="0" x="0"
                                                    y="0" rx="0" ry="0" opacity="1"
                                                    stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe">
                                                </rect>
                                                <g id="SvgjsG1009" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend" style="max-height: 150px;"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-title"
                                                    style="font-family: inherit; font-size: 12px;"></div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(80, 205, 137);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: inherit; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                                <div class="apexcharts-xaxistooltip-text"
                                                    style="font-family: inherit; font-size: 13px;"></div>
                                            </div>
                                            <div
                                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Chart-->
                                </div>
                                <!--end::Tab pane-->
                            </div>
                            <!--end::Tab content-->
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Chart widget 11--> --}}
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->

            {{-- <!--begin::Row-->
            <div class="row gy-5 g-xl-10">
                <!--begin::Col-->
                <div class="col-xl-4 mb-xl-10">
                    <!--begin::List widget 16-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Schdule Tracking</span>
                                <span class="text-gray-400 mt-1 fw-semibold fs-6">6 drivers in near you</span>
                            </h3>
                            <!--end::Title-->

                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <a href="#" class="btn btn-sm btn-light" data-bs-toggle="tooltip"
                                    data-bs-dismiss="click" data-bs-custom-class="tooltip-inverse"
                                    data-bs-original-title="Delivery App is coming soon" data-kt-initialized="1">View
                                    All</a>
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div class="card-body pt-4 px-0">
                            <!--begin::Nav-->
                            <ul class="nav nav-pills nav-pills-custom item position-relative mx-9 mb-9" role="tablist">
                                <!--begin::Item-->
                                <li class="nav-item col-4 mx-0 p-0" role="presentation">
                                    <!--begin::Link-->
                                    <a class="nav-link active d-flex justify-content-center w-100 border-0 h-100"
                                        data-bs-toggle="pill" href="#kt_list_widget_16_tab_1" aria-selected="true"
                                        role="tab">
                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">
                                            New
                                        </span>
                                        <!--end::Subtitle-->

                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <li class="nav-item col-4 mx-0 px-0" role="presentation">
                                    <!--begin::Link-->
                                    <a class="nav-link d-flex justify-content-center w-100 border-0 h-100"
                                        data-bs-toggle="pill" href="#kt_list_widget_16_tab_2" aria-selected="false"
                                        tabindex="-1" role="tab">
                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">
                                            Preparing
                                        </span>
                                        <!--end::Subtitle-->

                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <li class="nav-item col-4 mx-0 px-0" role="presentation">
                                    <!--begin::Link-->
                                    <a class="nav-link d-flex justify-content-center w-100 border-0 h-100"
                                        data-bs-toggle="pill" href="#kt_list_widget_16_tab_3" aria-selected="false"
                                        tabindex="-1" role="tab">
                                        <!--begin::Subtitle-->
                                        <span class="nav-text text-gray-800 fw-bold fs-6 mb-3">
                                            Shipping
                                        </span>
                                        <!--end::Subtitle-->

                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-4px bg-primary rounded"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->

                                <!--begin::Bullet-->
                                <span class="position-absolute z-index-1 bottom-0 w-100 h-4px bg-light rounded"></span>
                                <!--end::Bullet-->
                            </ul>
                            <!--end::Nav-->

                            <!--begin::Tab Content-->
                            <div class="tab-content px-9 hover-scroll-overlay-y pe-7 me-3 mb-2" style="height: 454px">

                                <!--begin::Tap pane-->
                                <div class="tab-pane fade show active" id="kt_list_widget_16_tab_1" role="tabpanel">

                                    <!--begin::Item-->
                                    <div class="m-0">
                                        <!--begin::Timeline-->
                                        <div class="timeline ms-n1">
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center mb-4">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px mt-12 mb-n14"></div>
                                                <!--end::Timeline line-->

                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-success"><svg width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->

                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
                                                    <!--begin::Label-->

                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Brooklyn
                                                        Simmons</a>
                                                    <!--end::Title-->

                                                    <!--begin::Title-->
                                                    <span class="fw-semibold text-gray-400">6391 Elgin St. Celina, Delaware
                                                        10299</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->

                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px"></div>
                                                <!--end::Timeline line-->

                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.5px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-info"><svg width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->

                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
                                                    <!--begin::Label-->

                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Ralph
                                                        Edwards</a>
                                                    <!--end::Title-->

                                                    <!--begin::Title-->
                                                    <span class="fw-semibold text-gray-400">2464 Royal Ln. Mesa, New Jersey
                                                        45463</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                        </div>
                                        <!--end::Timeline-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed mt-5 mb-4"></div>
                                    <!--end::Separator-->


                                    <!--begin::Item-->
                                    <div class="m-0">
                                        <!--begin::Timeline-->
                                        <div class="timeline ms-n1">
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center mb-4">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px mt-12 mb-n14"></div>
                                                <!--end::Timeline line-->

                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-success"><svg width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->

                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
                                                    <!--begin::Label-->

                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Cameron
                                                        Williamson</a>
                                                    <!--end::Title-->

                                                    <!--begin::Title-->
                                                    <span class="fw-semibold text-gray-400">3891 Ranchview Dr. Richardson,
                                                        California 62639</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->

                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px"></div>
                                                <!--end::Timeline line-->

                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.5px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-info"><svg width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->

                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
                                                    <!--begin::Label-->

                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Kristin
                                                        Watson</a>
                                                    <!--end::Title-->

                                                    <!--begin::Title-->
                                                    <span class="fw-semibold text-gray-400">8502 Preston Rd. Inglewood,
                                                        Maine 98380</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                        </div>
                                        <!--end::Timeline-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed mt-5 mb-4"></div>
                                    <!--end::Separator-->


                                    <!--begin::Item-->
                                    <div class="m-0">
                                        <!--begin::Timeline-->
                                        <div class="timeline ms-n1">
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center mb-4">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px mt-12 mb-n14"></div>
                                                <!--end::Timeline line-->

                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-success"><svg width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->

                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
                                                    <!--begin::Label-->

                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Albert
                                                        Flores</a>
                                                    <!--end::Title-->

                                                    <!--begin::Title-->
                                                    <span class="fw-semibold text-gray-400">3517 W. Gray St. Utica,
                                                        Pennsylvania 57867</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->

                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px"></div>
                                                <!--end::Timeline line-->

                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.5px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-info"><svg width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->

                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
                                                    <!--begin::Label-->

                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Jessie
                                                        Clarcson</a>
                                                    <!--end::Title-->

                                                    <!--begin::Title-->
                                                    <span class="fw-semibold text-gray-400">Total 2,356 Items in the
                                                        Stock</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                        </div>
                                        <!--end::Timeline-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed mt-5 mb-4"></div>
                                    <!--end::Separator-->


                                    <!--begin::Item-->
                                    <div class="m-0">
                                        <!--begin::Timeline-->
                                        <div class="timeline ms-n1">
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center mb-4">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px mt-12 mb-n14"></div>
                                                <!--end::Timeline line-->

                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-success"><svg
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->

                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
                                                    <!--begin::Label-->

                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Cameron
                                                        Williamson</a>
                                                    <!--end::Title-->

                                                    <!--begin::Title-->
                                                    <span class="fw-semibold text-gray-400">3891 Ranchview Dr. Richardson,
                                                        California 62639</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->

                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px"></div>
                                                <!--end::Timeline line-->

                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.5px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-info"><svg width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->

                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
                                                    <!--begin::Label-->

                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Kristin
                                                        Watson</a>
                                                    <!--end::Title-->

                                                    <!--begin::Title-->
                                                    <span class="fw-semibold text-gray-400">8502 Preston Rd. Inglewood,
                                                        Maine 98380</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                        </div>
                                        <!--end::Timeline-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed mt-5 mb-4"></div>
                                    <!--end::Separator-->


                                    <!--begin::Item-->
                                    <div class="m-0">
                                        <!--begin::Timeline-->
                                        <div class="timeline ms-n1">
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center mb-4">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px mt-12 mb-n14"></div>
                                                <!--end::Timeline line-->

                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-success"><svg
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->

                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
                                                    <!--begin::Label-->

                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Brooklyn
                                                        Simmons</a>
                                                    <!--end::Title-->

                                                    <!--begin::Title-->
                                                    <span class="fw-semibold text-gray-400">6391 Elgin St. Celina,
                                                        Delaware 10299</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->

                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px"></div>
                                                <!--end::Timeline line-->

                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.5px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-info"><svg width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->

                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
                                                    <!--begin::Label-->

                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Ralph
                                                        Edwards</a>
                                                    <!--end::Title-->

                                                    <!--begin::Title-->
                                                    <span class="fw-semibold text-gray-400">2464 Royal Ln. Mesa, New
                                                        Jersey 45463</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                        </div>
                                        <!--end::Timeline-->
                                    </div>
                                    <!--end::Item-->


                                </div>
                                <!--end::Tap pane-->

                                <!--begin::Tap pane-->
                                <div class="tab-pane fade " id="kt_list_widget_16_tab_2" role="tabpanel">

                                    <!--begin::Item-->
                                    <div class="m-0">
                                        <!--begin::Timeline-->
                                        <div class="timeline ms-n1">
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center mb-4">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px mt-12 mb-n14"></div>
                                                <!--end::Timeline line-->

                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-success"><svg
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->

                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
                                                    <!--begin::Label-->

                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Cameron
                                                        Williamson</a>
                                                    <!--end::Title-->

                                                    <!--begin::Title-->
                                                    <span class="fw-semibold text-gray-400">3891 Ranchview Dr. Richardson,
                                                        California 62639</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->

                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px"></div>
                                                <!--end::Timeline line-->

                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.5px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-info"><svg width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->

                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
                                                    <!--begin::Label-->

                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Kristin
                                                        Watson</a>
                                                    <!--end::Title-->

                                                    <!--begin::Title-->
                                                    <span class="fw-semibold text-gray-400">8502 Preston Rd. Inglewood,
                                                        Maine 98380</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                        </div>
                                        <!--end::Timeline-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed mt-5 mb-4"></div>
                                    <!--end::Separator-->


                                    <!--begin::Item-->
                                    <div class="m-0">
                                        <!--begin::Timeline-->
                                        <div class="timeline ms-n1">
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center mb-4">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px mt-12 mb-n14"></div>
                                                <!--end::Timeline line-->

                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-success"><svg
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->

                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
                                                    <!--begin::Label-->

                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Brooklyn
                                                        Simmons</a>
                                                    <!--end::Title-->

                                                    <!--begin::Title-->
                                                    <span class="fw-semibold text-gray-400">6391 Elgin St. Celina,
                                                        Delaware 10299</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->

                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px"></div>
                                                <!--end::Timeline line-->

                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.5px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-info"><svg width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->

                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
                                                    <!--begin::Label-->

                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Ralph
                                                        Edwards</a>
                                                    <!--end::Title-->

                                                    <!--begin::Title-->
                                                    <span class="fw-semibold text-gray-400">2464 Royal Ln. Mesa, New
                                                        Jersey 45463</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                        </div>
                                        <!--end::Timeline-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed mt-5 mb-4"></div>
                                    <!--end::Separator-->


                                    <!--begin::Item-->
                                    <div class="m-0">
                                        <!--begin::Timeline-->
                                        <div class="timeline ms-n1">
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center mb-4">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px mt-12 mb-n14"></div>
                                                <!--end::Timeline line-->

                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-success"><svg
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->

                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
                                                    <!--begin::Label-->

                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Cameron
                                                        Williamson</a>
                                                    <!--end::Title-->

                                                    <!--begin::Title-->
                                                    <span class="fw-semibold text-gray-400">3891 Ranchview Dr. Richardson,
                                                        California 62639</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->

                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px"></div>
                                                <!--end::Timeline line-->

                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.5px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-info"><svg width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->

                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
                                                    <!--begin::Label-->

                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Kristin
                                                        Watson</a>
                                                    <!--end::Title-->

                                                    <!--begin::Title-->
                                                    <span class="fw-semibold text-gray-400">8502 Preston Rd. Inglewood,
                                                        Maine 98380</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                        </div>
                                        <!--end::Timeline-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed mt-5 mb-4"></div>
                                    <!--end::Separator-->


                                    <!--begin::Item-->
                                    <div class="m-0">
                                        <!--begin::Timeline-->
                                        <div class="timeline ms-n1">
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center mb-4">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px mt-12 mb-n14"></div>
                                                <!--end::Timeline line-->

                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-success"><svg
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->

                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
                                                    <!--begin::Label-->

                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Albert
                                                        Flores</a>
                                                    <!--end::Title-->

                                                    <!--begin::Title-->
                                                    <span class="fw-semibold text-gray-400">3517 W. Gray St. Utica,
                                                        Pennsylvania 57867</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->

                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px"></div>
                                                <!--end::Timeline line-->

                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.5px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-info"><svg width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->

                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
                                                    <!--begin::Label-->

                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Jessie
                                                        Clarcson</a>
                                                    <!--end::Title-->

                                                    <!--begin::Title-->
                                                    <span class="fw-semibold text-gray-400">Total 2,356 Items in the
                                                        Stock</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                        </div>
                                        <!--end::Timeline-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed mt-5 mb-4"></div>
                                    <!--end::Separator-->


                                    <!--begin::Item-->
                                    <div class="m-0">
                                        <!--begin::Timeline-->
                                        <div class="timeline ms-n1">
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center mb-4">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px mt-12 mb-n14"></div>
                                                <!--end::Timeline line-->

                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-success"><svg
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->

                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
                                                    <!--begin::Label-->

                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Albert
                                                        Flores</a>
                                                    <!--end::Title-->

                                                    <!--begin::Title-->
                                                    <span class="fw-semibold text-gray-400">3517 W. Gray St. Utica,
                                                        Pennsylvania 57867</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->

                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px"></div>
                                                <!--end::Timeline line-->

                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.5px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-info"><svg width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->

                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
                                                    <!--begin::Label-->

                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Jessie
                                                        Clarcson</a>
                                                    <!--end::Title-->

                                                    <!--begin::Title-->
                                                    <span class="fw-semibold text-gray-400">Total 2,356 Items in the
                                                        Stock</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                        </div>
                                        <!--end::Timeline-->
                                    </div>
                                    <!--end::Item-->


                                </div>
                                <!--end::Tap pane-->

                                <!--begin::Tap pane-->
                                <div class="tab-pane fade " id="kt_list_widget_16_tab_3" role="tabpanel">

                                    <!--begin::Item-->
                                    <div class="m-0">
                                        <!--begin::Timeline-->
                                        <div class="timeline ms-n1">
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center mb-4">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px mt-12 mb-n14"></div>
                                                <!--end::Timeline line-->

                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-success"><svg
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->

                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
                                                    <!--begin::Label-->

                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Albert
                                                        Flores</a>
                                                    <!--end::Title-->

                                                    <!--begin::Title-->
                                                    <span class="fw-semibold text-gray-400">3517 W. Gray St. Utica,
                                                        Pennsylvania 57867</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->

                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px"></div>
                                                <!--end::Timeline line-->

                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.5px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-info"><svg width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->

                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
                                                    <!--begin::Label-->

                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Jessie
                                                        Clarcson</a>
                                                    <!--end::Title-->

                                                    <!--begin::Title-->
                                                    <span class="fw-semibold text-gray-400">Total 2,356 Items in the
                                                        Stock</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                        </div>
                                        <!--end::Timeline-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed mt-5 mb-4"></div>
                                    <!--end::Separator-->


                                    <!--begin::Item-->
                                    <div class="m-0">
                                        <!--begin::Timeline-->
                                        <div class="timeline ms-n1">
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center mb-4">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px mt-12 mb-n14"></div>
                                                <!--end::Timeline line-->

                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-success"><svg
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->

                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
                                                    <!--begin::Label-->

                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Brooklyn
                                                        Simmons</a>
                                                    <!--end::Title-->

                                                    <!--begin::Title-->
                                                    <span class="fw-semibold text-gray-400">6391 Elgin St. Celina,
                                                        Delaware 10299</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->

                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px"></div>
                                                <!--end::Timeline line-->

                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.5px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-info"><svg width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->

                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
                                                    <!--begin::Label-->

                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Ralph
                                                        Edwards</a>
                                                    <!--end::Title-->

                                                    <!--begin::Title-->
                                                    <span class="fw-semibold text-gray-400">2464 Royal Ln. Mesa, New
                                                        Jersey 45463</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                        </div>
                                        <!--end::Timeline-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed mt-5 mb-4"></div>
                                    <!--end::Separator-->


                                    <!--begin::Item-->
                                    <div class="m-0">
                                        <!--begin::Timeline-->
                                        <div class="timeline ms-n1">
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center mb-4">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px mt-12 mb-n14"></div>
                                                <!--end::Timeline line-->

                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-success"><svg
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->

                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
                                                    <!--begin::Label-->

                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Brooklyn
                                                        Simmons</a>
                                                    <!--end::Title-->

                                                    <!--begin::Title-->
                                                    <span class="fw-semibold text-gray-400">6391 Elgin St. Celina,
                                                        Delaware 10299</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->

                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px"></div>
                                                <!--end::Timeline line-->

                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.5px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-info"><svg width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->

                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
                                                    <!--begin::Label-->

                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Ralph
                                                        Edwards</a>
                                                    <!--end::Title-->

                                                    <!--begin::Title-->
                                                    <span class="fw-semibold text-gray-400">2464 Royal Ln. Mesa, New
                                                        Jersey 45463</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                        </div>
                                        <!--end::Timeline-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed mt-5 mb-4"></div>
                                    <!--end::Separator-->


                                    <!--begin::Item-->
                                    <div class="m-0">
                                        <!--begin::Timeline-->
                                        <div class="timeline ms-n1">
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center mb-4">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px mt-12 mb-n14"></div>
                                                <!--end::Timeline line-->

                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-success"><svg
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->

                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
                                                    <!--begin::Label-->

                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Cameron
                                                        Williamson</a>
                                                    <!--end::Title-->

                                                    <!--begin::Title-->
                                                    <span class="fw-semibold text-gray-400">3891 Ranchview Dr. Richardson,
                                                        California 62639</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->

                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px"></div>
                                                <!--end::Timeline line-->

                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.5px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-info"><svg width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->

                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
                                                    <!--begin::Label-->

                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Kristin
                                                        Watson</a>
                                                    <!--end::Title-->

                                                    <!--begin::Title-->
                                                    <span class="fw-semibold text-gray-400">8502 Preston Rd. Inglewood,
                                                        Maine 98380</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                        </div>
                                        <!--end::Timeline-->
                                    </div>
                                    <!--end::Item-->

                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed mt-5 mb-4"></div>
                                    <!--end::Separator-->


                                    <!--begin::Item-->
                                    <div class="m-0">
                                        <!--begin::Timeline-->
                                        <div class="timeline ms-n1">
                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center mb-4">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px mt-12 mb-n14"></div>
                                                <!--end::Timeline line-->

                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.7px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen015.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-success"><svg
                                                            width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10ZM6.39999 9.89999C6.99999 8.19999 8.40001 6.9 10.1 6.4C10.6 6.2 10.9 5.7 10.7 5.1C10.5 4.6 9.99999 4.3 9.39999 4.5C7.09999 5.3 5.29999 7 4.39999 9.2C4.19999 9.7 4.5 10.3 5 10.5C5.1 10.5 5.19999 10.6 5.39999 10.6C5.89999 10.5 6.19999 10.2 6.39999 9.89999ZM14.8 19.5C17 18.7 18.8 16.9 19.6 14.7C19.8 14.2 19.5 13.6 19 13.4C18.5 13.2 17.9 13.5 17.7 14C17.1 15.7 15.8 17 14.1 17.6C13.6 17.8 13.3 18.4 13.5 18.9C13.6 19.3 14 19.6 14.4 19.6C14.5 19.6 14.6 19.6 14.8 19.5Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M16 12C16 14.2 14.2 16 12 16C9.8 16 8 14.2 8 12C8 9.8 9.8 8 12 8C14.2 8 16 9.8 16 12ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->

                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span class="fs-8 fw-bolder text-success text-uppercase">Sender</span>
                                                    <!--begin::Label-->

                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Cameron
                                                        Williamson</a>
                                                    <!--end::Title-->

                                                    <!--begin::Title-->
                                                    <span class="fw-semibold text-gray-400">3891 Ranchview Dr. Richardson,
                                                        California 62639</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->

                                            <!--begin::Timeline item-->
                                            <div class="timeline-item align-items-center">
                                                <!--begin::Timeline line-->
                                                <div class="timeline-line w-20px"></div>
                                                <!--end::Timeline line-->

                                                <!--begin::Timeline icon-->
                                                <div class="timeline-icon pt-1" style="margin-left: 0.5px">
                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                    <span class="svg-icon svg-icon-2 svg-icon-info"><svg width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                                fill="currentColor"></path>
                                                            <path
                                                                d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                                fill="currentColor"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::Timeline icon-->

                                                <!--begin::Timeline content-->
                                                <div class="timeline-content m-0">
                                                    <!--begin::Label-->
                                                    <span class="fs-8 fw-bolder text-info text-uppercase">Receiver</span>
                                                    <!--begin::Label-->

                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-6 text-gray-800 fw-bold d-block text-hover-primary">Kristin
                                                        Watson</a>
                                                    <!--end::Title-->

                                                    <!--begin::Title-->
                                                    <span class="fw-semibold text-gray-400">8502 Preston Rd. Inglewood,
                                                        Maine 98380</span>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Timeline content-->
                                            </div>
                                            <!--end::Timeline item-->
                                        </div>
                                        <!--end::Timeline-->
                                    </div>
                                    <!--end::Item-->


                                </div>
                                <!--end::Tap pane-->

                            </div>
                            <!--end::Tab Content-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end::List widget 16-->
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col-xl-8 mb-5 mb-xl-10">

                    <!--begin::Chart widget 32-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7 mb-3">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Schedule Stats</span>
                                <span class="text-gray-400 mt-1 fw-semibold fs-6">Total 424,D67 deliveries</span>
                            </h3>
                            <!--end::Title-->

                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                                <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left"
                                    class="btn btn-sm btn-light d-flex align-items-center px-4" data-kt-initialized="1">
                                    <!--begin::Display range-->
                                    <div class="text-gray-600 fw-bold">19 Jan 2023 - 17 Feb 2023</div>
                                    <!--end::Display range-->

                                                                  </div>
                                <!--end::Daterangepicker-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column justify-content-between pb-5 px-0">
                            <!--begin::Nav-->
                            <ul class="nav nav-pills nav-pills-custom mb-3 mx-9" role="tablist">
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                    <!--begin::Link-->
                                    <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active" data-bs-toggle="pill" id="kt_charts_widget_32_tab_1"
                                        href="#kt_charts_widget_32_tab_content_1" aria-selected="true" role="tab">
                                        <!--begin::Icon-->
                                        <div class="nav-icon mb-3">
                                            <i class="fonticon-truck fs-1 p-0"></i>
                                        </div>
                                        <!--end::Icon-->

                                        <!--begin::Title-->
                                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                                            Van </span>
                                        <!--end::Title-->

                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                    <!--begin::Link-->
                                    <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 " data-bs-toggle="pill" id="kt_charts_widget_32_tab_2"
                                        href="#kt_charts_widget_32_tab_content_2" aria-selected="false" tabindex="-1"
                                        role="tab">
                                        <!--begin::Icon-->
                                        <div class="nav-icon mb-3">
                                            <i class="fa fa-bus fs-1 p-0"></i>
                                        </div>
                                        <!--end::Icon-->

                                        <!--begin::Title-->
                                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                                            Bus </span>
                                        <!--end::Title-->

                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                    <!--begin::Link-->
                                    <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2
        "
                                        data-bs-toggle="pill" id="kt_charts_widget_32_tab_3"
                                        href="#kt_charts_widget_32_tab_content_3" aria-selected="false" tabindex="-1"
                                        role="tab">
                                        <!--begin::Icon-->
                                        <div class="nav-icon mb-3">
                                            <i class="fa fa-truck-medical fs-1 p-0"></i>
                                        </div>
                                        <!--end::Icon-->

                                        <!--begin::Title-->
                                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                                            Ambulance </span>
                                        <!--end::Title-->

                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->

                            </ul>
                            <!--end::Nav-->

                            <!--begin::Tab Content-->
                            <div class="tab-content ps-4 pe-6">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade active show" id="kt_charts_widget_32_tab_content_1"
                                    role="tabpanel" aria-labelledby="#kt_charts_widget_32_tab_1">
                                    <!--begin::Chart-->
                                    <div id="kt_charts_widget_32_chart_1" class="min-h-auto"
                                        style="height: 375px; min-height: 390px;">
                                        <div id="apexcharts6ix9v9q6g"
                                            class="apexcharts-canvas apexcharts6ix9v9q6g apexcharts-theme-light"
                                            style="width: 723px; height: 375px;"><svg id="SvgjsSvg1154" width="723"
                                                height="375" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                style="background: transparent;">
                                                <g id="SvgjsG1156" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(49.03125, 30)">
                                                    <defs id="SvgjsDefs1155">
                                                        <linearGradient id="SvgjsLinearGradient1160" x1="0"
                                                            y1="0" x2="0" y2="1">
                                                            <stop id="SvgjsStop1161" stop-opacity="0"
                                                                stop-color="rgba(216,227,240,0)" offset="0"></stop>
                                                            <stop id="SvgjsStop1162" stop-opacity="0"
                                                                stop-color="rgba(190,209,230,0)" offset="1"></stop>
                                                            <stop id="SvgjsStop1163" stop-opacity="0"
                                                                stop-color="rgba(190,209,230,0)" offset="1"></stop>
                                                        </linearGradient>
                                                        <clipPath id="gridRectMask6ix9v9q6g">
                                                            <rect id="SvgjsRect1165" width="669.96875"
                                                                height="306.11199999999997" x="-3"
                                                                y="-1" rx="0" ry="0"
                                                                opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="forecastMask6ix9v9q6g"></clipPath>
                                                        <clipPath id="nonForecastMask6ix9v9q6g"></clipPath>
                                                        <clipPath id="gridRectMarkerMask6ix9v9q6g">
                                                            <rect id="SvgjsRect1166" width="667.96875"
                                                                height="308.11199999999997" x="-2"
                                                                y="-2" rx="0" ry="0"
                                                                opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <rect id="SvgjsRect1164" width="20.867589285714285"
                                                        height="304.11199999999997" x="0" y="0"
                                                        rx="0" ry="0" opacity="1"
                                                        stroke-width="0" stroke-dasharray="3"
                                                        fill="url(#SvgjsLinearGradient1160)"
                                                        class="apexcharts-xcrosshairs" y2="304.11199999999997"
                                                        filter="none" fill-opacity="0.9"></rect>
                                                    <g id="SvgjsG1213" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG1214" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -4)"><text id="SvgjsText1216"
                                                                font-family="inherit" x="47.426339285714285"
                                                                y="333.11199999999997" text-anchor="middle"
                                                                dominant-baseline="auto" font-size="13px"
                                                                font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan1217">Grossey</tspan>
                                                                <title>Grossey</title>
                                                            </text><text id="SvgjsText1219" font-family="inherit"
                                                                x="142.27901785714286" y="333.11199999999997"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan1220">Pet Food</tspan>
                                                                <title>Pet Food</title>
                                                            </text><text id="SvgjsText1222" font-family="inherit"
                                                                x="237.13169642857144" y="333.11199999999997"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan1223">Flowers</tspan>
                                                                <title>Flowers</title>
                                                            </text><text id="SvgjsText1225" font-family="inherit"
                                                                x="331.984375" y="333.11199999999997"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan1226">Restaurant</tspan>
                                                                <title>Restaurant</title>
                                                            </text><text id="SvgjsText1228" font-family="inherit"
                                                                x="426.83705357142856" y="333.11199999999997"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan1229">Kids Toys</tspan>
                                                                <title>Kids Toys</title>
                                                            </text><text id="SvgjsText1231" font-family="inherit"
                                                                x="521.6897321428571" y="333.11199999999997"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan1232">Clothing</tspan>
                                                                <title>Clothing</title>
                                                            </text><text id="SvgjsText1234" font-family="inherit"
                                                                x="616.5424107142857" y="333.11199999999997"
                                                                text-anchor="middle" dominant-baseline="auto"
                                                                font-size="13px" font-weight="400" fill="#a1a5b7"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: inherit;">
                                                                <tspan id="SvgjsTspan1235">Still Water</tspan>
                                                                <title>Still Water</title>
                                                            </text></g>
                                                    </g>
                                                    <g id="SvgjsG1253" class="apexcharts-grid">
                                                        <g id="SvgjsG1254" class="apexcharts-gridlines-horizontal">
                                                            <line id="SvgjsLine1256" x1="0" y1="0"
                                                                x2="663.96875" y2="0" stroke="#e1e3ea"
                                                                stroke-dasharray="4" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1257" x1="0"
                                                                y1="76.02799999999999" x2="663.96875"
                                                                y2="76.02799999999999" stroke="#e1e3ea"
                                                                stroke-dasharray="4" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1258" x1="0"
                                                                y1="152.05599999999998" x2="663.96875"
                                                                y2="152.05599999999998" stroke="#e1e3ea"
                                                                stroke-dasharray="4" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1259" x1="0"
                                                                y1="228.08399999999997" x2="663.96875"
                                                                y2="228.08399999999997" stroke="#e1e3ea"
                                                                stroke-dasharray="4" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1260" x1="0"
                                                                y1="304.11199999999997" x2="663.96875"
                                                                y2="304.11199999999997" stroke="#e1e3ea"
                                                                stroke-dasharray="4" stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG1255" class="apexcharts-gridlines-vertical"></g>
                                                        <line id="SvgjsLine1262" x1="0"
                                                            y1="304.11199999999997" x2="663.96875"
                                                            y2="304.11199999999997" stroke="transparent"
                                                            stroke-dasharray="0" stroke-linecap="butt"></line>
                                                        <line id="SvgjsLine1261" x1="0" y1="1"
                                                            x2="0" y2="304.11199999999997"
                                                            stroke="transparent" stroke-dasharray="0"
                                                            stroke-linecap="butt"></line>
                                                    </g>
                                                    <g id="SvgjsG1167"
                                                        class="apexcharts-bar-series apexcharts-plot-series">
                                                        <g id="SvgjsG1168" class="apexcharts-series" rel="1"
                                                            seriesName="Deliveries" data:realIndex="0">
                                                            <path id="SvgjsPath1172"
                                                                d="M36.99254464285714 304.11199999999997L36.99254464285714 172.2616C36.99254464285714 168.92826666666664 38.65921130952381 167.2616 41.99254464285714 167.2616L50.86013392857143 167.2616C54.19346726190476 167.2616 55.86013392857143 168.92826666666664 55.86013392857143 172.2616L55.86013392857143 172.2616L55.86013392857143 304.11199999999997L55.86013392857143 304.11199999999997C55.86013392857143 304.11199999999997 36.99254464285714 304.11199999999997 36.99254464285714 304.11199999999997 "
                                                                fill="rgba(0,158,247,1)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectMask6ix9v9q6g)"
                                                                pathTo="M 36.99254464285714 304.11199999999997L 36.99254464285714 172.2616Q 36.99254464285714 167.2616 41.99254464285714 167.2616L 50.86013392857143 167.2616Q 55.86013392857143 167.2616 55.86013392857143 172.2616L 55.86013392857143 172.2616L 55.86013392857143 304.11199999999997L 55.86013392857143 304.11199999999997z"
                                                                pathFrom="M 36.99254464285714 304.11199999999997L 36.99254464285714 304.11199999999997L 55.86013392857143 304.11199999999997L 55.86013392857143 304.11199999999997L 55.86013392857143 304.11199999999997L 55.86013392857143 304.11199999999997L 55.86013392857143 304.11199999999997L 36.99254464285714 304.11199999999997"
                                                                cy="167.2616" cx="130.8452232142857" j="0"
                                                                val="54" barHeight="136.85039999999998"
                                                                barWidth="20.867589285714285"></path>
                                                            <path id="SvgjsPath1178"
                                                                d="M131.8452232142857 304.11199999999997L131.8452232142857 202.6728C131.8452232142857 199.33946666666668 133.51188988095237 197.6728 136.8452232142857 197.6728L145.71281249999998 197.6728C149.04614583333333 197.6728 150.71281249999998 199.33946666666668 150.71281249999998 202.6728L150.71281249999998 202.6728L150.71281249999998 304.11199999999997L150.71281249999998 304.11199999999997C150.71281249999998 304.11199999999997 131.8452232142857 304.11199999999997 131.8452232142857 304.11199999999997 "
                                                                fill="rgba(0,158,247,1)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectMask6ix9v9q6g)"
                                                                pathTo="M 131.8452232142857 304.11199999999997L 131.8452232142857 202.6728Q 131.8452232142857 197.6728 136.8452232142857 197.6728L 145.71281249999998 197.6728Q 150.71281249999998 197.6728 150.71281249999998 202.6728L 150.71281249999998 202.6728L 150.71281249999998 304.11199999999997L 150.71281249999998 304.11199999999997z"
                                                                pathFrom="M 131.8452232142857 304.11199999999997L 131.8452232142857 304.11199999999997L 150.71281249999998 304.11199999999997L 150.71281249999998 304.11199999999997L 150.71281249999998 304.11199999999997L 150.71281249999998 304.11199999999997L 150.71281249999998 304.11199999999997L 131.8452232142857 304.11199999999997"
                                                                cy="197.6728" cx="225.6979017857143" j="1"
                                                                val="42" barHeight="106.43919999999999"
                                                                barWidth="20.867589285714285"></path>
                                                            <path id="SvgjsPath1184"
                                                                d="M226.6979017857143 304.11199999999997L226.6979017857143 119.042C226.6979017857143 115.70866666666666 228.36456845238095 114.042 231.6979017857143 114.042L240.56549107142857 114.042C243.8988244047619 114.042 245.56549107142857 115.70866666666666 245.56549107142857 119.042L245.56549107142857 119.042L245.56549107142857 304.11199999999997L245.56549107142857 304.11199999999997C245.56549107142857 304.11199999999997 226.6979017857143 304.11199999999997 226.6979017857143 304.11199999999997 "
                                                                fill="rgba(0,158,247,1)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectMask6ix9v9q6g)"
                                                                pathTo="M 226.6979017857143 304.11199999999997L 226.6979017857143 119.042Q 226.6979017857143 114.042 231.6979017857143 114.042L 240.56549107142857 114.042Q 245.56549107142857 114.042 245.56549107142857 119.042L 245.56549107142857 119.042L 245.56549107142857 304.11199999999997L 245.56549107142857 304.11199999999997z"
                                                                pathFrom="M 226.6979017857143 304.11199999999997L 226.6979017857143 304.11199999999997L 245.56549107142857 304.11199999999997L 245.56549107142857 304.11199999999997L 245.56549107142857 304.11199999999997L 245.56549107142857 304.11199999999997L 245.56549107142857 304.11199999999997L 226.6979017857143 304.11199999999997"
                                                                cy="114.042" cx="320.55058035714285" j="2"
                                                                val="75" barHeight="190.06999999999996"
                                                                barWidth="20.867589285714285"></path>
                                                            <path id="SvgjsPath1190"
                                                                d="M321.55058035714285 304.11199999999997L321.55058035714285 30.342666666666673C321.55058035714285 27.00933333333336 323.2172470238095 25.342666666666673 326.55058035714285 25.342666666666673L335.41816964285715 25.342666666666673C338.7515029761905 25.342666666666673 340.41816964285715 27.00933333333336 340.41816964285715 30.342666666666673L340.41816964285715 30.342666666666673L340.41816964285715 304.11199999999997L340.41816964285715 304.11199999999997C340.41816964285715 304.11199999999997 321.55058035714285 304.11199999999997 321.55058035714285 304.11199999999997 "
                                                                fill="rgba(0,158,247,1)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectMask6ix9v9q6g)"
                                                                pathTo="M 321.55058035714285 304.11199999999997L 321.55058035714285 30.342666666666673Q 321.55058035714285 25.342666666666673 326.55058035714285 25.342666666666673L 335.41816964285715 25.342666666666673Q 340.41816964285715 25.342666666666673 340.41816964285715 30.342666666666673L 340.41816964285715 30.342666666666673L 340.41816964285715 304.11199999999997L 340.41816964285715 304.11199999999997z"
                                                                pathFrom="M 321.55058035714285 304.11199999999997L 321.55058035714285 304.11199999999997L 340.41816964285715 304.11199999999997L 340.41816964285715 304.11199999999997L 340.41816964285715 304.11199999999997L 340.41816964285715 304.11199999999997L 340.41816964285715 304.11199999999997L 321.55058035714285 304.11199999999997"
                                                                cy="25.342666666666673" cx="415.4032589285714"
                                                                j="3" val="110"
                                                                barHeight="278.7693333333333"
                                                                barWidth="20.867589285714285"></path>
                                                            <path id="SvgjsPath1196"
                                                                d="M416.4032589285714 304.11199999999997L416.4032589285714 250.82386666666665C416.4032589285714 247.4905333333333 418.0699255952381 245.82386666666662 421.4032589285714 245.82386666666665L430.2708482142857 245.82386666666665C433.604181547619 245.82386666666662 435.2708482142857 247.4905333333333 435.2708482142857 250.82386666666665L435.2708482142857 250.82386666666665L435.2708482142857 304.11199999999997L435.2708482142857 304.11199999999997C435.2708482142857 304.11199999999997 416.4032589285714 304.11199999999997 416.4032589285714 304.11199999999997 "
                                                                fill="rgba(0,158,247,1)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectMask6ix9v9q6g)"
                                                                pathTo="M 416.4032589285714 304.11199999999997L 416.4032589285714 250.82386666666665Q 416.4032589285714 245.82386666666665 421.4032589285714 245.82386666666665L 430.2708482142857 245.82386666666665Q 435.2708482142857 245.82386666666665 435.2708482142857 250.82386666666665L 435.2708482142857 250.82386666666665L 435.2708482142857 304.11199999999997L 435.2708482142857 304.11199999999997z"
                                                                pathFrom="M 416.4032589285714 304.11199999999997L 416.4032589285714 304.11199999999997L 435.2708482142857 304.11199999999997L 435.2708482142857 304.11199999999997L 435.2708482142857 304.11199999999997L 435.2708482142857 304.11199999999997L 435.2708482142857 304.11199999999997L 416.4032589285714 304.11199999999997"
                                                                cy="245.82386666666665" cx="510.25593749999996"
                                                                j="4" val="23"
                                                                barHeight="58.28813333333332"
                                                                barWidth="20.867589285714285"></path>
                                                            <path id="SvgjsPath1202"
                                                                d="M511.25593749999996 304.11199999999997L511.25593749999996 88.6308C511.25593749999996 85.29746666666665 512.9226041666666 83.6308 516.2559375 83.6308L525.1235267857143 83.6308C528.4568601190476 83.6308 530.1235267857143 85.29746666666665 530.1235267857143 88.6308L530.1235267857143 88.6308L530.1235267857143 304.11199999999997L530.1235267857143 304.11199999999997C530.1235267857143 304.11199999999997 511.25593749999996 304.11199999999997 511.25593749999996 304.11199999999997 "
                                                                fill="rgba(0,158,247,1)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectMask6ix9v9q6g)"
                                                                pathTo="M 511.25593749999996 304.11199999999997L 511.25593749999996 88.6308Q 511.25593749999996 83.6308 516.2559375 83.6308L 525.1235267857143 83.6308Q 530.1235267857143 83.6308 530.1235267857143 88.6308L 530.1235267857143 88.6308L 530.1235267857143 304.11199999999997L 530.1235267857143 304.11199999999997z"
                                                                pathFrom="M 511.25593749999996 304.11199999999997L 511.25593749999996 304.11199999999997L 530.1235267857143 304.11199999999997L 530.1235267857143 304.11199999999997L 530.1235267857143 304.11199999999997L 530.1235267857143 304.11199999999997L 530.1235267857143 304.11199999999997L 511.25593749999996 304.11199999999997"
                                                                cy="83.6308" cx="605.1086160714285" j="5"
                                                                val="87" barHeight="220.48119999999997"
                                                                barWidth="20.867589285714285"></path>
                                                            <path id="SvgjsPath1208"
                                                                d="M606.1086160714285 304.11199999999997L606.1086160714285 182.39866666666666C606.1086160714285 179.0653333333333 607.7752827380953 177.39866666666666 611.1086160714285 177.39866666666666L619.9762053571428 177.39866666666666C623.3095386904761 177.39866666666666 624.9762053571428 179.0653333333333 624.9762053571428 182.39866666666666L624.9762053571428 182.39866666666666L624.9762053571428 304.11199999999997L624.9762053571428 304.11199999999997C624.9762053571428 304.11199999999997 606.1086160714285 304.11199999999997 606.1086160714285 304.11199999999997 "
                                                                fill="rgba(0,158,247,1)" fill-opacity="1"
                                                                stroke="transparent" stroke-opacity="1"
                                                                stroke-linecap="round" stroke-width="2"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectMask6ix9v9q6g)"
                                                                pathTo="M 606.1086160714285 304.11199999999997L 606.1086160714285 182.39866666666666Q 606.1086160714285 177.39866666666666 611.1086160714285 177.39866666666666L 619.9762053571428 177.39866666666666Q 624.9762053571428 177.39866666666666 624.9762053571428 182.39866666666666L 624.9762053571428 182.39866666666666L 624.9762053571428 304.11199999999997L 624.9762053571428 304.11199999999997z"
                                                                pathFrom="M 606.1086160714285 304.11199999999997L 606.1086160714285 304.11199999999997L 624.9762053571428 304.11199999999997L 624.9762053571428 304.11199999999997L 624.9762053571428 304.11199999999997L 624.9762053571428 304.11199999999997L 624.9762053571428 304.11199999999997L 606.1086160714285 304.11199999999997"
                                                                cy="177.39866666666666" cx="699.9612946428571"
                                                                j="6" val="50"
                                                                barHeight="126.71333333333331"
                                                                barWidth="20.867589285714285"></path>
                                                            <g id="SvgjsG1170" class="apexcharts-bar-goals-markers"
                                                                style="pointer-events: none">
                                                                <g id="SvgjsG1171"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1177"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1183"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1189"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1195"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1201"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                                <g id="SvgjsG1207"
                                                                    className="apexcharts-bar-goals-groups"></g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG1169" class="apexcharts-datalabels"
                                                            data:realIndex="0">
                                                            <g id="SvgjsG1174" class="apexcharts-data-labels"
                                                                transform="rotate(0)"><text id="SvgjsText1176"
                                                                    font-family="inherit" x="46.426339285714285"
                                                                    y="155.2616" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="13px"
                                                                    font-weight="600" fill="#181c32"
                                                                    class="apexcharts-datalabel" cx="46.426339285714285"
                                                                    cy="155.2616"
                                                                    style="font-family: inherit;">54</text></g>
                                                            <g id="SvgjsG1180" class="apexcharts-data-labels"
                                                                transform="rotate(0)"><text id="SvgjsText1182"
                                                                    font-family="inherit" x="141.2790178571429"
                                                                    y="185.6728" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="13px"
                                                                    font-weight="600" fill="#181c32"
                                                                    class="apexcharts-datalabel" cx="141.2790178571429"
                                                                    cy="185.6728"
                                                                    style="font-family: inherit;">42</text></g>
                                                            <g id="SvgjsG1186" class="apexcharts-data-labels"
                                                                transform="rotate(0)"><text id="SvgjsText1188"
                                                                    font-family="inherit" x="236.13169642857144"
                                                                    y="102.042" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="13px"
                                                                    font-weight="600" fill="#181c32"
                                                                    class="apexcharts-datalabel" cx="236.13169642857144"
                                                                    cy="102.042"
                                                                    style="font-family: inherit;">75</text></g>
                                                            <g id="SvgjsG1192" class="apexcharts-data-labels"
                                                                transform="rotate(0)"><text id="SvgjsText1194"
                                                                    font-family="inherit" x="330.984375"
                                                                    y="13.342666666666673" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="13px"
                                                                    font-weight="600" fill="#181c32"
                                                                    class="apexcharts-datalabel" cx="330.984375"
                                                                    cy="13.342666666666673"
                                                                    style="font-family: inherit;">110</text></g>
                                                            <g id="SvgjsG1198" class="apexcharts-data-labels"
                                                                transform="rotate(0)"><text id="SvgjsText1200"
                                                                    font-family="inherit" x="425.83705357142856"
                                                                    y="233.82386666666662" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="13px"
                                                                    font-weight="600" fill="#181c32"
                                                                    class="apexcharts-datalabel" cx="425.83705357142856"
                                                                    cy="233.82386666666662"
                                                                    style="font-family: inherit;">23</text></g>
                                                            <g id="SvgjsG1204" class="apexcharts-data-labels"
                                                                transform="rotate(0)"><text id="SvgjsText1206"
                                                                    font-family="inherit" x="520.6897321428571"
                                                                    y="71.6308" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="13px"
                                                                    font-weight="600" fill="#181c32"
                                                                    class="apexcharts-datalabel" cx="520.6897321428571"
                                                                    cy="71.6308"
                                                                    style="font-family: inherit;">87</text></g>
                                                            <g id="SvgjsG1210" class="apexcharts-data-labels"
                                                                transform="rotate(0)"><text id="SvgjsText1212"
                                                                    font-family="inherit" x="615.5424107142857"
                                                                    y="165.39866666666666" text-anchor="middle"
                                                                    dominant-baseline="auto" font-size="13px"
                                                                    font-weight="600" fill="#181c32"
                                                                    class="apexcharts-datalabel" cx="615.5424107142857"
                                                                    cy="165.39866666666666"
                                                                    style="font-family: inherit;">50</text></g>
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine1263" x1="0" y1="0"
                                                        x2="663.96875" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1264" x1="0" y1="0"
                                                        x2="663.96875" y2="0" stroke-dasharray="0"
                                                        stroke-width="0" stroke-linecap="butt"
                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1265" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1266" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1267" class="apexcharts-point-annotations"></g>
                                                </g>
                                                <g id="SvgjsG1236" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(19.03125, 0)">
                                                    <g id="SvgjsG1237" class="apexcharts-yaxis-texts-g"><text
                                                            id="SvgjsText1239" font-family="inherit" x="20"
                                                            y="31.4" text-anchor="end" dominant-baseline="auto"
                                                            font-size="13px" font-weight="400" fill="#a1a5b7"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1240">120</tspan>
                                                            <title>120</title>
                                                        </text><text id="SvgjsText1242" font-family="inherit"
                                                            x="20" y="107.428" text-anchor="end"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1a5b7"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1243">90</tspan>
                                                            <title>90</title>
                                                        </text><text id="SvgjsText1245" font-family="inherit"
                                                            x="20" y="183.456" text-anchor="end"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1a5b7"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1246">60</tspan>
                                                            <title>60</title>
                                                        </text><text id="SvgjsText1248" font-family="inherit"
                                                            x="20" y="259.4839999999999" text-anchor="end"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1a5b7"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1249">30</tspan>
                                                            <title>30</title>
                                                        </text><text id="SvgjsText1251" font-family="inherit"
                                                            x="20" y="335.51199999999994" text-anchor="end"
                                                            dominant-baseline="auto" font-size="13px"
                                                            font-weight="400" fill="#a1a5b7"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: inherit;">
                                                            <tspan id="SvgjsTspan1252">0</tspan>
                                                            <title>0</title>
                                                        </text></g>
                                                </g>
                                                <g id="SvgjsG1157" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend" style="max-height: 187.5px;"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-title"
                                                    style="font-family: inherit; font-size: 12px;"></div>
                                                <div class="apexcharts-tooltip-series-group" style="order: 1;"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(0, 158, 247);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: inherit; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-y-label"></span><span
                                                                class="apexcharts-tooltip-text-y-value"></span></div>
                                                        <div class="apexcharts-tooltip-goals-group"><span
                                                                class="apexcharts-tooltip-text-goals-label"></span><span
                                                                class="apexcharts-tooltip-text-goals-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Chart-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade " id="kt_charts_widget_32_tab_content_2" role="tabpanel"
                                    aria-labelledby="#kt_charts_widget_32_tab_2">
                                    <!--begin::Chart-->
                                    <div id="kt_charts_widget_32_chart_2" class="min-h-auto" style="height: 375px">
                                    </div>
                                    <!--end::Chart-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade " id="kt_charts_widget_32_tab_content_3" role="tabpanel"
                                    aria-labelledby="#kt_charts_widget_32_tab_3">
                                    <!--begin::Chart-->
                                    <div id="kt_charts_widget_32_chart_3" class="min-h-auto" style="height: 375px">
                                    </div>
                                    <!--end::Chart-->
                                </div>
                                <!--end::Tap pane-->

                            </div>
                            <!--end::Tab Content-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end::Chart widget 32-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row--> --}}

            <!--begin::Row-->
            <div class="row gy-5 g-xl-10">


                {{-- <!--begin::Col-->
                <div class="col-xl-8 mb-5 mb-xl-10">

                    <!--begin::Table widget 6-->
                    <div class="card card-flush h-xl-100">
                        <!--begin::Header-->
                        <div class="card-header pt-7">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-gray-800">Leading Drivers by Category</span>

                                <span class="text-gray-400 mt-1 fw-semibold fs-6">Total 424,567 deliveries</span>
                            </h3>
                        </div>
                        <!--end::Header-->

                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Nav-->
                            <ul class="nav nav-pills nav-pills-custom mb-3" role="tablist">
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                    <!--begin::Link-->
                                    <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active" data-bs-toggle="pill" href="#kt_stats_widget_6_tab_1" aria-selected="true"
                                        role="tab">
                                        <!--begin::Icon-->
                                        <div class="nav-icon mb-3">
                                            <i class="fonticon-truck fs-1 p-0"></i>
                                        </div>
                                        <!--end::Icon-->

                                        <!--begin::Title-->
                                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                                            Van </span>
                                        <!--end::Title-->

                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                    <!--begin::Link-->
                                    <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2
        "
                                        data-bs-toggle="pill" href="#kt_stats_widget_6_tab_2" aria-selected="false"
                                        tabindex="-1" role="tab">
                                        <!--begin::Icon-->
                                        <div class="nav-icon mb-3">
                                            <i class="fa fa-bus fs-1 p-0"></i>
                                        </div>
                                        <!--end::Icon-->

                                        <!--begin::Title-->
                                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                                            Bus </span>
                                        <!--end::Title-->

                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-3 me-lg-6" role="presentation">
                                    <!--begin::Link-->
                                    <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2
        "
                                        data-bs-toggle="pill" href="#kt_stats_widget_6_tab_3" aria-selected="false"
                                        tabindex="-1" role="tab">
                                        <!--begin::Icon-->
                                        <div class="nav-icon mb-3">
                                            <i class="fa fa-truck-medical fs-1 p-0"></i>
                                        </div>
                                        <!--end::Icon-->

                                        <!--begin::Title-->
                                        <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">
                                            Ambulance </span>
                                        <!--end::Title-->

                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->

                            </ul>
                            <!--end::Nav-->

                            <!--begin::Tab Content-->
                            <div class="tab-content">
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade active show" id="kt_stats_widget_6_tab_1" role="tabpanel">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                                    <th class="p-0 w-200px w-xxl-450px"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                    <th class="p-0 min-w-190px"></th>
                                                    <th class="p-0 w-50px"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->

                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-40px me-3">
                                                                <img src="{{url('/assets/media/avatars/300-1.jpg')}}"
                                                                    class="" alt="">
                                                            </div>

                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-dark fw-bold text-hover-primary mb-1 fs-6">Brooklyn
                                                                    Simmons</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Zuid
                                                                    Area</span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">1,240</span>
                                                        <span class="fw-semibold text-gray-400 d-block">Deliveries</span>
                                                    </td>

                                                    <td>
                                                        <a href="#"
                                                            class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                                    </td>

                                                    <td>
                                                        <div class="rating">
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                        </div>

                                                        <span
                                                            class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                                    </td>

                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                            <span class="svg-icon svg-icon-5 svg-icon-gray-700"><svg
                                                                    width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                        fill="currentColor"></path>
                                                                    <path opacity="0.3"
                                                                        d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-40px me-3">
                                                                <img src="{{url('/assets/media/avatars/300-2.jpg')}}"
                                                                    class="" alt="">
                                                            </div>

                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-dark fw-bold text-hover-primary mb-1 fs-6">Annette
                                                                    Black</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Zuid
                                                                    Area</span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">6,074</span>
                                                        <span class="fw-semibold text-gray-400 d-block">Deliveries</span>
                                                    </td>

                                                    <td>
                                                        <a href="#"
                                                            class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$174,074</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                                    </td>

                                                    <td>
                                                        <div class="rating">
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                        </div>

                                                        <span
                                                            class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                                    </td>

                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                            <span class="svg-icon svg-icon-5 svg-icon-gray-700"><svg
                                                                    width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                        fill="currentColor"></path>
                                                                    <path opacity="0.3"
                                                                        d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-40px me-3">
                                                                <img src="{{url('/assets/media/avatars/300-12.jpg')}}"
                                                                    class="" alt="">
                                                            </div>

                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-dark fw-bold text-hover-primary mb-1 fs-6">Esther
                                                                    Howard</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Zuid
                                                                    Area</span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">357</span>
                                                        <span class="fw-semibold text-gray-400 d-block">Deliveries</span>
                                                    </td>

                                                    <td>
                                                        <a href="#"
                                                            class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$2,737</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                                    </td>

                                                    <td>
                                                        <div class="rating">
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                        </div>

                                                        <span
                                                            class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                                    </td>

                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                            <span class="svg-icon svg-icon-5 svg-icon-gray-700"><svg
                                                                    width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                        fill="currentColor"></path>
                                                                    <path opacity="0.3"
                                                                        d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-40px me-3">
                                                                <img src="{{url('/assets/media/avatars/300-11.jpg')}}"
                                                                    class="" alt="">
                                                            </div>

                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-dark fw-bold text-hover-primary mb-1 fs-6">Guy
                                                                    Hawkins</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Zuid
                                                                    Area</span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">2,954</span>
                                                        <span class="fw-semibold text-gray-400 d-block">Deliveries</span>
                                                    </td>

                                                    <td>
                                                        <a href="#"
                                                            class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$59,634</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                                    </td>

                                                    <td>
                                                        <div class="rating">
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 ">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                        </div>

                                                        <span
                                                            class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                                    </td>

                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                            <span class="svg-icon svg-icon-5 svg-icon-gray-700"><svg
                                                                    width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                        fill="currentColor"></path>
                                                                    <path opacity="0.3"
                                                                        d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-40px me-3">
                                                                <img src="{{url('/assets/media/avatars/300-13.jpg')}}"
                                                                    class="" alt="">
                                                            </div>

                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-dark fw-bold text-hover-primary mb-1 fs-6">Marvin
                                                                    McKinney</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Zuid
                                                                    Area</span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">822</span>
                                                        <span class="fw-semibold text-gray-400 d-block">Deliveries</span>
                                                    </td>

                                                    <td>
                                                        <a href="#"
                                                            class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$19,842</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                                    </td>

                                                    <td>
                                                        <div class="rating">
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                        </div>

                                                        <span
                                                            class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                                    </td>

                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                            <span class="svg-icon svg-icon-5 svg-icon-gray-700"><svg
                                                                    width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                        fill="currentColor"></path>
                                                                    <path opacity="0.3"
                                                                        d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade " id="kt_stats_widget_6_tab_2" role="tabpanel">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                                    <th class="p-0 w-200px w-xxl-450px"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                    <th class="p-0 min-w-190px"></th>
                                                    <th class="p-0 w-50px"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->

                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-40px me-3">
                                                                <img src="{{url('/assets/media/avatars/300-11.jpg')}}"
                                                                    class="" alt="">
                                                            </div>

                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-dark fw-bold text-hover-primary mb-1 fs-6">Guy
                                                                    Hawkins</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Zuid
                                                                    Area</span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">2,954</span>
                                                        <span class="fw-semibold text-gray-400 d-block">Deliveries</span>
                                                    </td>

                                                    <td>
                                                        <a href="#"
                                                            class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$59,634</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                                    </td>

                                                    <td>
                                                        <div class="rating">
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 ">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                        </div>

                                                        <span
                                                            class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                                    </td>

                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                            <span class="svg-icon svg-icon-5 svg-icon-gray-700"><svg
                                                                    width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                        fill="currentColor"></path>
                                                                    <path opacity="0.3"
                                                                        d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-40px me-3">
                                                                <img src="{{url('/assets/media/avatars/300-13.jpg')}}"
                                                                    class="" alt="">
                                                            </div>

                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-dark fw-bold text-hover-primary mb-1 fs-6">Marvin
                                                                    McKinney</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Zuid
                                                                    Area</span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">822</span>
                                                        <span class="fw-semibold text-gray-400 d-block">Deliveries</span>
                                                    </td>

                                                    <td>
                                                        <a href="#"
                                                            class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$19,842</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                                    </td>

                                                    <td>
                                                        <div class="rating">
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                        </div>

                                                        <span
                                                            class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                                    </td>

                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                            <span class="svg-icon svg-icon-5 svg-icon-gray-700"><svg
                                                                    width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                        fill="currentColor"></path>
                                                                    <path opacity="0.3"
                                                                        d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-40px me-3">
                                                                <img src="{{url('/assets/media/avatars/300-1.jpg')}}"
                                                                    class="" alt="">
                                                            </div>

                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-dark fw-bold text-hover-primary mb-1 fs-6">Brooklyn
                                                                    Simmons</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Zuid
                                                                    Area</span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">1,240</span>
                                                        <span class="fw-semibold text-gray-400 d-block">Deliveries</span>
                                                    </td>

                                                    <td>
                                                        <a href="#"
                                                            class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                                    </td>

                                                    <td>
                                                        <div class="rating">
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                        </div>

                                                        <span
                                                            class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                                    </td>

                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                            <span class="svg-icon svg-icon-5 svg-icon-gray-700"><svg
                                                                    width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                        fill="currentColor"></path>
                                                                    <path opacity="0.3"
                                                                        d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-40px me-3">
                                                                <img src="{{url('/assets/media/avatars/300-2.jpg')}}"
                                                                    class="" alt="">
                                                            </div>

                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-dark fw-bold text-hover-primary mb-1 fs-6">Annette
                                                                    Black</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Zuid
                                                                    Area</span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">6,074</span>
                                                        <span class="fw-semibold text-gray-400 d-block">Deliveries</span>
                                                    </td>

                                                    <td>
                                                        <a href="#"
                                                            class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$174,074</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                                    </td>

                                                    <td>
                                                        <div class="rating">
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                        </div>

                                                        <span
                                                            class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                                    </td>

                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                            <span class="svg-icon svg-icon-5 svg-icon-gray-700"><svg
                                                                    width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                        fill="currentColor"></path>
                                                                    <path opacity="0.3"
                                                                        d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-40px me-3">
                                                                <img src="{{url('/assets/media/avatars/300-12.jpg')}}"
                                                                    class="" alt="">
                                                            </div>

                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-dark fw-bold text-hover-primary mb-1 fs-6">Esther
                                                                    Howard</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Zuid
                                                                    Area</span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">357</span>
                                                        <span class="fw-semibold text-gray-400 d-block">Deliveries</span>
                                                    </td>

                                                    <td>
                                                        <a href="#"
                                                            class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$2,737</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                                    </td>

                                                    <td>
                                                        <div class="rating">
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                        </div>

                                                        <span
                                                            class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                                    </td>

                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                            <span class="svg-icon svg-icon-5 svg-icon-gray-700"><svg
                                                                    width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                        fill="currentColor"></path>
                                                                    <path opacity="0.3"
                                                                        d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                                <!--begin::Tap pane-->
                                <div class="tab-pane fade " id="kt_stats_widget_6_tab_3" role="tabpanel">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                                    <th class="p-0 w-200px w-xxl-450px"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                    <th class="p-0 min-w-150px"></th>
                                                    <th class="p-0 min-w-190px"></th>
                                                    <th class="p-0 w-50px"></th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->

                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-40px me-3">
                                                                <img src="{{url('/assets/media/avatars/300-1.jpg')}}"
                                                                    class="" alt="">
                                                            </div>

                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-dark fw-bold text-hover-primary mb-1 fs-6">Brooklyn
                                                                    Simmons</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Zuid
                                                                    Area</span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">1,240</span>
                                                        <span class="fw-semibold text-gray-400 d-block">Deliveries</span>
                                                    </td>

                                                    <td>
                                                        <a href="#"
                                                            class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$5,400</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                                    </td>

                                                    <td>
                                                        <div class="rating">
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                        </div>

                                                        <span
                                                            class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                                    </td>

                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                            <span class="svg-icon svg-icon-5 svg-icon-gray-700"><svg
                                                                    width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                        fill="currentColor"></path>
                                                                    <path opacity="0.3"
                                                                        d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-40px me-3">
                                                                <img src="{{url('/assets/media/avatars/300-11.jpg')}}"
                                                                    class="" alt="">
                                                            </div>

                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-dark fw-bold text-hover-primary mb-1 fs-6">Guy
                                                                    Hawkins</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Zuid
                                                                    Area</span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">2,954</span>
                                                        <span class="fw-semibold text-gray-400 d-block">Deliveries</span>
                                                    </td>

                                                    <td>
                                                        <a href="#"
                                                            class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$59,634</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                                    </td>

                                                    <td>
                                                        <div class="rating">
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 ">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                        </div>

                                                        <span
                                                            class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                                    </td>

                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                            <span class="svg-icon svg-icon-5 svg-icon-gray-700"><svg
                                                                    width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                        fill="currentColor"></path>
                                                                    <path opacity="0.3"
                                                                        d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-40px me-3">
                                                                <img src="{{url('/assets/media/avatars/300-13.jpg')}}"
                                                                    class="" alt="">
                                                            </div>

                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-dark fw-bold text-hover-primary mb-1 fs-6">Marvin
                                                                    McKinney</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Zuid
                                                                    Area</span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">822</span>
                                                        <span class="fw-semibold text-gray-400 d-block">Deliveries</span>
                                                    </td>

                                                    <td>
                                                        <a href="#"
                                                            class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$19,842</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                                    </td>

                                                    <td>
                                                        <div class="rating">
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                        </div>

                                                        <span
                                                            class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                                    </td>

                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                            <span class="svg-icon svg-icon-5 svg-icon-gray-700"><svg
                                                                    width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                        fill="currentColor"></path>
                                                                    <path opacity="0.3"
                                                                        d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-40px me-3">
                                                                <img src="{{url('/assets/media/avatars/300-12.jpg')}}"
                                                                    class="" alt="">
                                                            </div>

                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-dark fw-bold text-hover-primary mb-1 fs-6">Esther
                                                                    Howard</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Zuid
                                                                    Area</span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">357</span>
                                                        <span class="fw-semibold text-gray-400 d-block">Deliveries</span>
                                                    </td>

                                                    <td>
                                                        <a href="#"
                                                            class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$2,737</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                                    </td>

                                                    <td>
                                                        <div class="rating">
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                        </div>

                                                        <span
                                                            class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                                    </td>

                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                            <span class="svg-icon svg-icon-5 svg-icon-gray-700"><svg
                                                                    width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                        fill="currentColor"></path>
                                                                    <path opacity="0.3"
                                                                        d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-40px me-3">
                                                                <img src="{{url('/assets/media/avatars/300-2.jpg')}}"
                                                                    class="" alt="">
                                                            </div>

                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-dark fw-bold text-hover-primary mb-1 fs-6">Annette
                                                                    Black</a>
                                                                <span class="text-muted fw-semibold d-block fs-7">Zuid
                                                                    Area</span>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <span class="text-gray-800 fw-bold d-block mb-1 fs-6">6,074</span>
                                                        <span class="fw-semibold text-gray-400 d-block">Deliveries</span>
                                                    </td>

                                                    <td>
                                                        <a href="#"
                                                            class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$174,074</a>
                                                        <span class="text-muted fw-semibold d-block fs-7">Earnings</span>
                                                    </td>

                                                    <td>
                                                        <div class="rating">
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                            <div class="rating-label me-1 checked">
                                                                <i class="bi bi-star-fill fs-6s"></i>
                                                            </div>
                                                        </div>

                                                        <span
                                                            class="text-muted fw-semibold d-block fs-7 mt-1">Rating</span>
                                                    </td>

                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                            <span class="svg-icon svg-icon-5 svg-icon-gray-700"><svg
                                                                    width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                        fill="currentColor"></path>
                                                                    <path opacity="0.3"
                                                                        d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                        fill="currentColor"></path>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end::Tap pane-->
                            </div>
                            <!--end::Tab Content-->
                        </div>
                        <!--end: Card Body-->
                    </div>
                    <!--end::Table widget 6-->
                </div>
                <!--end::Col--> --}}
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
@endsection
