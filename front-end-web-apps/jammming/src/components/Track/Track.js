//import React
import React from 'react';
//import associated css
import './Track.css';

//define Track component
class Track extends React.Component {
  constructor(props){
    super(props);

    // this.state = {
    //   addedToPlaylist: this.props.addedToPlaylist
    // }

    this.handleClick = this.handleClick.bind(this);
  }

  handleClick(event){
    console.log('props', this.props);
    //console.log('initState', this.state);
    if(!this.props.addedToPlaylist){
      this.props.updatePlaylist(this.props.track, "add");
      // this.setState({
      //   addedToPlaylist: true
      // }, () => {
      //   console.log('setState', this.state);
      // });

    } else {
      this.props.updatePlaylist(this.props.track, "remove");
      // this.setState({
      //   addedToPlaylist: false
      // }, () => {
      //   console.log('setState', this.state);
      // });
    }
    event.preventDefault();
  }

  renderTrackIcon(){
    if(this.props.addedToPlaylist){
      return (
          <a className="Track-action" onClick={this.handleClick}>-</a>
      );
    } else {
      return(
          <a className="Track-action" onClick={this.handleClick}>+</a>
      )
    }
  }

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

//export component
export default Track;
