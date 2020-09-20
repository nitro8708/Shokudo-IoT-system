# Functions: 
- IoT hardware system visit by specific ip with request format, updates two values “input” and “output”.
- Users visit by ip directly to get the newest shokudo data.

# Example:
- Assume that the total number of seats is 300.
- IoT hardware system sends data by “PUT” request: "18.183.102.1/?input=250&output=200", this data were stored on server.
- After that, users visit page by: "18.183.102.1", the “混雑率” becomes 17%.