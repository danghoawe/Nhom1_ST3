!(function (a) {
    "use strict";
    var e = function () {
        this.$body = a("body");
    };
    (e.prototype.init = function () {
        Morris.Area({
            element: "morris-area-example",
            lineWidth: 0,
            data: [
                { y: "2009", a: 10, b: 20 },
                { y: "2010", a: 75, b: 65 },
                { y: "2011", a: 50, b: 40 },
                { y: "2012", a: 75, b: 65 },
                { y: "2013", a: 50, b: 40 },
                { y: "2014", a: 75, b: 65 },
                { y: "2015", a: 90, b: 60 },
            ],
            xkey: "y",
            ykeys: ["a", "b"],
            labels: ["Series A", "Series B"],
            resize: !0,
            gridLineColor: "rgba(108, 120, 151, 0.2)",
            lineColors: ["#2f353f", "#3bc0c3"],
        }),
            Morris.Bar({
                element: "morris-bar-example",
                data: [
                    { y: "Day1", a: 75, b: 65, c: 20 },
                    { y: "Day2", a: 50, b: 40, c: 50 },
                    { y: "Day3", a: 75, b: 65, c: 95 },
                    { y: "Day4", a: 50, b: 40, c: 22 },
                    { y: "Day5", a: 75, b: 65, c: 56 },
                    { y: "Day6", a: 100, b: 90, c: 60 },
                ],
                xkey: "y",
                ykeys: ["a", "b", "c"],
                gridLineColor: "rgba(108, 120, 151, 0.2)",
                labels: ["Series A", "Series B", "Series c"],
                barColors: ["#3bc0c3", "#2f353f", "#dcdcdc"],
            }),
            a.ChatApp.init();
    }),
        (a.Dashboard = new e()),
        (a.Dashboard.Constructor = e);
})(window.jQuery),
    (function (a) {
        "use strict";
        window.jQuery.Dashboard.init();
    })();
