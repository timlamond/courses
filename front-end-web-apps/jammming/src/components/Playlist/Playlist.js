//import react
import React from 'react';
//import associated css
import './Playlist.css';
//import TrackList component
import TrackList from '../TrackList/TrackList';

//define Playlist component
class Playlist extends React.Component {
  constructor(props){
    super(props);
  }

  render(){
    return(
      <div className="Playlist">
        <input defaultValue='New Playlist' />
        <TrackList />
        <a className="Playlist-save">SAVE TO SPOTIFY</a>
      </div>
    );
  }
}

//export the component
export default Playlist;
