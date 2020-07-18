var currentlyPlaying = [];
var audioElement;


//creating class audio
function Audio(){

	this.currentlyPlaying;
	//property           //html element  //predefined built in audio element
	this.audio = document.createElement('audio');

	this.setTrack = function(track){
		this.currentlyPlaying = track;
		this.audio.src = track.path; 
	}
	this.play = function(){
		this.audio.play();
	}
	this.pause = function(){
		this.audio.pause();
	}
}