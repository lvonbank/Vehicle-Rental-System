-- Gets customers names along with the payment type for the bill.
-- Purpose: Allows a user to determine how a customer payed and for what bill. This can be used for the accounting department.

;WITH CTE_Payment (Name, PaymentType, Bill_ID)
AS
(
SELECT FirstName + ' ' + LastName, PaymentType, bill.Bill_ID
FROM Customer AS cust
INNER JOIN Payment AS pay
ON cust.Cust_ID = pay.Cust_ID
INNER JOIN Billing AS bill
ON pay.Bill_ID = bill.Bill_ID
)

SELECT Name, PaymentType, Bill_ID
FROM CTE_Payment;
