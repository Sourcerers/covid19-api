var data = null;

// Endpoint for getting latest totals
var endpointUrl = "https://covid-19-data.p.rapidapi.com/totals";

// RapidAPI host
var rapidApiHost = "covid-19-data.p.rapidapi.com";

// YOUR RapidAPI key
var rapidApiKey = "YOUR_RAPIDAPI_KEY";

var xhr = new XMLHttpRequest();
xhr.withCredentials = true;

xhr.addEventListener("readystatechange", function () {
  if (this.readyState === this.DONE) {
    console.log(JSON.parse(this.response));
  }
});

xhr.open("GET", endpointUrl);
xhr.setRequestHeader("x-rapidapi-host", rapidApiHost);
xhr.setRequestHeader("x-rapidapi-key", rapidApiKey);

xhr.send(data);
