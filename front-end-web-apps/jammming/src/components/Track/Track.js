//import React
import React from 'react';
//import associated css
import './Track.css';

//define Track component
class Track extends React.Component {
  //define costrutor object
  constructor(props){
    super(props);

    //re-bind context of this to methods as required
    this.handleClick = this.handleClick.bind(this);
  }

  //define method to handle clicks on the Tracks add/remove button
  handleClick(event){
    //if the Track being clicked is in the SearchResults
    if(!this.props.addedToPlaylist){
      //trigger App component's updatePlaylist method to add the track to the playlist, passing the track info and the action 'add'
      this.props.updatePlaylist(this.props.track, "add");
    } else {
      //otherwise trigger App component's updatePlaylist method to remove the track from the playlist, passing the track info and the action 'remove'
      this.props.updatePlaylist(this.props.track, "remove");
    }
    //prevent the link's default behaviour
    event.preventDefault();
  }

  //define method to render the Track's add/subtract button
  renderTrackIcon(){
    //if the Track is displayed in the playlist
    if(this.props.addedToPlaylist){
      // render the button with a subtract icon
      return (
          <a className="Track-action" onClick={this.handleClick}>-</a>
      );
    } else {
      //otherwise, render the button with an add icon
      return(
          <a className="Track-action" onClick={this.handleClick}>+</a>
      )
    }
  }

  //render the component
  render(){
    return(
      <div className="Track">
        <div className="Track-information">
          <h3>{this.props.track.name}</h3>
          <p>{this.props.track.artist} | {this.props.track.album}</p>
        </div>
        {this.renderTrackIcon()}
      </div>
    );
  }
}

//export the Track component
export default Track;
