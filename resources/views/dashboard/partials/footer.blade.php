<!-- jQuery 3 -->
{{Html::script('assets/dashboard/bower_components/jquery/dist/jquery.min.js')}}
{{Html::script('assets/dashboard/bower_components/jquery-ui/jquery-ui.min.js')}}
{{Html::script('assets/dashboard/bower_components/jquery/dist/summernote.min.js')}}
<!-- Bootstrap 3.3.7 -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
{{Html::script('assets/dashboard/bower_components/bootstrap/dist/js/bootstrap.min.js')}}
<!-- iCheck -->
{{Html::script('assets/dashboard/plugins/iCheck/icheck.min.js')}}
{{Html::script('assets/dashboard/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}

{{Html::script('assets/dashboard/bower_components/jquery/dist/notepad.js')}}

{{Html::script('assets/dashboard/bower_components/fastclick/lib/fastclick.js')}}
{{Html::script('assets/dashboard/dist/js/adminlte.min.js')}}
{{Html::script('assets/dashboard/dist/js/pages/dashboard.js')}}

<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });

</script>
<script>
    $(function () {
        //Enable iCheck plugin for checkboxes
        //iCheck for checkbox and radio inputs
        $('.mailbox-messages input[type="checkbox"]').iCheck({
            checkboxClass: 'icheckbox_flat-blue',
            radioClass: 'iradio_flat-blue'
        });

        //Enable check and uncheck all functionality
        $(".checkbox-toggle").click(function () {
            var clicks = $(this).data('clicks');
            if (clicks) {
                //Uncheck all checkboxes
                $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
                $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
            } else {
                //Check all checkboxes
                $(".mailbox-messages input[type='checkbox']").iCheck("check");
                $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
            }
            $(this).data("clicks", !clicks);
        });

        //Handle starring for glyphicon and font awesome
        $(".mailbox-star").click(function (e) {
            e.preventDefault();
            //detect type
            var $this = $(this).find("a > i");
            var glyph = $this.hasClass("glyphicon");
            var fa = $this.hasClass("fa");

            //Switch states
            if (glyph) {
                $this.toggleClass("glyphicon-star");
                $this.toggleClass("glyphicon-star-empty");
            }

            if (fa) {
                $this.toggleClass("fa-star");
                $this.toggleClass("fa-star-o");
            }
        });
    });
</script>
</body>
</html>
