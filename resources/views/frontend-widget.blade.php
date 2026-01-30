<script>
    (function () {
        try {
            var domain = window.location.hostname || '';
            var domainBase64 = btoa(domain);
            // Call add-user-domain API only to detect EU requirement
            fetch('https://ada.skynettechnologies.us/api/add-user-domain', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: 'website=' + encodeURIComponent(domainBase64)
            })
                .then(function (response) {
                    return response.json();
                })
                .then(function (data) {
                    var noRequiredEu = '1';
                    if (data && data.website_data && data.website_data.no_required_eu !== undefined) {
                        noRequiredEu = data.website_data.no_required_eu;
                    }
                    var script = document.createElement('script');
                    script.id = 'aioa-adawidget';
                    script.defer = true;

                    if (noRequiredEu == '0') {
                        // EU static script
                        script.src =
                            'https://eu.skynettechnologies.com/accessibility/js/all-in-one-accessibility-js-widget-minify.js' +
                            '?colorcode=#420083&token=&position=bottom_right';
                    } else {
                        // Global static script
                        script.src =
                            'https://www.skynettechnologies.com/accessibility/js/all-in-one-accessibility-js-widget-minify.js' +
                            '?colorcode=#420083&token=&position=bottom_right';
                    }

                    document.body.appendChild(script);
                })
                .catch(function (error) {
                    console.error('AIOA API Error:', error);
                });

        } catch (e) {
            console.error('AIOA Init Error:', e);
        }
    })();
</script>
