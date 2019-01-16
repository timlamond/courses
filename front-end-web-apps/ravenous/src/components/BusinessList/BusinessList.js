//import React
import React from 'react';
//import the components associated CSS file
import './BusinessList.css';
//import the Business component
import Business from '../Business/Business';

//create the Business List component class
class BusinessList extends React.Component {
  render() {
    return (
      <div className="BusinessList">
        <Business />
        <Business />
        <Business />
        <Business />
        <Business />
        <Business />
      </div>
    );
  }
};

//export the BusinessList component
export default BusinessList;