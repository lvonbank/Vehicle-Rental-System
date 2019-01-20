-- 3 Table Join
-- Shows the vehicles current location and availability
-- Purpose: It allows users to see what vehicles are available and what location it was last associated with.

SELECT loc.Location_ID, veh.VIN, Avalible
FROM Vehicle AS veh
INNER JOIN InStock AS sto
ON veh.VIN = sto.VIN
INNER JOIN Location AS loc
ON sto.Location_ID = loc.Location_ID;
