$(document).ready(function(){
    $.get("https://www.googleapis.com/youtube/v3/channels",{
        part: 'contentDetails',
        forUsername: '7minutoz',
        key: 'AIzaSyBuwhi_UIPznuE85bhxjF1PmhkGkerKMEA'}, 
        function(data){
            console.log(data);
        }
    )
});