//import react
import React from 'react';
//import associated css
import './Playlist.css';
//import TrackList component
import TrackList from '../TrackList/TrackList';

//define Playlist component
class Playlist extends React.Component {
  //define constructor object
  constructor(props){
    super(props);

    //define the default component state
    this.state = {
      userId: ''
    }

    //re-bind context of this to methods as required
    this.handleSaveClick = this.handleSaveClick.bind(this);
    this.handleSavePlaylist = this.handleSavePlaylist.bind(this);
  }

  //define method to handle clicks of the SAVE TO SPOTIFY button
  handleSaveClick(event){
    // define a property to hold parent App components access token value
    const accessToken = this.props.accessToken;
    //trigger Spotify object's getUserId function passed from parent App component
    this.props.user(accessToken).then((user_id) => {
      //use it's return value to update the Playlist components userId sate
      this.setState({
        userId: user_id
      }, () => {
        //once the state has been updated, trigger the Playlist components save playlist method, passing the access token property
        this.handleSavePlaylist(accessToken);
      });
    });
    //prevent default link behaviour
    event.preventDefault();
  }

  //define method to trigger the Spotify object's save playlist method
  handleSavePlaylist(accessToken){
    //define a data object to hold information about the playlist to be saved
    const data = {
        name: document.getElementById("playlistName").value
    };
    //trigger the Spotify object's savePlaylist method, passing the Playlist userId state, the playlist data object, the access token property, and the App Components playlist state info
    this.props.savePlaylist(this.state.userId, data, accessToken, this.props.tracks);
  }

  //render the playlist
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

//export the Playlist component
export default Playlist;
