-- Retrieves all the vehicles at a specific location (indexed in descending order)
-- Purpose: This allows locations to examine what age vehicle they have on hand.

SELECT loc.Location_ID, Make, Model, Year
FROM Vehicle AS veh WITH (INDEX(IX_VehicleYear))
INNER JOIN InStock AS insto
ON insto.VIN = veh.VIN
INNER JOIN Location AS loc
ON insto.Location_ID = loc.Location_ID
WHERE loc.Location_ID = 1;
