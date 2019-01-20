-- 3 Table Join
-- Retrieves the customer’s name along with the booked cars VIN
-- Purpose: This can provides data on what person likes to rent what vehicle (VIN).

SELECT FirstName, LastName, VIN
FROM Customer AS cust
INNER JOIN Billing AS bill
ON cust.cust_id = bill.cust_id
INNER JOIN Booking AS book
ON bill.bill_id = book.book_id;
