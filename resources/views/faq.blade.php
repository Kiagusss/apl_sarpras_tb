@extends('layouts.master')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/faq.css') }}">
@endsection

@section('content')
<main>
    <div class="containers">
        <div class="text-header">
            <h2>FAQ</h2>
            <h1>Frequently Ask Question</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eligendi ut id tempora accusantium quis sed
                natus saepe maxime libero iste. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Culpa
                cumque, labore quas provident debitis vitae possimus doloremque tenetur neque odit. Lorem ipsum
                dolor sit, amet consectetur adipisicing elit. Qui, dolorem? lorem doler adisipet master.</p>
            <div class="button-faq">
                <a class="btn" href="#konten">Lihat lebih banyak<div class="bx bx-chevron-down"></div></a>
            </div>
        </div>
        <div class="image-bian">
            <img src="{{ asset('assets/img/tigan welcome.png') }}" alt="">
        </div>
    </div>
    <svg class="wave" width="100%" height="100%" id="svg" viewBox="0 0 1440 390" xmlns="http://www.w3.org/2000/svg"
        class="transition duration-300 ease-in-out delay-150">
        <style>
            .path-0 {
                animation: pathAnim-0 4s;
                animation-timing-function: linear;
                animation-iteration-count: infinite;
            }

            @keyframes pathAnim-0 {
                0% {
                    d: path("M 0,400 C 0,400 0,133 0,133 C 92.08205128205125,142.62051282051283 184.1641025641025,152.24102564102563 253,149 C 321.8358974358975,145.75897435897437 367.4256410256411,129.65641025641025 450,120 C 532.5743589743589,110.34358974358975 652.1333333333332,107.13333333333331 746,100 C 839.8666666666668,92.86666666666669 908.0410256410257,81.81025641025641 983,97 C 1057.9589743589743,112.18974358974359 1139.702564102564,153.62564102564102 1217,164 C 1294.297435897436,174.37435897435898 1367.148717948718,153.6871794871795 1440,133 C 1440,133 1440,400 1440,400 Z");
                }

                25% {
                    d: path("M 0,400 C 0,400 0,133 0,133 C 51.84102564102565,134.3025641025641 103.6820512820513,135.6051282051282 198,133 C 292.3179487179487,130.3948717948718 429.11282051282046,123.88205128205126 518,122 C 606.8871794871795,120.11794871794874 647.8666666666667,122.8666666666667 711,124 C 774.1333333333333,125.1333333333333 859.4205128205131,124.65128205128204 942,134 C 1024.579487179487,143.34871794871796 1104.451282051282,162.52820512820512 1187,164 C 1269.548717948718,165.47179487179488 1354.774358974359,149.23589743589744 1440,133 C 1440,133 1440,400 1440,400 Z");
                }

                50% {
                    d: path("M 0,400 C 0,400 0,133 0,133 C 82.14871794871792,134.15128205128207 164.29743589743583,135.3025641025641 234,132 C 303.70256410256417,128.6974358974359 360.9589743589744,120.94102564102565 448,122 C 535.0410256410256,123.05897435897435 651.8666666666666,132.93333333333334 734,124 C 816.1333333333334,115.06666666666666 863.5743589743591,87.325641025641 930,98 C 996.4256410256409,108.674358974359 1081.8358974358973,157.7641025641026 1170,170 C 1258.1641025641027,182.2358974358974 1349.0820512820515,157.6179487179487 1440,133 C 1440,133 1440,400 1440,400 Z");
                }

                75% {
                    d: path("M 0,400 C 0,400 0,133 0,133 C 103.52564102564105,120.49230769230769 207.0512820512821,107.98461538461538 279,109 C 350.9487179487179,110.01538461538462 391.3205128205128,124.55384615384617 470,131 C 548.6794871794872,137.44615384615383 665.6666666666667,135.79999999999998 753,127 C 840.3333333333333,118.20000000000002 898.0128205128206,102.24615384615386 962,99 C 1025.9871794871794,95.75384615384614 1096.2820512820513,105.21538461538462 1177,113 C 1257.7179487179487,120.78461538461538 1348.8589743589744,126.8923076923077 1440,133 C 1440,133 1440,400 1440,400 Z");
                }

                100% {
                    d: path("M 0,400 C 0,400 0,133 0,133 C 92.08205128205125,142.62051282051283 184.1641025641025,152.24102564102563 253,149 C 321.8358974358975,145.75897435897437 367.4256410256411,129.65641025641025 450,120 C 532.5743589743589,110.34358974358975 652.1333333333332,107.13333333333331 746,100 C 839.8666666666668,92.86666666666669 908.0410256410257,81.81025641025641 983,97 C 1057.9589743589743,112.18974358974359 1139.702564102564,153.62564102564102 1217,164 C 1294.297435897436,174.37435897435898 1367.148717948718,153.6871794871795 1440,133 C 1440,133 1440,400 1440,400 Z");
                }
            }
        </style>
        <path
            d="M 0,400 C 0,400 0,133 0,133 C 92.08205128205125,142.62051282051283 184.1641025641025,152.24102564102563 253,149 C 321.8358974358975,145.75897435897437 367.4256410256411,129.65641025641025 450,120 C 532.5743589743589,110.34358974358975 652.1333333333332,107.13333333333331 746,100 C 839.8666666666668,92.86666666666669 908.0410256410257,81.81025641025641 983,97 C 1057.9589743589743,112.18974358974359 1139.702564102564,153.62564102564102 1217,164 C 1294.297435897436,174.37435897435898 1367.148717948718,153.6871794871795 1440,133 C 1440,133 1440,400 1440,400 Z"
            stroke="none" stroke-width="0" fill="#1c438c" fill-opacity="0.53"
            class="transition-all duration-300 ease-in-out delay-150 path-0" transform="rotate(-180 720 200)">
        </path>
        <style>
            .path-1 {
                animation: pathAnim-1 4s;
                animation-timing-function: linear;
                animation-iteration-count: infinite;
            }

            @keyframes pathAnim-1 {
                0% {
                    d: path("M 0,400 C 0,400 0,266 0,266 C 69.46923076923076,252.27179487179487 138.93846153846152,238.54358974358973 216,253 C 293.0615384615385,267.45641025641027 377.71538461538466,310.0974358974359 467,305 C 556.2846153846153,299.9025641025641 650.2,247.06666666666663 743,233 C 835.8,218.93333333333337 927.4846153846152,243.63589743589745 1002,268 C 1076.5153846153848,292.36410256410255 1133.8615384615384,316.3897435897436 1204,316 C 1274.1384615384616,315.6102564102564 1357.0692307692307,290.8051282051282 1440,266 C 1440,266 1440,400 1440,400 Z");
                }

                25% {
                    d: path("M 0,400 C 0,400 0,266 0,266 C 84.26153846153849,264.05641025641023 168.52307692307699,262.1128205128205 241,256 C 313.476923076923,249.88717948717948 374.1692307692307,239.60512820512818 447,240 C 519.8307692307693,240.39487179487182 604.8000000000001,251.46666666666664 681,264 C 757.1999999999999,276.53333333333336 824.6307692307691,290.5282051282051 918,291 C 1011.3692307692309,291.4717948717949 1130.676923076923,278.42051282051284 1222,272 C 1313.323076923077,265.57948717948716 1376.6615384615384,265.7897435897436 1440,266 C 1440,266 1440,400 1440,400 Z");
                }

                50% {
                    d: path("M 0,400 C 0,400 0,266 0,266 C 98.48461538461538,241.13333333333333 196.96923076923076,216.26666666666668 267,223 C 337.03076923076924,229.73333333333332 378.60769230769233,268.06666666666666 451,277 C 523.3923076923077,285.93333333333334 626.6,265.4666666666667 726,254 C 825.4,242.53333333333333 920.9923076923076,240.0666666666667 997,236 C 1073.0076923076924,231.9333333333333 1129.4307692307693,226.26666666666668 1200,231 C 1270.5692307692307,235.73333333333332 1355.2846153846153,250.86666666666667 1440,266 C 1440,266 1440,400 1440,400 Z");
                }

                75% {
                    d: path("M 0,400 C 0,400 0,266 0,266 C 73.59487179487178,243.45384615384614 147.18974358974356,220.9076923076923 223,223 C 298.81025641025644,225.0923076923077 376.83589743589744,251.82307692307694 457,267 C 537.1641025641026,282.17692307692306 619.4666666666667,285.8 698,285 C 776.5333333333333,284.2 851.2974358974359,278.9769230769231 925,282 C 998.7025641025641,285.0230769230769 1071.3435897435897,296.2923076923077 1157,295 C 1242.6564102564103,293.7076923076923 1341.3282051282051,279.8538461538461 1440,266 C 1440,266 1440,400 1440,400 Z");
                }

                100% {
                    d: path("M 0,400 C 0,400 0,266 0,266 C 69.46923076923076,252.27179487179487 138.93846153846152,238.54358974358973 216,253 C 293.0615384615385,267.45641025641027 377.71538461538466,310.0974358974359 467,305 C 556.2846153846153,299.9025641025641 650.2,247.06666666666663 743,233 C 835.8,218.93333333333337 927.4846153846152,243.63589743589745 1002,268 C 1076.5153846153848,292.36410256410255 1133.8615384615384,316.3897435897436 1204,316 C 1274.1384615384616,315.6102564102564 1357.0692307692307,290.8051282051282 1440,266 C 1440,266 1440,400 1440,400 Z");
                }
            }
        </style>
        <path
            d="M 0,400 C 0,400 0,266 0,266 C 69.46923076923076,252.27179487179487 138.93846153846152,238.54358974358973 216,253 C 293.0615384615385,267.45641025641027 377.71538461538466,310.0974358974359 467,305 C 556.2846153846153,299.9025641025641 650.2,247.06666666666663 743,233 C 835.8,218.93333333333337 927.4846153846152,243.63589743589745 1002,268 C 1076.5153846153848,292.36410256410255 1133.8615384615384,316.3897435897436 1204,316 C 1274.1384615384616,315.6102564102564 1357.0692307692307,290.8051282051282 1440,266 C 1440,266 1440,400 1440,400 Z"
            stroke="none" stroke-width="0" fill="#1c438c" fill-opacity="1"
            class="transition-all duration-300 ease-in-out delay-150 path-1" transform="rotate(-180 720 200)">
        </path>
    </svg>
    <div class="content-card" id="konten">
        <div class="title">
            <h1>Find your questions</h1>
        </div>
        <div class="faq">
            <div class="faq-title">
                <h1>FAQ</h1>
            </div>
            <div class="faq-drawer">
                <input class="faq-drawer__trigger" id="faq-drawer" type="checkbox" /><label class="faq-drawer__title1" for="faq-drawer"> Apa itu aplikasi sarpras di sekolah?</label>
                <div class="faq-drawer__content-wrapper">
                  <div class="faq-drawer__content">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                    </p>
                  </div>
                </div>
              </div>
              
              <div class="faq-drawer">
                <input class="faq-drawer__trigger" id="faq-drawer-2" type="checkbox" /><label class="faq-drawer__title" for="faq-drawer-2">Apa saja fitur yang tersedia dalam aplikasi sarpras di sekolah?</label>
                <div class="faq-drawer__content-wrapper">
                  <div class="faq-drawer__content">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                    </p>
                  </div>
                </div>
              </div>
              
              <div class="faq-drawer">
                <input class="faq-drawer__trigger" id="faq-drawer-3" type="checkbox" /><label class="faq-drawer__title" for="faq-drawer-3">Apa manfaat menggunakan aplikasi sarpras di sekolah?</label>
                <div class="faq-drawer__content-wrapper">
                  <div class="faq-drawer__content">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.            
                    </p>
                  </div>
                </div>
              </div>
              <div class="faq-drawer">
                <input class="faq-drawer__trigger" id="faq-drawer-4" type="checkbox" /><label class="faq-drawer__title" for="faq-drawer-4"> Apa kendala yang dapat dihadapi dalam penggunaan aplikasi sarpras di sekolah?</label>
                <div class="faq-drawer__content-wrapper">
                  <div class="faq-drawer__content">
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.            
                    </p>
                  </div>
                </div>
              </div>
              
        </div>
    </div>
</main>
@endsection
