# Functions: 
- IoT hardware system visit by specific IP with "PUT" request format, updates two values “input” and “output”.
- Users visit by ip directly to get the newest shokudo data.

# Example:
- Assume that the total number of seats is 300.
- IoT hardware system sends data by “PUT” request: "18.183.102.1/?input=250&output=0" and "18.183.102.1/?input=0&output=200" these data will be stored on server.
- After that, users visit page by: "54.150.99.88", the “混雑率” becomes 17%.