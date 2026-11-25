# Lab 6 — my answers
Name: Jama Bashir· Admission number: 166116
1. In process-delivery.php, the browser already checks the member number.
Why does PHP check it again? Name one way the browser's check can be skipped.

Answer--because the browese validation only runs on the client side so it cant be trusted to protect the database.

sending a POST request directly to process-delivery.php

2. In my INSERT, bind_param has the letters 'issd'. What does each letter
stand for, and which value does it go with?

Answer--'i' = integer (the farmer's ID)
        's' = string (the delivery date)
        's' = string (the session such as MORNING or EVENING) 'd' = double/decimal (the litres value).

3. Why is Delete a small form sent by post, while Edit is a link?

Answer--Edit uses a GET link because opening the edit     page only loads existing delivery data to display the form without altering database records. Delete changes database state by removing a row, so it uses a POST form to prevent accidental deletions

4. Someone opens deliveries.php?date=' OR '1'='1 on my site.
What happens, and why does my prepared statement not run it as SQL?

Answer--The page treats ' OR '1'='1 as the requested delivery date value, finds no matching rows, and displays that no deliveries were recorded on that day instead of exposing all rows. Because mysqli_prepare() sends the SQL template with a ? placeholder first and mysqli_stmt_bind_param() binds the input strictly as a parameter value, the database never parses the input as SQL commands.