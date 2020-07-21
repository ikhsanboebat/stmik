@extends('layouts.dashboard')

@section('content')
<!-- Start right Content here -->
@if(session('login'))
<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        onOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })
      
      Toast.fire({
        icon: 'success',
        title: 'Signed in successfully'
      })
</script>
@endif

    <!-- Start content -->
    <div class="content">

        <div class="">
            <div class="page-header-title">
                <h4 class="page-title text-white">Dashboard | <span class="text-info">Suhu <i class="fas fa-thermometer-half"></i></span></h4>
            </div>
        </div>

        <div class="page-content-wrapper ">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                {{--  <h4 class="m-b-30 m-t-0"><i class="mdi mdi-bullhorn"></i> Grafik Belanja</h4>  --}}
                                <div class="row">
                                    <div class="col-12">
                                        <div class="card bg-white">
                                            <div class="card-body">
                                                <h4 class="m-t-0 m-b-30 text-dark"># Grafik Celcius</h4>
                                                <div id="flot-placeholder" style="width:100%;height:400px"></div>
                                                {{--  @for ( $i = 0; $i <  ; ++)
                                                    
                                                @endfor  --}}
                                                <script type="text/javascript">
                                                    //******* 2012 Average Temperature - BAR CHART
                                                    
                                                    var data = [@foreach ($monitoring as $mon2)
                                                        [ "{{ isset($ia) ? ++$ia : $ia=1 }}", "{{ $mon2->monitoring_celcius }}" ],
                                                    @endforeach];
                                                    var dataset = [{ label: "Grafik Celcius", data: data, color: "#5482FF" }];
                                                    var ticks = [@foreach ($monitoring as $mon3)
                                                    [ "{{ isset($ib) ? ++$ib : $ib=1 }}", "{{ date('H', strtotime($mon3->monitoring_created_at)) }}" ],
                                                    @endforeach];
                                                    
                                                    var options = {
                                                        series: {
                                                            bars: {
                                                                show: true
                                                            }
                                                        },
                                                        bars: {
                                                            align: "center",
                                                            barWidth: 0.5
                                                        },
                                                        xaxis: {
                                                            axisLabel: "Second",
                                                            axisLabelUseCanvas: true,
                                                            axisLabelFontSizePixels: 12,
                                                            axisLabelFontFamily: 'Verdana, Arial',
                                                            axisLabelPadding: 10,
                                                            ticks: ticks
                                                        },
                                                        yaxis: {
                                                            axisLabel: "Celcius",
                                                            axisLabelUseCanvas: true,
                                                            axisLabelFontSizePixels: 12,
                                                            axisLabelFontFamily: 'Verdana, Arial',
                                                            axisLabelPadding: 3,
                                                            tickFormatter: function (v, axis) {
                                                                return v + "°C";
                                                            }
                                                        },
                                                        legend: {
                                                            noColumns: 0,
                                                            labelBoxBorderColor: "#000000",
                                                            position: "nw"
                                                        },
                                                        grid: {
                                                            hoverable: true,
                                                            borderWidth: 2,
                                                            backgroundColor: { colors: ["#ffffff", "#EDF5FF"] }
                                                        }
                                                    };
                                             
                                                    $(document).ready(function () {
                                                        $.plot($("#flot-placeholder"), dataset, options);
                                                        $("#flot-placeholder").UseTooltip();
                                                    });
                                             
                                                    function gd(year, month, day) {
                                                        return new Date(year, month, day).getTime();
                                                    }
                                             
                                                    var previousPoint = null, previousLabel = null;
                                             
                                                    $.fn.UseTooltip = function () {
                                                        $(this).bind("plothover", function (event, pos, item) {
                                                            if (item) {
                                                                if ((previousLabel != item.series.label) || (previousPoint != item.dataIndex)) {
                                                                    previousPoint = item.dataIndex;
                                                                    previousLabel = item.series.label;
                                                                    $("#tooltip").remove();
                                             
                                                                    var x = item.datapoint[0];
                                                                    var y = item.datapoint[1];
                                             
                                                                    var color = item.series.color;
                                             
                                                                    //console.log(item.series.xaxis.ticks[x].label);                
                                             
                                                                    showTooltip(item.pageX,
                                                                    item.pageY,
                                                                    color,
                                                                    "<strong>" + item.series.label + "</strong><br>" + item.series.xaxis.ticks[x].label + " : <strong>" + y + "</strong> °C");
                                                                }
                                                            } else {
                                                                $("#tooltip").remove();
                                                                previousPoint = null;
                                                            }
                                                        });
                                                    };
                                             
                                                    function showTooltip(x, y, color, contents) {
                                                        $('<div id="tooltip">' + contents + '</div>').css({
                                                            position: 'absolute',
                                                            display: 'none',
                                                            top: y - 40,
                                                            left: x - 120,
                                                            border: '2px solid ' + color,
                                                            padding: '3px',
                                                            'font-size': '9px',
                                                            'border-radius': '5px',
                                                            'background-color': '#fff',
                                                            'font-family': 'Verdana, Arial, Helvetica, Tahoma, sans-serif',
                                                            opacity: 0.9
                                                        }).appendTo("body").fadeIn(200);
                                                    }
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="card bg-white">
                                            <div class="card-body">
                                                <div class="card-title text-dark"># Riwayat Data</div>
                                                <table class="table" border="2">
                                                    <tr>
                                                        <th class="text-dark">Pukul</th>
                                                        <th class="text-dark">Kategori</th>
                                                        <th class="text-dark">Nilai</th>
                                                        <th class="text-dark">Timestamp</th>
                                                    </tr>
                                                    @foreach( $mon_table as $mon )
                                                        <tr>
                                                            <td class="text-default font-weight-bold">{{ date('H', strtotime($mon->monitoring_created_at)) }}</td>
                                                            <td class="text-default font-weight-bold">Suhu</td>
                                                            <td class="text-primary font-weight-bold">{{ $mon->monitoring_celcius }} C</td>
                                                            <td class="text-dark font-weight-bold">{{ $mon->monitoring_created_at }}</td>
                                                        </tr>
                                                    @endforeach
                                                </table>
                                                {{ $mon_table->links() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->

            </div><!-- container-fluid -->


        </div> <!-- Page content Wrapper -->

    </div> <!-- content -->
@endsection