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

  render (){
    return (
      <div className="SearchResults">
        <h2>Results</h2>
        <TrackList />
      </div>
    );
  }
}

//export components
export default SearchResults;
