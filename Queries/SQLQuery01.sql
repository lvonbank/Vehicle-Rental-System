-- Inner Join & Aggregate Function
-- Displays the revenue based on location
-- Purpose: This displays all the revenue made by each location

SELECT loc.Location_ID, SUM(TotalAmount) AS 'Revenue By Location'
FROM Billing AS bill
INNER JOIN Location AS loc
ON bill.Location_ID = loc.Location_ID
WHERE BillStatus != 'Refunded'
GROUP BY loc.Location_ID;
