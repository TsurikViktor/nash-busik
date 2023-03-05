<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>
        <a class="bc-popup-btn" href="#" data-ix="open" data-title="<?=$popup_6?>"><img src="/images/phone.png"></a>

        <!-- VENDOR -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" type="text/javascript" ></script>
        <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/vendor/jquery.easing/jquery.easing.min.js"></script>
        <script src="/vendor/waypoints/jquery.waypoints.min.js"></script>
        <script src="/vendor/counterup/counterup.min.js"></script>
        <script src="/vendor/venobox/venobox.min.js"></script>
        <script src="/vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="/vendor/isotope-layout/isotope.pkgd.min.js"></script>
        <script src="/vendor/aos/aos.js"></script>

        <script src="/js/script.js" type="text/javascript"></script>
        <script src="/js/direction.js" type="text/javascript"></script>
        <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->
        <!-- FOOTER CODE -->

        <script>function AjaxFormRequest(result_id, formMain, url) {
                            jQuery.ajax({url: url, type: "POST", dataType: "html", data: jQuery("#" + formMain).serialize(), success: function (response) {
                                    document.getElementById(result_id).innerHTML = response;
                                    $('#thankyou').load('/thankyou.html');
                                    $('#thankyou').val('ok');
                                }, error: function (response) {
                                    document.getElementById(result_id).innerHTML = "<p class='massageerror'>Возникла ошибка при отправке формы. Попробуйте еще раз</p>";
                                }});
                            $(':input', '#formMain').not(':button, :button, :reset, :hidden').val('').removeAttr('checked').removeAttr('selected');
                        }</script>
        <script>function AjaxFormRequest2(result_id, formMain2, url) {
                jQuery.ajax({url: url, type: "POST", dataType: "html", data: jQuery("#" + formMain2).serialize(), success: function (response) {
                        document.getElementById(result_id).innerHTML = response;
                        $('#thankyou').load('/thankyou.html');
                        $('#thankyou').val('ok');
                    }, error: function (response) {
                        document.getElementById(result_id).innerHTML = "<p class='massageerror'>Возникла ошибка при отправке формы. Попробуйте еще раз</p>";
                    }});
                $(':input', '#formMain2').not(':button, :button, :reset, :hidden').val('').removeAttr('checked').removeAttr('selected');
            }</script>

        <script type="text/javascript">$(document).ready(function () {
                $('[href*="brandjs"]').attr('style', 'display:none !important');
                $('a[href="' + window.location.href + '"]').addClass('w--current');
            });</script>

        <script src="/js/xupypr.js"></script>
    </body>

</html>