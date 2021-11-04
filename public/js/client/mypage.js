var currentTime = $("#currentTime").val();
var joinEvent = $("#joinEvent").val();
var threeMonth = $("#threeMonth").val();
var sixMonth = $("#sixMonth").val();

if (joinEvent != '1970-01-01') {
    $('#oneMonths').removeClass('hide-button');
}

if (currentTime > threeMonth && joinEvent != '1970-01-01') {
    $('#twoMonths').removeClass('hide-button');
}

if (currentTime > sixMonth && joinEvent != '1970-01-01') {
    $('#threeMonths').removeClass('hide-button');
}



var player1;
var player2;
var player3;
function onYouTubePlayerAPIReady() {
    player1 = new YT.Player('video1', {
      height: '200',
      width: '400',
      videoId: 'f_iX6nvFtxw',
      events: {
        // 'onReady': onPlayerReady,
        'onStateChange': onPlayerStateChange
      }
    });
    player2 = new YT.Player('video2', {
        height: '200',
        width: '400',
        videoId: 'fIURebAzgIQ',
        events: {
          'onStateChange': onPlayerStateChange
        }
      });
      player3 = new YT.Player('video3', {
        height: '200',
        width: '400',
        videoId: 'P6UWRF2bZMs',
        events: {
          'onStateChange': onPlayerStateChange
        }
      });
}
function onPlayerReady(event) {
    event.target.playVideo();
}
function onPlayerStateChange(event) {        
  if(event.data === 0) {            
      alert('done');
  }
}

