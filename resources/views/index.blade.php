@extends('layouts.app')

@section('title', 'Home')

@section('pre-content')
    <div class="embed-container">
        <iframe src="https://player.vimeo.com/video/243012636" frameborder="0"></iframe>
    </div>
@endsection

@section('content')
	<div class="rotating-quotes">
		<div class="quote">
			<p>
				Scarcely less abrasive now than when it first appeared.
			</p>
			<p class="author">
				J. Hoberman, <i>Village Voice</i>
			</p>
		</div>
		<div class="quote">
			<p>
				The Negro is the only human American.
			</p>
			<p class="author">
					<i>The Cry of Jazz</i>
			</p>
		</div>
		<div class="quote">
			<p>
				One of the most historically significant examples of African-American filmmaking.
			</p>
			<p class="author">
				Seth Watter, WFMU's <i>Beware of the Blog</i>
			</p>
		</div>
		<div class="quote">
			<p>
				Jazz was the Negro's act of transcendence.
			</p>
			<p class="author">
				Edward Bland, <i>Film Culture</i>
			</p>
		</div>
		<div class="quote">
			<p>
				Jazz is the one element of American life where Whites must be humble to Negroes.
			</p>
			<p class="author">
				<i>The Cry of Jazz</i>
			</p>
		</div>
		<div class="quote">
			<p>
				Bland's take on race and culture in America is still ahead of its time.
			</p>
			<p class="author">
				Damon Lock, <i>Stop Smiling</i>
			</p>
		</div>
		<div class="quote">
			<p>
				If White America can accept the Negro as the American hero, White America will have come of age.
			</p>
			<p class="author">
				<i>The Cry of Jazz</i>
			</p>
		</div>
	</div>
    <div>
    	<p><i>The Cry of Jazz</i> is the only film composer and musician Ed Bland ever helmed. It fused street grit and ivory tower intellect into a thirty-four minute celluloid whirlwind unlike anything before or since, all the while scored by a then unknown Sun Ra &amp; his Arkestra. Deemed radical, alarmist, and amateurish by many upon its initial release, this black and white gem was eventually considered worthy enough by the Library of Congress for preservation in the United States National Film Registry in 2010.</p>
		<a href="{{ url('film') }}" class="btn btn-default" style="width: 100%; margin-top: 8px;">Read More</a>
		<a href="{{ url('purchase') }}" class="btn btn-default" style="width: 100%; margin-top: 16px;">Purchase the Film</a>
    </div>
@endsection

@section('scripts')
    @parent
@endsection
