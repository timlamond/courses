//import React
import React from 'react';
//import associated css
import './Track.css';

//define Track component
class Track extends React.Component {
  constructor(props){
    super(props);
  }

  render(){
    return(
      <div className="Track">
        <div className="Track-information">
          <h3>Track Name</h3>
          <p>Artist | Album</p>
        </div>
        <a className="Track-action">+</a>
      </div>
    );
  }
}

//export component
export default Track;
