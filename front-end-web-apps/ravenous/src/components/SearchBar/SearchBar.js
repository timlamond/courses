//import react
import React from 'react';
//import the components associated css
import './SearchBar.css';

//define the sort by options
//note: the value of each key matches the exact naming convention of these parameters
//within the Yelp API documentation
const sortByOptions = {
  'Best Match': 'best_match',
  'Highest Rated': 'rating',
  'Most Reviewd': 'review_count'
};

//create the SearchBar component class
class SearchBar extends React.Component {

  constructor(props){
    super(props);

    this.state = {
      term: '',
      location: '',
      sortBy: 'best_match'
    };

    this.handleTermChange = this.handleTermChange.bind(this);
    this.handleLocationChange = this.handleLocationChange.bind(this);
    this.handleSearch = this.handleSearch.bind(this);

    //we don't need this call in this example, because we are instead binding 'this' as part of the onClick event defined in renderSortByOptions
    //this.handleSortByChange = this.handleSortByChange.bind(this);
  }

  renderSortByOptions(){
    return Object.keys(sortByOptions).map(sortByOption => {
      let sortByOptionValue = sortByOptions[sortByOption];
      return (
          <li
            key={sortByOptionValue}
            className={this.getSortByClass(sortByOptionValue)}
            onClick={this.handleSortByChange.bind(this, sortByOptionValue)}>{sortByOption}</li>
      );
      //onClick={this.handleSortByChange.bind(this, sortByOptionValue)} - by calling .bind here, we are first binding 'this' back to handleSortByChange (making it so we don't need to call bind it in the construtor), and then setting the first argument of the handleSortByChange method call to sortByOptionValue
    });
  }

  getSortByClass(sortByOption){
    return (this.state.sortBy === sortByOption) ? 'active' : '';
  }

  handleSortByChange(sortByOption){
    this.setState({
      sortBy: sortByOption
    });
  }

  handleTermChange(event){
    this.setState({
      term: event.target.value
    });
  }

  handleLocationChange(event){
    this.setState({
      location: event.target.value
    });
  }

  handleSearch(event){
    this.props.searchYelp(this.state.term, this.state.location, this.state.sortBy);
    event.preventDefault();
  }

  render() {
    return (
      <div className="SearchBar">
        <div className="SearchBar-sort-options">
          <ul>
            {this.renderSortByOptions()}
          </ul>
        </div>
        <div className="SearchBar-fields">
          <input placeholder="Search Businesses" onChange={this.handleTermChange} />
          <input placeholder="Where?" onChange={this.handleLocationChange} />
        </div>
        <div className="SearchBar-submit" onClick={this.handleSearch}>
          <a>Let's Go</a>
        </div>
      </div>
    );
  }
};

//export the SearchBar component
export default SearchBar;
