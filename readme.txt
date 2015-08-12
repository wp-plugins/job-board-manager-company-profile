=== Job Board Manager - Company Profile ===
	Contributors: pickplugins
	Donate link: http://paratheme.com
	Tags:  Company Profile, Job Board Manager, Job Board, Job, Job Poster, job manager, job, job list, job listing, Job Listings, job lists, job management, job manager,
	Requires at least: 4.1
	Tested up to: 4.2.4
	Stable tag: 1.0.0
	License: GPLv2 or later
	License URI: http://www.gnu.org/licenses/gpl-2.0.html

	Company Profile for Job Board Manager plugin

== Description ==

Display available job from any company and display company information via single page.
and display ajaxj list of predefined compnay list on job editing. 

### Job Board Manager - Company Profile by http://pickplugins.com
* [Live Demo!&raquo;](http://www.pickplugins.com/demo/job-board-manager/company-profile/)
* [Get Job Board Manager &raquo;](https://wordpress.org/plugins/job-board-manager/)


<strong>Company Single page</strong>

If you want to display Company on single page like default post, you need to copy your theme single.php and rename to single-company.php

you need to replace content section by following short-code

`<?php echo do_shortcode('[company_single id="'.get_the_ID().'"]'); ?>`

Also you can display any conpany with static id like this

`[company_single id="1234"]`


== Installation ==

1. Install as regular WordPress plugin.<br />
2. Go your plugin setting via WordPress Dashboard and find "<strong>Job Board Manager</strong>" activate it.<br />




== Screenshots ==

1. screenshot-1
2. screenshot-2
3. screenshot-3
4. screenshot-4
5. screenshot-5


== Changelog ==


	= 1.0.0 =
    * 05/08/2015 Initial release.
