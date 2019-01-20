-- Full Outer Join
-- This query uses the full outer join to bring out outputs from all the rows in the two tables, which are the customer table, and the billing table.
-- Purpose: Provides all customer information along with all corresponding billing information creating a full report

SELECT * 
FROM dbo.Customer AS Cus
FULL OUTER JOIN dbo.Billing AS Bill
ON Cus.Cust_ID=Bill.Cust_ID;
