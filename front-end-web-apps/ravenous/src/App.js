import React, { Component } from 'react';
import './App.css';
//import BusinessList component (you can leave the .js off the end of the javascript file name, as javascript is assumed ie. this could also be written './components/BusinessList/BusinessLIst.js')
import BusinessList from './components/BusinessList/BusinessList';
import SearchBar from './components/SearchBar/SearchBar';
import Yelp from './util/Yelp';

class App extends Component {

  constructor(props){
    super(props);
    this.state = {
      businesses: []
    };

    this.searchYelp = this.searchYelp.bind(this);
  }

  searchYelp(term, location, sortBy){
    //console.log(`Searching Yelp with ${term}, ${location}, and ${sortBy}`);
    Yelp.search(term, location, sortBy).then((businesses) => {
      this.setState({
        businesses: businesses
      });
    });
  }

  render() {
    return (
      <div className="App">
        <h1>ravenous</h1>
        <SearchBar searchYelp={this.searchYelp} />
        <BusinessList businesses={this.state.businesses} />
      </div>
    );
  }
}

export default App;
