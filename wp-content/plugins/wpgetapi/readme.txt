=== WPGet API - Connect to any external REST API ===
Contributors: wpgetapi, DavidAnderson, pmbaldha, DNutbourne, aporter, webulous
Tags: api, external api, json, endpoint, rest, woocommerce
Requires at least: 5.0
Requires PHP: 7.0
Tested up to: 6.6
Stable tag: 2.2.7
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Connect any REST API to WordPress. WPGet API enables easy API integration, allowing you to display API data without any code.

== Description ==

Connect WordPress to external APIs, without code.

Easily send data to any API and get data from unlimited 3rd party REST APIs. Format and display the returned data on your WordPress website using a shortcode or a template tag.

https://www.youtube.com/watch?v=X50qINEs1yo

WPGet API supports virtually all authentication methods including API keys, bearer tokens, basic auth, username/password and [OAuth 2.0 authorization](https://wpgetapi.com/downloads/oauth-2-0-authentication/?utm_campaign=OAuth&utm_medium=wporg&utm_source=readme).

### Live Examples

View our live examples of connecting to several different APIs and displaying the data in various unique ways including charts, graphs, tables and weather forecasts.

[LIVE EXAMPLES - Connecting WordPress to external APIs](https://wpgetapi.com/demo-connecting-wordpress-to-external-api/?utm_campaign=Demo&utm_medium=wporg&utm_source=readme)

### Major Features

 * Connect your WordPress website to any REST API
 * Unlimited APIs & endpoints
 * No coding required
 * Display API data using a template tag or shortcode
 * GET, POST, PUT, PATCH & DELETE methods
 * Add query string, header & body parameters

### Documentation

We have tons of articles and help available.

 * [Quick Start Guide](https://wpgetapi.com/docs/quick-start-guide/?utm_campaign=Docs&utm_medium=wporg&utm_source=readme)
 * [Step by Step Example](https://wpgetapi.com/docs/step-by-step-example/?utm_campaign=Docs&utm_medium=wporg&utm_source=readme)
 * [Frequently Asked Questions](https://wpgetapi.com/docs/frequently-asked-questions/?utm_campaign=Docs&utm_medium=wporg&utm_source=readme)
 * [Will this work with my API?](https://wpgetapi.com/docs/will-this-work-with-my-api/?utm_campaign=OAuth&utm_medium=wporg&utm_source=readme)

### Extending WPGet API

= PRO Plugin =
The **[PRO Plugin](https://wpgetapi.com/downloads/pro-plugin/?utm_campaign=Pro&utm_medium=wporg&utm_source=readme)** provides many extra features that allow you to do some more advanced things with your APIs. Features of the PRO Plugin include:

 *  Actions - automate your API when an action happens on your site
 *  Tokens - grab dynamic data without code and send to your API
 *  Dynamic variables - a PHP solution for grabbing dynamic values
 *  Chain API calls
 *  Cache API calls
 *  Format API data into HTML
 *  Retrieve nested data
 *  Base64 encoded auth
 *  XML format


= API to Posts Plugin =
The **[API to Posts Plugin](https://wpgetapi.com/downloads/api-to-posts/?utm_campaign=APItoPosts&utm_medium=wporg&utm_source=readme)** allows you to import API data and create WooCommerce products or custom posts from this API data. Features of the API to Posts Plugin include:

 *  Import API data
 *  Import from unlimited endpoints
 *  Map API data to WordPress fields
 *  Supports custom fields, ACF, tags, categories, custom taxonomies, images and more
 *  Supports all standard WooCommerce fields
 *  Create WooCommerce products from API data
 *  Sync API to WooCommerce products & posts
 *  Set interval of sync from every minutes up to once a week


= OAuth 2.0 Authorization =
The **[OAuth 2.0 Authorization](https://wpgetapi.com/downloads/oauth-2-0-authentication/?utm_campaign=OAuth&utm_medium=wporg&utm_source=readme)** plugin allows authorization of your API through the OAuth 2.0 method.


### WPGet API Integrations

WPGet API integrates extremely well with other WordPress plugins, allowing you to do some very cool things with your API. Click the links below for more info on these integrations.


 * [WooCommerce to API](https://wpgetapi.com/docs/connect-woocommerce-to-api/?utm_campaign=Integrations&utm_medium=wporg&utm_source=readme)
 * [WooCommerce API Product Sync](https://wpgetapi.com/docs/woocommerce-api-product-sync/?utm_campaign=Integrations&utm_medium=wporg&utm_source=readme)
 * [Contact Form 7 send data to API](https://wpgetapi.com/docs/send-contact-form-7-data-to-api/?utm_campaign=Integrations&utm_medium=wporg&utm_source=readme)
 * [WPForms send data to API](https://wpgetapi.com/docs/send-wpforms-data-to-api/?utm_campaign=Integrations&utm_medium=wporg&utm_source=readme)
 * [Gravity Forms send data to API](https://wpgetapi.com/docs/send-gravity-forms-data-to-api/?utm_campaign=Integrations&utm_medium=wporg&utm_source=readme)
 * [Charts & Tables from API data using wpDataTables](https://wpgetapi.com/docs/using-with-wpdatatables/?utm_campaign=Integrations&utm_medium=wporg&utm_source=readme)


### Translating WPGet API

You can translate WPGet API into your own language on [translate.wordpress.org](https://translate.wordpress.org/projects/wp-plugins/wpgetapi/)

Here is an article to help [get started with translations](https://make.wordpress.org/polyglots/handbook/translating/first-steps/)

== Installation ==
= Requirements =
* WordPress version 5.0 and later
* PHP 7.2, Tested with PHP 8.2
* cURL

= Usage =

1. Go to the `WPGet API -> Setup` menu to add your APIs.
2. Once your APIs are saved, a new tab is created allowing you to add endpoints.
3. Once your endpoints are saved, you can use the template tag or shortcode to connect to your API and view the data.

== Frequently Asked Questions ==


= Is WPGetAPI free? =

Yes, WPGetAPI’s core features are free and will always be free.

The [PRO version](https://wpgetapi.com/downloads/pro-plugin/?utm_campaign=PRO&utm_medium=wporg&utm_source=faq) is an extension that adds extra features if you are looking to do more with your API.

The [API to Posts plugin](https://wpgetapi.com/downloads/api-to-posts/?utm_campaign=APItoPosts&utm_medium=wporg&utm_source=faq) is an extension that allows you to create posts or products from your API data.


= Can I connect to any REST API? =

Yes, most likely. WPGetAPI handles all major methods of authorization and authentication. It will depend on the type of authentication your API is using. Please click the link to view the [types of authentication and authorization](https://wpgetapi.com/docs/authentication-authorization/?utm_campaign=Docs&utm_medium=wporg&utm_source=faq) that are available.


= Can I capture form data and send to my API? =

Yes, see [this article](https://wpgetapi.com/docs/send-form-data-to-api/?utm_campaign=Form&utm_medium=wporg&utm_source=faq) on how you can capture data from your forms and send the data to your API.

This is perfect for lead generation forms, contact forms or really any other type form that requires you to send form data to an API.


= Can I use an XML based API? =

Yes, we support XML with our [PRO Plugin](https://wpgetapi.com/downloads/pro-plugin/?utm_campaign=Pro&utm_medium=wporg&utm_source=faq)


= How do I connect WordPress to an API? =

By using this plugin of course! Check out the video at the top of this page or visit our [Quick Start Guide](https://wpgetapi.com/docs/quick-start-guide/?utm_campaign=Quick-Start&utm_medium=wporg&utm_source=faq) to get started with connecting your WordPress website with an API.


= How do I cache API calls? =

We support caching with our [PRO Plugin](https://wpgetapi.com/downloads/pro-plugin/?utm_campaign=Pro&utm_medium=wporg&utm_source=faq). It also recognises dynamic queries and will cache these individually.

A dynamic query might be something like these:

/customer-endpoint/customer?user_id=123
/customer-endpoint/customer?user_id=4567

The PRO plugin recognises that whilst they are the same endpoint, they are different queries that need to be cached separately.

= Where can I find docs? =

All of our [documentation can be found here](https://wpgetapi.com/docs/quick-start-guide/?utm_campaign=Docs&utm_medium=wporg&utm_source=faq).


= What can I do with the API data? =

The API data can be output as a JSON string, stored in a PHP variable or automatically output as HTML (using PRO plugin). You can easily format the data into tables or charts plus many other possibilities.


= Will you help me if I am having trouble? =

Yes! Please [visit our website](https://wpgetapi.com/?utm_campaign=Contact&utm_medium=wporg&utm_source=faq) and create a support ticket. We will help you to get your API up and running.


= How do I create WooCommerce products from API data? =

You can create WooCommerce products from API data (sync API to WooCommerce products) using our [API to Posts Plugin](https://wpgetapi.com/downloads/api-to-posts/?utm_campaign=APItoPosts&utm_medium=wporg&utm_source=faq)


= How do I create custom posts from API data? =

You can create custom posts from API data (sync API to custom posts) using our [API to Posts Plugin](https://wpgetapi.com/downloads/api-to-posts/?utm_campaign=APItoPosts&utm_medium=wporg&utm_source=faq)


== Screenshots ==

1. The Setup screen where you can add your external APIs
2. Once an external API has been added, a new page will be created to setup the API endpoints
3. A live demo of the output when debug mode is set to true
4. An example of some raw output from an API
5. Basic example of the output from an API formatted into HTML table


== Changelog ==

= 2.2.7 - 04/Jul/2024 =

* FIX: Resolved the issue of API title replaced with default name when deleting an API.
* FIX: Resolved the issue of endpoint title replaced with default name when deleting an endpoint.
* FIX: WPGetAPI Console error "rest_not_logged_in"

= 2.2.6 - 13/Jun/2024 =

* FEATURE: Added duplicate button in Endpoint.
* FIX: Don't render any copy icons in non-ssl connection
* FIX: Resolved the warning: "Creation of dynamic property WpGetApi_Api::$oauth2 is deprecated" in PHP 8.2.
* FIX: WPGetAPI Block Widget error: "Uncaught ReferenceError: wpgetapi_block_editor is not defined" on 6.5 WordPress version.
* FIX: WPGetAPI Block Widget: Fix the block widget duplicate values for the 'Select an API' dropdown.
* TWEAK: Improve the readability of the code by following the semi WordPress coding standard.
* TRANSLATIONS: Multiple sentences in translation function.

= 2.2.5 - 08/Apr/2024 =

* FIX: Resolved the warning in PHP 8.2: "Deprecated: Constant FILTER_SANITIZE_STRING is deprecated"
* FIX: wpgetapi_endpoint shortcode using AJAX to trigger API call error: "Uncaught ReferenceError: jQuery is not defined"
* TWEAK: Enhanced security by adding check for the user has enough access level to perform a few AJAX operations
* TWEAK: Add visibilities to all PHP class methods

= 2.2.4 - 05/Mar/2024 =

* FIX: An issue with API Not Considering 0 as a Valid Value.
* FIX: Double-quote issue in the body parameter array field value in WPGetAPI.
* TWEAK: Add confirm box on deletion of API and Endpoint.

= 2.2.3 (2023-10-05) =
- Fix - plugin conflict with Rank Math SEO making the 'Test Endpoint' button unavailable.

= 2.2.2 (2023-10-02) =
- Fix - vulnerability when importing endpoints: https://www.pluginvulnerabilities.com/2023/09/07/our-proactive-monitoring-caught-an-authenticated-option-update-vulnerability-being-introduced-in-to-wpgetapi/

= 2.2.1 (2023-10-02) =
- Fix - add check if not array data in cURL error section.

= 2.2.0 (2023-09-28) =
- Update - Big UI update.
- Update - Add cURL errors to test endpoint section.
- New - Add timeout option to admin.
- New - Set all wp_options autoload to 'no' for performance.

= 2.1.5 (2023-09-19) =
- Fix - move check for PRO plugin into init function rather than class construct.

= 2.1.4 (2023-09-19) =
- Fix - allow actions to passed when within a float(), integer(), or boolean() tag in admin for PRO plugin.

= 2.1.2 (2023-09-15) =
- Update - change Test Endpoint from 'a' tag to 'button' and disable it when new endpoint added and has not been saved.
- New - add new filter 'wpgetapi_xml_element' for modifying the opening XML element.
- Fix - override adding a border to .metabox-holder class that was being added by another plugin.

= 2.1.1 (2023-09-12) =
- New - add collapse button to toggle opening/closing of all endpoints.
- New - add new filter: wpgetapi_modify_formatted_body_parameters.
- New - add name of endpoint to endpoint title rather than 'Endpoint x'.
- New - add UTF-8 encoding to XML body.

= 2.1.0 (2023-09-06) =
- New - add import/export options.
- Update - minor CSS tweaks in admin.
- Update - modify the way CMB2 enqueues JS and CSS files.

= 2.0.6 (2023-08-22) =
- Update - add new shortcode attribute img_link to allow linking an image when using format='html'.

= 2.0.5 (2023-08-17) =
- New - add some minor checks to allow new API to Posts plugin to work.
- Update - modify error check codes to now capture all codes.

= 2.0.4 (2023-07-31) =
- Fix - float value not being formatted correctly.

= 2.0.3 (2023-07-26) =
- Fix - modify the check for json data being sent in parameters. Previously just looked for { } now looks for {" "}
- Update - minor styling updates to admin.
- New - add button for PRO plugin.

= 2.0.2 (2023-07-25) =
- Fix - only load css and js on wpgetapi pages.
- Fix - change reload time to 200ms and do the reload on all saving including endpoints.
- Update - add all available actions into actions field.
- New - add option to pass results_format from args.
- New - new styling for wpDataTables field.
- New - add JSON_PRETTY_PRINT as default.

= 2.0.1 (2023-07-19) =
- New - add new action field.
- Update - modify some help text.

= 2.0.0 (2023-07-18) =
- New - styling for actions field.
- Fix - force Unique ID fields to only be lowercase and underscores.

= 1.9.9 (2023-07-08) =
- Fix - bug with setting JSON encode when Body POST fields are empty.
- Update - changes to include Licenses page and text on that page.

= 1.9.8 (2023-07-05) =
- New - add ability to base64 encode body.

= 1.9.7 (2023-07-03) =
- Fix - reverse the last change as some APIs won't accept &amp; values. Need to find better solution!

= 1.9.6 (2023-07-02) =
- New - add htmlentities function to full url to avoid changing anything to html entities.

= 1.9.5 (2023-06-30) =
- New - add PATCH request method.
- Udpate - allow BODY post fields with any request method.

= 1.9.4 (2023-06-22) =
- New - styling changes in admin. Remove input descriptions and replace with tooltips.
- Udpate - expand the info in many tooltips.

= 1.9.3 (2023-06-22) =
- New - add success and error messages when using the 'Test Endpoint' button in the admin.

= 1.9.2 (2023-06-12) =
- New - add new shortcode attributes for AJAX - button_id for adding an ID to the button and ajax_output for allowing to change the output div to whatever you like. This needs to be used like ajax_output="#my_div_with_id" or ajax_output="#my_div_with_class"

= 1.9.1 (2023-05-18) =
- Fix - error when trying to format XML as HTML.

= 1.9.0 (2023-05-18) =
- New - one-click copy buttons next to Template Tag and Shortcode.
- New - extra styling for WPGetAPI heading that also includes small icon and version number.

= 1.8.14 (2023-04-25) =
- Fix - error with setting encoding to JSON encode.

= 1.8.13 (2023-04-24) =
- Fix - issue when using multiple ajax buttons in PRO plugin.

= 1.8.12 (2023-04-21) =
- Fix - passing post id through ajax button for PRO plugin.

= 1.8.11 (2023-04-20) =
- Fix - Set chain_delay to 0 on WordPress admin to avoid loading delays in admin.

= 1.8.10 (2023-04-19) =
- New - Add ability to set a delay when chaining endpoints.

= 1.8.9 (2023-04-18) =
- Fix - Allow multidemsnional arrays when using x-www-formurlencoded

= 1.8.8 (2023-04-12) =
- Compatibility - Tested with WordPress 6.2.

= 1.8.7 (2023-03-24) =
- Enhancement - Allow raw string data to pass through output, rather than only JSON string data.

= 1.8.6 (2023-03-17) =
- New - Allow raw data in POST body fields.

= 1.8.5 (2023-03-16) =
- New - Add new format='no_display' shortcode attribute to stop any output from the API.
- New - Add new integration with chaining methods that can be used in conjuction with the PRO plugin.

= 1.8.4 (2023-03-01) =
- New - Add new integration with image attributes for the shortcode, to allow the display of images using the PRO plugin.

= 1.8.3 (2023-02-17) =
- New - Add ability to set value as boolean type.
- Fix - If format is set to HTML, then set the results format as PHP array to avoid having to do it in the settings.

= 1.8.2 (2023-02-14) =
- New - Integration for the new AJAX button in the PRO plugin.
- Fix - Allow both JSON string and PHP array format to work when format is set to HTML.

= 1.8.1 (2023-02-10) =
- Fix - Issue with nested JSON arrays within parameter values.
- Fix - Tidy up the wording of some fields and licensing page.

= 1.8.0 (2023-02-06) =
- New - Gutenberg block added.
- New - Admin styling updates.

= 1.7.11 (2023-02-03) =
- New - add ability of Pro plugin to send XML formatted data in Body POST fields.

= 1.7.10 (2023-01-30) =
- New - add new filter 'wpgetapi_should_we_stop' which allows us to not call the API if some condition is not met. Added to allow processing of Woocommerce tokens on successful order (Pro plugin only).
- New - add new attribute 'on'. Added to allow processing of Woocommerce tokens on successful order.

= 1.7.9 (2023-01-22) =
- Fix - fix the handling of arrays within parameters.

= 1.7.8 (2023-01-13) =
- New - add new licensing and updating methods.

= 1.7.7 (2023-01-10) =
- New - add ability to set float and integers within paramater settings using float(number) and integer(number) syntax.
- Fix - fix help link for Body paramters going to wrong page.

= 1.7.6 (2023-01-09) =
- Fix - fix error with DELETE not working.

= 1.7.5 (2023-01-09) =
- New - add DELETE method.

= 1.7.4 (2022-12-06) =
- Fix - small fix to allow new custom field renaming within the Custom Post Import plugin.

= 1.7.3 (2022-12-02) =
- New - add full response into the 'Test Endpoint' section.
- Update - readme updates and 'tested up to' update.
- Update - update 3 screenshots.

= 1.7.2 (2022-11-08) =
- New - add warning when trying to output PHP array data in shortcode.
- New - remove banner for Pro plugin. No one likes ads, do they?

= 1.7.1 (2022-11-02) =
- Enhancement - rework the 'Test Endpoint' section in admin to make it cleaner and easier to read (again).
- Enhancement - styling tweaks.

= 1.7.0 (2022-10-06) =
- Enhancement - rework the 'Test Endpoint' section in admin to make it cleaner and easier to read.
- Enhancement - styling tweaks.
- New - add banner for Pro plugin.

= 1.6.1 (2022-08-25) =
- Fix - modify the way the body is retrieved. Required for OAuth 2.0 Authorization plugin.

= 1.6.0 (2022-08-19) =
- New - add endpoint testing within the admin area.

= 1.5.4 (2022-08-15) =
- Fix - change response code action in version 1.5.2 to a filter.
- New - updated styling for admin area.

= 1.5.3 (2022-07-29) =
- Enhancement - add new request method PUT.

= 1.5.2 (2022-07-06) =
- Enhancement - add new action to get response code. Required for OAuth 2.0 Authorization plugin.

= 1.5.1 (2022-07-06) =
- Enhancement - add new shortcode attributes for formatting HTML in Pro plugin.
- Enhancement - minor styling tweaks.
- Fix - very minor bug fixes.

= 1.5.0 (2022-06-27) =
- Fix - fully internationalize the plugin.

= 1.4.10 (2022-06-22) =
- Fix - add new filter 'wpgetapi_json_response_body_before_decode' in place of removing invalid characters from 1.4.8 as this was stripping out non-english values.

= 1.4.9 (2022-06-22) =
- Enhancement - rewrite some css to make endpoint page a bit nicer and add some more screenshots.

= 1.4.8 (2022-06-07) =
- Enhancement - remove invalid characters from JSON data that was causing a null return.

= 1.4.7 (2022-05-25) =
- Fix - change the redirect after saving to a javascript solution

= 1.4.6 (2022-05-24) =
- Enhancement - add new attribute 'format' within shortcode that allows formatting of a number in the Pro Plugin.

= 1.4.5 (2022-05-18) =
- Fix - error in admin-options file.

= 1.4.4 (2022-05-18) =
- Enhancement - add some better, and clearer help in the admin area. Tidy up some styling.
- Fix - error displaying correct endpoint ID within admin area shortcode and template tag helpers. Happening when multiple endpoints added.

= 1.4.3 (2022-05-15) =
- Fix - body was not being set correctly.

= 1.4.2 (2022-05-13) =
- Enhancement - readme updates and plugin links within plugin page.

= 1.4.1 (2022-05-05) =
- Fix - new tab was not appearing on intitial save on setup page.
- Enhancement - add new filter 'wpgetapi_admin_pages' to allow adding extra tabs.

= 1.4.0 (2022-03-17) =
- Fix - refactor the building of request args. Body was not working correctly.
- Fix - change naming convention from Template Function to Template Tag within admin.
- Enhancement - modify output of debug to show more info and to show whether or not shortcode is used.

= 1.3.4 (2022-03-17) =
- Enhancement - add ability to use headers and body variables in Pro Plugin.

= 1.3.3 (2022-03-03) =
- Enhancement - style the debug output to make it easier to understand and provide links to docs.

= 1.3.2 (2022-02-22) =
- Bug fix - change parameter value fields to textarea. This allows the proper use of JSON strings within these fields.

= 1.3.1 (2022-02-16) =
- Bug fix - error with class property name that was not allowing proper $args to be sent to remote request

= 1.3.0 (2022-02-08) =
- Fix - rewrite headers parameters section

= 1.2.3 (2021-12-14) =
- Enhancement - add ability for query_variables to be used in shortcode with the Pro Plugin

= 1.2.2 (2021-11-09) =
- Enhancement - add args to debug info. Will be useful for endpoint_variables in Pro Plugin

= 1.2.1 (2021-11-05) =
- Bug fixes with encrypting values

= 1.2.0 (2021-11-04) =
- Enhancement - add option to JSON encode body parameters
- Enhancement - allow simple arrays to be sent in body

= 1.1.0 (2021-11-03) =
- Enhancement - reconfigure debug info
- Bug fixes

= 1.0.2 (2021-11-02) =
- Bug fixes

= 1.0.1 (2021-11-02) =
- Bug fixes

= 1.0.0 (2021-10-27) =
- Initial Release

== Upgrade Notice ==
* 2.2.7:  Various fixes. See the changelog for full details. A recommended update for all.