-- Obtains the booked vehicles along with the location it was rented from
-- Purpose: Allows the company to see what vehicles where rented out by what location and for what period. This can help find the effectiveness of vehicles based on locations.

SELECT loc.Location_ID, Country, veh.VIN, Make, Model, StartDate, EndDate
FROM Address AS addr
INNER JOIN Location AS loc
ON addr.Address_ID = loc.Address_ID
INNER JOIN InStock AS insto
ON loc.Location_ID = insto.Location_ID
INNER JOIN Vehicle AS veh
ON insto.VIN = Veh.VIN
INNER JOIN Booking AS book
ON book.VIN = veh.VIN;
