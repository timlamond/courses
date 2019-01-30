import React, { Component } from 'react';
import './App.css';

import SearchBar from './components/SearchBar/SearchBar';
import SearchResults from './components/SearchResults/SearchResults';
import Playlist from './components/Playlist/Playlist';
import Spotify from './util/Spotify';

class App extends Component {

  constructor(props){
    super(props);

    this.state = {
      tracks: []
    }

    this.searchSpotify = this.searchSpotify.bind(this);
  }

  parseHash(){
    //const urlHash = window.location.hash;
    const urlParams = window.location.hash.replace('#', '').split('&');
    let hasAccessToken = false;
    if(urlParams.length){
      for(let i = 0; i < urlParams.length; ++i){
        const param = urlParams[i].split("=");
        if(param[0] === 'access_token'){
          hasAccessToken = true;
          //access_token = param[1];
          console.log('search spotify!')
        }
      }
    }
    return hasAccessToken;
  }

  searchSpotify(term){
    console.log(term);
  }

  render() {
    return (
      <div id="wrapper">
        <h1>Ja<span className="highlight">mmm</span>ing</h1>
        <div className="App">
          <SearchBar hasAccessToken={this.parseHash()} authURI={Spotify.authURI} searchSpotify={this.searchSpotify} />
          <div className="App-playlist">
            <SearchResults />
            <Playlist />
          </div>
        </div>
      </div>
    );
  }
}

export default App;
