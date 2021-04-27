<!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '304544067783137');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=304544067783137&ev=PageView&noscript=1"
    /></noscript>
<!-- End Facebook Pixel Code -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-101670762-2"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-101670762-2');
</script>

<script>
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter44756221 = new Ya.Metrika2({
                    id:73763698 ,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/73763698" style="position:absolute; left:-9999px;" alt="" /></div></noscript>

<script src="{{ asset('frontend/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/js/maska.js') }}"></script>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU"></script>
<script src="{{ asset('frontend/js/jquery.formstyler.min.js') }}"></script>
<script src="{{ asset('frontend/js/lightbox.js') }}"></script>
<script src="{{ asset('frontend/js/topbox.js') }}"></script>
<script src="{{ asset('frontend/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('frontend/js/ion.rangeSlider.min.js') }}"></script>
<script src="{{ asset('frontend/js/select2.min.js') }}"></script>
<script src="{{ asset('frontend/js/jQuery.SimpleMask.min.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('frontend/js/main.js') }}"></script>
<script src="{{ asset('frontend/js/scripts.js') }}"></script>
@if(isset($selectRegion))
{!! $selectRegion->foter_script  !!}
@endif
<script>
    var intervalVenyoo = setInterval(function () {
        if (window.leadiaCloud && window.leadiaCloud.widget && window.leadiaCloud.widget.initialized) {
            window.leadiaCloud.widget.callgoalTrigger = function (e) {
                var events = {
                    'callclickhovermenu': 'venyoo_open',
                    'chatclickhovermenu': 'venyoo_open',
                    'expand': 'venyoo_open',
                    'leadsendcallform': 'venyoo_callback_send',
                    'sendmessage': 'venyoo_message_send',
                    'sendlead': 'venyoo_offline_message_send'
                };
                console.log(e, events[e]);
                if (events[e]) {
                    if (e === 'sendmessage') {
                        var venyoo_first_message = localStorage.getItem('venyoo_first_message');
                        if (!venyoo_first_message) {
                            localStorage.setItem('venyoo_first_message', 1);
                            roistat.event.send(events[e], {'url':location.href});
                        }
                    } else {
                        roistat.event.send(events[e], {'url':location.href});
                    }
                }
                window.leadiaCloud.widget.goalTrigger(e, window.leadiaCloud.widget.element_iframestats());
            };
            clearInterval(intervalVenyoo);
        }
    }, 1000);

    $(function () {
        $("#popup_portfolio .calling_button").click(function () {
            roistat.event.send('measure_portfolio_click', {'url':location.href});
        });

        $(".remont .calling_button").click(function () {
            roistat.event.send('measure_click', {'url':location.href});
        });

        $('.button_style.calling_button0').click(function () {
            roistat.event.send('measure_widget_click', {'url':location.href});
        });

        $('.button_style.calling_button1').click(function () {
            roistat.event.send('price_click', {'url':location.href});
        });

        $('.more_table_button.calling_button0').click(function () {
            roistat.event.send('details_click', {'url':location.href});
        });
    });

    window.onRoistatModuleLoaded = function () {
        roistat.leadHunter.onBeforeAppear = function(lead) {
            roistat.event.send('leadhunter_open', {'url':location.href});
        };
        roistat.leadHunter.onBeforeSubmit = function(lead) {
            roistat.event.send('leadhunter_send', {'url':location.href});
        };
    };
</script>
<!-- ROISTAT END -->
<script src="//api.venyoo.ru/wnew.js?wc=venyoo/default/science&widget_id=5995765787525120"></script>
