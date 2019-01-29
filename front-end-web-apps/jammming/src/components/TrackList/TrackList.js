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
    return (
      <div className="TrackList">
        <Track />
      </div>
    );
  }
}

//export component
export default TrackList;
