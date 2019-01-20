-- Allows for indexing of vehicles by there year (to compare age of vehicles)
-- Purpose: This index allows customers to find vehicles faster based on their years. People are selective when it comes to the age of the vehicle (cost vs year).

IF OBJECT_ID('dbo.IX_VehicleYear') IS NOT NULL
BEGIN
DROP INDEX IX_VehicleYear ON Vehicle;
END;

GO

CREATE NONCLUSTERED INDEX IX_VehicleYear ON Vehicle (Year DESC);

GO

SELECT *
FROM Vehicle WITH (INDEX(IX_VehicleYear));
