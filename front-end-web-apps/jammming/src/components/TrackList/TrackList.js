//import React
import React from 'react';
//import associated css
import './TrackList.css';
//import Track component
import Track from '../Track/Track';

//define TrackList component
class TrackList extends React.Component {
  constructor(props){
    super(props);
  }

  render() {
    if(this.props.tracks){
      const addedToPlaylist = (this.props.savedToPlaylist) ? true : false;
      return (
        <div className="TrackList">
          {this.props.tracks.map((track) => {
            return <Track track={track} key={track.id} updatePlaylist={this.props.updatePlaylist} addedToPlaylist={addedToPlaylist} />
          })}
        </div>
      );
    } else{
      return (
        <div className="TrackList"></div>
      )
    }
  }
}

//export component
export default TrackList;
