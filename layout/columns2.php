<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * The two column layout.
 *
 * @package   theme_cosmubo
 * @copyright 2013 Moodle, moodle.org
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Get the HTML for the settings bits.
$html = theme_cosmubo_get_html_for_settings($OUTPUT, $PAGE);

$left = (!right_to_left());  // To know if to add 'pull-right' and 'desktop-first-column' classes in the layout for LTR.
echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body <?php echo $OUTPUT->body_attributes('two-column'); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<header role="banner" class="navbar <?php echo $html->navbarclass ?> moodle-has-index row-fluid">
    <nav role="navigation" class="navbar-inner">
        <ul class="nav">
           <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
           <li class="navbar-text"><?php echo $OUTPUT->login_info() ?></li>
           <?php echo $OUTPUT->blocks('side-pre');?>
	   <a class="brand" href="http://www.univ-brest.fr/" alt="<?php echo format_string($SITE->shortname, true, array('context' => context_course::instance(SITEID)));?>">
		<img src="<?php echo $OUTPUT->pix_url('ubo-brand','theme');?>" height="48px"/>
	   </a>
        </ul>
    </nav>
</header>

<div id="page row">
    <header id="page-header" class="clearfix">
        <?php echo $html->heading; ?>
        <div id="page-navbar" class="clearfix">
            <nav class="breadcrumb-nav"><?php echo $OUTPUT->navbar(); ?></nav>
            <div class="breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></div>
        </div>
        <div id="course-header">
            <?php echo $OUTPUT->course_header(); ?>
        </div>
    </header>

    <div id="page-content" >
        <section id="region-main" class="row-fluid">
            <?php
            echo $OUTPUT->course_content_header();
            echo $OUTPUT->main_content();
            echo $OUTPUT->course_content_footer();
            ?>
        </section>
    </div>

 <footer id="page-footer" class="navbar-fixed-bottom">
        <div id="course-footer"><?php echo $OUTPUT->course_footer(); ?></div>
        <div>
           <p>Serveur de cours
                <a title="Moodle" href="http://moodle.org/"><img src="<?php echo $OUTPUT->pix_url('moodlelogo');?>" alt="moodlelogo"  style="vertical-align:calc(-3px);"/></a>
                maintenu par
                <a href="http://www.univ-brest.fr" title="UBO"><img src="<?php echo $OUTPUT->pix_url('ubo-hor','theme');?>" alt="logo-UBO" style="vertical-align:calc(-15px);"/></a>
           </p>
        </div>
    </footer>

    <?php echo $OUTPUT->standard_end_of_body_html() ?>

</div>
</body>
</html>
