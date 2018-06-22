<<<<<<< HEAD
<?php require_once ('header-dg.php'); ?>

</div>

<section class="section-contact" style="background-image: url('img/contact_bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="contact-info-wrap">
                    <div class="contact-info-head">
                        <h2>יצירת קשר</h2>
                        <p>מומחי התאורה של טכנולייט זמינים לייעוץ בנושאי עיצוב תאורה ומידע טכני בשביל פרוייקט התאורה שלך. כלי זה מומלץ כדי לעזור לך עם כל שאלותך בנושאי תאורה.</p>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-info-item">
                                <h3>דרכי התקשרות</h3>
                                <ul>
                                    <li class="phone-icon">טל: 03-556-8433</li>
                                    <li class="fax-icon">פקס: 03-558-1420</li>
                                    <li class="mail-icon">מייל: <a href="#">Info@tlite.co.il</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="contact-info-item">
                                <h3>כתובת</h3>
                                <ul>
                                    <li class="map-icon">טכנולייט בע״מ, ת.ד. 172,
                                        רחוב היהלום, ברקת, ישראל </li>
                                    <li class="waze-icon">ניווט באמצעות וויז</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="contact-info-item">
                                <h3>שעות פעילות</h3>
                                <ul>
                                    <li class="clock-icon">ראשון - חמישי 09:00-17:00 </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="contact-info-item">
                                <h3>תמיכה</h3>
                                <ul>
                                    <li class="chat-icon">לפתיחת צ'אט עם נציג <a href="">לחץ כאן</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div role="form" class="wpcf7 contact-form" id="wpcf7-f205-o1" dir="ltr" lang="en-US">
                    <form action="#wpcf7" method="post" class="wpcf7-form" novalidate="novalidate">
                        <p class="three-input">
                            <label class="input-name-wrap">
                                <span class="wpcf7-form-control-wrap your-name">
                                    <input name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="שם מלא" type="text">
                                </span>
                            </label>

                            <label class="input-tel-wrap">
                                <span class="wpcf7-form-control-wrap your-tel">
                                    <input name="your-tel" value="" size="40" maxlength="10" minlength="10" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="טלפון" type="tel">
                                </span>
                            </label>

                            <label class="input-email-wrap">
                               <span class="wpcf7-form-control-wrap your-email">
                                    <input name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" aria-invalid="false" placeholder="דוא”ל" type="email">
                                </span>
                            </label>
                        </p>

                        <p class="textarea-wrap">
                            <label>
                                <span class="wpcf7-form-control-wrap textarea-800">
                                <textarea name="textarea-800" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="טקסט חופשי"></textarea>
                            </span>
                            </label>
                        </p>

                        <p class="input-submit_wrap">
                            <label class="submit">
                                <input value="שלח טופס" class="wpcf7-form-control wpcf7-submit" type="submit">
                                <span class="ajax-loader"></span>
                            </label>
                        </p>

                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-map">
    <div id="map" class="map"></div>
</section>

<script>
function initMap() {
    var element = document.getElementById('map');
    var options = {
        zoom: 15,
        center: {lat: 50.4438, lng: 30.5784}
    };

    var myMap = new google.maps.Map(element, options);

    var marker = new google.maps.Marker({
        position: {lat: 50.4438, lng: 30.5784},
        map: myMap,
        icon: 'img/map_marker.png'
    })
}
</script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8qvu8b-J_BH6KEZQ5PCPFxSI-FjQt2oU&callback=initMap">
</script>

<link rel='stylesheet' id='main-style-css'  href='/css/contact.min.css' type='text/css' media='all' />

<?php require_once ('footer.php')?>
</body>

</html>
=======
<?php require_once ('header-dg.php');
get_header('contact');?>

</div>

<section class="section-contact" style="background-image: url('img/contact_bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="contact-info-wrap">
                    <div class="contact-info-head">
                        <h2>יצירת קשר</h2>
                        <p>מומחי התאורה של טכנולייט זמינים לייעוץ בנושאי עיצוב תאורה ומידע טכני בשביל פרוייקט התאורה שלך. כלי זה מומלץ כדי לעזור לך עם כל שאלותך בנושאי תאורה.</p>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-info-item">
                                <h3>דרכי התקשרות</h3>
                                <ul>
                                    <li class="phone-icon">טל: 03-556-8433</li>
                                    <li class="fax-icon">פקס: 03-558-1420</li>
                                    <li class="mail-icon">מייל: <a href="#">Info@tlite.co.il</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="contact-info-item">
                                <h3>כתובת</h3>
                                <ul>
                                    <li class="map-icon">טכנולייט בע״מ, ת.ד. 172,
                                        רחוב היהלום, ברקת, ישראל </li>
                                    <li class="waze-icon">ניווט באמצעות וויז</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="contact-info-item">
                                <h3>שעות פעילות</h3>
                                <ul>
                                    <li class="clock-icon">ראשון - חמישי 09:00-17:00 </li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="contact-info-item">
                                <h3>תמיכה</h3>
                                <ul>
                                    <li class="chat-icon">לפתיחת צ'אט עם נציג <a href="">לחץ כאן</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-5">
                <div role="form" class="wpcf7 contact-form" id="wpcf7-f205-o1" dir="ltr" lang="en-US">
                    <form action="#wpcf7" method="post" class="wpcf7-form" novalidate="novalidate">
                        <p class="three-input">
                            <label class="input-name-wrap">
                                <span class="wpcf7-form-control-wrap your-name">
                                    <input name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="שם מלא" type="text">
                                </span>
                            </label>

                            <label class="input-tel-wrap">
                                <span class="wpcf7-form-control-wrap your-tel">
                                    <input name="your-tel" value="" size="40" maxlength="10" minlength="10" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" aria-invalid="false" placeholder="טלפון" type="tel">
                                </span>
                            </label>

                            <label class="input-email-wrap">
                               <span class="wpcf7-form-control-wrap your-email">
                                    <input name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email" aria-invalid="false" placeholder="דוא”ל" type="email">
                                </span>
                            </label>
                        </p>

                        <p class="textarea-wrap">
                            <label>
                                <span class="wpcf7-form-control-wrap textarea-800">
                                <textarea name="textarea-800" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="טקסט חופשי"></textarea>
                            </span>
                            </label>
                        </p>

                        <p class="input-submit_wrap">
                            <label class="submit">
                                <input value="שלח טופס" class="wpcf7-form-control wpcf7-submit" type="submit">
                                <span class="ajax-loader"></span>
                            </label>
                        </p>

                        <div class="wpcf7-response-output wpcf7-display-none"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-map">
    <div id="map" class="map"></div>
</section>

<script>
function initMap() {
    var element = document.getElementById('map');
    var options = {
        zoom: 15,
        center: {lat: 50.4438, lng: 30.5784}
    };

    var myMap = new google.maps.Map(element, options);

    var marker = new google.maps.Marker({
        position: {lat: 50.4438, lng: 30.5784},
        map: myMap,
        icon: 'img/map_marker.png'
    })
}
</script>

<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8qvu8b-J_BH6KEZQ5PCPFxSI-FjQt2oU&callback=initMap">
</script>

<link rel='stylesheet' id='main-style-css'  href='/css/contact.min.css' type='text/css' media='all' />

<?php require_once ('footer.php')?>
</body>

</html>
>>>>>>> f1cfddc072d557c600d553041a0a5c9489e9c935
