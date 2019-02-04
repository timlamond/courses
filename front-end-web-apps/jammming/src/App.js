import React, { Component } from 'react';
import './App.css';

import SearchBar from './components/SearchBar/SearchBar';
import SearchResults from './components/SearchResults/SearchResults';
import Playlist from './components/Playlist/Playlist';
// import TrackList from './components/TrackList/TrackList';
// import Track from './components/Track/Track';
import Spotify from './util/Spotify';

class App extends Component {

  constructor(props){
    super(props);

    this.state = {
      tracks: [],
      playlist: [],
      accessToken: this.parseHash()
    }

    this.searchSpotify = this.searchSpotify.bind(this);
    this.updatePlaylist = this.updatePlaylist.bind(this);
    this.savePlaylist = this.savePlaylist.bind(this);
  }

  parseHash(){
    //const urlHash = window.location.hash;
    const urlParams = window.location.hash.replace('#', '').split('&');
    //let hasAccessToken = false;
    let accessToken = ''
    if(urlParams.length){
      for(let i = 0; i < urlParams.length; ++i){
        const param = urlParams[i].split("=");
        if(param[0] === 'access_token'){
          //hasAccessToken = true;
          accessToken = param[1];
          //this.setAccessToken(param[1]);
          //console.log('search spotify!')
        }
      }
    }
    //return hasAccessToken;
    return accessToken;
  }

  searchSpotify(term, accessToken){
    console.log(term);
    Spotify.search(term, accessToken).then((tracks) => {
      this.setState({
        tracks: tracks
      });
    });
  }

  updatePlaylist(track, action){
    //console.log('track clicked');
    const playlist = this.state.playlist;
    if(action === "add"){
      console.log('add track', track);
      if(playlist.indexOf(track) == -1){
        this.setState(prevState => ({
          playlist: [...prevState.playlist, track]
        }));
      }
    } else {
      console.log('remove track', track);
      this.setState(prevState => ({
        playlist: prevState.playlist.filter(item => item !== track)
      }));
      // this.setState(prevState => ({
      //   playlist: [...prevState.playlist.slice(0, track), ...prevState.playlist.slice(track+1)]
      // }));
    }
  }

  savePlaylist(user_id, data, accessToken, tracks){
    Spotify.savePlaylist(user_id, data, accessToken, tracks).then(() => {
      this.setState({
        playlist: []
      });
    });
  }

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

export default App;
