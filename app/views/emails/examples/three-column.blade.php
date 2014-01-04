@extends('emails.layouts.main')

@section('title')
Laravel PHP Framework
@stop

@section('main')
	<h1 style="font-weight: bold; font-size: 36px; line-height: 1.1; color: #000; margin: 0;">
		The world scouts at us whale hunters
	</h1>

	<br>

	<table border="0" cellpadding="0" cellspacing="0" class="columns-container">
		<tr>
			<td class="force-col" style="padding-right: 20px;" valign="top">

				<!-- ### COLUMN 1 ### -->
				<table border="0" cellspacing="0" cellpadding="0" width="175" align="left" class="col-3">
					<tr>
						<td align="left" valign="top" style="font-size:13px; line-height: 20px; font-family: Arial, sans-serif;">
							<img src="http://internations.github.com/antwort/images/grey-175x130.png" alt="Image Caption" border="0" hspace="0" vspace="0" style="vertical-align:top; padding-bottom:12px;" class="col-3-img">
							<a href="#" style="color:#2469A0; font-weight:bold">Herman Melville</a><br>
							It's worse than being in the whirled woods, the last day of the year! Who'd go climbing after chestnuts now? But there they go, all cursing, and here I don't.
							<br>
						</td>
					</tr>
				</table>

			</td>
			<td class="force-col" style="padding-right: 20px;" valign="top">

				<!-- ### COLUMN 2 ### -->
				<table border="0" cellspacing="0" cellpadding="0" width="175" align="left" class="col-3">
					<tr>
						<td align="left" valign="top" style="font-size:13px; line-height: 20px; font-family: Arial, sans-serif;">
							<img src="http://internations.github.com/antwort/images/grey-175x130.png" alt="Image Caption" border="0" hspace="0" vspace="0" style="vertical-align:top; padding-bottom:12px;" class="col-3-img">
							<a href="#" style="color:#2469A0; font-weight:bold">Herman Melville</a><br>
							Fine prospects to 'em; they're on the road to heaven. Hold on hard! Jimmini, what a squall! But those chaps there are worse yet—they are your&hellip;
							<br>
						</td>
					</tr>
				</table>

			</td>
			<td class="force-col"  valign="top">

				<!-- ### COLUMN 3 ### -->
				<table border="0" cellspacing="0" cellpadding="0" width="175" align="right" class="col-3" id="last-col-3">
					<tr>
						<td align="left" valign="top" style="font-size:13px; line-height: 20px; font-family: Arial, sans-serif;">
							<img src="http://internations.github.com/antwort/images/grey-175x130.png" alt="Image Caption" border="0" hspace="0" vspace="0" style="vertical-align:top; padding-bottom:12px;" class="col-3-img">
							<a href="#" style="color:#2469A0; font-weight:bold">I am Ishmael</a><br>
							White squalls? white whale, shirr! shirr! Here have I heard all their chat just now, and the white whale—shirr! shirr!—but spoken of once! and&hellip;
							<br>
						</td>
					</tr>
				</table>

			</td>
		</tr>
	</table><!--/ end .columns-container-->

	</td>
	</tr>
	<tr>
		<td class="container-padding" bgcolor="#ffffff" style="background-color: #ffffff; padding-left: 30px; padding-right: 30px; font-size: 13px; line-height: 20px; font-family: Helvetica, sans-serif; color: #333;" align="left">
			<br>
			<br>

			<h3 style="font-weight: bold; font-size: 24px; line-height: 1.1; color: #000; margin: 0;border-top: 1px solid #ddd;">
				<br>
				How it works
			</h3>

			<br>

			You should view the source code to see how this works. If you're struggling, here's a bit more documentation
			<br><br>

			<em>Markup contains:</em>
			<ul>
				<li>A container table with 3 columns</li>
				<li>Wrapper tables with one cell inside each column</li>
			</ul>

			<em>Manipulating the layout means:</em>
			<ul>
				<li>Forcing container columns to (horizontal) blocks</li>
				<li>Unset paddings and alignment in inner tables</li>
				<li>Float image to the right</li>
			</ul>

			<em>Why do you need inner wrapper tables?</em>
			<ul>
				<li>The last column needs to float to the right edge, via align="right".</li>
				<li>Clears floated images in mobile versions.</li>
			</ul>

			<br>

			<h3 style="font-weight: bold; font-size: 24px; line-height: 1.1; color: #000; margin: 0;">
				Tips
			</h3>

			<br>

			<em>Slightly less than 600px</em><br>
			Your columns and container table probably will add up <em>slightly less</em> than <span style="font-family: Andale Mono, Courier, monospace; color: #666;">600px</span> to work in Outlook. How much less? Only testing, trial and error, and real content will tell you what that magic number is.
			<br><br>

			<div style="border-top: 1px solid #ddd;">
				<br>
				N.B. This copy is simple HTML and probably won't render 100% in an email client as you see it in a browser. It's meant as documentation, <em>not</em> part of the template.
			</div>

			<br>
@stop