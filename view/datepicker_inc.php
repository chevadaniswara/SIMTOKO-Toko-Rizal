<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="js-datepicker/bootstrap-datepicker.js"></script>
<link rel="stylesheet" href="js-datepicker/datepicker.css">

<script type="text/javascript">
        $(function(){
            $(".datepicker").datepicker({
                format: 'dd-mm-yyyy',
                autoclose: true,
                todayHighlight: true,
            });
        });
</script>