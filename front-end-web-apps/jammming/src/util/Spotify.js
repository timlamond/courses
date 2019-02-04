const client_id = "7ef1eda62a094fcb87a8505b971c1cde";
const redirect_url = "http://localhost:3000/callback/";
const scope = "playlist-modify-public";
const limit = 20;

const Spotify = {
  authURI: `https://accounts.spotify.com/authorize?client_id=${client_id}&redirect_uri=${redirect_url}&scope=${scope}&response_type=token&state=123`,

  search(term, accessToken){
    const urlToFetch = `https://cors-anywhere.herokuapp.com/https://api.spotify.com/v1/search?q=${term}&type=artist,album,track&limit=${limit}`;

    return fetch(urlToFetch, {
      headers: {
        Authorization: `Bearer ${accessToken}`
      }
    }).then(response => {
      return response.json();
    }).then(jsonResponse => {
      if(jsonResponse.tracks){
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

  getUserId(accessToken){
    const urlToFetch = `https://cors-anywhere.herokuapp.com/https://api.spotify.com/v1/me`;

    return fetch(urlToFetch, {
      headers: {
          Authorization: `Bearer ${accessToken}`
      }
    }).then(response => {
      return response.json();
    }).then(jsonResponse => {
      if(jsonResponse){
        //console.log(jsonResponse.id);
        return jsonResponse.id
      }
    });
  },

  savePlaylist(user_id, data, accessToken, tracks){
    const urlToFetch = `https://cors-anywhere.herokuapp.com/https://api.spotify.com/v1/users/${user_id}/playlists`;

    //console.log('insave tracks', tracks);
    //the below works, just checking some other values
    return fetch(urlToFetch, {
      method: 'POST',
      headers: {
        Authorization: `Bearer ${accessToken}`,
        "Content-Type": 'application/json'
      },
      body: JSON.stringify(data)
    }).then(response => {
      //console.log(response);
      return response.json();
    }).then(jsonResponse => {
      if(jsonResponse){
        const playlistID = jsonResponse.id;
        this.addTracks(playlistID, accessToken, tracks);
      }
    });
  },

  addTracks(playlistID, accessToken, tracks){
    const urlToFetch = `https://api.spotify.com/v1/playlists/${playlistID}/tracks`;
    const trackURIs = [];
    tracks.forEach(track => {
      trackURIs.push(track.uri);
    });
    //console.log('trackURIs', trackURIs);
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

export default Spotify;
