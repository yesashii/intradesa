<!DOCTYPE html>
<html>
<head>
    <script src="{{ asset('js/calendarioJQuery.js') }}"></script>

    <link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
    <style>
        *{margin:0;padding:0;font-family:"Ubuntu";-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box}

        .calendar,.calendar * {-webkit-box-sizing: border-box;-moz-box-sizing: border-box;box-sizing: border-box;}
        .calendar {padding: 0em;color: white;font-weight: 300;}
        .calendar.small {font-size: 0.8em;font-weight: 100;}

        .calendar-month-view {display: block;font-size: 2em;line-height:2em;-webkit-transition: all 0.5s; -moz-transition: all 0.5s;-o-transition: all 0.5s;transition:0.5s all;position:relative;text-align:center;}
        .calendar-month-view, .calendar-month-view * {-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;-o-user-select: none;user-select: none;}
        .calendar-month-view-arrow {width: 15%;	position: absolute;	top: 0;	color: transparent;	cursor: pointer;}
        .calendar-month-view-arrow:hover {background: rgba(255, 255, 255, 0.25);}
        .calendar.spec-day .calendar-month-view-arrow {	display: none;}

        [data-dir=left] {left:0;}
        [data-dir=right] {right: 0;}


        .letrasDay {display: block;height:30px;line-height:30px;text-align:center;}
        .letrasDay div {width: 14.28%;margin: 0 !important;padding:0 !important;position: relative;display: block;float:left;color: white;border:solid #fff;border-width:1px 0 0 1px;overflow:hidden}

        .calendar:hover .calendar-month-view {background: rgb(35,35,35) !important;}
        .calendar:hover .calendar-month-view-arrow {color: white;}
        .calendar-holder {width:100%;height: 300px;position: relative;overflow: hidden;}
        .calendar-grid {width:100%;height: 100%;position: absolute;top: 0;}
        .calendar.spec-day .calendar-grid {display: none;}

        .calendar-day {width: 14.28%;margin: 0 !important;padding:0 !important;height: 50px;position: relative;display: block;float:left;color: white;border:solid #fff;border-width:1px 0 0 1px;overflow:hidden}
        .calendar-day.have-events {cursor: pointer;}

        .calendar-day:nth-child(7n),.letrasDay div:nth-child(7n) {border-right: 0;}
        .calendar-day:nth-child(7n+1),.letrasDay div:nth-child(7n+1) {border-left: 0;}
        .calendar-day.other-month {color: rgb(55, 55, 55);}
        .calendar .calendar-grid .calendar-day.this-day {background: none;}
        .calendar .calendar-grid .calendar-day.have-events:hover {background: rgb(34, 34, 34);}
        .calendar .calendar-grid .other-month.have-events:hover {color: #020206;}

        .calendar-day .date-holder {font-size: 1.3em;position: absolute;right:5%;bottom:5%;}
        .calendar-day .event-notif-holder {
            height: 90%;
            height: -moz-calc(100% - 10px);
            height: -webkit-calc(100% - 10px);
            height: calc(100% - 10px);
            left:5%;
            left: -moz-calc(0px + 5px);
            left: -webkit-calc(0px + 5px);
            left: calc(0px + 5px);
            top:5%;
            top: -moz-calc(0px + 5px);
            top: -webkit-calc(0px + 5px);
            top: calc(0px + 5px);
            position: absolute;
            width: 0.25em;
        }
        .calendar-day .event-notif {
            height: 0.5em;
            background: white;
            width: 100%;
            margin: 1px 0px;
        }

        .calendar-specific {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            display: none;
            color: white;
            padding: 1em;
        }
        .calendar.spec-day .calendar-specific {
            display: block;
        }
        .calendar-specific .specific-day {
            width: 30%;
            display: inline-block;
            padding-bottom: 1em;
            cursor: pointer;
        }
        .calendar-specific .specific-day:hover {
            background: rgb(34, 34, 34);
        }

        .specific-day-info[i=day] {
            font-size: 3em;
            text-align: center;
        }
        .specific-day-info[i=month] {
            font-size: 2em;
            line-height: 0.5em;
            text-align: center;
        }
        .calendar-specific .specific-day-scheme {
            display: inline-block;
            height: 100%;
            margin-left: 1em;
            width: calc(70% - 1em);
            width: -webkit-calc(70% - 1em);
            overflow-y: scroll;
            text-align: left;
        }
        .calendar-specific .specific-day-scheme::-webkit-scrollbar {
            width: 10px;
        }
        .calendar-specific .specific-day-scheme::-webkit-scrollbar-track {
            background: transparent;
        }
        .calendar-specific .specific-day-scheme::-webkit-scrollbar-thumb {
            background: rgb(34,34,34);
        }

        .specific-day-scheme .specific-day-scheme-event {
            padding: 0.5em;
            margin: 0.5em 0;
        }
        .specific-day-scheme .specific-day-scheme-event:first-child {
            margin: 0;
        }
        .specific-day-scheme .specific-day-scheme-event:last-child {
            margin-bottom: 0;
        }

        .calendar .specific-day-scheme-event h1 {
            margin: 0;
            font-size: 1.1em;
            line-height: 1;
            font-weight: 400;
        }
        .calendar .specific-day-scheme-event p[data-role=dur] {
            margin: 0;
        }
        .calendar .specific-day-scheme-event p[data-role=loc] {
            margin: 0;
            line-height: 1;
        }
        [data-color=normal] {
            background-color: #c8c6a5;
        }
        [data-color=normal] select,[data-color=normal] .calendar-month-view, [data-role=sub] nav a[data-color=normal], [data-color=normal] .checkbox-outer, [data-color=normal] .radio-outer,[data-color=normal] textarea,input:not([type=file])[data-color=normal], [data-color=normal] input:not([type=file]),[data-color=normal] .calendar-day,[data-color=normal] button, button[data-color=normal],[data-color=normal] a[data-role=button], a[data-role=button][data-color=normal],[data-color=normal] input[type=submit],[data-color=normal].accordion li, [data-color=normal].list li, [data-color=normal].olist li, [data-color=normal] .specific-day,[data-color=normal] .chart-bar,[data-color=normal] .calendar-specific .specific-day-scheme-event {
            background-color: #ffffff;
        }
    </style>
</head>
<body>
<div class="calendar" data-color="normal"><div data-role="day" data-day="<?php echo date("Ynd",mktime(0,0,0,date("m"),date("d")+1,date("Y"))); ?>"><div data-role="event" data-name="Soy un evento que siempre saldr&eacute; ma&ntilde;ana" data-start="9.00" data-end="9.30" data-location="martiniglesias.eu"></div></div></div>
<script>
    var yy;
    var calendarArray =[];
    var monthOffset = [6,7,8,9,10,11,0,1,2,3,4,5];
    var monthArray = [["ENE","enero"],["FEB","Febrero"],["MAR","Marzo"],["ABR","Abril"],["MAY","Mayo"],["JUN","Junio"],["JUL","Julio"],["AGO","Agosto"],["SEP","Septiembre"],["OCT","Octubre"],["NOV","Noviembre"],["DIC","Diciembre"]];
    var letrasArray = ["L","M","X","J","V","S","D"];
    var dayArray = ["7","1","2","3","4","5","6"];
    $(document).ready(function() {
        $(document).on('click','.calendar-day.have-events',activateDay);
        $(document).on('click','.specific-day',activatecalendar);
        $(document).on('click','.calendar-month-view-arrow',offsetcalendar);
        $(window).resize(calendarScale);
        $(".calendar").calendar({
            "2013910": {
                "Mulberry Festival": {
                    start: "9.00",
                    end: "9.30",
                    location: "London"
                }
            }
        });
        calendarSet();
        calendarScale();
    });
</script>


<script type="text/javascript">


    (function ( $ ) {
        $.fn.calendar = function(array, color) {
            if(color == undefined) {
                $(this).data("color","normal");
            } else {
                $(this).data("color",color);
            }
            $.each(array, function(date,events) {
                var tempdayarray = [];
                $.each(events, function(ev,evdata) {
                    var tempeventarray = [];
                    tempeventarray["name"] = ev;
                    tempeventarray["start"] = evdata.start;
                    tempeventarray["end"] = evdata.end;
                    tempeventarray["location"] = evdata.location;
                    tempdayarray.push(tempeventarray);
                });
                calendarArray[date] = tempdayarray;
            });


            return this;
        };
    }( jQuery ));


    function calendarScale() {
        $(".calendar").each(function() {
            if($(this).width() < 400 && !$(this).hasClass('small')) {
                $(this).addClass('small');
            } else if($(this).width() > 400 && $(this).hasClass('small')) {
                $(this).removeClass('small');
            }
        })
    }

    function offsetcalendar() {
        var par = $(this).parents('.calendar');
        var cm = parseInt(par.attr('offset'));
        if($(this).data('dir') == "left") {
            calendarSetMonth(par,cm-1);
        } else if($(this).data('dir') == "right") {
            calendarSetMonth(par,cm+1);
        }

    }

    function orderBy(deli,array) {
        var p = array.slice();
        var o = p.length;
        var y,t;
        var temparray = [];
        for(var u=0; u<o;u++) {
            for(var uu=0;uu<p.length;uu++) {
                if(uu==0) {
                    t = uu;
                    y = p[uu];
                }
                else if(parseInt(p[uu][deli].replace('.','')) < parseInt(y[deli].replace('.',''))) {
                    y = p[uu];
                    t = uu;
                }
            }
            temparray.push(y);
            p.splice(t,1);
        }
        return temparray;
    }

    function calendarSet() {
        $(".calendar").append('<div class="calendar-month-view"><div class="calendar-month-view-arrow" data-dir="left">&lsaquo;</div><p></p><div class="calendar-month-view-arrow" data-dir="right">&rsaquo;</div></div><div class="letrasDay"></div><div class="calendar-holder"><div class="calendar-grid"></div><div class="calendar-specific"><div class="specific-day"><div class="specific-day-info" i="day"></div><div class="specific-day-info" i="month"></div></div><div class="specific-day-scheme"></div></div></div>');
        $(".calendar").each(function() {
            if($(this).data("color") == undefined) {
                $(this).data("color","normal");
            }
            $(this).find('[data-role=day]').each(function() {
                var tempdayarray = [];
                $(this).find('[data-role=event]').each(function() {
                    var tempeventarray = [];
                    tempeventarray["name"] = $(this).data("name");
                    tempeventarray["start"] = $(this).data("start");
                    tempeventarray["end"] = $(this).data("end");
                    tempeventarray["location"] = $(this).data("location");
                    tempdayarray.push(tempeventarray);
                });
                if(calendarArray[$(this).data('day')] !== undefined) {
                    $.each(calendarArray[$(this).data('day')], function(k,v) {
                        tempdayarray.push(v)
                    });
                }
                calendarArray[$(this).data('day')] = tempdayarray;
            });
            calendarSetMonth($(this));
        });
        $(".calendar [data-role=day]").remove();
    }
    function activateDay() {
        $(this).parents('.calendar').addClass('spec-day');
        var di = new Date(parseInt($(this).attr('time')));
        var strtime = $(this).attr('strtime');
        var d = new Object();
        d.day = di.getDate();
        d.month = di.getMonth();
        d.events = calendarArray[strtime];
        d.tocalendar = tocalendar;
        d.tocalendar();
    }
    var tocalendar = function() {
        $(".specific-day-info[i=day]").html(this.day);
        $(".specific-day-info[i=month]").html(monthArray[this.month][0]);
        if(this.events !== undefined) {
            var ev = orderBy('start',this.events);
            for(var o = 0; o<ev.length;o++) {
                $(".specific-day-scheme").append('<div class="specific-day-scheme-event"><h1>'+ev[o]['name']+'</h1><p data-role="dur">'+ev[o]['start']+' - '+ev[o]['end']+'</p><p data-role="loc">'+ev[o]['location']+'</p></div>');
            }
        }
    }
    function activatecalendar() {
        $(this).parents('.calendar').removeClass('spec-day');
        $(".specific-day-scheme").html('');
    }
    function calendarSetMonth(ele,offset) {
        ele.find(".calendar-grid").html('');
        ele.find(".letrasDay").html('');
        var d = new Date();
        var c = new Date();
        var e = new Date();
        var p = d;
        if(offset !== undefined) {
            d = monthChange(p,offset);
            e = monthChange(p,offset);
            ele.attr('offset', offset);
        } else {
            ele.attr('offset', 0);
        }
        ele.find(".calendar-month-view p").text(monthArray[d.getMonth()][1]+' '+d.getFullYear());
        d.setDate(1);
        if(dayArray[d.getDay()] == 1) {
            d.setDate(d.getDate()-7);
        } else {
            d.setDate(d.getDate()-dayArray[d.getDay()]+1);
        }

        for(var i=0;i<7;i++) {
            var dias_Semana = $('<div>'+letrasArray[i]+'</div>');
            ele.find(".letrasDay").append(dias_Semana);
        }




        for(var i=0;i<42;i++) {
            d.setDate(d.getDate()+i);
            var cal_day = $('<div class="calendar-day"><div class="date-holder">'+d.getDate()+'</div></div>');
            if(d.getMonth() !== e.getMonth()) {
                cal_day.addClass('other-month');
            }
            if(d.getTime() == c.getTime()) {
                cal_day.addClass('this-day');
            }
            var strtime = d.getFullYear()+''+(d.getMonth()+1)+''+d.getDate();
            if(calendarArray[strtime] !== undefined) {
                cal_day.addClass('have-events');
            }
            var cal_day_eventholder = $('<div class="event-notif-holder"></div>');
            if(calendarArray[strtime] != undefined) {
                for(var u=0;u<3 && u<calendarArray[strtime].length;u++) {
                    cal_day_eventholder.append('<div class="event-notif"></div>')
                }
            }
            cal_day.attr('strtime',strtime);
            cal_day.attr('time',d.getTime());
            cal_day.prepend(cal_day_eventholder);

            ele.find(".calendar-grid").append(cal_day);
            d.setDate(d.getDate()-i);
        }
    }

    function monthChange(d,o) {
        var dim = [31,28,31,30,31,30,31,31,30,31,30,31];
        var day = d.getDate();
        var month = o !== undefined ? d.getMonth()+o : d.getMonth();
        var year = d.getFullYear();
        var hours = d.getHours();
        var minutes = d.getMinutes();
        var seconds = d.getSeconds();
        while(month>11) {
            month= month-12;
            year++;
        }
        while(month<0) {
            month= month+12;
            year--;
        }
        if(dim[month] < day) {
            day = dim[month];
        }
        return new Date(year,month,day,hours,minutes,seconds);
    }

</script>

</body>
</html>

