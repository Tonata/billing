<script type="text/javascript">
    $(function () {

        $('#start-date-time-picker').datetimepicker();
        $('#end-date-time-picker').datetimepicker({
            useCurrent: false
        });
        $('#start-date-time-picker').on("dp.change", function (e) {
            $('#end-date-time-picker').data("DateTimePicker").minDate(e.date);
        });
        $('#end-date-time-picker').on("dp.change", function (e) {
            $('#start-date-time-picker').data("DateTimePicker").maxDate(e.date);
        });
    });
</script>