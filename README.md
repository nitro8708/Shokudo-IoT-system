# 0.0.3 /20-10-05

### New features
- Return more information after a successful PUT request.
- Directly receive raw INPUT data, transfer valid one as a tray count.

### Example:
- Step 1: set INPUT threshold as 1000.
- Step 2: upload INPUT data as 2500, the count of trat in “input.txt" self-add 1.
- Step 3: upload INPUT data as 500, the count will not be increased.


# 0.0.2

## New features: 
- IoT hardware system visit by specific IP with "PUT" request format, updates two values “input” and “output”.
- Users visit by ip directly to get the newest shokudo data.

## Example:
- Assume that the total number of seats is 300.
- IoT hardware system sends data by “PUT” request: "18.183.102.1/?input=250&output=200", this data were stored on server.
- After that, users visit page by: "18.183.102.1", the “混雑率” becomes 17%.




