//import React
import React from 'react';
//import associated css
import './TrackList.css';
//import Track component
import Track from '../Track/Track';

//define TrackList component
class TrackList extends React.Component {
  //define the constructor object
  constructor(props){
    super(props);
  }

  //render the TrackList
  render() {
    //if the App component has passed track information, render a listing of the tracks
    if(this.props.tracks){
      //define a property to determine if the track in the playlist is being rendered in the playlist
      const addedToPlaylist = (this.props.savedToPlaylist) ? true : false;
      return (
        <div className="TrackList">
          {this.props.tracks.map((track) => {
            return <Track track={track} key={track.id} updatePlaylist={this.props.updatePlaylist} addedToPlaylist={addedToPlaylist} />
          })}
        </div>
      );
    } else{
      //otherwise, render an empty track list element
      return (
        <div className="TrackList"></div>
      )
    }
  }
}

//export TrackList component
export default TrackList;
