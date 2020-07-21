! function(t) {
    "use strict";
    var e = function() {
        this.$body = t("body"), this.$realData = []
    };
    e.prototype.createPlotGraph = function(e, a, o, r, i, l, s) {
        t.plot(t(e), [{
            data: a,
            label: r[0],
            color: i[0]
        }, {
            data: o,
            label: r[1],
            color: i[1]
        }], {
            series: {
                lines: {
                    show: !0,
                    fill: !0,
                    lineWidth: 2,
                    fillColor: {
                        colors: [{
                            opacity: .4
                        }, {
                            opacity: .4
                        }]
                    }
                },
                points: {
                    show: !1
                },
                shadowSize: 0
            },
            grid: {
                hoverable: !0,
                clickable: !0,
                borderColor: l,
                borderWidth: 1,
                tickColor: "#f9f9f9",
                labelMargin: 10,
                backgroundColor: s
            },
            legend: {
                position: "ne",
                margin: [0, -24],
                noColumns: 0,
                labelBoxBorderColor: null,
                labelFormatter: function(t, e) {
                    return t + "&nbsp;&nbsp;"
                },
                width: 30,
                height: 2
            },
            yaxis: {
                tickColor: "transparent",
                tickLength: 0,
                font: {
                    color: "#bdbdbd"
                }
            },
            xaxis: {
                tickColor: "#transparent",
                tickLength: 0,
                font: {
                    color: "#bdbdbd"
                }
            },
            tooltip: !0,
            tooltipOpts: {
                content: "%s: Value of %x is %y",
                shifts: {
                    x: -60,
                    y: 25
                },
                defaultTheme: !1
            }
        })
    }, e.prototype.createPieGraph = function(e, a, o, r) {
        var i = [{
                label: a[0],
                data: o[0]
            }, {
                label: a[1],
                data: o[1]
            }, {
                label: a[2],
                data: o[2]
            }],
            l = {
                series: {
                    pie: {
                        show: !0
                    }
                },
                legend: {
                    show: !1
                },
                grid: {
                    hoverable: !0,
                    clickable: !0
                },
                colors: r,
                tooltip: !0,
                tooltipOpts: {
                    content: "%s, %p.0%"
                }
            };
        t.plot(t(e), i, l)
    }, e.prototype.randomData = function() {
        for (this.$realData.length > 0 && (this.$realData = this.$realData.slice(1)); this.$realData.length < 300;) {
            var t = (this.$realData.length > 0 ? this.$realData[this.$realData.length - 1] : 50) + 10 * Math.random() - 5;
            t < 0 ? t = 0 : t > 100 && (t = 100), this.$realData.push(t)
        }
        for (var e = [], a = 0; a < this.$realData.length; ++a) e.push([a, this.$realData[a]]);
        return e
    }, e.prototype.createRealTimeGraph = function(e, a, o) {
        return t.plot(e, [a], {
            colors: o,
            series: {
                lines: {
                    show: !0,
                    fill: !0,
                    lineWidth: 1,
                    fillColor: {
                        colors: [{
                            opacity: .45
                        }, {
                            opacity: .45
                        }]
                    }
                },
                points: {
                    show: !1
                },
                shadowSize: 0
            },
            grid: {
                show: !0,
                aboveData: !1,
                color: "#fff",
                labelMargin: 15,
                axisMargin: 0,
                borderWidth: 0,
                borderColor: null,
                minBorderMargin: 5,
                clickable: !0,
                hoverable: !0,
                autoHighlight: !1,
                mouseActiveRadius: 20
            },
            tooltip: !0,
            tooltipOpts: {
                content: "Value is : %y.0%",
                shifts: {
                    x: -30,
                    y: -50
                }
            },
            yaxis: {
                min: 0,
                max: 100,
                tickColor: "#transparent",
                tickLength: 0
            },
            xaxis: {
                show: !0
            }
        })
    }, e.prototype.createDonutGraph = function(e, a, o, r) {
        var i = [{
                label: a[0],
                data: o[0]
            }, {
                label: a[1],
                data: o[1]
            }, {
                label: a[2],
                data: o[2]
            }, {
                label: a[3],
                data: o[3]
            }, {
                label: a[4],
                data: o[4]
            }],
            l = {
                series: {
                    pie: {
                        show: !0,
                        innerRadius: .7
                    }
                },
                legend: {
                    show: !0,
                    labelFormatter: function(t, e) {
                        return '<div style="font-size:14px;">&nbsp;' + t + "</div>"
                    },
                    labelBoxBorderColor: null,
                    margin: 50,
                    width: 20,
                    padding: 1
                },
                grid: {
                    hoverable: !0,
                    clickable: !0
                },
                colors: r,
                tooltip: !0,
                tooltipOpts: {
                    content: "%s, %p.0%"
                }
            };
        t.plot(t(e), i, l)
    }, e.prototype.createCombineGraph = function(e, a, o, r) {
        var i = [{
                label: o[0],
                data: r[0],
                lines: {
                    show: !0,
                    fill: !0
                },
                points: {
                    show: !0
                }
            }, {
                label: o[1],
                data: r[1],
                lines: {
                    show: !0
                },
                points: {
                    show: !0
                }
            }, {
                label: o[2],
                data: r[2],
                bars: {
                    show: !0
                }
            }],
            l = {
                xaxis: {
                    ticks: a
                },
                series: {
                    shadowSize: 0
                },
                grid: {
                    hoverable: !0,
                    clickable: !0,
                    tickColor: "#f9f9f9",
                    borderWidth: 1,
                    borderColor: "#eeeeee"
                },
                colors: ["#317eeb", "#1a2942", "#60b1cc"],
                tooltip: !0,
                tooltipOpts: {
                    defaultTheme: !1
                },
                legend: {
                    position: "nw"
                }
            };
        t.plot(t(e), i, l)
    }, e.prototype.init = function() {
        this.createPlotGraph("#website-stats", [
            [0, 9],
            [1, 8],
            [2, 5],
            [3, 8],
            [4, 5],
            [5, 14],
            [6, 10]
        ], [
            [0, 5],
            [1, 12],
            [2, 4],
            [3, 3],
            [4, 12],
            [5, 8],
            [6, 4]
        ], ["Aktivitas Belanja", "Service Two"], ["#04a2b3", "#e66060"], "transparent", "transparent");
        this.createPieGraph("#pie-chart #pie-chart-container", ["Series 1", "Series 2", "Series 3"], [20, 30, 15], ["#dcdcdc", "#e66060", "#04a2b3"]);
        var e = this.createRealTimeGraph("#flotRealTime", this.randomData(), ["#04a2b3"]);
        e.draw();
        var a = this;
        ! function o() {
            e.setData([a.randomData()]), e.draw(), setTimeout(o, (t("html").hasClass("mobile-device"), 1e3))
        }();
        this.createDonutGraph("#donut-chart #donut-chart-container", ["Series 1", "Series 2", "Series 3", "Series 4", "Series 5"], [35, 20, 10], ["#e66060", "#04a2b3", "#dcdcdc"])
    }, t.FlotChart = new e, t.FlotChart.Constructor = e
}(window.jQuery),
function(t) {
    "use strict";
    window.jQuery.FlotChart.init()
}();