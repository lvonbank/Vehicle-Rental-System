-- 4 Table Join
-- Retrieves the customer’s name along with the booked cars VIN, Make, and Model
-- Purpose: This provides information on what vehicles that customers have made bookings with.

SELECT FirstName, LastName, veh.VIN, Make, Model
FROM Customer AS cust
INNER JOIN Billing AS bill
ON cust.cust_id = bill.cust_id
INNER JOIN Booking AS book
ON bill.bill_id = book.book_id
INNER JOIN Vehicle AS veh
ON book.VIN = veh.VIN;
