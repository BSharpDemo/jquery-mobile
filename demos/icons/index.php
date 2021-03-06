<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Icons - jQuery Mobile Demos</title>
	<link rel="shortcut icon" href="../favicon.ico">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../../css/themes/default/jquery.mobile.css">
	<link rel="stylesheet" href="../_assets/css/jqm-demos.css">
	<script src="../../js/jquery.js"></script>
	<script src="../_assets/js/"></script>
	<script src="../../js/"></script>
</head>
<body>
<div data-role="page" class="jqm-demos" data-quicklinks="true">

	<div data-role="header" class="jqm-header">
		<h2><a href="../" title="jQuery Mobile Demos home"><img src="../_assets/img/jquery-logo.png" alt="jQuery Mobile"></a></h2>
		<p>Demos <span class="jqm-version"></span></p>
		<a href="#" class="jqm-navmenu-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-bars ui-nodisc-icon ui-alt-icon ui-btn-left" role="button">Menu</a>
		<a href="#" class="jqm-search-link ui-btn ui-btn-icon-notext ui-corner-all ui-icon-search ui-nodisc-icon ui-alt-icon ui-shadow ui-btn-right" role="button">Search</a>
	</div><!-- /header -->

	<div data-role="content" class="jqm-content">

        <h1>Icons</h1>

        <p>A set of built-in icons in jQuery Mobile can be applied to buttons, collapsibles, lists and more.
        </p>

        <h2>Icon set</h2>

        <p>The following <code> data-icon</code> attributes can be referenced to create the icons shown below:</p>

        <div data-demo-html="true">
            <p><strong>Bars</strong> - data-icon="bars"</p>
            <a href="index.html" role="button" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-bars">My button</a>
            <p><strong>Edit</strong> - data-icon="edit"</p>
            <a href="index.html" role="button" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-edit">My button</a>
            <p><strong>Left arrow</strong> - data-icon="arrow-l"</p>
            <a href="index.html" role="button" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-arrow-l">My button</a>
            <p><strong>Right arrow</strong> - data-icon="arrow-r"</p>
            <a href="index.html" role="button" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-arrow-r">My button</a>
            <p><strong>Up arrow</strong> - data-icon="arrow-u"</p>
            <a href="index.html" role="button" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-arrow-u">My button</a>
            <p><strong>Down arrow</strong> - data-icon="arrow-d"</p>
            <a href="index.html" role="button" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-arrow-d">My button</a>
            <p><strong>Delete</strong> - data-icon="delete"</p>
            <a href="index.html" role="button" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-delete">My button</a>
            <p><strong>Plus</strong> - data-icon="plus"</p>
            <a href="index.html" role="button" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-plus">My button</a>
            <p><strong>Minus</strong> - data-icon="minus"</p>
            <a href="index.html" role="button" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-minus">My button</a>
            <p><strong>Check</strong> - data-icon="check"</p>
            <a href="index.html" role="button" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-check">My button</a>
            <p><strong>Gear</strong> - data-icon="gear"</p>
            <a href="index.html" role="button" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-gear">My button</a>
            <p><strong>Refresh</strong> - data-icon="refresh"</p>
            <a href="index.html" role="button" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-refresh">My button</a>
            <p><strong>Forward</strong> - data-icon="forward"</p>
            <a href="index.html" role="button" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-forward">My button</a>
            <p><strong>Back</strong> - data-icon="back"</p>
            <a href="index.html" role="button" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-back">My button</a>
            <p><strong>Grid</strong> - data-icon="grid"</p>
            <a href="index.html" role="button" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-grid">My button</a>
            <p><strong>Star</strong> - data-icon="star"</p>
            <a href="index.html" role="button" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-star">My button</a>
            <p><strong>Alert</strong> - data-icon="alert"</p>
            <a href="index.html" role="button" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-alert">My button</a>
            <p><strong>Info</strong> - data-icon="info"</p>
            <a href="index.html" role="button" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-info">My button</a>
            <p><strong>Home</strong> - data-icon="home"</p>
            <a href="index.html" role="button" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-home">My button</a>
            <p><strong>Search</strong> - data-icon="search"</p>
            <a href="index.html" role="button" class="ui-btn ui-shadow ui-corner-all ui-btn-icon-left ui-icon-search">My button</a>
        </div><!--/demo-html -->

		<h2>Icon positioning</h2>

		<p>By default, all icons in buttons are placed to the left of the button text. This default may be overridden using the <code> data-iconpos</code> attribute to set the icon to the right, above (top) or below (bottom) the text. </p>

		<div data-demo-html="true">
			<a href="index.html" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-arrow-l ui-btn-icon-left">Left</a>
			<a href="index.html" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-arrow-r ui-btn-icon-right">Right</a>
			<a href="index.html" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-arrow-u ui-btn-icon-top">Top</a>
			<a href="index.html" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-arrow-d ui-btn-icon-bottom">Bottom</a>
		</div><!--/demo-html -->

		<h2>Icon-only positioning</h2>

		<p>You can also create an icon-only button, by setting the <code> data-iconpos</code> attribute to <code>notext</code>. The button plugin will hide the text on-screen, but add it as a <code>title</code> attribute on the link to provide context for screen readers and devices that support tooltips.</p>

        <div data-demo-html="true">
            <a href="index.html" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-delete ui-btn-icon-notext">Delete</a>
        </div><!--/demo-html -->

        <h2>Removing the disc and shadow</h2>

        <p>There is dark semi-opaque disc behind each icon to ensure good contrast when placed on any background color. If you prefer to not have this disc, it can be removed by adding the class <code>ui-nodisc-icon</code> to the element or its container. Set <code>data-iconshadow="false"</code> to disable the icon shadow. <strong>Note: data-iconshadow is deprecated as of jQuery Mobile 1.4.0 and will be removed in 1.5.0.</strong><p>

        <div data-demo-html="true" data-demo-css="#icon-bg-demo">
            <a href="index.html" role="button" class="ui-shadow ui-nodisc-icon ui-btn ui-corner-all ui-btn-b ui-btn-icon-arrow-r ui-btn-icon-notext ui-btn-inline">No disc or shadow</a>
			<a href="index.html" role="button" class="ui-nodisc-icon ui-shadow ui-btn ui-corner-all ui-btn-b ui-icon-arrow-r ui-btn-icon-notext ui-btn-inline">No disc</a>
			<a href="index.html" role="button" class="ui-btn ui-shadow ui-corner-all ui-btn-b ui-icon-arrow-r ui-btn-icon-notext ui-btn-inline">Standard</a>

        </div><!--/demo-html -->

		<p>Example of the class being applied to a wrapper.</p>
		<div data-demo-html="true">
		<div class="ui-nodisc-icon"><!-- Class added to the wrapper -->
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-bars ui-btn-icon-notext ui-btn-b ui-btn-inline">Bars</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-edit ui-btn-icon-notext ui-btn-b ui-btn-inline">Edit</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-arrow-l ui-btn-icon-notext ui-btn-b ui-btn-inline">Arrow left</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-arrow-r ui-btn-icon-notext ui-btn-b ui-btn-inline">Arrow right</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-arrow-u ui-btn-icon-notext ui-btn-b ui-btn-inline">Arrow up</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-arrow-d ui-btn-icon-notext ui-btn-b ui-btn-inline">Arrow down</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-delete ui-btn-icon-notext ui-btn-b ui-btn-inline">Delete</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-plus ui-btn-icon-notext ui-btn-b ui-btn-inline">Plus</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-minus ui-btn-icon-notext ui-btn-b ui-btn-inline">Minus</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-check ui-btn-icon-notext ui-btn-b ui-btn-inline">Check</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-gear ui-btn-icon-notext ui-btn-b ui-btn-inline">Gear</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-refresh ui-btn-icon-notext ui-btn-b ui-btn-inline">Refresh</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-forward ui-btn-icon-notext ui-btn-b ui-btn-inline">Forward</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-back ui-btn-icon-notext ui-btn-b ui-btn-inline">Back</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-grid ui-btn-icon-notext ui-btn-b ui-btn-inline">Grid</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-alert ui-btn-icon-notext ui-btn-b ui-btn-inline">Alert</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-info ui-btn-icon-notext ui-btn-b ui-btn-inline">Info</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-home ui-btn-icon-notext ui-btn-b ui-btn-inline">Home</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-search ui-btn-icon-notext ui-btn-b ui-btn-inline">Search</a>
		</div>
		</div><!--/demo-html -->

        <h2>Black vs. white icon sets</h2>

        <p>The white vs. black icon sprite is set at the theme level but you can override which is used by adding the <code>ui-alt-icon</code> class to the element or its container. This also changes the color that is used for the discs.<p>

        <div data-demo-html="true">
            <a href="index.html" role="button" class="ui-btn ui-shadow ui-alt-icon ui-corner-all ui-icon-home ui-btn-icon-notext ui-btn-inline">Home - Black icons, no disc</a>
            <a href="index.html" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-home ui-btn-icon-notext ui-btn-inline">Home - Standard</a>
        </div><!--/demo-html -->

		<p>Example of the class being applied to a wrapper.</p>

		<div data-demo-html="true" class="ui-alt-icon">
		<div class="ui-alt-icon"><!-- Class added to the wrapper -->
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-bars ui-btn-icon-notext ui-btn-inline">Bars</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-edit ui-btn-icon-notext ui-btn-inline">Edit</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-arrow-l ui-btn-icon-notext ui-btn-inline">Arrow left</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-arrow-r ui-btn-icon-notext ui-btn-inline">Arrow right</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-arrow-u ui-btn-icon-notext ui-btn-inline">Arrow up</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-arrow-d ui-btn-icon-notext ui-btn-inline">Arrow down</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-delete ui-btn-icon-notext ui-btn-inline">Delete</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-plus ui-btn-icon-notext ui-btn-inline">Plus</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-minus ui-btn-icon-notext ui-btn-inline">Minus</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-check ui-btn-icon-notext ui-btn-inline">Check</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-gear ui-btn-icon-notext ui-btn-inline">Gear</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-refresh ui-btn-icon-notext ui-btn-inline">Refresh</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-forward ui-btn-icon-notext ui-btn-inline">Forward</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-back ui-btn-icon-notext ui-btn-inline">Back</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-grid ui-btn-icon-notext ui-btn-inline">Grid</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-alert ui-btn-icon-notext ui-btn-inline">Alert</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-info ui-btn-icon-notext ui-btn-inline">Info</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-home ui-btn-icon-notext ui-btn-inline">Home</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-search ui-btn-icon-notext ui-btn-inline">Search</a>
		</div>
		</div><!--/demo-html -->

		<p>Example of the class applied to the <code>UL</code> or <code>OL</code> to change to the black icons for each list item.</p>
		<div data-demo-html="true">
			<ul data-role="listview" data-inset="true" class="ui-alt-icon">
				<li><a href="#">Acura</a></li>
				<li><a href="#">Audi</a></li>
				<li><a href="#">BMW</a></li>
				<li><a href="#">Cadillac</a></li>
				<li><a href="#">Ferrari</a></li>
			</ul>
		</div><!--/demo-html -->

		<p>Example of the class being applied to a collapsible.</p>

		<div data-demo-html="true">
            <div data-role="collapsible" class="ui-alt-icon" data-collapsed-icon="arrow-r" data-expanded-icon="arrow-d">
                <h4>Heading</h4>
                <p>I'm the collapsible content. By default I'm closed, but you can click the header to open me.</p>
            </div>
        </div><!--/demo-html -->

        <h2>Custom Icons</h2>

        <p>To use custom icons, specify a <code>data-icon</code> value that has a unique name like <code>myapp-email</code> and the button plugin will generate a class by prefixing <code>ui-icon-</code> to the <code> data-icon</code> value and apply it to the button: <code>ui-icon-myapp-email</code>.</p>

        <p>You can then write a CSS rule in your stylesheet that targets the <code>ui-icon-myapp-email</code> class to specify the icon background source. To maintain visual consistency with the rest of the icons, create a white icon 18x18 pixels saved as a PNG-8 with alpha transparency.</p>

        <p>In this example, we're just pointing to a standalone icon image, but you could just as easily use an icon sprite and specify the positioning instead, just like the icon sprite we use in the framework.</p>

<pre><code>
.ui-btn.ui-icon-myapp-email {
	background-image: url("app-icon-email.png");
}
</code></pre>

		<p>This will create the standard resolution icon, but many devices now have very high resolution displays, like the retina display on the iPhone 4. To add a HD icon, create an icon that is 36x36 pixels (exactly double the 18 pixel size), and add second a rule that uses the <code>-webkit-min-device-pixel-ratio: 2</code> media query to target a rule only to high resolution displays. Specify the background image for the HD icon file and set the background size to 18x18 pixels which will fit the 36 pixel icon into the same 18 pixel space. The media query block can wrap multiple icon rules:</p>

<pre><code>
@media only screen and (-webkit-min-device-pixel-ratio: 2) {
	.ui-btn.ui-icon-myapp-email {
		background-image: url("app-icon-email-highres.png");
		background-size: 18px 18px;
	}
	...more HD icon rules go here...
}
</code></pre>

		<h2>Icons and themes</h2>

		<p>The semi-transparent black circle behind the white icon ensures good contrast on any background color so it works well with the jQuery Mobile theming system. Here are examples of the same icons sitting on top of a range of different color swatches with <a href="buttons-themes.html">themed buttons</a>.</p>

		<!-- A themed -->
		<p><strong>Swatch "a"</strong> themed buttons</p>

		<div data-demo-html="true">
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-bars ui-btn-icon-notext ui-btn-a ui-btn-inline">Bars</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-edit ui-btn-icon-notext ui-btn-a ui-btn-inline">Edit</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-arrow-l ui-btn-icon-notext ui-btn-a ui-btn-inline">Arrow left</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-arrow-r ui-btn-icon-notext ui-btn-a ui-btn-inline">Arrow right</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-arrow-u ui-btn-icon-notext ui-btn-a ui-btn-inline">Arrow up</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-arrow-d ui-btn-icon-notext ui-btn-a ui-btn-inline">Arrow down</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-delete ui-btn-icon-notext ui-btn-a ui-btn-inline">Delete</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-plus ui-btn-icon-notext ui-btn-a ui-btn-inline">Plus</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-minus ui-btn-icon-notext ui-btn-a ui-btn-inline">Minus</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-check ui-btn-icon-notext ui-btn-a ui-btn-inline">Check</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-gear ui-btn-icon-notext ui-btn-a ui-btn-inline">Gear</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-refresh ui-btn-icon-notext ui-btn-a ui-btn-inline">Refresh</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-forward ui-btn-icon-notext ui-btn-a ui-btn-inline">Forward</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-back ui-btn-icon-notext ui-btn-a ui-btn-inline">Back</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-grid ui-btn-icon-notext ui-btn-a ui-btn-inline">Grid</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-alert ui-btn-icon-notext ui-btn-a ui-btn-inline">Alert</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-info ui-btn-icon-notext ui-btn-a ui-btn-inline">Info</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-home ui-btn-icon-notext ui-btn-a ui-btn-inline">Home</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-search ui-btn-icon-notext ui-btn-a ui-btn-inline">Search</a>
		</div><!--/demo-html -->

		<!-- B themed -->
		<p><strong>Swatch "b"</strong> themed buttons</p>

		<div data-demo-html="true">
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-bars ui-btn-icon-notext ui-btn-b ui-btn-inline">Bars</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-edit ui-btn-icon-notext ui-btn-b ui-btn-inline">Edit</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-arrow-l ui-btn-icon-notext ui-btn-b ui-btn-inline">Arrow left</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-arrow-r ui-btn-icon-notext ui-btn-b ui-btn-inline">Arrow right</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-arrow-u ui-btn-icon-notext ui-btn-b ui-btn-inline">Arrow up</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-arrow-d ui-btn-icon-notext ui-btn-b ui-btn-inline">Arrow down</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-delete ui-btn-icon-notext ui-btn-b ui-btn-inline">Delete</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-plus ui-btn-icon-notext ui-btn-b ui-btn-inline">Plus</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-minus ui-btn-icon-notext ui-btn-b ui-btn-inline">Minus</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-check ui-btn-icon-notext ui-btn-b ui-btn-inline">Check</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-gear ui-btn-icon-notext ui-btn-b ui-btn-inline">Gear</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-refresh ui-btn-icon-notext ui-btn-b ui-btn-inline">Refresh</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-forward ui-btn-icon-notext ui-btn-b ui-btn-inline">Forward</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-back ui-btn-icon-notext ui-btn-b ui-btn-inline">Back</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-grid ui-btn-icon-notext ui-btn-b ui-btn-inline">Grid</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-alert ui-btn-icon-notext ui-btn-b ui-btn-inline">Alert</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-info ui-btn-icon-notext ui-btn-b ui-btn-inline">Info</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-home ui-btn-icon-notext ui-btn-b ui-btn-inline">Home</a>
			<a href="#" role="button" class="ui-btn ui-shadow ui-corner-all ui-icon-search ui-btn-icon-notext ui-btn-b ui-btn-inline">Search</a>
		</div><!--/demo-html -->

	</div><!-- /content -->

	<div data-role="footer" data-position="fixed" data-tap-toggle="false" class="jqm-footer">
		<p>jQuery Mobile Demos version <span class="jqm-version"></span></p>
		<p>Copyright 2013 The jQuery Foundation</p>
	</div><!-- /footer -->

<?php include( '../jqm-panels.php' ); ?>

</div><!-- /page -->
</body>
</html>
