-- Allows for clustered indexing of payment by transaction number
-- Purpose: This index allows users to find payments based on the transaction number. (helps with transactions)

IF OBJECT_ID('dbo.AF_TransactionNum') IS NOT NULL
BEGIN
DROP INDEX AF_TransactionNum ON Payment;
END; 

GO

CREATE CLUSTERED INDEX AF_TransactionNum ON Payment (TransactionNum DESC);

GO

SELECT *
FROM Payment WITH (INDEX(AF_TransactionNum));
