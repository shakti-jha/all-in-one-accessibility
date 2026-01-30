<x-filament-panels::page>
    {{-- Load your CSS safely --}}
    @push('styles')
        <link rel="stylesheet"
              href="{{ asset('vendor/all-in-one-accessibility/css/allinoneaccessibility.css') }}">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap');
            body{
                font-family: "Roboto", sans-serif;
            }
            h1{
                font-family: "Rubik", sans-serif;
            }
            .aioa-cancel-button {
                text-decoration: none;
                display: inline-block;
                vertical-align: middle;
                border: 2px solid #420083;
                border-radius: 4px;
                background-color: #420083;
                box-shadow: 0px 0px 2px 0px #333333;
                color: #ffffff;
                text-align: center;
                box-sizing: border-box;
                padding: 10px;
            }
            .aioa-cancel-button:hover {
                border-color: #420083;
                background-color: white;
                box-shadow: 0px 0px 2px 0px #333333;
                color:black;
            }
            .aioa-cancel-button:hover .mb-text {
                color: #420083;
            }
            .aioa-settings-panel .icon input[type=radio] +label{
                width: 130px;
                height: 130px;
                padding: 10px !important;
                text-align: center;
                background-color: #f7f9ff;
                outline: 4px solid #f7f9ff;
                outline-offset: -4px;
                border-radius: 10px;
                background: #420083;
            }
            .header-content {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .header-content img {
                max-width: 510px; /* Adjust image size */
                height: auto;
            }
            /* Rest of your styles */
            .all-in-one-accessibility-wrap .accessibility-settings .all-one-accessibility-form .icon-size-wrapper .option, .all-in-one-accessibility-wrap .accessibility-settings .all-one-accessibility-form .icon-type-wrapper .option {
                width: 130px;
                height: 130px;
                padding: 10px !important;
                text-align: center;
                background-color: #420083;
                outline: 4px solid #fff;
                outline-offset: -4px;
                border-radius: 10px;
            }
        </style>
    @endpush
    <div class="panel panel-default aioa-settings-panel">
        <div class="panel-body">
            <input type="hidden" id="username" name="username" value="" />
            <input type="hidden" id="email" name="email" value="" />
            <div class="shopify-wrap-block">
                <div class="set-width">
                    <div class="all-in-one-accessibility-wrap">
                        <div class="accessibility-settings">
                            <div class="all-one-accessibility-form">
                                <div class="all-one-accessibility-form-inner">
                                    <form id="widget-form" name="widget-form" class="form-controler">
                                        <div class="mb-3 row">
                                            <div class="col-sm-12">
                                                <div class="header-content">
                                                    <h1 class="mb-0 text-black">
                                                        <img
                                                            src="{{ asset('vendor/all-in-one-accessibility/img/all-in-one-accessibility-logo.svg') }}"
                                                            alt="All in One Accessibility - Skynet Technologies"
                                                        >
                                                    </h1>
                                                </div>
                                                <div class="form-text">
                                                    <B>NOTE: Currently, All in One Accessibility is dedicated to enhancing accessibility
                                                        specifically for websites and online stores.</B>
                                                    <B>  <p id="upgrade_html_notes">Please <a
                                                                href="https://ada.skynettechnologies.us/trial-subscription" target="_blank" style="color: #007bff; text-decoration: underline; font-weight: bold;">Upgrade</a>
                                                            to full
                                                            version of All in One Accessibility Pro with 10 days free trial.</p></B>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row d-none" id="license_key_html">
                                            <label for="inputPassword" class="col-sm-3 col-form-label">License Key required for full
                                                version:</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="license_key" class="form-control" id="license_key" value=""
                                                       onkeyup="mylicensekey()" />
                                                <p class="form-text " id="error_message">Please enter valid License Key</p>
                                            </div><br>
                                        </div>
                                        <div class="mb-3 row " id="colorcode_html">
                                            <label class="col-sm-3 col-form-label">Hex color code:</label>
                                            <div class="col-sm-9">
                                                <input type="text" name="colorcode"  style="height:auto" class="form-control mb-2" id="colorcode" value="" />
                                                <div class="form-text">You can customize the All in One Accessibility Widget color. For example: FF5733</div>
                                            </div>
                                        </div>
                                        <div class="icon-custom-position-wrapper row">
                                            <div class="col-sm-12 mb-4">
                                                <label class="custom-switcher ">
                                                      <span class="custom-switcher_right">
                                                        <input type="checkbox" id="custom-position-switcher" class="custom-switcher_inp_2"
                                                               value="1" />
                                                        <span class="custom-switcher_body" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                              title="Toggle to override <Top Left> position" data-bs-custom-class="switcher-tooltip">
                                                        </span>
                                                        <span class="custom-switcher_label">Enable precise accessibility widget icon position:</span>
                                                      </span>
                                                </label>
                                                <div class="custom-position-controls hide">
                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <div class="input-group mb-3">
                                                                <input type="number"  style="height:auto;border-bottom-right-radius: 0px;
    border-top-right-radius: 0px;"  min="0" max="250" class="form-control" id="custom_position_x_value"
                                                                       aria-label="Value in pixels" aria-describedby="pos-value-input_1" oninput="this.value = Math.min(Math.max(this.value, 0), 250)" />
                                                                <span class="input-group-text"  style="height:auto"  id="pos-value-input_1">PX</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <select class="form-select"  style="height:auto" name="custom_position_x_direction" aria-label="Default select example">
                                                                <option selected value="cust-pos-to-the-right">To the right</option>
                                                                <option value="cust-pos-to-the-left">To the left</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-auto">
                                                            <div class="input-group mb-3">
                                                                <input type="number"  style="height:auto;border-bottom-right-radius: 0px;
    border-top-right-radius: 0px;"  min="0" max="250" class="form-control" id="custom_position_y_value"
                                                                       aria-label="Value in pixels" aria-describedby="pos-value-input_2" oninput="this.value = Math.min(Math.max(this.value, 0), 250)"/>
                                                                <span class="input-group-text"  style="height:auto"  id="pos-value-input_2">PX</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto">
                                                            <select class="form-select"  style="height:auto" name="custom_position_y_direction" aria-label="Default select example">
                                                                <option selected value="cust-pos-to-the-lower">To the bottom</option>
                                                                <option value="cust-pos-to-the-upper">To the top</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="description">0 - 250px are permitted values</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row widget-position" id="position_html">
                                            <label class="fcol-sm-3 col-form-label">Where would you like to place the accessibility icon on your
                                                site?
                                            </label>
                                            <div class="col-sm-12 three-col">
                                                <div
                                                    class="js-form-item form-item js-form-type-radio form-type-radio js-form-item-position form-item-position">
                                                    <input type="radio" id="edit-position-top-left" name="position" value="top_left"
                                                           class="form-radio" />

                                                    <label for="edit-position-top-left" class="option">Top left</label>
                                                </div>
                                                <div
                                                    class="js-form-item form-item js-form-type-radio form-type-radio js-form-item-position form-item-position">
                                                    <input type="radio" id="edit-position-top-center" name="position" value="top_center"
                                                           class="form-radio" />

                                                    <label for="edit-position-top-center" class="option">Top Center</label>
                                                </div>
                                                <div
                                                    class="js-form-item form-item js-form-type-radio form-type-radio js-form-item-position form-item-position">
                                                    <input type="radio" id="edit-position-top-right" name="position" value="top_right"
                                                           class="form-radio" />

                                                    <label for="edit-position-top-right" class="option">Top Right</label>
                                                </div>
                                                <div
                                                    class="js-form-item form-item js-form-type-radio form-type-radio js-form-item-position form-item-position">
                                                    <input type="radio" id="edit-position-middel-left" name="position" value="middel_left"
                                                           class="form-radio" />

                                                    <label for="edit-position-middel-left" class="option">Middle left</label>
                                                </div>
                                                <div
                                                    class="js-form-item form-item js-form-type-radio form-type-radio js-form-item-position form-item-position">
                                                    <input type="radio" id="edit-position-middel-right" name="position" value="middel_right"
                                                           class="form-radio" />

                                                    <label for="edit-position-middel-right" class="option">Middle Right</label>
                                                </div>
                                                <div
                                                    class="js-form-item form-item js-form-type-radio form-type-radio js-form-item-position form-item-position">
                                                    <input type="radio" id="edit-position-bottom-left" name="position" value="bottom_left"
                                                           class="form-radio" />

                                                    <label for="edit-position-bottom-left" class="option">Bottom left</label>
                                                </div>
                                                <div
                                                    class="js-form-item form-item js-form-type-radio form-type-radio js-form-item-position form-item-position">
                                                    <input type="radio" id="edit-position-bottom-center" name="position" value="bottom_center"
                                                           class="form-radio" />

                                                    <label for="edit-position-bottom-center" class="option">Bottom Center</label>
                                                </div>
                                                <div
                                                    class="js-form-item form-item js-form-type-radio form-type-radio js-form-item-position form-item-position">
                                                    <input type="radio" id="edit-position-bottom-right" checked="" name="position"
                                                           value="bottom_right" class="form-radio" />

                                                    <label for="edit-position-bottom-right" class="option">Bottom Right</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- widget icon size -->

                                        <label class="col-sm-3 col-form-label">Select Widget Size:</label>
                                        <div class="form-radios  mb-3">
                                            <div class="form-radio-item">
                                                <input data-drupal-selector="edit-widget-size-regularsize" aria-describedby="edit-widget-size--description"  type="radio" id="edit-widget-size-regularsize" name="widget_size" value="0" checked="checked" class="form-radio form-boolean form-boolean--type-radio" wfd-id="id15">
                                                <label for="edit-widget-size-regularsize" class="form-item__label option">Regular Size</label>
                                            </div>
                                            <div class="form-radio-item">
                                                <input data-drupal-selector="edit-widget-size-oversize" aria-describedby="edit-widget-size--description" type="radio" id="edit-widget-size-oversize" name="widget_size" value="1" class="form-radio form-boolean form-boolean--type-radio" wfd-id="id16">
                                                <label for="edit-widget-size-oversize" class="form-item__label option">Oversize</label>
                                            </div>
                                            <div style="font-size: small; color: #212529;" id="edit-widget-size--wrapper--description" data-drupal-field-elements="description" class="fieldset__description">It only works on desktop view.</div>
                                        </div>

                                        <div class="icon-type-wrapper row" id="select_icon_type">
                                            <label class="fcol-sm-12 col-form-label">Select icon type:</label>
                                            <div class="col-sm-12" style="margin-right: -15px;">
                                                <div class="row">
                                                    @for ($i = 1; $i <= 29; $i++)
                                                        <div class="col-auto mb-30">
                                                            <div class="js-form-item form-item js-form-type-radio form-type-radio js-form-item-position form-item-position">
                                                                <input
                                                                    type="radio"
                                                                    id="edit-type-{{ $i }}"
                                                                    name="aioa_icon_type"
                                                                    value="aioa-icon-type-{{ $i }}"
                                                                    class="form-radio"
                                                                    @checked($i === 1)
                                                                />

                                                                <label for="edit-type-{{ $i }}" class="option">
                                                                    <img
                                                                        src="{{ asset("vendor/all-in-one-accessibility/img/aioa-icon-type-$i.svg") }}"
                                                                        width="65"
                                                                        height="65"
                                                                        style="height: 65px;"
                                                                        alt="Icon Type {{ $i }}"
                                                                    />
                                                                    <span class="visually-hidden">Type {{ $i }}</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    @endfor
                                                </div>
                                            </div>
                                        </div>

                                        <div class="icon-custom-size-wrapper mb-3 row">
                                            <div class="col-sm-12">
                                                <label class="custom-switcher ">
                                                  <span class="custom-switcher_right">
                                                    <input type="checkbox" id="custom-size-switcher" class="custom-switcher_inp_2" value="1" />
                                                    <span class="custom-switcher_body" data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                          title="Toggle to override selected size" data-bs-custom-class="switcher-tooltip">
                                                    </span>
                                                    <span class="custom-switcher_label">Enable icon custom size:</span>
                                                  </span>
                                                </label>
                                                <div class="custom-size-controls hide">
                                                    <div class="row">

                                                    </div>
                                                    <div class="col-auto controls ms-0">
                                                        <label for="exact-icon-size" class="form-label">Select exact icon size:</label>
                                                        <div class="input-group mb-2">
                                                            <input type="number" class="form-control"  style="height:auto"  id="widget_icon_size_custom" name="widget_icon_size_custom" oninput="this.value = Math.min(Math.max(this.value, 0), 150)" value="" min="20" max="150" aria-label="Value in pixels" aria-describedby="size-value-input_1" />
                                                            <span class="input-group-text"  style="height:auto"  id="size-value-input_1">PX</span>
                                                        </div>
                                                        <div class="description">20 - 150px are permitted values</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        @php
                                            $iconSizes = [
                                                'big' => ['label' => 'Big', 'value' => 'aioa-big-icon', 'size' => 75],
                                                'medium' => ['label' => 'Medium', 'value' => 'aioa-medium-icon', 'size' => 65],
                                                'default' => ['label' => 'Default', 'value' => 'aioa-default-icon', 'size' => 55],
                                                'small' => ['label' => 'Small', 'value' => 'aioa-small-icon', 'size' => 45],
                                                'extra-small' => ['label' => 'Extra Small', 'value' => 'aioa-extra-small-icon', 'size' => 35],
                                            ];
                                        @endphp
                                        <div class="icon-size-wrapper widget-icon row" id="select_icon_size">
                                            <label class="fcol-sm-12 col-form-label">Select icon size for Desktop:</label>

                                            <div class="col-sm-12" style="padding-right: calc(var(--bs-gutter-x)* .2); padding-left: calc(var(--bs-gutter-x)* .2);">
                                                <div class="row">
                                                    @foreach ($iconSizes as $key => $icon)
                                                        <div class="col-auto mb-30">
                                                            <div class="js-form-item form-item js-form-type-radio form-type-radio js-form-item-position form-item-position">
                                                                <input
                                                                    type="radio"
                                                                    id="edit-size-{{ $key }}"
                                                                    name="aioa_icon_size"
                                                                    value="{{ $icon['value'] }}"
                                                                    class="form-radio"
                                                                    @checked($key === 'medium')
                                                                />

                                                                <label for="edit-size-{{ $key }}" class="option">
                                                                    <img
                                                                        src="{{ asset('vendor/all-in-one-accessibility/img/aioa-icon-type-1.svg') }}"
                                                                        width="{{ $icon['size'] }}"
                                                                        height="{{ $icon['size'] }}"
                                                                        style="height: {{ $icon['size'] }}px;"
                                                                        class="iconimg"
                                                                        alt="{{ $icon['label'] }} Icon"
                                                                    />
                                                                    <span class="visually-hidden">{{ $icon['label'] }}</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>

                                        <div class="icon-size-wrapper row" style="display: none">
                                            <label class="fcol-sm-12 col-form-label">Select icon size for mobile: </label>
                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-auto mb-30">
                                                        <div
                                                            class="js-form-item form-item js-form-type-radio form-type-radio js-form-item-position form-item-position">
                                                            <input type="radio" id="edit-size-big" name="aioa_icon_size_mb" value="aioa-big-icon-mb"
                                                                   class="form-radio" />
                                                            <label for="edit-size-big" class="option">
                                                                <img src="https://www.skynettechnologies.com/sites/default/files/aioa-icon-type-1.svg"
                                                                     width="75" height="75" />
                                                                <span class="visually-hidden">Big</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto mb-30">
                                                        <div
                                                            class="js-form-item form-item js-form-type-radio form-type-radio js-form-item-position form-item-position">
                                                            <input type="radio" id="edit-size-medium" checked="" name="aioa_icon_size_mb"
                                                                   value="aioa-medium-icon-mb" class="form-radio" />
                                                            <label for="edit-size-medium" class="option">
                                                                <img src="https://www.skynettechnologies.com/sites/default/files/aioa-icon-type-1.svg"
                                                                     width="65" height="65" />
                                                                <span class="visually-hidden">Medium</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto mb-30">
                                                        <div
                                                            class="js-form-item form-item js-form-type-radio form-type-radio js-form-item-position form-item-position">
                                                            <input type="radio" id="edit-size-default" name="aioa_icon_size_mb"
                                                                   value="aioa-default-icon-mb" class="form-radio" />
                                                            <label for="edit-size-default" class="option">
                                                                <img src="https://www.skynettechnologies.com/sites/default/files/aioa-icon-type-1.svg"
                                                                     width="55" height="55" />
                                                                <span class="visually-hidden">Default</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto mb-30">
                                                        <div
                                                            class="js-form-item form-item js-form-type-radio form-type-radio js-form-item-position form-item-position">
                                                            <input type="radio" id="edit-size-small" name="aioa_icon_size_mb" value="aioa-small-icon-mb"
                                                                   class="form-radio" />
                                                            <label for="edit-size-small" class="option">
                                                                <img src="https://www.skynettechnologies.com/sites/default/files/aioa-icon-type-1.svg"
                                                                     width="45" height="45" />
                                                                <span class="visually-hidden">Small</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto mb-30">
                                                        <div
                                                            class="js-form-item form-item js-form-type-radio form-type-radio js-form-item-position form-item-position">
                                                            <input type="radio" id="edit-size-extra-small" name="aioa_icon_size_mb"
                                                                   value="aioa-extra-small-icon-mb" class="form-radio" />
                                                            <label for="edit-size-extra-small" class="option">
                                                                <img src="https://www.skynettechnologies.com/sites/default/files/aioa-icon-type-1.svg"
                                                                     width="35" height="35"  />
                                                                <span class="visually-hidden">Extra Small</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="save-changes-btn">
                                            <button type="button" id="submit" onclick="f1()" class="btn btn-primary" style="background-color: #420083;line-height: normal;height: auto;">Save Changes</button>
                                            <div class="mt-3 row " id="save-changes-success">
                                                <div class="col-sm-12">
                                                    <div class="form-text" style="padding: inherit;">It may take a few seconds for changes to appear on your website. If you
                                                        don't see the changes, try clearing your browser cache or checking in a private browsing window.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <div id="loader">
                                        <div class="spinner"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const domain = window.location.hostname;
        const urlParams = new URLSearchParams(window.location.search);
        const username = urlParams.get("username") || domain || "Dear Customer";
        const useremail = urlParams.get("email") || `no-reply@${domain}`;
        website_name = btoa(domain);
        console.log(website_name, username, useremail);
        let is_widget_custom_position = 0;
        let is_widget_custom_size = 0;

        async function getCountryData() {
            const sessionData = sessionStorage.getItem('visitor_data');
            if (sessionData) {
                return JSON.parse(sessionData);
            }
            try {
                const response = await fetch('https://ipapi.co/json/');
                if (!response.ok) throw new Error('Failed to fetch visitor data');
                const data = await response.json();
                console.log("Country API response:", data);
                const visitorData = {
                    country_code: data.country_code || 'Unknown',
                    in_eu: data.in_eu ?? false
                };
                sessionStorage.setItem('visitor_data', JSON.stringify(visitorData));
                return visitorData;
            } catch (error) {
                console.error('Error fetching visitor data:', error);
                return {
                    country_code: 'Unknown',
                    in_eu: false
                };
            }
        }

        async function fetchApiData(website_name) {
            const visitorData = await getCountryData();
            const is_eu = visitorData.in_eu ? 0 : 1;
            console.log(visitorData,is_eu);
            const packageType = "free-widget";
            const arrDetails = {
                name: username,
                email: useremail,
                company_name: '',
                website: website_name,
                package_type: packageType,
                start_date: new Date().toISOString(),
                end_date: '',
                price: '',
                discount_price: '0',
                platform: 'Filament',
                api_key: '',
                is_trial_period: '',
                is_free_widget: '1',
                bill_address: '',
                country: '',
                state: '',
                city: '',
                post_code: '',
                transaction_id: '',
                subscr_id: '',
                payment_source: '',
                no_required_eu: is_eu
            };
            console.log('Details to send:', arrDetails);
            const apiUrl = "https://ada.skynettechnologies.us/api/add-user-domain";

            fetch(apiUrl, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(arrDetails)
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! Status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(data => {
                    console.log("Response from add-user-domain API:", data);
                    if (data.success) {
                        console.log("User domain added successfully!");
                    }
                })
                .catch(error => {
                    console.error("Error sending data to add-user-domain API:", error);
                })
                .finally(() => {

                });
        }

        var domain_name = domain;
        console.log("domain : "+domain);
        const defaultSettings = {
            widget_position: "bottom_right",
            widget_color_code: "#420083",
            widget_icon_type: "aioa-icon-type-1",
            widget_icon_size: "aioa-small-icon",
        };
        function fetchApiResponse(domain_name) {
            const apiUrl = "https://ada.skynettechnologies.us/api/widget-settings";

            fetch(apiUrl, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({ website_url: domain_name })
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error(`HTTP error! status: ${response.status}`);
                    }
                    return response.json();
                })
                .then(result => {
                    if (result && result.Data && Object.keys(result.Data).length > 0) {
                        const settings = {
                            widget_position: result.Data.widget_position || defaultSettings.widget_position,
                            widget_color_code: result.Data.widget_color_code || defaultSettings.widget_color_code,
                            widget_icon_type: result.Data.widget_icon_type || defaultSettings.widget_icon_type,
                            widget_icon_size: result.Data.widget_icon_size || defaultSettings.widget_icon_size,
                            widget_size: result.Data.widget_size || defaultSettings.widget_size,
                            widget_icon_size_custom: result.Data.widget_icon_size_custom || defaultSettings.widget_icon_size_custom,
                            is_widget_custom_size: result.Data.is_widget_custom_size || defaultSettings.is_widget_custom_size,
                            is_widget_custom_position: result.Data.is_widget_custom_position || defaultSettings.is_widget_custom_position,
                            widget_position_top: result.Data.widget_position_top,
                            widget_position_bottom: result.Data.widget_position_bottom,
                            widget_position_left: result.Data.widget_position_left,
                            widget_position_right: result.Data.widget_position_right,
                        };

                        populateSettings(settings);
                        populatecustom(settings);
                    }
                })
                .catch(error => {
                    console.error("Error fetching API:", error);
                });
        }

        function fetchSettings() {
            const requestOptions = {
                method: "POST",
                redirect: "follow"
            };

            fetch(`https://ada.skynettechnologies.us/api/widget-settings?website_url=${domain_name}`, requestOptions)
                .then(response => {
                    if (!response.ok) {
                        throw new Error("Network response was not ok");
                    }
                    return response.json();
                })
                .then(result => {
                    if (result && result.Data && Object.keys(result.Data).length > 0) {
                        console.log("Widget settings fetched:", result.Data);
                    }
                })
                .catch(error => {
                    console.error("Error fetching widget settings:", error);
                    alert("Failed to fetch settings. Using default values.");
                })
                .finally(() => {
                });
        }
        // Populate form fields with settings
        function populateSettings(settings) {

            const $sizeSwitcher = $("#custom-size-switcher");
            const $positionSwitcher = $("#custom-position-switcher");

            // Set switcher states
            $sizeSwitcher.prop("checked", settings.is_widget_custom_size === 1);
            $positionSwitcher.prop("checked", settings.is_widget_custom_position === 1);

            // Trigger the UI update by manually calling change handler
            toggleCustomSizeUI(settings.is_widget_custom_size === 1);
            toggleCustomPositionUI(settings.is_widget_custom_position === 1);

            // Attach change handlers
            $sizeSwitcher.off("change").on("change", function () {
                const enabled = $(this).is(":checked");
                settings.is_widget_custom_size = enabled ? 1 : 0;
                toggleCustomSizeUI(enabled);
            });

            $positionSwitcher.off("change").on("change", function () {
                const enabled = $(this).is(":checked");
                settings.is_widget_custom_position = enabled ? 1 : 0;
                toggleCustomPositionUI(enabled);
            });

// end size position

            const colorField = document.getElementById("colorcode");
            if (colorField) {
                colorField.value = settings.widget_color_code;
            }
            const typeOptions = document.querySelectorAll('input[name="aioa_icon_type"]');

            typeOptions.forEach((option) => {
                if (option.value === settings.widget_icon_type) {
                    option.checked = true;
                }
            });

            const sizeOptions = document.querySelectorAll('input[name="aioa_icon_size"]');
            sizeOptions.forEach((option) => {
                if (option.value === settings.widget_icon_size) {
                    option.checked = true;
                }
            });

            const iconImg = `https://www.skynettechnologies.com/sites/default/files/${settings.widget_icon_type}.svg`;
            $(".iconimg").attr("src", iconImg);

            const widget_icon_size_custom = document.getElementById("widget_icon_size_custom");
            if (widget_icon_size_custom) {
                widget_icon_size_custom.value = settings.widget_icon_size_custom;
            }
            const positionRadio = document.querySelector(`input[name="position"][value="${settings.widget_position}"]`);
            if (positionRadio) {
                positionRadio.checked = true;
            }
            const widget_size = document.querySelector(`input[name="widget_size"][value="${settings.widget_size}"]`);
            if (widget_size) {
                widget_size.checked = true;
            }

            // Set custom position fields
            const customPositionXField = document.getElementById("custom_position_x_value");
            const xDirectionSelect = $(".custom-position-controls select")[0];

            if (customPositionXField && xDirectionSelect) {
                if (settings.widget_position_right != null && settings.widget_position_right >= 0) {
                    customPositionXField.value = settings.widget_position_right;
                    xDirectionSelect.value = "cust-pos-to-the-right";
                } else if (settings.widget_position_left != null && settings.widget_position_left >= 0) {
                    customPositionXField.value = settings.widget_position_left;
                    xDirectionSelect.value = "cust-pos-to-the-left";
                } else {
                    customPositionXField.value = 0; // default
                    xDirectionSelect.value = "cust-pos-to-the-right"; // default direction
                }
            }


            const customPositionYField = document.getElementById("custom_position_y_value");
            const yDirectionSelect = $(".custom-position-controls select")[1];

            if (customPositionYField && yDirectionSelect) {
                if (settings.widget_position_bottom != null && settings.widget_position_bottom >= 0) {
                    customPositionYField.value = settings.widget_position_bottom;
                    yDirectionSelect.value = "cust-pos-to-the-lower";
                } else if (settings.widget_position_top != null && settings.widget_position_top >= 0) {
                    customPositionYField.value = settings.widget_position_top;
                    yDirectionSelect.value = "cust-pos-to-the-upper";
                } else {
                    customPositionYField.value = 0; // default
                    yDirectionSelect.value = "cust-pos-to-the-lower"; // default direction
                }
            }

        }

        function toggleCustomSizeUI(enabled) {
            $(".custom-size-controls").toggleClass("hide", !enabled);
            $(".widget-icon").toggleClass("hide", enabled);
            $("#custom-size-switcher").closest(".custom-checkbox").toggleClass("selected", enabled);
        }

        function toggleCustomPositionUI(enabled) {
            $(".custom-position-controls").toggleClass("hide", !enabled);
            $(".widget-position").toggleClass("hide", enabled);
            $("#custom-position-switcher").closest(".custom-checkbox").toggleClass("selected", enabled);
        }

        document.addEventListener('DOMContentLoaded', async () => {
            try {
                const website_name = btoa(domain_name);
                await Promise.all([
                    fetchApiResponse(domain_name),
                    fetchApiData(website_name)
                ]);
            } catch (error) {
                console.error("Error during API fetch:", error);
            } finally {
            }
        });

        const sizeOptions = document.querySelectorAll('input[name="aioa_icon_size"]');
        const sizeOptionsImg = document.querySelectorAll('input[name="aioa_icon_size"] + label img');
        const typeOptions = document.querySelectorAll('input[name="aioa_icon_type"]');
        const positionOptions = document.querySelectorAll('input[name="position"]');
        const custSizePreview = document.querySelector(".custom-size-preview img");
        const custSizePreviewLabel = document.querySelector(".custom-size-preview .value span");
        // Set default value to custom position inputs
        var positions = {
            top_left: [20, 20],
            middel_left: [20, 50],
            bottom_center: [50, 20],
            top_center: [50, 20],
            middel_right: [20, 50],
            bottom_right: [20, 20],
            top_right: [20, 20],
            bottom_left: [20, 20],
        };
        positionOptions.forEach((option) => {
            var ico_position = document.querySelector('input[name="position"]:checked').value;
            document.getElementById("custom_position_x_value").value = positions[ico_position][0];
            document.getElementById("custom_position_y_value").value = positions[ico_position][1];
            option.addEventListener("click", (event) => {
                var ico_position = document.querySelector('input[name="position"]:checked').value;
                document.getElementById("custom_position_x_value").value = positions[ico_position][0];
                document.getElementById("custom_position_y_value").value = positions[ico_position][1];
            });
        });
        // Set icon on type select
        typeOptions.forEach((option) => {
            option.addEventListener("click", (event) => {
                var ico_type = document.querySelector('input[name="aioa_icon_type"]:checked').value;

                sizeOptionsImg.forEach((option2) => {
                    option2.setAttribute("src", "https://www.skynettechnologies.com/sites/default/files/" + ico_type + ".svg");
                });
                custSizePreview.setAttribute("src", "https://www.skynettechnologies.com/sites/default/files/" + ico_type + ".svg");
            });
        });
        // Set icon on size select
        sizeOptions.forEach((option) => {
            var ico_size_value = document
                .querySelector('input[name="aioa_icon_size"]:checked + label img')
                .getAttribute("width");

            // Set default value to custom size input
            const widget_icon_size_custom = document.getElementById("widget_icon_size_custom");
            if (widget_icon_size_custom) {
                widget_icon_size_custom.value = widget_icon_size_custom.value || '';
            }


            option.addEventListener("click", (event) => {
                var ico_width = document
                    .querySelector('input[name="aioa_icon_size"]:checked + label img')
                    .getAttribute("width");
                var ico_height = document
                    .querySelector('input[name="aioa_icon_size"]:checked + label img')
                    .getAttribute("height");
                custSizePreview.setAttribute("width", ico_width);
                custSizePreview.setAttribute("height", ico_height);
                document.getElementById("widget_icon_size_custom").value = ico_width;
                custSizePreviewLabel.innerHTML = ico_width;
            });
        });
        // Set icons size on input change
        const widgetIconSizeInput = document.getElementById("widget_icon_size_custom");
        if (widgetIconSizeInput) {
            widgetIconSizeInput.addEventListener("input", function () {
                const ico_size_value = parseInt(this.value, 10);

                if (ico_size_value >= 20 && ico_size_value <= 150) {
                    custSizePreview.setAttribute("width", ico_size_value);
                    custSizePreview.setAttribute("height", ico_size_value);
                    custSizePreviewLabel.innerHTML = ico_size_value;
                }
            });
        }
        $('input[name="position"]').change(function () {
            var icon_position = document.querySelector('input[name="position"]:checked').value;
        });

        $('input[name="aioa_icon_type"]').change(function () {
            var icon_type = document.querySelector('input[name="aioa_icon_type"]:checked').value;
        });
        $('input[name="aioa_icon_size"]').change(function () {
            var icon_size = document.querySelector('input[name="aioa_icon_size"]:checked').value;
        });

        var colorcode = $("#colorcode").val();
        if (colorcode == "") {
            colorcode = "420083";
        }
        var icon_position = document.querySelector('input[name="position"]:checked').value;
        var icon_type = document.querySelector('input[name="aioa_icon_type"]:checked').value;
        var icon_size = document.querySelector('input[name="aioa_icon_size"]:checked').value;


        $('#license_key,#colorcode').change(function () {
            var license_key = $("#license_key").val();
            var colorcode = $("#colorcode").val();
            //var checkedValue = $('.messageCheckbox:checked').val();
        })
        $('input[name="position"]').change(function () {
            var icon_position = document.querySelector('input[name="position"]:checked').value;
        });

        $('input[name="aioa_icon_type"]').change(function () {
            var icon_type = document.querySelector('input[name="aioa_icon_type"]:checked').value;

        });
        $('input[name="aioa_icon_size"]').change(function () {
            var icon_size = document.querySelector('input[name="aioa_icon_size"]:checked').value;

        });
        // Set the initial server name and display it
        document.addEventListener('DOMContentLoaded', function() {
            var server_name = domain
        });

        function populatecustom(settings) {
            console.log(settings.is_widget_custom_size);

            // Fetch the settings value for custom position and set the checkbox state
            is_widget_custom_position = settings.is_widget_custom_position !== undefined ? settings.is_widget_custom_position : 0;
            $("#custom-position-switcher").prop("checked", is_widget_custom_position === 1);
            console.log("Initial Custom Position Switcher:", is_widget_custom_position);

            // Fetch the settings value for custom size and set the checkbox state
            is_widget_custom_size = settings.is_widget_custom_size !== undefined ? settings.is_widget_custom_size : 0;
            $("#custom-size-switcher").prop("checked", is_widget_custom_size === 1);
            console.log("Initial Custom Size Switcher:", is_widget_custom_size);

            // Handle click event for custom position switcher
            $("#custom-position-switcher").click(function () {
                // Set value based on checkbox state
                is_widget_custom_position = $(this).is(":checked") ? 1 : 0;
                console.log("Custom Position Switcher:", is_widget_custom_position);
            });

            // Handle click event for custom size switcher
            $("#custom-size-switcher").click(function () {
                // Set value based on checkbox state
                is_widget_custom_size = $(this).is(":checked") ? 1 : 0;
                console.log("Custom Size Switcher:", is_widget_custom_size);
            });
        }




        function f1() {
            var server_name = domain;
            document.getElementById('loader').style.display = 'flex';
            var colorcode = $("#colorcode").val();
            var icon_position = document.querySelector('input[name="position"]:checked').value;
            var icon_type = document.querySelector('input[name="aioa_icon_type"]:checked').value;
            var icon_size = document.querySelector('input[name="aioa_icon_size"]:checked').value;
            var widget_size = document.querySelector('input[name="widget_size"]:checked').value;
            var widget_icon_size_custom = $("#widget_icon_size_custom").val();
            // Validate widget_icon_size_custom range
            if (is_widget_custom_size == 1) {
                const customSize = parseInt(widget_icon_size_custom, 10);
                if (isNaN(customSize) || customSize < 20 || customSize > 150) {
                    Swal.fire({
                        icon: "warning",
                        title: "Invalid Size",
                        text: "The icon size must be between 20 and 150px."
                    });
                    document.getElementById('loader').style.display = 'none';
                    return;
                }
            }
            const custom_position_x = $("#custom_position_x_value").val() || 0;
            const custom_position_y = $("#custom_position_y_value").val() || 0;
            const x_position_direction = $(".custom-position-controls select").eq(0).val();
            const y_position_direction = $(".custom-position-controls select").eq(1).val();

            let widget_position_right = null;
            let widget_position_left = null;
            let widget_position_top = null;
            let widget_position_bottom = null;

            if (x_position_direction === "cust-pos-to-the-right") {
                widget_position_right = custom_position_x;
            } else if (x_position_direction === "cust-pos-to-the-left") {
                widget_position_left = custom_position_x;
            }

            if (y_position_direction === "cust-pos-to-the-lower") {
                widget_position_bottom = custom_position_y;
            } else if (y_position_direction === "cust-pos-to-the-upper") {
                widget_position_top = custom_position_y;
            }

            var payload = {
                u: server_name,
                widget_position: icon_position,
                is_widget_custom_position: is_widget_custom_position,
                is_widget_custom_size: is_widget_custom_size,
                widget_color_code: colorcode,
                widget_icon_type: icon_type,
                widget_icon_size: icon_size,
                widget_size: widget_size,
                widget_icon_size_custom: widget_icon_size_custom,
                widget_position_right: widget_position_right,
                widget_position_left: widget_position_left,
                widget_position_top: widget_position_top,
                widget_position_bottom: widget_position_bottom
            };
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'https://ada.skynettechnologies.us/api/widget-setting-update-platform', true);
            xhr.setRequestHeader('Content-Type', 'application/json');
            xhr.onload = function () {
                // Hide the loader
                document.getElementById('loader').style.display = 'none';
                if (xhr.status === 200) {
                    Swal.fire({
                        icon: "success",
                        title: "Success",
                        text: "Settings updated successfully!"
                    }).then(() => {
                        // Reload the page after the user clicks OK on the alert
                        location.reload();
                    });
                } else {
                    console.error('Error: ', xhr.status, xhr.statusText);
                    Swal.fire({
                        icon: "error",
                        title: "Update Failed",
                        text: "Unable to update settings."
                    });
                }
            };
            xhr.onerror = function () {
                hideLoader();
                Swal.fire({
                    icon: "error",
                    title: "Network Error",
                    text: "Request failed. Please check your connection."
                });
            };
            // Send the request with parameters
            xhr.send(JSON.stringify(payload));
        };
    </script>
</x-filament-panels::page>
