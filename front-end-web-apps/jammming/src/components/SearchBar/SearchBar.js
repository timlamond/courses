//import react
import React from 'react';
//import associated css
import './SearchBar.css';


//define the SearchBar Component
class SearchBar extends React.Component {

  constructor(props){
    super(props);

    this.state = {
      term: ''
    }

    this.handleTermChange = this.handleTermChange.bind(this);
    this.handleSearch = this.handleSearch.bind(this);
  }

  handleTermChange(event){
    this.setState({
      term: event.target.value
    });
  }

  handleSearch(event){
    //console.log(this.props.accessToken);
    this.props.searchSpotify(this.state.term, this.props.accessToken);
    event.preventDefault();
  }

  renderSearchButton(){
    //console.log("has AccessToken: " + this.props.hasAccessToken);
    let accessTokenLength = this.props.accessToken.length;
    if(accessTokenLength > 0){
      return(
        <a onClick={this.handleSearch}>SEARCH</a>
      );
    } else {
      return(
        <a href={this.props.authURI}>SEARCH</a>
      );
    }
  }

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
