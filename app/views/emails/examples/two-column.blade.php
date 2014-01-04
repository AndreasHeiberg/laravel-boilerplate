@extends('emails.layouts.main')

@section('title')
Laravel PHP Framework
@stop

@section('main')
	<h1 style="font-weight: bold; font-size: 36px; line-height: 1.1; color: #000; margin: 0;">
		Quick Two Columns to Rows Demo
	</h1>

	<br>

	<table border="0" cellpadding="0" cellspacing="0" class="columns-container">
		<tr>
			<td class="force-col" style="padding-right: 20px;" valign="top">

				<!-- ### COLUMN 1 ### -->
				<table border="0" cellspacing="0" cellpadding="0" width="260" align="left" class="col-2">
					<tr>
						<td align="left" valign="top" style="font-size:13px; line-height: 20px; font-family: Arial, sans-serif;">
							<img src="http://internations.github.com/antwort/images/grey-175x130.png" alt="Image Caption" border="0" hspace="0" vspace="0" style="vertical-align:top; padding-bottom:12px;" class="col-2-img">
							<br>
							<a href="#" style="color:#2469A0; font-weight:bold">Herman Melville</a><br>
							It's worse than being in the whirled woods, the last day of the year! Who'd go climbing after chestnuts now? But there they go, all cursing, and here I don't.
							<br>
						</td>
					</tr>
				</table>

			</td>
			<td class="force-col"  valign="top">

				<!-- ### COLUMN 2 ### -->
				<table border="0" cellspacing="0" cellpadding="0" width="260" align="right" class="col-2" id="last-col-2">
					<tr>
						<td align="left" valign="top" style="font-size:13px; line-height: 20px; font-family: Arial, sans-serif;">
							<img src="http://internations.github.com/antwort/images/grey-175x130.png" alt="Image Caption" border="0" hspace="0" vspace="0" style="vertical-align:top; padding-bottom:12px;" class="col-2-img">
							<br>
							<a href="#" style="color:#2469A0; font-weight:bold">I am Ishmael</a><br>
							White squalls? white whale, shirr! shirr! Here have I heard all their chat just now, and the white whale—shirr! shirr!—but spoken of once! and&hellip;
							<br>
						</td>
					</tr>
				</table>

			</td>
		</tr>
	</table><!--/ end .columns-container-->

	<br>
	<br>

	<h3 style="font-weight: bold; font-size: 24px; line-height: 1.1; color: #000; margin: 0;border-top: 1px solid #ddd;">
		<br>
		Demo: Two columns to rows
	</h3>

	<br>

	<strong>Adjustments to consider</strong><br><br>
	- Adjust column widths: 175px to 260px<br>
	- Added new &lt;br&gt; before headline (which makes extra gap on mobile. Consider adding table wrapper to image).<br>
	- Adjusted class names for consistency.

	<br><br>

	<em>This is a quick demo! (28 Okt)</em>

	<br><br>
@stop