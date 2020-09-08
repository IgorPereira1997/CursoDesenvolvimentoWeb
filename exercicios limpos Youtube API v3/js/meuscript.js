//var nomeCanal = 'backtotriangle';
//var nomeCanal = 'CleverTechieTube';
var nomeCanal = 'oloopinfinito';
//var nomeCanal = 'AdrenalineBr';
var upload_id;

$(document).ready(function() {
    $.get("https://www.googleapis.com/youtube/v3/channels", {
            part: 'contentDetails',
            forUsername: nomeCanal,
            key: '' //your youtube key here
            },
            function(data) {
                upload_id = data.items[0].contentDetails.relatedPlaylists.uploads;
                pegarVideos(upload_id);
            }
    )
    
    function pegarVideos(id) {
        $.get("https://www.googleapis.com/youtube/v3/playlistItems", {
                    part:'snippet',
                    maxResults: 21,
                    playlistId: id,
                    key: '' //your youtube key here
                    },
            function(data) {
                var imagem;
                var arquivo;
                
                $.each(data.items, function(i, item) {
                    imagem = item.snippet.thumbnails.medium.url;
                    titulo = item.snippet.title;
                    desc = item.snippet.description;
                    videoId = item.snippet.resourceId.videoId;
                    publicado = formatarData(item.snippet.publishedAt);
                    arquivo = '<li class="principal"><div class="foto"><iframe width="320" height="180" src="https://www.youtube.com/embed/' + videoId + '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><div class="legenda"><h5>' + titulo + '</h5><p>' + desc + '</p></div></div></li>';
                    $('div#janela ul').append(arquivo);
                });
            }
        )
    }
    
    function formatarData(data) {
        return data.substr(8,2) + '/' + data.substr(5,2) + "/" + data.substr(0,4);   
    }
});