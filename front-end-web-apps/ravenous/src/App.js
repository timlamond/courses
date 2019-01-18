import React, { Component } from 'react';
import './App.css';
//import BusinessList component (you can leave the .js off the end of the javascript file name, as javascript is assumed ie. this could also be written './components/BusinessList/BusinessLIst.js')
import BusinessList from './components/BusinessList/BusinessList';
import SearchBar from './components/SearchBar/SearchBar';

class App extends Component {
  render() {
    return (
      <div className="App">
        <h1>ravenous</h1>
        <SearchBar />
        <BusinessList />
      </div>
    );
  }
}

export default App;
