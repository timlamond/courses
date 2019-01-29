const apiKey = "4RbE2hcD2MkLMDJ4agweJn-MSyAi68F3bAGUfTerrs1vZQUkxWgwzd87g2Ap4yw-e3FBZaaXL6tN3k8E28OWA2KZEk6taAQUYF4PWx8uK-xvussyRVC-AD6Y4DRJXHYx";

const Yelp = {
  search(term, location, sortBy){
    const urlToFetch = `https://cors-anywhere.herokuapp.com/https://api.yelp.com/v3/businesses/search?term=${term}&location=${location}&sort_by=${sortBy}`;
    return fetch(urlToFetch, {
      headers: {
        Authorization: `Bearer ${apiKey}`
      }
    }).then(response => {
      return response.json();
    }).then(jsonResponse => {
      if(jsonResponse.businesses){
        return jsonResponse.businesses.map(business => {
          return {
            id: business.id,
            imageSrc: business.image_url,
            name: business.name,
            address: business.location.address1,
            city: business.location.city,
            state: business.location.state,
            zipCode: business.location.zip_code,
            category: business.categories[0].title,
            rating: business.rating,
            reviewCount: business.review_count
          };
        });
      }
    });
  }
};

export default Yelp;
