//import react
import React from 'react';
//import associated css
import './SearchResults.css';
//import TrackList
import TrackList from '../TrackList/TrackList';

//define components
class SearchResults extends React.Component {
  constructor(props){
    super(props);
  }

  // logTracks(tracks){
  //   console.log(tracks);
  // }

  render (){
    //this.logTracks(this.props.tracks);
    return (
      <div className="SearchResults">
        <h2>Results</h2>
        <TrackList tracks={this.props.tracks} updatePlaylist={this.props.updatePlaylist} savedToPlaylist={false} />
      </div>
    );
  }
}

//export components
export default SearchResults;
