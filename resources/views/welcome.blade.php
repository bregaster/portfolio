<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Bregaster</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet" />
    <link rel="shortcut icon" sizes="114x114" href="{{ asset('foto/favicon.png') }}">
    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
        }

        body {
            margin: 0;
        }

        a {
            background-color: transparent;
        }

        [hidden] {
            display: none;
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI,
                Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif,
                Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5;
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0;
        }

        a {
            color: inherit;
            text-decoration: inherit;
        }

        svg,
        video {
            display: block;
            vertical-align: middle;
        }

        video {
            max-width: 100%;
            height: auto;
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity));
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity));
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity));
        }

        .border-t {
            border-top-width: 1px;
        }

        .flex {
            display: flex;
        }

        .grid {
            display: grid;
        }

        .hidden {
            display: none;
        }

        .items-center {
            align-items: center;
        }

        .justify-center {
            justify-content: center;
        }

        .font-semibold {
            font-weight: 600;
        }

        .h-5 {
            height: 1.25rem;
        }

        .h-8 {
            height: 2rem;
        }

        .h-16 {
            height: 4rem;
        }

        .text-sm {
            font-size: 0.875rem;
        }

        .text-lg {
            font-size: 1.125rem;
        }

        .leading-7 {
            line-height: 1.75rem;
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }

        .ml-1 {
            margin-left: 0.25rem;
        }

        .mt-2 {
            margin-top: 0.5rem;
        }

        .mr-2 {
            margin-right: 0.5rem;
        }

        .ml-2 {
            margin-left: 0.5rem;
        }

        .mt-4 {
            margin-top: 1rem;
        }

        .ml-4 {
            margin-left: 1rem;
        }

        .mt-8 {
            margin-top: 2rem;
        }

        .ml-12 {
            margin-left: 3rem;
        }

        .-mt-px {
            margin-top: -1px;
        }

        .max-w-6xl {
            max-width: 72rem;
        }

        .min-h-screen {
            min-height: 100vh;
        }

        .overflow-hidden {
            overflow: hidden;
        }

        .p-6 {
            padding: 1.5rem;
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }

        .pt-8 {
            padding-top: 2rem;
        }

        .fixed {
            position: fixed;
        }

        .relative {
            position: relative;
        }

        .top-0 {
            top: 0;
        }

        .right-0 {
            right: 0;
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1),
                0 1px 2px 0 rgba(0, 0, 0, 0.06);
        }

        .text-center {
            text-align: center;
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity));
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity));
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity));
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity));
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity));
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity));
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity));
        }

        .underline {
            text-decoration: underline;
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .w-5 {
            width: 1.25rem;
        }

        .w-8 {
            width: 2rem;
        }

        .w-auto {
            width: auto;
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr));
        }

        @media (min-width: 640px) {
            .sm\:rounded-lg {
                border-radius: 0.5rem;
            }

            .sm\:block {
                display: block;
            }

            .sm\:items-center {
                align-items: center;
            }

            .sm\:justify-start {
                justify-content: flex-start;
            }

            .sm\:justify-between {
                justify-content: space-between;
            }

            .sm\:h-20 {
                height: 5rem;
            }

            .sm\:ml-0 {
                margin-left: 0;
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem;
            }

            .sm\:pt-0 {
                padding-top: 0;
            }

            .sm\:text-left {
                text-align: left;
            }

            .sm\:text-right {
                text-align: right;
            }
        }

        @media (min-width: 768px) {
            .md\:border-t-0 {
                border-top-width: 0;
            }

            .md\:border-l {
                border-left-width: 1px;
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (min-width: 1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem;
            }
        }

        @media (prefers-color-scheme: dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity));
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity));
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity));
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity));
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity));
            }

            .dark\:text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgba(107, 114, 128, var(--tw-text-opacity));
            }
        }
    </style>

    <style>
        body {
            font-family: "Nunito", sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="319.5" height="90.3"
                    viewBox="0 0 1065.000000 301.000000" preserveAspectRatio="xMidYMid meet">
                    <g transform="translate(0.000000,301.000000) scale(0.100000,-0.100000)" fill="#FFFFFF"
                        stroke="none">
                        <path d="M290 2997 c-121 -28 -210 -101 -252 -206 -21 -55 -22 -69 -30 -751
-9 -728 -3 -1456 12 -1673 13 -180 54 -264 157 -319 87 -47 125 -50 743 -45
549 3 579 5 674 26 54 12 137 37 183 56 311 125 546 432 603 787 19 119 8 331
-23 443 -109 389 -402 660 -803 742 -78 16 -145 18 -549 18 -416 0 -466 -2
-525 -18 -96 -28 -192 -82 -269 -153 l-68 -63 -5 147 c-9 314 -4 685 11 730
30 91 123 162 212 162 62 0 145 -43 186 -97 43 -58 53 -116 54 -331 1 -103 4
-198 8 -212 6 -22 13 -25 59 -28 l52 -3 0 218 c0 151 -5 239 -15 286 -17 81
-67 178 -109 214 -77 65 -201 94 -306 70z m1155 -1060 c190 -85 192 -333 3
-418 -52 -23 -60 -24 -318 -24 -268 -1 -296 -3 -361 -36 -92 -46 -136 -111
-164 -245 -15 -66 -17 -122 -14 -344 7 -484 5 -561 -15 -601 -41 -87 -128
-144 -216 -143 -97 1 -185 67 -209 158 -7 27 -12 236 -14 616 -2 533 -1 580
17 645 43 163 124 275 243 338 136 71 179 76 633 73 336 -1 379 -3 415 -19z
m335 -89 c215 -120 368 -301 446 -530 106 -312 15 -682 -227 -927 -227 -229
-525 -303 -1141 -283 l-218 7 30 60 c16 33 34 85 40 114 6 31 10 230 10 471 0
464 3 490 62 547 66 64 86 68 368 69 332 1 382 13 473 114 48 53 80 124 92
202 6 43 3 65 -32 181 -4 16 -1 18 19 12 12 -4 48 -21 78 -37z" />
                        <path d="M1576 1359 c-14 -11 -26 -26 -26 -34 0 -7 21 -35 46 -61 69 -73 89
-122 89 -224 0 -74 -4 -92 -30 -143 -36 -72 -118 -149 -182 -172 -59 -20 -249
-34 -490 -35 l-183 0 0 -50 c0 -45 3 -52 26 -60 35 -14 452 -13 555 1 205 28
314 101 391 265 32 67 33 73 33 194 0 119 -1 128 -31 191 -44 92 -97 149 -139
149 -18 0 -44 -9 -59 -21z" />
                        <path d="M3050 1125 l0 -675 58 0 59 0 12 41 12 40 37 -32 c149 -131 400 -89
517 86 59 88 77 150 82 290 6 131 -8 209 -50 294 -92 186 -358 251 -534 130
l-43 -30 0 266 0 265 -75 0 -75 0 0 -675z m497 69 c90 -52 127 -149 122 -317
-4 -107 -6 -118 -39 -183 -49 -95 -96 -127 -194 -132 -62 -3 -80 0 -122 21
-28 14 -64 40 -82 58 l-32 33 2 229 3 230 37 30 c87 70 216 84 305 31z" />
                        <path d="M8360 1460 l0 -120 -85 0 -85 0 0 -65 0 -65 84 0 85 0 3 -313 3 -314
30 -49 c23 -38 43 -55 90 -79 52 -26 70 -30 145 -30 47 0 102 4 123 8 l37 8 0
64 0 64 -82 -6 c-101 -7 -148 9 -175 59 -16 29 -18 65 -21 311 l-3 277 135 0
136 0 0 65 0 65 -135 0 -135 0 0 120 0 120 -75 0 -75 0 0 -120z" />
                        <path d="M4385 1344 c-62 -22 -96 -43 -147 -92 -33 -32 -48 -41 -48 -30 0 10
-5 40 -11 68 l-11 50 -59 0 -59 0 0 -445 0 -445 75 0 75 0 0 306 0 307 48 47
c55 55 133 88 229 97 l63 6 0 73 0 74 -57 -1 c-32 0 -76 -7 -98 -15z" />
                        <path d="M4925 1347 c-72 -24 -120 -54 -167 -105 -90 -96 -122 -191 -123 -357
0 -97 4 -134 23 -192 39 -125 120 -206 245 -245 96 -30 290 -31 382 -1 l60 19
3 68 c3 62 1 68 -15 62 -111 -43 -301 -47 -388 -7 -92 41 -144 114 -159 224
l-7 47 305 0 306 0 0 73 c-1 194 -76 342 -203 398 -64 28 -201 36 -262 16z
m180 -136 c53 -24 91 -70 110 -133 28 -95 45 -88 -205 -88 -134 0 -220 4 -220
10 0 20 41 116 58 135 79 89 170 116 257 76z" />
                        <path d="M5843 1341 c-118 -44 -203 -139 -245 -275 -32 -102 -32 -283 0 -378
42 -122 97 -184 210 -236 48 -22 70 -26 147 -26 102 1 158 17 219 66 l39 31
-5 -99 c-7 -115 -23 -163 -76 -217 -55 -56 -125 -79 -247 -78 -89 0 -121 5
-233 37 -23 6 -23 5 -20 -62 l3 -68 55 -18 c86 -26 330 -25 412 3 113 38 189
107 231 209 22 54 22 63 25 583 l3 527 -60 0 -59 0 -13 -49 -12 -49 -23 27
c-12 15 -46 40 -76 56 -71 39 -195 46 -275 16z m230 -131 c30 -11 71 -38 95
-62 l42 -41 0 -228 0 -228 -33 -25 c-91 -70 -215 -88 -303 -46 -84 41 -132
134 -141 268 -17 272 139 437 340 362z" />
                        <path d="M6742 1340 c-40 -10 -77 -22 -82 -25 -6 -4 -10 -36 -10 -72 0 -54 3
-64 15 -59 100 38 269 52 338 28 50 -18 97 -58 113 -99 8 -18 14 -59 14 -92
l0 -59 -57 16 c-33 8 -101 16 -158 16 -132 1 -191 -19 -260 -88 -60 -60 -75
-103 -75 -207 0 -171 106 -273 285 -273 95 -1 166 21 230 69 46 36 55 32 55
-21 0 -23 3 -24 71 -24 l71 0 -5 338 c-2 233 -8 349 -16 376 -18 56 -113 148
-176 170 -78 28 -260 31 -353 6z m326 -492 l62 -10 0 -88 c0 -87 0 -89 -32
-116 -86 -72 -224 -98 -295 -54 -89 54 -89 210 0 257 60 32 127 35 265 11z" />
                        <path d="M7705 1347 c-61 -20 -97 -42 -132 -79 -47 -48 -63 -96 -63 -183 0
-135 52 -193 213 -234 167 -44 212 -69 223 -126 13 -73 -29 -134 -106 -155
-66 -18 -187 -13 -261 10 -35 11 -67 20 -71 20 -5 0 -8 -29 -8 -64 l0 -64 42
-17 c70 -28 195 -40 283 -28 95 14 192 59 229 108 74 97 76 249 4 331 -42 47
-85 68 -209 99 -122 31 -153 48 -174 92 -13 26 -14 41 -5 71 16 62 57 89 148
98 53 6 166 -14 235 -41 15 -6 17 0 17 63 l0 69 -57 18 c-76 22 -254 29 -308
12z" />
                        <path d="M9215 1347 c-72 -24 -120 -54 -167 -105 -89 -95 -122 -194 -122 -362
0 -174 38 -277 131 -360 109 -96 343 -126 529 -69 l64 20 0 66 c0 63 -1 65
-22 59 -106 -30 -161 -38 -248 -34 -184 8 -281 87 -304 251 l-7 47 305 0 306
0 0 73 c-1 197 -74 340 -205 398 -61 28 -199 36 -260 16z m173 -132 c70 -30
117 -95 129 -180 l6 -45 -222 0 -221 0 6 28 c36 154 180 248 302 197z" />
                        <path d="M10253 1345 c-61 -18 -125 -59 -161 -100 -35 -39 -32 -43 -50 50 l-8
40 -62 3 -62 3 0 -446 0 -445 80 0 80 0 0 312 0 311 44 43 c53 51 135 83 228
91 l68 6 0 73 0 74 -57 -1 c-32 0 -77 -6 -100 -14z" />
                        <path d="M10470 545 l0 -95 90 0 90 0 0 95 0 95 -90 0 -90 0 0 -95z" />
                    </g>
                </svg>
            </div>

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 md:grid-cols-2">
                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg leading-7 font-semibold">
                                <div class="text-gray-900 dark:text-white">
                                    {!!$quote->isi!!}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="text-center text-sm text-gray-500 sm:text-left">
                    <div class="flex items-center">
                        <div style="margin-right: 20px" class="mr-5 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="24px" height="24px">
                                <path fill="#03A9F4"
                                    d="M42,12.429c-1.323,0.586-2.746,0.977-4.247,1.162c1.526-0.906,2.7-2.351,3.251-4.058c-1.428,0.837-3.01,1.452-4.693,1.776C34.967,9.884,33.05,9,30.926,9c-4.08,0-7.387,3.278-7.387,7.32c0,0.572,0.067,1.129,0.193,1.67c-6.138-0.308-11.582-3.226-15.224-7.654c-0.64,1.082-1,2.349-1,3.686c0,2.541,1.301,4.778,3.285,6.096c-1.211-0.037-2.351-0.374-3.349-0.914c0,0.022,0,0.055,0,0.086c0,3.551,2.547,6.508,5.923,7.181c-0.617,0.169-1.269,0.263-1.941,0.263c-0.477,0-0.942-0.054-1.392-0.135c0.94,2.902,3.667,5.023,6.898,5.086c-2.528,1.96-5.712,3.134-9.174,3.134c-0.598,0-1.183-0.034-1.761-0.104C9.268,36.786,13.152,38,17.321,38c13.585,0,21.017-11.156,21.017-20.834c0-0.317-0.01-0.633-0.025-0.945C39.763,15.197,41.013,13.905,42,12.429" />
                            </svg>

                            <a href="https://twitter.com/bregaster" class="ml-1">
                                Twitter
                            </a>
                        </div>
                        <div class="mr-5 flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24"
                                viewBox="0 0 48 48">
                                <path fill="#4caf50" d="M45,16.2l-5,2.75l-5,4.75L35,40h7c1.657,0,3-1.343,3-3V16.2z">
                                </path>
                                <path fill="#1e88e5" d="M3,16.2l3.614,1.71L13,23.7V40H6c-1.657,0-3-1.343-3-3V16.2z">
                                </path>
                                <polygon fill="#e53935"
                                    points="35,11.2 24,19.45 13,11.2 12,17 13,23.7 24,31.95 35,23.7 36,17"></polygon>
                                <path fill="#c62828"
                                    d="M3,12.298V16.2l10,7.5V11.2L9.876,8.859C9.132,8.301,8.228,8,7.298,8h0C4.924,8,3,9.924,3,12.298z">
                                </path>
                                <path fill="#fbc02d"
                                    d="M45,12.298V16.2l-10,7.5V11.2l3.124-2.341C38.868,8.301,39.772,8,40.702,8h0 C43.076,8,45,9.924,45,12.298z">
                                </path>
                            </svg>

                            <a href="mailto:bregaster2@gmail.com" class="ml-1 mr-5"> Send Mail </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>