$(document).ready(function() {
    updateButtonState();
    updateDayState();

    $("#positiveButton").click(function() {
        $(this).addClass("active");
        $("#negativeButton").removeClass("active");
        var currentDay = getCurrentDay();
        updateDayValue(currentDay, '+1'); 
        saveState();
    });

    $("#negativeButton").click(function() {
        $(this).addClass("active");
        $("#positiveButton").removeClass("active");
        var currentDay = getCurrentDay();

        updateDayValue(currentDay, '-1');
        saveState();
    });

    function getCurrentDay() {
        return 0; 
    }

    function updateDayValue(day, value) {
        if (day >= 0 && day < 60) {
            var dayElement = $("#day" + day);

            dayElement.find("span").text(value);
            dayElement.removeClass("positiveCheck negativeCheck");

            if (value === "+1") {
                dayElement.addClass("positiveCheck");
            } else if (value === "-1") {
                dayElement.addClass("negativeCheck");
            }
            saveDayState(day, value);
        }
    }

    function saveDayState(day, value) {
        localStorage.setItem("day" + day, value);
    }

    function updateDayState() {
        for (var i = 0; i < 60; i++) {
            var dayElement = $("#day" + i);
            var value = localStorage.getItem("day" + i);
            if (value) {
                dayElement.find("span").text(value);
                dayElement.removeClass("positiveCheck negativeCheck");
                if (value === "+1") {
                    dayElement.addClass("positiveCheck");
                } else if (value === "-1") {
                    dayElement.addClass("negativeCheck");
                }
            }
        }
    }

    function saveState() {
        var positiveActive = $("#positiveButton").hasClass("active");
        var negativeActive = $("#negativeButton").hasClass("active");

        localStorage.setItem("positiveActive", positiveActive);
        localStorage.setItem("negativeActive", negativeActive);
    }

    function updateButtonState() {
        var positiveActive = localStorage.getItem("positiveActive") === "true";
        var negativeActive = localStorage.getItem("negativeActive") === "true";

        if (positiveActive) {
            $("#positiveButton").addClass("active");
        } else if (negativeActive) {
            $("#negativeButton").addClass("active");
        }
    }

    var currentDate = new Date();
    var targetDate = new Date(currentDate.getFullYear(), currentDate.getMonth(), currentDate.getDate(), 19, 0, 0);

    var countDownDate = targetDate.getTime();

    var x = setInterval(function() {
    var now = new Date().getTime();
    var distance = countDownDate - now;
    
    if (distance < 0) {
        clearInterval(x);
        $(".activeDay").hide();
        $(".diaHoje .hidden").removeClass("hidden").addClass("active");
        localStorage.setItem("contadorParado", "true"); 
        var currentDate = new Date();
        if (currentDate.getHours() === 23 && currentDate.getMinutes() === 59) {
            currentDate.setDate(currentDate.getDate() + 1);
            currentDate.setHours(19, 0, 0, 0);
            countDownDate = currentDate.getTime();
            x = setInterval(updateCounter, 1000);
        }
    } else {
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        $(".activeDay h3").text(("0" + hours).slice(-2) + ":" + ("0" + minutes).slice(-2) + ":" + ("0" + seconds).slice(-2));
    }
}, 1000);
});