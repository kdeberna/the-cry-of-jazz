@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="embed-container">
        <iframe src="https://player.vimeo.com/video/243012636" style="width: 100vw;" frameborder="0"></iframe>
    </div>
    <div>
        The 1959 film, <i>The Cry of Jazz</i>, is the only movie composer and musician Ed Bland ever helmed. It fuses street grit and ivory tower intellect into a thirty-four minute celluloid whirlwind unlike any films before or since, all the while scored by a then unknown Sun Ra &amp; his Arkestra. Deemed radical, alarmist, and amateurish by many upon its initial release, this black and white gem was eventually considered worthy enough by the Library of Congress for preservation in the United States National Film Registry in 2010.
    </div>
@endsection

@section('scripts')
    @parent
@endsection
