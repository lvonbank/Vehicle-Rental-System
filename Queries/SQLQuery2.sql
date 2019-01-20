-- Subquery
-- Shows contact information for customers with expired bill dates
-- Purpose: Allows users to get the contact information of customers with bill dates that have passed

SELECT Cust_ID, LastName, FirstName, PhoneNum, Email
FROM Customer
WHERE Cust_ID IN 
(
  SELECT Cust_ID 
  FROM Billing 
  WHERE BillDate < GETDATE()
);
