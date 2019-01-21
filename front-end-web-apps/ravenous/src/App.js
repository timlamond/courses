import React, { Component } from 'react';
import './App.css';
//import BusinessList component (you can leave the .js off the end of the javascript file name, as javascript is assumed ie. this could also be written './components/BusinessList/BusinessLIst.js')
import BusinessList from './components/BusinessList/BusinessList';
import SearchBar from './components/SearchBar/SearchBar';

//hard code a single Business listing - to be made dynamic later
const business = {
  imageSrc: 'https://s3.amazonaws.com/codecademy-content/programs/react/ravenous/pizza.jpg',
  name: 'MarginOtto Pizzeria',
  address: '1010 Paddington Way',
  city: 'Flavortown',
  state: 'ON',
  zipCode: '10101',
  category: 'Italian',
  rating: 4.5,
  reviewCount: 90
};

const businesses = [
  business,
  business,
  business,
  business,
  business,
  business
];

class App extends Component {

  searchYelp(term, location, sortBy){
    console.log(`Searching Yelp with ${term}, ${location}, and ${sortBy}`);
  }

  render() {
    return (
      <div className="App">
        <h1>ravenous</h1>
        <SearchBar searchYelp={this.searchYelp} />
        <BusinessList businesses={businesses} />
      </div>
    );
  }
}

export default App;
