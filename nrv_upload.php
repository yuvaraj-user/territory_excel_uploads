
<?php 

  include 'header.php';
?>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css">
<link rel="stylesheet" href="../global/vendor/bootstrap-datepicker/bootstrap-datepicker.minfd53.css?v4.0.1">
<link rel="stylesheet" href="../global/vendor/timepicker/jquery-timepicker.minfd53.css?v4.0.1">
<link rel="stylesheet" href="../assets/css/menu_mbl.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css">

<body class="animsition site-navbar-small dashboard" style="font-size: small;">
<div id="loader-wrapper" style="display: none;" >
    <div id="loader"></div>
</div>

 <?php include('top_nav.php') ?>
  <div id="myDIV" class="site-menubar site-menubar-light" style="height:100%;background-color: #bceacf !important;box-shadow: 1px 2px 10px lightseagreen;display: block;">
    <div class="site-menubar-body">
    
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body" style="height:106px;">
                <div class="row">
                  <div class="col-md-6">
                    <label for="formFile" class="form-label" style="font-weight:bold;">Upload NRV excel</label>
                    <input class="form-control" type="file" name="nrv_excel_file" id="nrv_excel_file">
                  </div>
                  <div class="col-md-6 m-auto">
                    <br>
                    <button type="button" class="btn btn-primary" id="file_upload"><i class="fas fa-upload"></i> Upload</button>
                    <a href="assets/samples/nrv_sample.xlsx"><button type="button" class="btn btn-info"><i class="fas fa-download"></i> Sample file</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>

  </div>


  <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="../global/vendor/babel-external-helpers/babel-external-helpersfd53.js?v4.0.1"></script>
  <script src="../global/vendor/jquery/jquery.minfd53.js?v4.0.1"></script>
  <script src="../global/vendor/popper-js/umd/popper.minfd53.js?v4.0.1"></script>
  <script src="../global/vendor/bootstrap/bootstrap.minfd53.js?v4.0.1"></script>
  <script src="../global/vendor/animsition/animsition.minfd53.js?v4.0.1"></script>
  <script src="../global/vendor/mousewheel/jquery.mousewheel.minfd53.js?v4.0.1"></script>
  <script src="../global/vendor/asscrollbar/jquery-asScrollbar.minfd53.js?v4.0.1"></script>
  <script src="../global/vendor/asscrollable/jquery-asScrollable.minfd53.js?v4.0.1"></script>
  <script src="../global/vendor/ashoverscroll/jquery-asHoverScroll.minfd53.js?v4.0.1"></script>
  <script src="../global/vendor/waves/waves.minfd53.js?v4.0.1"></script>

  <!-- Plugins -->
  <script src="../global/vendor/switchery/switchery.minfd53.js?v4.0.1"></script>
  <script src="../global/vendor/intro-js/intro.minfd53.js?v4.0.1"></script>
  <script src="../global/vendor/screenfull/screenfull.minfd53.js?v4.0.1"></script>
  <script src="../global/vendor/slidepanel/jquery-slidePanel.minfd53.js?v4.0.1"></script>

  <!-- Plugins For This Page -->
  <script src="../global/vendor/chartist/chartist.minfd53.js?v4.0.1"></script>
  <script src="../global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.minfd53.js?v4.0.1"></script>
  <script src="../global/vendor/jvectormap/jquery-jvectormap.minfd53.js?v4.0.1"></script>
  <script src="../global/vendor/jvectormap/maps/jquery-jvectormap-world-mill-enfd53.js?v4.0.1"></script>
  <script src="../global/vendor/matchheight/jquery.matchHeight-minfd53.js?v4.0.1"></script>
  <script src="../global/vendor/peity/jquery.peity.minfd53.js?v4.0.1"></script>

  <!-- Scripts -->
  <script src="../global/js/State.minfd53.js?v4.0.1"></script>
  <script src="../global/js/Component.minfd53.js?v4.0.1"></script>
  <script src="../global/js/Plugin.minfd53.js?v4.0.1"></script>
  <script src="../global/js/Base.minfd53.js?v4.0.1"></script>
  <script src="../global/js/Config.minfd53.js?v4.0.1"></script>

  <script src="../assets/js/Section/Menubar.minfd53.js?v4.0.1"></script>
  <script src="../assets/js/Section/Sidebar.minfd53.js?v4.0.1"></script>
  <script src="../assets/js/Section/PageAside.minfd53.js?v4.0.1"></script>
  <script src="../assets/js/Plugin/menu.minfd53.js?v4.0.1"></script>

  <!-- Config -->
  <script src="../global/js/config/colors.minfd53.js?v4.0.1"></script>
  <script src="../assets/js/config/tour.minfd53.js?v4.0.1"></script>
  <script>
    Config.set('assets', 'assets');
  </script>

  <!-- Page -->

  <script src="../assets/js/Site.minfd53.js?v4.0.1"></script>
  <script src="../global/js/Plugin/asscrollable.minfd53.js?v4.0.1"></script>
  <script src="../global/js/Plugin/slidepanel.minfd53.js?v4.0.1"></script>
  <script src="../global/js/Plugin/switchery.minfd53.js?v4.0.1"></script>

  <script src="../global/js/Plugin/matchheight.minfd53.js?v4.0.1"></script>
  <script src="../global/js/Plugin/jvectormap.minfd53.js?v4.0.1"></script>
  <script src="../global/js/Plugin/peity.minfd53.js?v4.0.1"></script>
  <script src="../assets/examples/js/dashboard/v1.minfd53.js?v4.0.1"></script>

  <script src="../global/vendor/bootstrap-datepicker/bootstrap-datepicker.minfd53.js?v4.0.1"></script>
  <script src="../global/vendor/timepicker/jquery.timepicker.minfd53.js?v4.0.1"></script>
  <script src="../global/vendor/datepair/datepair.minfd53.js?v4.0.1"></script>
  <script src="../global/vendor/datepair/jquery.datepair.minfd53.js?v4.0.1"></script>
  <script src="../global/js/Plugin/bootstrap-datepicker.minfd53.js?v4.0.1"></script>
  <script src="../global/js/Plugin/datepair.minfd53.js?v4.0.1"></script>
    <script src="../global/vendor/datatables.net/jquery.dataTablesfd53.js?v4.0.1"></script>
  <script src="../global/vendor/datatables.net-bs4/dataTables.bootstrap4fd53.js?v4.0.1"></script>
  <script src="../global/vendor/datatables.net-fixedheader/dataTables.fixedHeader.minfd53.js?v4.0.1"></script>
  <script src="../global/vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.minfd53.js?v4.0.1"></script>
  <script src="../global/vendor/datatables.net-rowgroup/dataTables.rowGroup.minfd53.js?v4.0.1"></script>
  <script src="../global/vendor/datatables.net-scroller/dataTables.scroller.minfd53.js?v4.0.1"></script>
  <script src="../global/vendor/datatables.net-responsive/dataTables.responsive.minfd53.js?v4.0.1"></script>
  <script src="../global/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.minfd53.js?v4.0.1"></script>
  <script src="../global/vendor/datatables.net-buttons/dataTables.buttons.minfd53.js?v4.0.1"></script>
  <script src="../global/vendor/datatables.net-buttons/buttons.html5.minfd53.js?v4.0.1"></script>
  <script src="../global/vendor/datatables.net-buttons/buttons.flash.minfd53.js?v4.0.1"></script>
  <script src="../global/vendor/datatables.net-buttons/buttons.print.minfd53.js?v4.0.1"></script>
  <script src="../global/vendor/datatables.net-buttons/buttons.colVis.minfd53.js?v4.0.1"></script>
  <script src="../global/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.minfd53.js?v4.0.1"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
</body>
  <script src="../global/js/Plugin/datatables.minfd53.js?v4.0.1"></script>
<script src="../assets/js/menu.js?v4.0.1"></script>
   <script src="../global/js/jquery.serializeObject.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
  <script  src="../global/js/CustomFunction.js"></script>

   <script src="../assets/js/excellentexport.js"></script>
   <script src="../global/vendor/toastr/toastr.minfd53.js"></script>
 <script src="../global/js/Plugin/toastr.minfd53.js"></script>
 <script src="../common/checkSession.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">

  function Alert_Msg(Msg,text,Type){
    swal({
      title: Msg,
      text: text,
      icon: Type
    });
  }

  $(document).on('click','#file_upload',function(e){
    e.preventDefault();
    var file_data        = $('#nrv_excel_file').prop('files')[0];
    if(file_data) {
      var form_data        = new FormData();
      form_data.append("Action","nrv_save");
      form_data.append("file",file_data);
      $.ajax({
        type: "POST",
        url: "common_ajax.php",
        data: form_data,
        dataType:"json",
        cache: false,
        contentType: false,
        processData: false,
        beforeSend:function(){
          $('.loader').show();
        },
        success: function(result) {
          if(result.status == 200) {
            swal({
              title: "Sucess",
              text: result.message,
              icon: "success",
            }).then(function(isconfirm){
              if(isconfirm) {
                location.reload();
              }
            });
          } else {
            Alert_Msg('Error',result.message,'error');
          }
        },
        error:function(err) {
            Alert_Msg('Error',result.message,'error');
        }
      });
    }

  }); 

</script>



</body>

</html>
