//define Spotify App client id
const client_id = "7ef1eda62a094fcb87a8505b971c1cde";
//define redirect url to be used after Spotify account authorization is complete
const redirect_url = "http://localhost:3000/callback/";
//define the scope of the Spotify account authorization
const scope = "playlist-modify-public";
//define the max number of results in a Spotify search result set
const limit = 20;

//define the Spotify object
const Spotify = {
  //define the account authorization URI
  authURI: `https://accounts.spotify.com/authorize?client_id=${client_id}&redirect_uri=${redirect_url}&scope=${scope}&response_type=token&state=123`,

  //define method to search Spotify, passing the search term and accessToken
  search(term, accessToken){
    //define the url to fetch results from
    const urlToFetch = `https://cors-anywhere.herokuapp.com/https://api.spotify.com/v1/search?q=${term}&type=artist,album,track&limit=${limit}`;

    //fetch the results
    return fetch(urlToFetch, {
      headers: {
        Authorization: `Bearer ${accessToken}`
      }
    }).then(response => {
      //return the response as json
      return response.json();
    }).then(jsonResponse => {
      //if there are results returned
      if(jsonResponse.tracks){
        //iterate through the results, and define each track object
        return jsonResponse.tracks.items.map(track => {
          return {
            id: track.id,
            name: track.name,
            album: track.album.name,
            artist: track.artists[0].name,
            uri: track.uri
          };
        });
      }
    });
  },

  //define method to get current user's account id
  getUserId(accessToken){
    //define the url to fetch results from
    const urlToFetch = `https://cors-anywhere.herokuapp.com/https://api.spotify.com/v1/me`;

    //fetch the results
    return fetch(urlToFetch, {
      headers: {
          Authorization: `Bearer ${accessToken}`
      }
    }).then(response => {
      //return the results as json
      return response.json();
    }).then(jsonResponse => {
      //if there are results returned
      if(jsonResponse){
        //return the user's id
        return jsonResponse.id
      }
    });
  },

  //define method to save a playlist to a users Spotify account, passing the user's id, playlist definition data, user access token, and track info
  savePlaylist(user_id, data, accessToken, tracks){
    //define the url to fetch results from
    const urlToFetch = `https://cors-anywhere.herokuapp.com/https://api.spotify.com/v1/users/${user_id}/playlists`;

    //fetch results to save the new playlist to Spotify
    return fetch(urlToFetch, {
      method: 'POST',
      headers: {
        Authorization: `Bearer ${accessToken}`,
        "Content-Type": 'application/json'
      },
      body: JSON.stringify(data)
    }).then(response => {
      //return results as json
      return response.json();
    }).then(jsonResponse => {
      //if there are results returned
      if(jsonResponse){
        //define a property to hold the newly created playlist's id
        const playlistID = jsonResponse.id;
        //trigger the Spotify object's addTracks method, passing the playlist's id, user access token, and track info
        this.addTracks(playlistID, accessToken, tracks);
      }
    });
  },

  //define method to save tracks to a newly created playlist
  addTracks(playlistID, accessToken, tracks){
    //define the url to fetch results from
    const urlToFetch = `https://api.spotify.com/v1/playlists/${playlistID}/tracks`;
    //define a property to hold and array of track URIs
    const trackURIs = [];
    //loop through the track info
    tracks.forEach(track => {
      //push the tracks uri property to the trackURIs array
      trackURIs.push(track.uri);
    });

    //fetch the results to save the tracks to the playlist
    return fetch(urlToFetch, {
      method: 'POST',
      headers: {
        Authorization: `Bearer ${accessToken}`,
        "Content-Type": 'application/json'
      },
      body: JSON.stringify(trackURIs)
    }).then(response => {
      return response.json();
    }).then(jsonResponse => {
      return jsonResponse;
    });
  }

}

//expor the Spotify object
export default Spotify;
