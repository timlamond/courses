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

    this.state = {
      userId: ''
    }

    this.handleSaveClick = this.handleSaveClick.bind(this);
    this.handleSavePlaylist = this.handleSavePlaylist.bind(this);
  }

  handleSaveClick(event){
    const accessToken = this.props.accessToken;
    this.props.user(accessToken).then((user_id) => {
      this.setState({
        userId: user_id
      }, () => {
        this.handleSavePlaylist(accessToken);
      });
    });

    event.preventDefault();
  }

  handleSavePlaylist(accessToken){
    const data = {
        name: document.getElementById("playlistName").value
    };
    //console.log('tracks', this.props.tracks);
    this.props.savePlaylist(this.state.userId, data, accessToken, this.props.tracks);
  }

  render(){
    return(
      <div className="Playlist">
        <input id="playlistName" defaultValue='New Playlist' />
        <TrackList tracks={this.props.tracks} updatePlaylist={this.props.updatePlaylist} savedToPlaylist={true} />
        <a className="Playlist-save" onClick={this.handleSaveClick}>SAVE TO SPOTIFY</a>
      </div>
    );
  }
}

//export the component
export default Playlist;
