-- Uses Aggregate Function
-- Displays the total cost of all bookings
-- Purpose: Allows the company to see all revenue ever made.
SELECT SUM(TotalAmount) AS 'Total Amount Of Bookings'
FROM Billing;
