@extends('layouts.app')

@section('title', 'Home')

@section('pre-content')
    <div class="embed-container">
        <iframe src="https://player.vimeo.com/video/243012636" frameborder="0"></iframe>
    </div>
@endsection

@section('content')
	<div class="rotating-quotes">
		<p class="quote">
			"Bland's take on race and culture in America is still ahead of its time."
		</p>
		<p class="author">
			&ndash;Damon Lock, <i>Stop Smiling</i>
		</p>
	</div>
    <div>
        <i>The Cry of Jazz</i> is the only film composer and musician Ed Bland ever helmed. It fused street grit and ivory tower intellect into a thirty-four minute celluloid whirlwind unlike anything before or since, all the while scored by a then unknown Sun Ra &amp; his Arkestra. Deemed radical, alarmist, and amateurish by many upon its initial release, this black and white gem was eventually considered worthy enough by the Library of Congress for preservation in the United States National Film Registry in 2010.
    </div>
@endsection

@section('scripts')
    @parent
@endsection
