<?php echo $this->extend('admin/layout')?>

<?php echo $this->section('content')?>
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0"><?php echo lang('dashbaord.dashbaord');?></h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item">
                                <a href="javascript: void(0);"><?php echo lang('dashbaord.rsontime');?></a>
                            </li>
                            <li class="breadcrumb-item active"><?php echo lang('dashbaord.dashbaord');?></li>
                        </ol>
                    </div> 
                </div>
            </div>
        </div>
        <!-- end page title -->
        
        <div class="row">
            <div class="col-xl-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex text-muted">
                            <div class="flex-shrink-0 me-3 align-self-center">
                                <div id="radialchart-1" class="apex-charts" dir="ltr"></div>
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <p class="mb-1"><?php echo lang('dashbaord.total_subscriber');?></p>
                                <h5 class="mb-3"><?php echo $all_subscriber;?></h5> 
                            </div>
                        </div>
                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
  
            <!-- end col --> 
            <div class="col-xl-6 col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex text-muted">
                            <div class="flex-shrink-0  me-3 align-self-center">
                                <div class="avatar-md">
                                    <div class="avatar-title bg-light rounded-circle text-primary font-size-24">
                                        <i class="ri-group-line"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex-grow-1 overflow-hidden">
                                <p class="mb-1"><?php echo lang('dashbaord.total_visitors');?></p>
                                <h5 class="mb-3"><?php echo $all_visitors;?></h5> 
                            </div>
                        </div>
                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                <h5 class="card-title"><?php echo lang('dashbaord.overview');?></h5>
                            </div> 
                        </div> 
                        <div>
                            <div id="mixed-chart" class="apex-charts" dir="ltr"></div>
                        </div>
                    </div>
                    <!-- end card-body --> 
                    <div class="card-body border-top">
                        <div class="text-muted text-center">
                            <div class="row">
                                <div class="col-6 border-end">
                                    <div>
                                        <p class="mb-2"><i class="mdi mdi-circle font-size-12 text-primary me-1"></i> <?php echo lang('dashbaord.total_view');?></p>
                                        
                                        <?php
                                          if(!empty($current_month_visitors) && !empty($previous_month_visitors)){
                                           if($current_month_visitors > $previous_month_visitors){
                                            $new_abc=$current_month_visitors-$previous_month_visitors;
                                            $percentage=($new_abc/$previous_month_visitors)*100; 
                                        ?>
                                        <h5 class="font-size-16 mb-0"><?php echo $all_visitors;?>                                      
                                        <span class="text-success font-size-12"><i class="mdi mdi-menu-up font-size-14 me-1"></i><?php echo number_format((float)$percentage, 2, '.', '');?> %</span></h5> 
                                        <?php } else {
                                            
                                            $new_abc=$previous_month_visitors - $current_month_visitors;
                                            $percentage=($new_abc/$previous_month_visitors)*100;
                                            ?>
                                            <h5 class="font-size-16 mb-0"><?php echo $all_visitors;?>
                                            <span class="text-success font-size-12"><i class="mdi mdi-menu-down font-size-14 me-1"></i><?php echo number_format((float)$percentage, 2, '.', '');?> %</span></h5>
                                        
                                        <?php  } } else {?>
                                            <h5 class="font-size-16 mb-0"><?php echo $all_visitors;?>
                                            <span class="text-success font-size-12"><i class="mdi mdi-menu-up font-size-14 me-1"></i>100%</span></h5>
                                            <?php } ?>
                                    </div>
                                </div>
                                <div class="col-6 border-end">
                                    <div>
                                        <p class="mb-2"><i class="mdi mdi-circle font-size-12 text-light me-1"></i><?php echo lang('dashbaord.subscriber');?></p>
                                        <?php if($current_month_subscriber > $previous_month_subscriber){
                                            $abc=$current_month_subscriber-$previous_month_subscriber;
                                            $percentage=($abc/$previous_month_subscriber)*100; 
                                        ?>
                                        <h5 class="font-size-16 mb-0"><?php echo $all_subscriber;?><span class="text-success font-size-12"><i class="mdi mdi-menu-up font-size-14 me-1"></i><?php echo number_format((float)$percentage, 2, '.', '');?> %</span></h5>
                                        <?php } else {
                                            $abc=$previous_month_subscriber - $current_month_subscriber;
                                            //$percentage=($abc/$previous_month_subscriber)*100;
                                        ?>
                                            <h5 class="font-size-16 mb-0"><?php echo $all_subscriber;?><span class="text-success font-size-12"><i class="mdi mdi-menu-down font-size-14 me-1"></i><?php echo number_format((float)$percentage, 2, '.', '');?>%</span></h5>
                                                                                
                                       <?php } ?>      
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- end card-body -->
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->  
        </div>
        <!-- end row -->  
    </div>
    <!-- container-fluid -->
</div>

<script>
var every_subscriber='<?php echo json_encode($monthly_subscriber);?>';
var myarray=JSON.parse(every_subscriber);

var every_visitors='<?php echo json_encode($monthly_visitors);?>';
var myarray1=JSON.parse(every_visitors);

var radialoptions = {             
        series: [72],
        chart: { type: "radialBar", width: 72, height: 72, sparkline: { enabled: !0 } },
        dataLabels: { enabled: !1 },
        colors: ["#0ab39c"],
        stroke: { lineCap: "round" },
        plotOptions: { radialBar: { hollow: { margin: 0, size: "70%" }, track: { margin: 0 }, dataLabels: { name: { show: !1 }, value: { offsetY: 5, show: !0 } } } },
    },
    radialchart = new ApexCharts(document.querySelector("#radialchart-1"), radialoptions);
radialchart.render();
var options = {
        series: [
            { name: "Total Views", type: "column", data: [myarray1[1],myarray1[2],myarray1[3],myarray1[4], myarray1[5], myarray1[6], myarray1[7], myarray1[8], myarray1[9], myarray1[10], myarray1[11], myarray1[12]] },
            { name: "Subscriber", type: "area", data: [myarray[1],myarray[2],myarray[3],myarray[4],myarray[5],myarray[6],myarray[7],myarray[8],myarray[9],myarray[10],myarray[11],myarray[12]] },
            
        ],
        chart: { height: 350, type: "line", stacked: !1, toolbar: { show: !1 } },
        stroke: { width: [0, 1, 1], dashArray: [0, 0, 5], curve: "smooth" },
        plotOptions: { bar: { columnWidth: "18%" } },
        legend: { show: !1 },
        fill: { opacity: [0.85, 0.25, 1], gradient: { inverseColors: !1, shade: "light", type: "vertical", opacityFrom: 0.85, opacityTo: 0.55, stops: [0, 100, 100, 100] } },
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        markers: { size: 0 },
        colors: ["#0bb197", "#eff2f7", "#ff3d60"],
    },
    chart = new ApexCharts(document.querySelector("#mixed-chart"), options);
  chart.render();
 
</script>
<?php echo $this->endSection('content')?>