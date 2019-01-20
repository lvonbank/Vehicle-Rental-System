-- Creates a list of vehicle with their VIN, Make, Model, and Year
-- Purpose: Produces a report of all vehicles based on their VIN as starting reference. It can be used to take inventory at a given location.

DECLARE @VIN AS CHAR(17);
DECLARE @Make AS VARCHAR(17);
DECLARE @Model AS VARCHAR(25);
DECLARE @Year AS CHAR(10);
 
DECLARE @VechicleCursor as CURSOR;
SET @VechicleCursor = CURSOR FOR
SELECT VIN, Make, Model, Year
FROM Vehicle;

OPEN @VechicleCursor;

FETCH NEXT FROM @VechicleCursor INTO @VIN, @Make, @Model, @Year;

WHILE @@FETCH_STATUS = 0
BEGIN
 PRINT CONCAT(@VIN,': ', @Make, ' ', @Model, ' (', YEAR(@Year), ')');
 FETCH FROM @VechicleCursor INTO @VIN, @Make, @Model, @Year;
END

CLOSE @VechicleCursor;
DEALLOCATE @VechicleCursor;
