<!-- jQuery -->
<script src="{{ asset('js/jquery-3.1.0.min.js') }}" ></script>
<!-- Bootstrap -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>	
<!-- google maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAy-PboZ3O_A25CcJ9eoiSrKokTnWyAmt8"></script>
<!-- rich marker -->
<script src="{{ asset('js/richmarker.js') }}"></script>
<!-- Owl Carousel -->
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<!-- Countdown -->
<script src="{{ asset('js/countdown.js') }}"></script>
<!-- Sweet Alert -->
<script src="{{ asset('js/sweetalert.min.js') }}"></script>
<!-- Nivo Lightbox -->
<script src="{{ asset('scripts/Nivo-Lightbox/nivo-lightbox.min.js') }}"></script>
<!-- NoUISlider -->
<script src="{{ asset('js/jquery.nouislider.all.min.js') }}"></script>
<!-- Bootstrap Select -->
<script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
<!-- Nice Scroll -->
<script src="{{ asset('js/jquery.nicescroll.min.js') }}"></script>
<!-- Scripts.js -->
<script src="{{ asset('js/scripts.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment-with-locales.min.js" integrity="sha256-wzBMoYcU9BZfRm6cQLFii4K5tkNptkER9p93W/vyCqo=" crossorigin="anonymous"></script>
<script src="https://cdn.snipcart.com/scripts/2.0/snipcart.js" data-api-key="MTk1Y2NiYzgtZjM1OC00YzdjLThmMTQtMDU4YmIzYWM1MzRiNjM2NTYwNDMzMjMzMzI2MTM1" id="snipcart"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<script>
$(function () {
            $('#eventstart').datetimepicker({
                icons: {
                    time: "fa fa-clock-o",
                    date: "fa fa-calendar",
                    up: "fa fa-arrow-up",
                    down: "fa fa-arrow-down",
                    previous: "fa fa-arrow-left",
                    next: "fa fa-arrow-right"
                }
            });
            $('#eventend').datetimepicker({
                icons: {
                    time: "fa fa-clock-o",
                    date: "fa fa-calendar",
                    up: "fa fa-arrow-up",
                    down: "fa fa-arrow-down",
                    previous: "fa fa-arrow-left",
                    next: "fa fa-arrow-right",
                    useCurrent: false
                }
            });
            $( ".eventstart" ).datepicker({
            format: 'yyyy-mm-dd'
            });


            $("#eventstart").on("dp.change", function (e) {
                $('#eventstart').data("DateTimePicker").minDate(e.date);
                setDate = e.date
            });
            $("#eventend").on("dp.change", function (e) {
                $('#eventend').data("DateTimePicker").minDate(setDate);
            });
        });
</script>