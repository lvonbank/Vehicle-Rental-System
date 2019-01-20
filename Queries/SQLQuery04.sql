-- Pivot
-- This shows total bill amounts based on location partitioned by billing status
-- Purpose: Provides a report that can show users what billing status the locations overall total amounts are in.

SELECT Location_ID, Paid, Pending, Refunded
FROM
(SELECT Location_ID, TotalAmount, BillStatus
    FROM Billing
	) AS SourceTable
PIVOT
(
SUM(TotalAmount)
FOR BillStatus IN (Paid, Pending, Refunded)
) AS PivotTable;
