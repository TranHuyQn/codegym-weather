<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Codegym Weather</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Aridity Weather Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css" />
<!-- js -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/autoSuggest.js"></script>
<!-- //js --> 
<link rel="stylesheet" type="text/css" href="css/easy-responsive-tabs.css " />
{{-- <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet"> --}}
</head>
<body onload="startTime()">
    <div class="main">  
        <h1>Codegym Weather</h1>
        <div id="search">
        <form method="get" action="{{ route('index') }}">
        @csrf            
        <input type="text" id="form-search" name="cityName" placeholder="Nhập tỉnh thành">
        <button style="display: none;" type="submit">Xem</button>
        </form>            
        </div>
        <div class="w3_agile_main_grids">
            <div class="w3layouts_main_grid">
                <div class="w3layouts_main_grid_left">
                    <h2>{{ "$cityName, $cityCountry" }}.</h2>
                    <p>{{ $data->weather[0]->main }}</p>
                    <h3>Hiện tại</h3>
                    <h4>{{ round($data->main->temp - 273.15) }}<span>°c</span></h4>
                </div>
                <div class="w3layouts_main_grid_right">
                    <canvas id="clear-day" width="70" height="70"> </canvas>
                    <div id="w3time"></div>
                    <div class="w3layouts_date_year">
                        <!-- date -->
                            <script type="text/javascript">
                               var mydate=new Date()
                               var year=mydate.getYear()
                               if(year<1000)
                                 year+=1900
                                 var day=mydate.getDay()
                                 var month=mydate.getMonth()
                                 var daym=mydate.getDate()
                               if(daym<10)
                                 daym="0"+daym
                                 var dayarray=new Array("Chủ nhật","Thứ hai","Thứ ba","Thứ tư","Thứ năm","Thứ sáu","Thứ bảy")
                                 var montharray=new Array("Tháng 1","Tháng 2","Tháng 3","Tháng 4","Tháng 5","Tháng 6","Tháng 7","Tháng 8","Tháng 9","Tháng 10","Tháng 11","Tháng 12")
                                 document.write(""+dayarray[day]+", "+daym+" "+montharray[month]+", "+year+"")
                            </script>
                        <!-- //date -->
                    </div>
                </div>
                <div class="clear"> </div>
            </div>
            
            <div class="agileits_w3layouts_main_grid">
                <div class="agile_main_grid_left">
                    <div class="wthree_main_grid_left_grid">
                        <div class="w3ls_main_grid_left_grid1">
                            <div class="w3l_main_grid_left_grid1_left">
                                <h3>Mặt trời</h3>
                                <p> {{ "$sunrise/$sunset" }} <span></span></p>
                            </div>
                            <div class="w3l_main_grid_left_grid1_right">
                                <canvas id="partly-cloudy-day" width="45" height="45"></canvas>
                            </div>
                            <div class="clear"> </div>
                        </div>
                        <div class="w3ls_main_grid_left_grid1">
                            <div class="w3l_main_grid_left_grid1_left">
                                <h3>Độ ẩm</h3>
                                <p>{{ $data->main->humidity }} <span>%</span></p>
                            </div>
                            <div class="w3l_main_grid_left_grid1_right">
                                <canvas id="cloudy" width="45" height="45"></canvas>
                            </div>
                            <div class="clear"> </div>
                        </div>
                        <div class="w3ls_main_grid_left_grid1">
                            <div class="w3l_main_grid_left_grid1_left">
                                <h3>Gió Km/h</h3>
                                <p>{{$data->wind->speed * 3.6}} <span>km/h</span></p>
                            </div>
                            <div class="w3l_main_grid_left_grid1_right">
                                <canvas id="wind" width="45" height="45"></canvas>
                            </div>
                            <div class="clear"> </div>
                        </div>
                    </div>
                </div>
                <div class="w3_agileits_main_grid_right">
                    <div class="agileinfo_main_grid_right_grid">
                        <div id="parentHorizontalTab">
                            <ul class="resp-tabs-list hor_1">
                                <li>Today</li>
                                <li>Week</li>
                                <li>Month</li>
                            </ul>
                            <div class="resp-tabs-container hor_1">
                                <div class="w3_agileits_tabs">
                                    <div class="w3_main_grid_right_grid1">
                                        <div class="w3_main_grid_right_grid1_left">
                                            <p>10 AM</p>
                                        </div>
                                        <div class="w3_main_grid_right_grid1_right">
                                            <p>15<i>°c</i><span>Cloudy</span></p>
                                        </div>
                                        <div class="clear"> </div>
                                    </div>
                                    <div class="w3_main_grid_right_grid1">
                                        <div class="w3_main_grid_right_grid1_left">
                                            <p>11 AM</p>
                                        </div>
                                        <div class="w3_main_grid_right_grid1_right">
                                            <p>16<i>°c</i><span>Clear</span></p>
                                        </div>
                                        <div class="clear"> </div>
                                    </div>
                                    <div class="w3_main_grid_right_grid1">
                                        <div class="w3_main_grid_right_grid1_left">
                                            <p>12 PM</p>
                                        </div>
                                        <div class="w3_main_grid_right_grid1_right">
                                            <p>18<i>°c</i><span>Cear</span></p>
                                        </div>
                                        <div class="clear"> </div>
                                    </div>
                                    <div class="w3_main_grid_right_grid1">
                                        <div class="w3_main_grid_right_grid1_left">
                                            <p>2 PM</p>
                                        </div>
                                        <div class="w3_main_grid_right_grid1_right">
                                            <p>12<i>°c</i><span>Partly Cloudy</span></p>
                                        </div>
                                        <div class="clear"> </div>
                                    </div>
                                </div>
                                <div class="w3_agileits_tabs">
                                    <div class="w3_main_grid_right_grid1">
                                        <div class="w3_main_grid_right_grid1_left">
                                            <p>Monday</p>
                                        </div>
                                        <div class="w3_main_grid_right_grid1_right">
                                            <p>14<i>°c</i><span>Clear</span></p>
                                        </div>
                                        <div class="clear"> </div>
                                    </div>
                                    <div class="w3_main_grid_right_grid1">
                                        <div class="w3_main_grid_right_grid1_left">
                                            <p>Tuesday</p>
                                        </div>
                                        <div class="w3_main_grid_right_grid1_right">
                                            <p>16<i>°c</i><span>Cloudy</span></p>
                                        </div>
                                        <div class="clear"> </div>
                                    </div>
                                    <div class="w3_main_grid_right_grid1">
                                        <div class="w3_main_grid_right_grid1_left">
                                            <p>Wednesday</p>
                                        </div>
                                        <div class="w3_main_grid_right_grid1_right">
                                            <p>11<i>°c</i><span>Rainy</span></p>
                                        </div>
                                        <div class="clear"> </div>
                                    </div>
                                    <div class="w3_main_grid_right_grid1">
                                        <div class="w3_main_grid_right_grid1_left">
                                            <p>Thursday</p>
                                        </div>
                                        <div class="w3_main_grid_right_grid1_right">
                                            <p>18<i>°c</i><span>Sunny</span></p>
                                        </div>
                                        <div class="clear"> </div>
                                    </div>
                                </div>
                                <div class="w3_agileits_tabs">
                                    <div class="w3_main_grid_right_grid1">
                                        <div class="w3_main_grid_right_grid1_left">
                                            <p>January</p>
                                        </div>
                                        <div class="w3_main_grid_right_grid1_right">
                                            <p>18<i>°c</i><span>Cloudy</span></p>
                                        </div>
                                        <div class="clear"> </div>
                                    </div>
                                    <div class="w3_main_grid_right_grid1">
                                        <div class="w3_main_grid_right_grid1_left">
                                            <p>February</p>
                                        </div>
                                        <div class="w3_main_grid_right_grid1_right">
                                            <p>14<i>°c</i><span>Clear</span></p>
                                        </div>
                                        <div class="clear"> </div>
                                    </div>
                                    <div class="w3_main_grid_right_grid1">
                                        <div class="w3_main_grid_right_grid1_left">
                                            <p>March</p>
                                        </div>
                                        <div class="w3_main_grid_right_grid1_right">
                                            <p>18<i>°c</i><span>Cear</span></p>
                                        </div>
                                        <div class="clear"> </div>
                                    </div>
                                    <div class="w3_main_grid_right_grid1">
                                        <div class="w3_main_grid_right_grid1_left">
                                            <p>April</p>
                                        </div>
                                        <div class="w3_main_grid_right_grid1_right">
                                            <p>12<i>°c</i><span>Partly Cloudy</span></p>
                                        </div>
                                        <div class="clear"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"> </div>
            </div>
        </div>
    </div>
    <!-- sky-icons -->
        <script src="js/skycons.js"></script>
        <script>
         var icons = new Skycons({"color": "#999999"}),
              list  = [
                "sleet", "clear-day"
              ],
              i;

          for(i = list.length; i--; )
            icons.set(list[i], list[i]);

          icons.play();
        </script>
        <script>
             var icons = new Skycons({"color": "#f5f5f5"}),
                  list  = [
                    "clear-night", "partly-cloudy-day",
                    "partly-cloudy-night", "cloudy", "rain", "snow", "wind",
                    "fog"
                  ],
                  i;

              for(i = list.length; i--; )
                icons.set(list[i], list[i]);

              icons.play();
        </script>
    <!-- //sky-icons -->
    <!-- tabs -->
        <script src="js/easyResponsiveTabs.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                //Horizontal Tab
                $('#parentHorizontalTab').easyResponsiveTabs({
                    type: 'default', //Types: default, vertical, accordion
                    width: 'auto', //auto or any width like 600px
                    fit: true, // 100% fit in a container
                    tabidentify: 'hor_1', // The tab groups identifier
                    activate: function(event) { // Callback function if tab is switched
                        var $tab = $(this);
                        var $info = $('#nested-tabInfo');
                        var $name = $('span', $info);
                        $name.text($tab.text());
                        $info.show();
                    }
                });
            });
        </script>
    <!-- //tabs -->
    <!-- time -->
        <script>
            function startTime() {
                var today = new Date();
                var h = today.getHours();
                var m = today.getMinutes();
                var s = today.getSeconds();
                m = checkTime(m);
                s = checkTime(s);
                document.getElementById('w3time').innerHTML =
                h + ":" + m + ":" + s;
                var t = setTimeout(startTime, 500);
            }
            function checkTime(i) {
                if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
                return i;
            }
        </script>
    <!-- //time -->

</body>
</html>