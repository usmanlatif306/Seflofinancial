<!-- Vendor js -->
                  <script src="<?php echo base_url();?>assets/admin/js/vendor.min.js"></script>

                  <!-- Third Party js-->
                  <script src="<?php echo base_url();?>assets/admin/libs/peity/jquery.peity.min.js"></script>
                  <script src="<?php echo base_url();?>assets/admin/libs/apexcharts/apexcharts.min.js"></script>
                  <script src="<?php echo base_url();?>assets/admin/libs/jquery-vectormap/jquery-jvectormap-1.2.2.min.js"></script>
                  <script src="<?php echo base_url();?>assets/admin/libs/jquery-vectormap/jquery-jvectormap-us-merc-en.js"></script>
                  <!-- Dashboard init -->
                  <script src="<?php echo base_url();?>assets/admin/js/pages/dashboard-1.init.js"></script>
                  <!-- App js-->
                  <script src="<?php echo base_url();?>assets/admin/js/app.min.js"></script>
                  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
                  <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
                  <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
                  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"/>
                  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css"/>
                  <script type="text/javascript">
                    $(document).ready(function() {
                       $('#example').DataTable( {
        "order": [[ 5, "desc" ]]
    } );
                      $('#search').keyup(function (){
                        $('.column').removeClass('d-none');
                        var filter = $(this).val(); // get the value of the input, which we filter on
                        $('#gridvw').find('.card .card-header .row .col-sm-6 h4:not(:contains("'+filter+'"))').parent().parent().parent().parent().addClass('d-none');
                      })
                    });
                  </script>
                  <script>
                    // Add active class to the current button (highlight it)
                    var header = document.getElementById("btnContainer");
                    var btns = header.getElementsByClassName("btn-gray");
                    for (var i = 0; i < btns.length; i++) {
                      btns[i].addEventListener("click", function() {
                        var current = document.getElementsByClassName("activ");
                        current[0].className = current[0].className.replace("activ", "");
                        this.className += " activ";
                        });
                    }
                  </script>