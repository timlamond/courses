//import React
import React, { Component } from 'react';
//import components associated CSS
import './App.css';
//import SearchBar component
import SearchBar from './components/SearchBar/SearchBar';
//import Search Results component
import SearchResults from './components/SearchResults/SearchResults';
//import Playlist component
import Playlist from './components/Playlist/Playlist';
//import Spotify object
import Spotify from './util/Spotify';

//define App Component
class App extends Component {
  //define constructor object
  constructor(props){
    super(props);

    //define default component state
    this.state = {
      tracks: [],
      playlist: [],
      accessToken: this.parseHash()
    }

    //re-bind context of this to methods as required
    this.searchSpotify = this.searchSpotify.bind(this);
    this.updatePlaylist = this.updatePlaylist.bind(this);
    this.savePlaylist = this.savePlaylist.bind(this);
  }

  //define method to parse hash returned by Spotify
  parseHash(){
    //define array of url parameters from hash
    const urlParams = window.location.hash.replace('#', '').split('&');
    //define accessToken property, set to empty string
    let accessToken = '';
    //check that the urlParams property has a value
    if(urlParams.length){
      //loop through each parameter
      for(let i = 0; i < urlParams.length; ++i){
        //split each parameter into an array
        const param = urlParams[i].split("=");
        //check if the first value in the param array is the access_token key
        if(param[0] === 'access_token'){
          //if it is, set the value of the accessToken property to the params value
          accessToken = param[1];
        }
      }
    }
    //return the accessToken
    return accessToken;
  }

  //define method that will search trigger the Spotify object's search method passing the seach term and access token
  searchSpotify(term, accessToken){
    //trigger the Spotify object search method
    Spotify.search(term, accessToken).then((tracks) => {
      //use it's return value to update App compnents tracks state
      this.setState({
        tracks: tracks
      });
    });
  }

  //define method to update the tracks in the users playlist, passing the track info and the action taken
  updatePlaylist(track, action){
    //define a property for the playlist and set it equal to the Apps playlist state
    const playlist = this.state.playlist;
    //if the user action is to add a track to the playlis
    if(action === "add"){
      //if the track isn't already in the playlist
      if(playlist.indexOf(track) == -1){
        //update the playlist state to include the selected track info
        this.setState(prevState => ({
          playlist: [...prevState.playlist, track]
        }));
      }
    } else {
      //if the user action is to remove a track from the Playlist, update the playlist state to remove the selected track info
      this.setState(prevState => ({
        playlist: prevState.playlist.filter(item => item !== track)
      }));
    }
  }

  //define method that will trigger the Spotify object's method to save the created playlist to Spotify
  //pass the Spotify user id, playlist definition data, user access token, and track information
  savePlaylist(user_id, data, accessToken, tracks){
    //trigger the Spotify object's savePlaylist method
    Spotify.savePlaylist(user_id, data, accessToken, tracks).then(() => {
      //clear the Apps playlist state once the playlist has been saved to Spotify
      this.setState({
        playlist: []
      });
    });
  }

  //render the App Component
  render() {
    return (
      <div id="wrapper">
        <h1>Ja<span className="highlight">mmm</span>ing</h1>
        <div className="App">
          <SearchBar accessToken={this.state.accessToken} authURI={Spotify.authURI} searchSpotify={this.searchSpotify} />
          <div className="App-playlist">
            <SearchResults tracks={this.state.tracks} updatePlaylist={this.updatePlaylist} />
            <Playlist accessToken={this.state.accessToken} tracks={this.state.playlist} user={Spotify.getUserId} savePlaylist={this.savePlaylist} updatePlaylist={this.updatePlaylist} />
          </div>
        </div>
      </div>
    );
  }
}

//export the App component
export default App;
