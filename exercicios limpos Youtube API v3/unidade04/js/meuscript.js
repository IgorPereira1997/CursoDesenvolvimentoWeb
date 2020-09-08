$(document).ready(function() {
    $.get("https://www.googleapis.com/youtube/v3/videos", {
            part: 'statistics',
            id: '0IA3ZvCkRkQ',
            key: 'AIzaSyBuwhi_UIPznuE85bhxjF1PmhkGkerKMEA'
            },
            function(data) {
                console.log(data);
            }
    )
});