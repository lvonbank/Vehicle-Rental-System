-- Provides general customers information (preserve customer’s privacy)
-- Purpose: It allows for a basic customer contact list without their personal information.

IF OBJECT_ID('VW_Customer') IS NOT NULL 
BEGIN
DROP VIEW dbo.VW_Customer;
END;

GO

CREATE VIEW VW_Customer AS
SELECT FirstName +' '+ MiddleName +' '+ LastName AS NAME, Email, PhoneNum, Zip
FROM Customer AS cust
INNER JOIN Address AS addr
ON cust.Address_ID = addr.Address_ID;

GO

SELECT Name, Email, PhoneNum
FROM VW_Customer;
