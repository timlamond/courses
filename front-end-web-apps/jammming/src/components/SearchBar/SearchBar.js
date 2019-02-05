//import react
import React from 'react';
//import associated css
import './SearchBar.css';


//define the SearchBar Component
class SearchBar extends React.Component {
  //define constructor object
  constructor(props){
    super(props);

    //define the default component state
    this.state = {
      term: ''
    }

    //re-bind context of this to methods as required
    this.handleTermChange = this.handleTermChange.bind(this);
    this.handleSearch = this.handleSearch.bind(this);
  }

  //define method to handle search term change events
  handleTermChange(event){
    //on change, update the SearchBar's term state
    this.setState({
      term: event.target.value
    });
  }

  //define method to trigger the Spotify object's seach method
  handleSearch(event){
    //trigger the Spotify object's seach method, passing the SearchBar's term state, and the App components access token state value
    this.props.searchSpotify(this.state.term, this.props.accessToken);
    //prevent default link behaviour
    event.preventDefault();
  }

  //define method to determine which version of the search button to render
  renderSearchButton(){
    //define a property to hold the length of the App component's accessToken state value
    let accessTokenLength = this.props.accessToken.length;
    //if an access token has been set
    if(accessTokenLength > 0){
      //render the Search button with a click handler to trigger the handleSearch method
      return(
        <a onClick={this.handleSearch}>SEARCH</a>
      );
    } else {
      //render the Search button with a link to authorize the use of the web app to access the user's spotify account
      return(
        <a href={this.props.authURI}>SEARCH</a>
      );
    }
  }

  //render the component
  render(){
    return (
      <div className="SearchBar">
        <input placeholder="Enter A Song Title" onChange={this.handleTermChange} />
        {this.renderSearchButton()}
      </div>
    );
  }

};

//export the SearchBar component
export default SearchBar;
