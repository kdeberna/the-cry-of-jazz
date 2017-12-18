<template>
    <div>
        <h1>Vimeo Javascript oEmbed Example</h1>
        <div id="embed">Loading video...</div>
    </div>
</template>

<script>
    // This is the URL of the video you want to load
    let videoUrl = 'http://www.vimeo.com/243012636';

    // This is the oEmbed endpoint for Vimeo (we're using JSON)
    let endpoint = 'http://www.vimeo.com/api/oembed.json';

    // Put together the URL
    let url = endpoint + '?url=' + encodeURIComponent(videoUrl) + '&callback=embedVideo';

    function embedVideo(video) {
        document.getElementById('embed').innerHTML = unescape(video.html);
    }

    function init() {
        var js = document.createElement('script');
        js.setAttribute('type', 'text/javascript');
        js.setAttribute('src', url);
        document.getElementsByTagName('head').item(0).appendChild(js);
    }

    // TODO: Move the embedVideo callback into this file, with correct reference, whatever that is

    export default {
        created() {
            init();
        },
        mounted() {
            //
        }
    }
</script>
