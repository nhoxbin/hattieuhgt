<?php
    if ($required === 'header') {
?>
    <title>Liên hệ -Chuyên Cung Cấp Hạt Tiêu Sỉ và Lẻ</title>
    <meta name="description" content="Chúng tôi chuyên mang đến những sản phẩm nguyên chất như hạt tiêu, mật ong, hạt điều, dầu đậu phộng." />
<?php } elseif ($required === 'body') { ?>
    <div class="title-container-outer-wrap">
        <div class="title-container-wrap">
            <div class="title-container clearfix">
                <div class="entry-title">
                    <h1 class="entry-title">
                        Liên hệ </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container clearfix">
        <div id="homepage" class="">
            <div id="post-5896" class="post-5896 page type-page status-publish hentry">
                <div class="entry-page-wrapper entry-content clearfix">
                    <div id="mtheme-pagebuilder-wrapper-5896" class="mtheme-pagebuilder">
                        <!-- <div class="mtheme-modular-column">
                            <div class="mtheme-supercell clearfix  fullwidth-column text-is-dark">
                                <div class="column-setter first-column span12">
                                    <div class="mtheme-cell-wrap">
                                        <div id="mtheme-block-1" class="mtheme-block mtheme-block-em_column_block span12 mtheme-first-cell " data-width="12">
                                            <div class="row clearfix">
                                                <div class="mtheme-cell-wrap">
                                                    <div id="mtheme-block-2" class="mtheme-block mtheme-block-em_googlemap span12 mtheme-first-cell " data-width="12">
                                                        <div class="googlemaps" id="map5eeb979701ae7" style="height: 600px;"></div>
                                                        <script type="text/javascript">
                                                            (function($) {
                                                                $(window).load(function() {
                                                                    function toggleBounce() {
                                                                        if (marker.getAnimation() !== null) {
                                                                            marker.setAnimation(null);
                                                                        } else {
                                                                            marker.setAnimation(google.maps.Animation.BOUNCE);
                                                                        }
                                                                    }
                                                                    var latlng = new google.maps.LatLng(10.8261612, 106.689768);
                                                                    var isDraggable = jQuery(document).width() > 480 ? true : false;
                                                                    var myOptions = {
                                                                        zoom: 15,
                                                                        center: latlng,
                                                                        draggable: isDraggable,
                                                                        scrollwheel: false,
                                                                        scaleControl: false,
                                                                        disableDefaultUI: true,
                                                                        mapTypeId: google.maps.MapTypeId.ROADMAP,
                                                                        styles: [{
                                                                                "featureType": "landscape",
                                                                                "stylers": [{
                                                                                        "saturation": -100
                                                                                    },
                                                                                    {
                                                                                        "lightness": 65
                                                                                    },
                                                                                    {
                                                                                        "visibility": "on"
                                                                                    }
                                                                                ]
                                                                            },
                                                                            {
                                                                                "featureType": "poi",
                                                                                "stylers": [{
                                                                                        "saturation": -100
                                                                                    },
                                                                                    {
                                                                                        "lightness": 51
                                                                                    },
                                                                                    {
                                                                                        "visibility": "simplified"
                                                                                    }
                                                                                ]
                                                                            },
                                                                            {
                                                                                "featureType": "road.highway",
                                                                                "stylers": [{
                                                                                        "saturation": -100
                                                                                    },
                                                                                    {
                                                                                        "visibility": "simplified"
                                                                                    }
                                                                                ]
                                                                            },
                                                                            {
                                                                                "featureType": "road.arterial",
                                                                                "stylers": [{
                                                                                        "saturation": -100
                                                                                    },
                                                                                    {
                                                                                        "lightness": 30
                                                                                    },
                                                                                    {
                                                                                        "visibility": "on"
                                                                                    }
                                                                                ]
                                                                            },
                                                                            {
                                                                                "featureType": "road.local",
                                                                                "stylers": [{
                                                                                        "saturation": -100
                                                                                    },
                                                                                    {
                                                                                        "lightness": 40
                                                                                    },
                                                                                    {
                                                                                        "visibility": "on"
                                                                                    }
                                                                                ]
                                                                            },
                                                                            {
                                                                                "featureType": "transit",
                                                                                "stylers": [{
                                                                                        "saturation": -100
                                                                                    },
                                                                                    {
                                                                                        "visibility": "simplified"
                                                                                    }
                                                                                ]
                                                                            },
                                                                            {
                                                                                "featureType": "administrative.province",
                                                                                "stylers": [{
                                                                                    "visibility": "off"
                                                                                }]
                                                                            },
                                                                            {
                                                                                "featureType": "water",
                                                                                "elementType": "labels",
                                                                                "stylers": [{
                                                                                        "visibility": "on"
                                                                                    },
                                                                                    {
                                                                                        "lightness": -25
                                                                                    },
                                                                                    {
                                                                                        "saturation": -100
                                                                                    }
                                                                                ]
                                                                            },
                                                                            {
                                                                                "featureType": "water",
                                                                                "elementType": "geometry",
                                                                                "stylers": [{
                                                                                        "hue": "#ffff00"
                                                                                    },
                                                                                    {
                                                                                        "lightness": -25
                                                                                    },
                                                                                    {
                                                                                        "saturation": -97
                                                                                    }
                                                                                ]
                                                                            }
                                                                        ]
                                                                    };
                                                                    var map5eeb979701ae7 = new google.maps.Map(document.getElementById("map5eeb979701ae7"),
                                                                        myOptions);
                                                                    var image = "wp-content/uploads/2015/02/google-map-pointer.png";
                                                                    var marker = new google.maps.Marker({
                                                                        map: map5eeb979701ae7,
                                                                        icon: image,
                                                                        animation: google.maps.Animation.DROP,
                                                                        position: map5eeb979701ae7.getCenter()
                                                                    });
                                                                    marker.addListener("click", toggleBounce);
                                                                })
                                                            })(jQuery);
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div id="contactus" class="mtheme-modular-column" style="background-color:#ffffff;padding-bottom:120px;padding-top:120px; ">
                            <div class="mtheme-supercell clearfix  boxed-column text-is-dark divided-column">
                                <div class="column-setter first-column span6">
                                    <div class="mtheme-cell-wrap">
                                        <div id="mtheme-block-3" class="mtheme-block mtheme-block-em_column_block span6 mtheme-first-cell " data-width="6">
                                            <div class="row clearfix">
                                                <div class="mtheme-cell-wrap">
                                                    <div id="mtheme-block-4" class="mtheme-block mtheme-block-em_displayshortcode span6 mtheme-first-cell " data-width="6">
                                                        <div role="form" class="wpcf7" id="wpcf7-f4-p5896-o1" lang="en-US" dir="ltr">
                                                            <div class="screen-reader-response"></div>
                                                            <form action="#" method="post" class="wpcf7-form" novalidate="novalidate">
                                                                <div style="display: none;">
                                                                    <input type="hidden" name="_wpcf7" value="4" />
                                                                    <input type="hidden" name="_wpcf7_version" value="4.6" />
                                                                    <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f4-p5896-o1" />
                                                                    <input type="hidden" name="_wpnonce" value="d3fd6435ff" />
                                                                </div>
                                                                <p>Your Name (required)<br />
                                                                    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </p>
                                                                <p>Your Email (required)<br />
                                                                    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" /></span> </p>
                                                                <p>Subject<br />
                                                                    <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" /></span> </p>
                                                                <p>Your Message<br />
                                                                    <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </p>
                                                                <p><input type="submit" value="Send" class="wpcf7-form-control wpcf7-submit" /></p>
                                                                <div class="wpcf7-response-output wpcf7-display-none"></div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column-setter following-column span6">
                                    <div class="mtheme-cell-wrap">
                                        <div id="mtheme-block-5" class="mtheme-block mtheme-block-em_column_block span6 mtheme-following-cell " data-width="6">
                                            <div class="row clearfix">
                                                <div class="mtheme-cell-wrap">
                                                    <div id="mtheme-block-6" class="mtheme-block mtheme-block-em_sectionheading span6 mtheme-first-cell " data-width="6">
                                                        <div class="section-heading animation-standby animated fadeInUp section-align-center" style="width:60%;padding-top:0;padding-bottom:0;margin-bottom:15px;">
                                                            <h2 class="section-title">Liên Hệ Mua Hàng</h2>
                                                            <h3 class="section-subtitle">Với phương châm "Lợi ích khách hàng được đặt lên hàng đầu"cùng chữ “Tâm” trong hoạt động kinh doanh</h3>
                                                            <div class="section-end"></div>
                                                            <div class="section-contents clearfix">
                                                                <p style="text-align: center;">Chúng tôi cam kết mang đến sản phẩm nguyên chất </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row clearfix">
                                                <div class="mtheme-cell-wrap">
                                                    <div id="mtheme-block-7" class="mtheme-block mtheme-block-em_displayrichtext span6 mtheme-first-cell " data-width="6">
                                                        <h4 style="text-align: center;">Để mua hàng nhanh chóng nhất<br />
                                                            quý khách hãy liên hệ ngay<br />
                                                            với chúng tôi:</h4>
                                                        <p style="text-align: center;"><br />
                                                            Điện thoại: 0975 555 906<br />
                                                            Email: info@hattieuhgt.com</p>
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
            </div>
        </div>
        <div class="contentclearfix clearfix"></div>
    </div>
<?php } ?>