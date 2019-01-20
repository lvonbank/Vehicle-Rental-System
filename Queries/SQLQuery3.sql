-- CTE
-- Produces a list of all customers, their bill status, and bill dates placed on a certain date. In this case, it retrieves customer bill dates placed after 2017/12/31.
-- Purpose: Gives users the ability to view all customers along with their bills by a given date

;WITH Rented AS (
SELECT Cust_ID, BillStatus, CONVERT(VARCHAR,BillDate,111) AS BillDate
FROM dbo.Billing
WHERE BillDate > '2017/12/31'
)
SELECT Cus.Cust_ID, Rented.BillStatus, Rented.BillDate
FROM dbo.Customer AS Cus
LEFT OUTER JOIN Rented ON Cus.Cust_ID = Rented.Cust_ID
ORDER BY Rented.BillDate DESC;
