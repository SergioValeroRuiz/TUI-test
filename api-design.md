#API Design
This document will define the architecture of two endpoints to set and read city's weather forecasts.

##Endpoint/s to set the forecast for a specific city

In this API we will send trough `PUT` method an array of day objects to the defined URL. 
The Day object is formed of two parameters: 

- `date`
  - Defines the date
  - Formated as `DD-MM-YYYY`
- `weather`
  - Defines the weather conditions
  - String
  
The city that we are storing the day into will be defined by the `id` parameter inside the URL.

**Request:**
```
PUT /api/v3/cities/{id}/forecast
```
**Payload**
```json
[
  {
    "date": "09-12-2021",
    "weather": "Moderate rain"
  },
  {
    "date": "10-12-2021",
    "weather": "Cloudy"
  }
]
```
**Responses**

201 OK
```json
{
  "success": true,
  "errors": []
}
```
400 Bad Request
```json
{
  "success": false,
  "errors": [
    "Incorrect date format: 09/12/2021"
  ]
}
```

##Endpoint/s to read the forecast for a specific city
In this API we will request trough `GET` method a day object to be returned from the defined URL.
The city that we are requesting the data from will be defined by the `id` parameter, and the required date will be defined by the `date` parameter inside the URL.


**Request:**
```
GET /api/v3/cities/{id}/forecast/{date}
```

**Responses**

200 OK
```json
{
  "success": true,
  "errors": [],
  "day": {
    "date": "09-12-2021",
    "weather": "Moderate rain"
  }
}
```
400 Bad Request
```json
{
  "success": false,
  "errors": [
    "Incorrect date format: 09/12/2021"
  ],
  "day": {}
}
```

###Test