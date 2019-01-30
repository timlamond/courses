const client_id = "7ef1eda62a094fcb87a8505b971c1cde";
const redirect_url = "http://localhost:3000/callback/";
const scope = "playlist-modify-public";

const Spotify = {
  authURI: `https://accounts.spotify.com/authorize?client_id=${client_id}&redirect_uri=${redirect_url}&scope=${scope}&response_type=token&state=123`
}

export default Spotify;
