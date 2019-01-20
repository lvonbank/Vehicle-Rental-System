-- Retrieves the outstanding balance due for a given customer
-- Purpose: It allows users to determine how much money they own for all their bills combined. The company can find out how much each customer completely owns.

IF OBJECT_ID('UDF_OutstandingBalance') IS NOT NULL
BEGIN
DROP PROC dbo.OutstandingBalance
END;

GO

CREATE PROC UDF_OutstandingBalance(@Customer CHAR)
AS
SELECT SUM(bill.TotalAmount) AS 'Total Balance Due'
FROM Customer AS cust
INNER JOIN Billing AS bill
ON cust.Cust_ID = bill.Bill_ID
GROUP BY cust.Cust_ID
HAVING cust.Cust_ID = @Customer;

GO

EXEC dbo.UDF_OutstandingBalance 3;
