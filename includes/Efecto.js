<script type="text/javascript">
$.fn.cycle.defaults.timeout = 6000;
$(function() {
    $('#img_sil, #tit_sil_cod, #ext_sil_cod').cycle({
    fx:     'fade',
    speed:  'fast',
    timeout: 0,
    next:   '#next2',
    prev:   '#prev2'});
});
</script>
