-- Allows for indexing of billing by bill dates
-- Purpose: This index allows users to find bills on the bases of billing dates. (helps with reporting)

IF OBJECT_ID('dbo.IX_BillDate') IS NOT NULL
BEGIN
DROP INDEX IX_BillDate ON Address;
END;

GO

CREATE NONCLUSTERED INDEX IX_BillDate ON Billing (BillDate DESC);

GO

SELECT *
FROM Billing WITH (INDEX(IX_BillDate));
