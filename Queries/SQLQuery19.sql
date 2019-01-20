-- Provides the number of vehicles for each drive train category
-- Purpose: Makes an easy to read list of available vehicles drive trains. This applies when customers are looking for a certain drive train and users what to know how much the company owns. 

SELECT [FWD], [AWD], [4WD]
FROM
(SELECT DriveTrain
    FROM Vehicle) AS SourceTable
PIVOT
(
COUNT(DriveTrain)
FOR DriveTrain IN ([FWD], [AWD], [4WD])
) AS PivotTable;
