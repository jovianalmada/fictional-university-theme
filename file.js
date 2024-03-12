var mkFhir = require("fhir.js");

var client = mkFhir({
  baseUrl: "http://try-fhirplace.hospital-systems.com",
});
//example category type would return what criteria we're allowed to see etc
//based on their variables which they would let us know
client
  //   .search({ type: "Death", query: { deceasedate: "2024" } })
  .search({ type: "Birth", query: { birthdate: "2024" } })
  .then(function (res) {
    var bundle = res.data;
    var count = (bundle.entry && bundle.entry.length) || 0;
    console.log("# Babies born in 2024: ", count);
  })
  .catch(function (res) {
    // Error responses
    if (res.status) {
      console.log("Error", res.status);
    }

    // Errors
    if (res.message) {
      console.log("Error", res.message);
    }
  });
