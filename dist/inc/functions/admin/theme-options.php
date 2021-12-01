<?php
    /**
     * Tornado Theme Custom Options Pages
     * @package Tornado Wordpress
     * Creating Custom Options for Easy Theme and Design Control.
     * 
     * ========> Reference by Comments <=======
     * 00 - Register Options
     * 01 - General => Meta Options
     * 02 - General => Custom Codes
     * 03 - Contact => Contact Info
     * 04 - Contact => Social
     * 05 - Design => Global
     * 06 - Design => Colors
     * 07 - Design => Fonts
     * 08 - Page Render Function
     * 
    */

    //======= Exit if Try to Access Directly =======//
    defined('ABSPATH') || exit;

    //========> Register Options <========//
    function register_theme_options() {
        //=========> General => Meta Options <=========//
        register_setting('tornado-options', 'meta_keywords');
        register_setting('tornado-options', 'meta_graph_cover');
        register_setting('tornado-options', 'meta_copyrights');
        //=========> General => Custom Codes <=========//
        register_setting('tornado-options', 'header_code');
        register_setting('tornado-options', 'body_code_start');
        register_setting('tornado-options', 'footer_code');
        //=========> General => Custom Codes <=========//
        register_setting('tornado-options', 'latest_code');
        register_setting('tornado-options', 'banner_code');
        register_setting('tornado-options', 'profilio_advantage');

        //=========> Contact => Contact Info <=========//
        register_setting('tornado-options', 'phone_number');
        register_setting('tornado-options', 'phone_number_2nd');
        register_setting('tornado-options', 'contact_email');
        register_setting('tornado-options', 'contact_email_2nd');
        register_setting('tornado-options', 'whatsapp_number');
        register_setting('tornado-options', 'whatsapp_number_2nd');
        register_setting('tornado-options', 'branch_address');
        //=========> About => About Info <=========//
        register_setting('tornado-options', 'service_name');
        register_setting('tornado-options', 'our_vision_code');
        register_setting('tornado-options', 'our_vision_code2');
        register_setting('tornado-options', 'our_mission_code');
        register_setting('tornado-options', 'our_mission_code2');
        register_setting('tornado-options', 'service_code3');
        register_setting('tornado-options', 'body_title');
        register_setting('tornado-options', 'about_code');
        register_setting('tornado-options', 'about_code2');
        //=========> blog details => blog Info <=========//
        register_setting('tornado-options', 'blog_details');
        register_setting('tornado-options', 'blog_details_code');
        register_setting('tornado-options', 'image_body');

        //=========> Contact => Social <=========//
        register_setting('tornado-options', 'facebook_url');
        register_setting('tornado-options', 'twitter_url');
        register_setting('tornado-options', 'instagram_url');
        register_setting('tornado-options', 'google_plus_url');
        register_setting('tornado-options', 'youtube_url');
        register_setting('tornado-options', 'dribbble_url');
        register_setting('tornado-options', 'linkedin_url');
        //=========> Design => Global <=========//
        register_setting('tornado-options', 'theme_logo');
        register_setting('tornado-options', 'theme_logo_mobile');
          //=========> Design => Global <=========//
        register_setting('tornado-options', 'image_bloog');
        register_setting('tornado-options', 'Our_vision');
          //=========> Design => Global <=========//
        register_setting('tornado-options', 'Our_Mission');
        register_setting('tornado-options', 'theme_logo_bodya');
        //=========> Design => Colors <=========//
        register_setting('tornado-options', 'primary_color');
        register_setting('tornado-options', 'primary_color_hover');
        register_setting('tornado-options', 'secondary_color');
        register_setting('tornado-options', 'secondary_color_hover');
        register_setting('tornado-options', 'typo_color');
        //=========> Design => Fonts GF <=========//
        register_setting('tornado-options', 'google_fonts');
        register_setting('tornado-options', 'primary_font');
        register_setting('tornado-options', 'secondary_font');
        register_setting('tornado-options', 'primary_font_rtl');
        register_setting('tornado-options', 'secondary_font_rtl');
        //=========> Design => Custom Fonts <=========//
        register_setting('tornado-options', 'custom_primary_font');
        register_setting('tornado-options', 'custom_secondary_font');
        register_setting('tornado-options', 'custom_primary_font_rtl');
        register_setting('tornado-options', 'custom_secondary_font_rtl');
        //=========> Design => Fonts Options <=========//
        register_setting('tornado-options', 'base_l_size');
        register_setting('tornado-options', 'base_m_size');
        register_setting('tornado-options', 'base_s_size');
        register_setting('tornado-options', 'base_line_height');
        register_setting('tornado-options', 'normal_weight');
        register_setting('tornado-options', 'medium_weight');
        register_setting('tornado-options', 'strong_weight');
    }

    add_action('admin_init', 'register_theme_options');

    //========> Page Render Function <========//
    function theme_options_render() {
        $theme_path = get_template_directory_uri();
?>

<!-- Theme Options -->
<div class="theme-options <?php if (is_rtl()) { echo 'rtl'; }?>">
    <!-- Tabs Menu -->
    <ul class="tabs-menu">
        <li class="logo"> <img src="<?php echo $theme_path; ?>/inc/functions/admin/img/tornado-logo.png" alt=""> </li>
        <li class="ti-cog active" data-tab="general-options"><?php echo __('General Settings','tornado'); ?></li>
        <li class="ti-phone" data-tab="contact-options"><?php echo __('Contact Info','tornado'); ?></li>
        <li class="ti-brush" data-tab="design-options"><?php echo __('Design Options','tornado'); ?></li>
    </ul>
    <!-- Tabs Content -->
    <form method="post" action="options.php" class="tabs-form" id="tornado-options">
        <!-- Submit Button -->
        <div class="floating-submit">
            <?php
                //=======> Hidden Inputs Handler for WP Options Register <=========//
                settings_fields('tornado-options');
                do_settings_sections('tornado-options');
                //=======> Grap Submit Button <=========//
                submit_button();
            ?>
        </div>
        <!-- Page Content -->
        <div class="tabs-wraper">
            <!-- General Options -->
            <div class="tab-content active" id="general-options">
                <?php get_template_part('inc/functions/admin/options-tabs/01-General'); ?>
            </div>
            <!-- Contact Info Options -->
            <div class="tab-content" id="contact-options">
                <?php get_template_part('inc/functions/admin/options-tabs/02-Contact'); ?>
            </div>
            <!-- Contact Info Options -->
            <div class="tab-content" id="design-options">
                <?php get_template_part('inc/functions/admin/options-tabs/03-Design'); ?>
            </div>
            <!-- // Last Tab -->
        </div>
        <!-- Page Footer -->
        <div class="page-footer">
            <!-- Copyrights -->
            <p><?php echo __('Powered by Tornado UI v2 Framework © 2016 - 2020','tornado'); ?></p>
            <!-- Submit Button -->
            <?php submit_button(); ?>
        </div>
        <!-- // Page Footer -->
    </form>
    <!-- // Tabs Content -->
</div>
<!-- // Theme Options -->

<!-- Notifications -->
<div class="floating-notfications  <?php if (is_rtl()) { echo 'rtl'; }?>"></div>
<!-- // Notifications -->

<!-- Code Mirror -->
<script src="https://codemirror.net/lib/codemirror.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.48.0/mode/xml/xml.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.52.0/mode/htmlmixed/htmlmixed.min.js"></script>
<!-- Slim Select -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.26.0/slimselect.min.js"></script>
<!-- Custom JS -->
<script>
    //======> Tabs System <======//
    document.addEventListener('DOMContentLoaded', function () {
        //======> Get Elements <=======//
        const getElement = document.querySelector.bind(document);

        //======> Get Multiple Elements <=======//
        const getElements = document.querySelectorAll.bind(document);

        //======> Get All Siblings <=======//
        const getSiblings = (element,selector) => {
            'use strict';
            /*== Get all siblings of ==> element @param {Node} ==> @return {Array} The siblings ==*/
            if (element !== null) {
                return Array.prototype.filter.call(element.parentNode.children, sibling => {
                    if(!selector) {
                        return sibling !== element;
                    } else if(sibling.matches(selector)) {
                        return sibling;
                    }
                });
            }
        };

        'use strict';
        //=== Activate First tab and its Content Box
        getElements('.tabs-menu [data-tab]:first-of-type,.tab-content:first-of-type').forEach(function (elements) {
            //==== Open the Tab Panel by URL HashTag ====//
            if (elements.hasAttribute('data-active-url')) {
                var urlHash = window.location.hash.substr(1),
                    tabID = elements.getAttribute('data-tab');
                if (urlHash === '#' + tabID) {
                    tabID.classList.add('active');
                    getElement('#' + tabID).add('active');
                }
            } else {
                //=== Open the First Tab ===//
                elements.classList.add('active');
            }
        });
        //=== When Click on Tab
        var tabsBtns = getElements('.tabs-menu [data-tab]');
        Array.from(tabsBtns).forEach(function (thisElement) {
            thisElement.addEventListener('click', function () {
                //==== Store the Tab ID and this Element
                var getPanelId = thisElement.getAttribute('data-tab'),
                    targtedPanel = getElement('#' + getPanelId);
                //==== Call Back Function Before Opens the Panel ====//
                if (thisElement.hasAttribute('data-call-before')) {
                    var callBackBefore = thisElement.getAttribute('data-call-before');
                    window[callBackBefore]();
                }
                //==== Activate Clicked Tab
                thisElement.classList.add('active');
                //=== Remove Active Class From Siblings
                getSiblings(thisElement).forEach(function (siblings) {
                    siblings.classList.remove('active');
                });
                //==== Activate Tab Content
                targtedPanel.classList.add('active');
                //=== Remove Active Class From Siblings
                getSiblings(targtedPanel).forEach(function (siblings) {
                    siblings.classList.remove('active');
                });
                //==== Call Back Function After Opens the Panel ====//
                if (thisElement.hasAttribute('data-call-after')) {
                    var callBackAfter = thisElement.getAttribute('data-call-after');
                    window[callBackAfter]();
                }
            });
        });
    });

    //======> Tabs Hack <======//
    document.addEventListener('DOMContentLoaded', function () {
        'use strict';

        //========> get Tabs Elements <========//
        var tab_btns = document.querySelectorAll('[data-tab]'),
            tabs_content = document.querySelectorAll('.tab-content');

        //========> On Click Add Tab ID to URL <========//
        Array.from(tab_btns).forEach(btn => {
            btn.addEventListener('click', event => {
                var tab_id = btn.getAttribute('data-tab');
                history.pushState(null, null, '#'+tab_id)
                // window.location.hash = tab_id;
            });
        });

        //========> get Tab Id from URL <========//
        var current_tab_id = window.location.hash.substr(1);
        if (current_tab_id) {
            var current_tab = document.querySelector('#'+current_tab_id);
            if (current_tab.classList.contains('tab-content')) {
                Array.from(tabs_content).forEach(tab => {
                    var tab_id = tab.getAttribute('id');
                    //=======> Active Button <========//
                    Array.from(tab_btns).forEach(btn => {
                        var btn_id = btn.getAttribute('data-tab');
                        if(btn_id == current_tab_id) {
                            btn.classList.add('active'); 
                        } else {
                            btn.classList.remove('active');
                        }
                    });
                    //=======> Active Tab <========//
                    setTimeout(() => {
                        if(tab_id == current_tab_id) {
                            tab.classList.add('active');
                        } else {
                            tab.classList.remove('active');
                        }
                    }, 200);
                });
            }
        }

        /*============ Select Color Picker Elements ==============*/
        var color_pickers = document.querySelectorAll('.color-picker');
        Array.from(color_pickers).forEach(element => {
            var pickerInput = element.querySelector('input'),
                pickerBackground = element.querySelector('.color-prev'),
                defaultColor = pickerInput.getAttribute('placeholder');

            var picker = new Picker(element);

            //==== Set Default =====//
            picker.setColor(defaultColor)
            pickerInput.value = defaultColor;

            // You can do what you want with the chosen color using two callbacks: onChange and onDone.
            picker.onChange = function(color) {
                pickerBackground.style.background = color.hex;
                pickerInput.value = color.hex;
            };
        });

        /*============ Select Default Values ==============*/
        var defaultSelects = document.querySelectorAll('.options-panel select');
        Array.from(defaultSelects).forEach(element => {
            var defaultOption = 'option[value="'+element.getAttribute('data-value')+'"]',
                defaultOptionElement = element.querySelector(defaultOption);
            if (defaultOptionElement) defaultOptionElement.setAttribute('selected',true);
        });

        /*============ Advanced Select ==============*/
        var advancedSelect = document.querySelectorAll('.advanced-select');
        Array.from(advancedSelect).forEach((element,index) => {
            element.setAttribute('id','slime-selector-n'+index);
            var selectorID = '#slime-selector-n'+index;
            new SlimSelect({
                select: selectorID,
            });
        });

        /*============ Google Fonts Controler ==============*/
        var googleFontsStatus = document.querySelector('#google-fonts-status');
        if (googleFontsStatus) {
            googleFontsStatus.addEventListener('change', event => {
                var googleFontsControls = document.querySelectorAll('.google-fonts-controler'),
                    customFontsControls = document.querySelectorAll('.custom-fonts-controler');
                //======== If Google Fonts On ==========//
                if (googleFontsStatus.checked) {
                    Array.from(googleFontsControls).forEach(element => {
                        element.classList.remove('hidden');
                    });
                    Array.from(customFontsControls).forEach(element => {
                        element.classList.add('hidden');
                    });
                //======== If Google Fonts Off ==========//
                } else {
                    Array.from(googleFontsControls).forEach(element => {
                        element.classList.add('hidden');
                    });
                    Array.from(customFontsControls).forEach(element => {
                        element.classList.remove('hidden');
                    });
                }
            });
        }
    });
    //===== Media Uploader Popup =====//
    jQuery(document).ready(function ($) {
        //===== Runs when the image button is clicked =====//
        $('.uploader-btn').click(function (e) {
            e.preventDefault();
            //===== Instantiates the variable that holds the media library =====//
            var meta_image_frame;
            //===== Get preview Input =====//
            var meta_image = $(this).parents('.media-uploader-control').find('.uploader-input'),
                imagePrev = $(this).parents('.media-uploader-control').find('.image-prev');
            //===== If the media library already exists, re-open it =====//
            if (meta_image_frame) { meta_image_frame.open(); return; }
            //===== Sets up the media library =====//
            meta_image_frame = wp.media.frames.meta_image_frame = wp.media({
                title: meta_image.title,
                button: { text: meta_image.button }
            });
            //===== Runs when an media is selected =====//
            meta_image_frame.on('select', function () {
                //===== Grabs the Selection and creates a JSON representation of the model =====//
                var media_attachment = meta_image_frame.state().get('selection').first().toJSON();
                //===== Sends the attachment URL to the media input field =====//
                meta_image.val(media_attachment.url);
                imagePrev.attr('src',media_attachment.url);
            });
            //===== Opens the media library =====//
            meta_image_frame.open();
        });
    });

    //===== Ajax Submit =====//
    jQuery(document).ready(function ($) {
        function save_tornado_options() {
            $('#tornado-options').submit(function () {
            var encode_controls =  $(this).serialize();
            $.post('options.php', encode_controls).error(
                /*======= Response Function =========*/
                function() {
                    /*========= on Error  ==========*/
                    var notifiElement = document.querySelector('.floating-notfications'),
                        errorMsg = '<div class="alert-box danger"><?php echo __('Error : Setting has not been saved.','tornado'); ?></div>';
                    /*========= Create Message ==========*/
                    notifiElement.innerHTML = errorMsg;
                    /*========= Ge Message Element ==========*/
                    var msgElement = notifiElement.querySelector('.alert-box');
                    /*========= Show Message Element ==========*/
                    msgElement.classList.add('active');
                    /*========= Remove Message Element After 3s ==========*/
                    setTimeout(() => {
                        msgElement.remove();
                    }, 3000);
                }).success( function() {
                    /*========= on Success  ==========*/
                    var notifiElement = document.querySelector('.floating-notfications'),
                        errorMsg = '<div class="alert-box success"><?php echo __('Changes Saved.','tornado'); ?></div>';
                    /*========= Create Message ==========*/
                    notifiElement.innerHTML = errorMsg;
                    /*========= Ge Message Element ==========*/
                    var msgElement = notifiElement.querySelector('.alert-box');
                    /*========= Show Message Element ==========*/
                    msgElement.classList.add('active');
                    /*========= Remove Message Element After 3s ==========*/
                    setTimeout(() => {
                        msgElement.remove();
                    }, 3000);
                });
                return false;    
            });
        }
    
        save_tornado_options();
    });
</script>
<?php } ?>