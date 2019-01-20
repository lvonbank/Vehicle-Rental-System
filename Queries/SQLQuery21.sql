-- It prevents uses from booking the same vehicle in an already booked period.
-- Purpose: This is important to stop uses from booking duplicate times with the same vehicle.

IF OBJECT_ID('TRIG_BookingDate') IS NOT NULL 
BEGIN
DROP TRIGGER dbo.TRIG_BookingDate;
END;

GO

CREATE TRIGGER TRIG_BookingDate
ON Booking
AFTER INSERT, UPDATE
AS
IF EXISTS (SELECT *  
           FROM Booking AS book  
           JOIN inserted AS ins   
           ON book.Book_ID = ins.Book_ID
           WHERE book.VIN = ins.VIN AND 
                (book.StartDate <= ins.EndDate AND book.EndDate >= ins.StartDate)
          )  
BEGIN
RAISERROR ('Rental duration conflicts with another for this vehicle.', 16, 1);  
ROLLBACK TRANSACTION;
RETURN   
END;

GO

INSERT INTO Booking(Book_ID, StartDate, EndDate, SecurityDeposit, BookStatus, VIN, Bill_ID)
VALUES('100', '2017-6-20', '2017-12-26', '25.00', 'Active', '1HGBH41JXMN109186', '2');
