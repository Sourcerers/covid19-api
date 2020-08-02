// Endpoint for getting latest totals
const endpointUrl = "https://covid-19-data.p.rapidapi.com/totals";

// RapidAPI host
const rapidApiHost = "covid-19-data.p.rapidapi.com";

// YOUR RapidAPI key
const rapidApiKey = "YOUR_RAPIDAPI_KEY";

const options = {
  headers: {
    "x-rapidapi-host": rapidApiHost,
    "x-rapidapi-key": rapidApiKey,
  },
};

fetch(endpointUrl, options)
  .then((response) => {
    return response.json();
  })
  .then((body) => {
    console.log(body);
  })
  .catch((err) => {
    console.log(err);
  });
