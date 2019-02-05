//import react
import React from 'react';
//import associated css
import './SearchResults.css';
//import TrackList
import TrackList from '../TrackList/TrackList';

//define the SearchResults component
class SearchResults extends React.Component {
  //define the constructor object
  constructor(props){
    super(props);
  }

  //render the component
  render (){
    return (
      <div className="SearchResults">
        <h2>Results</h2>
        <TrackList tracks={this.props.tracks} updatePlaylist={this.props.updatePlaylist} savedToPlaylist={false} />
      </div>
    );
  }
}

//export SearchResults component
export default SearchResults;
