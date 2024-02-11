

// You will use this API once when the plugin is run for the first time to verify whether this is a confirmed client or not. //

// You will find this token in the user's cookies. The token name is access_token. Then Decode from URL-encoded format
var token = '1|f1VZsEhdgBvoGeswdrIY3p9P0v3X5rICpxUCP3mAd524fd0f';  
var domain = 'https://ziko.ai/';

var myHeaders = new Headers();
myHeaders.append("Accept", "application/vnd.api+json");
myHeaders.append("Content-Type", "application/vnd.api+json");
myHeaders.append("Authorization", "Bearer "+ token );

var formdata = new FormData();

var requestOptions = {
  method: 'POST',
  headers: myHeaders,
  body: formdata,
  redirect: 'follow'
};

fetch( domain + "api/v1/check", requestOptions)
  .then(response => response.text())
  .then(result => console.log(result))
  .catch(error => console.log('error', error));

// Response scenarios
// {
//     "subscription_status": "",                                   \\ describes the subscription state : 'active' or 'canceled'
//     "user_email": "abdullahrefatmo@gmail.com",                   \\ user email
//     "user_name": "Abdullah Refat",                               \\ user name
//     "user_credit": 100,                                          \\ The number of remaining responses for this user, if it reaches zero, please transfer him to the prices page
//     "rules": {
//         "five_star": 0,                                          \\ If it is one(1), do not respond to five-star reviews
//         "four_star": 0,                                          \\ If it is one(1), do not respond to four-star reviews
//         "three_star": 0,                                         \\ If it is one(1), do not respond to three-star reviews
//         "two_star": 0,                                           \\ If it is one(1), do not respond to two-star reviews
//         "one_star": 0                                            \\ If it is one(1), do not respond to one-star reviews
//     }
// }





// In this API, you will find the basic information that you will need in every process, and you will also send data through it, and then you will receive the response. //

var review_client_name = '';
var avatar = '';
var date = '';
var review = '';
var stars = 5;


var myHeaders = new Headers();
myHeaders.append("Accept", "application/vnd.api+json");
myHeaders.append("Content-Type", "application/vnd.api+json");
myHeaders.append("Authorization", "Bearer "+ token );

var formdata = new FormData();
formdata.append("name", review_client_name);
formdata.append("avatar", avatar);
formdata.append("date", date);
formdata.append("review", review);
formdata.append("stars", stars);

var requestOptions = {
  method: 'POST',
  headers: myHeaders,
  body: formdata,
  redirect: 'follow'
};

fetch( domain + "api/v1/response", requestOptions)
  .then(response => response.text())
  .then(result => console.log(result))
  .catch(error => console.log('error', error));






// When the automatic mode is turned on or off please notify me through this api //
var auto_response = 0 // 0 or 1

var myHeaders = new Headers();
myHeaders.append("Accept", "application/vnd.api+json");
myHeaders.append("Content-Type", "application/vnd.api+json");
myHeaders.append("Authorization", "Bearer "+ token );
var formdata = new FormData();
formdata.append("auto_response", "0");

var requestOptions = {
  method: 'POST',
  headers: myHeaders,
  body: formdata,
  redirect: 'follow'
};

fetch(domain + "api/v1/auto", requestOptions)
  .then(response => response.text())
  .then(result => console.log(result))
  .catch(error => console.log('error', error));

