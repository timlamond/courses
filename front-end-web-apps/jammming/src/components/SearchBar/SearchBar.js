//import react
import React from 'react';
//import associated css
import './SearchBar.css';


//define the SearchBar Component
class SearchBar extends React.Component {

  constructor(props){
    super(props);
  }

  render(){
    return (
      <div className="SearchBar">
        <input placeholder="Enter A Song Title" />
        <a>SEARCH</a>
      </div>
    )
  }

};

//export the SearchBar component
export default SearchBar;
