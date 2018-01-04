@extends('layouts.app')

@section('title', 'Press &amp; Media')

@section('content')

    <h1>Press &amp; Media</h1>

	<div class="row">
		<div class="col-md-6 col-xs-12">
		    <p>Provided below are some resources that may be helpful in covering <i>The Cry of Jazz</i>, it's reissue, and the restoration process. If you have further questions or require more in-depth assistance, please don't hesitate to <a href="{{ url('contact') }}">contact us</a> and we will be in touch as soon as possible.</p>

			<div class="press">
				<h2>Still Images</h2>
				<p>We have provided two packages of still images for editorial use only. These are high-res, press-ready images which can be scaled for use on the web.</p>
				<a href="" class="btn btn-default" style="width: 100%; margin-top: 8px;">Download Film Stills<span class="subtext">(TK megabytes)</span></a>
				<a href="" class="btn btn-default" style="width: 100%; margin-top: 16px;">Download Restoration Images<span class="subtext">(TK megabytes)</span></a>
			</div>

			<div class="press">
				<h2><i>The Cry of Jazz</i> Logo Package</h2>
				<p>The logo packages provides light and dark variations of the logo, which includes both print and digital versions.</p>
				<a href="" class="btn btn-default" style="width: 100%; margin-top: 8px;">Download Logo Package<span class="subtext">(TK kilobytes)</span></a>
			</div>

			<div class="press">
				<h2><i>The Cry of Jazz</i> Trailer Embed Code</h2>
				<p><i>The Cry of Jazz</i> is hosted on the Vimeo platform. We have made a short trailer available for wide distribution on digital media. Cut and paste the code below to embed the trailer in your page. If you need further assistance, please see the <a href="https://help.vimeo.com/hc/en-us/articles/224969968-Embedding-videos-overview" target="_blank">Vimeo Help page</a>.</p>
				<code>
					&lt;iframe allowFullScreen frameborder="0" height="564" mozallowfullscreen src="https://player.vimeo.com/video/243012636" webkitAllowFullScreen width="640"&gt;&lt;/iframe&gt;
				</code>
			</div>
		</div>
		<div class="col-md-6 col-xs-12 column2">
			<div class="press">
				<h2>Press Releases</h2>
				<p>Below is an archive of all press-release provide by Deep in the Pocket and Music Media Group, Inc. They are provided in the universal PDF format.</p>
				<div class="releases">
					<div class="release">
						<p class="release-title">
							<a href="">Press Release Title Press Release Title Press Release Title</a>
						</p>
						<p class="release-date">
							Released on October 11, 2017
						</p>
					</div>
					<div class="release">
						<p class="release-title">
							<a href="">Press Release Title</a>
						</p>
						<p class="release-date">
							Released on October 11, 2017
						</p>
					</div>
					<div class="release">
						<p class="release-title">
							<a href="">Press Release Title Press Release Title</a>
						</p>
						<p class="release-date">
							Released on October 11, 2017
						</p>
					</div>
				</div>
			</div>	
		</div>
	</div>

@endsection

@section('scripts')
    @parent
@endsection
