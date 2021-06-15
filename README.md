# Ethical-Hacking-Project
Project Requirements Create a web application with the following requirements.  Landing page The website should have a static webpage with buttons to login page as well as register register page Registration form should contain the following fields. Name email address password password confirmation Password and Password confirmation check should be done before inserting into the database, otherwise it should throw an error Details for the user table in the database have been provided below. Choose a primary key for your database. id - int Name - varchar(30) email address - varchar (40) password - varchar(40) Login page Registered users should be able to login with their email and password Proper client side checking should be added to check whether the user has entered the email in correct format or not. Proper session management (Cookies) should also be implemented Home page Once logged in, User should be greeted with a text containing their Name This page should have a text box and user would be able to post any messages they wants This page should be like user's timeline where their previous messages will be displayed[Like in facebook] This page should be vulnerable for stored cross site scripting Profile page Profile page should only be accessible for the logged in users It should display Name and Email address It should have a feature to update the provided information Update profile page should be vulnerable for CSRF attack. Create a separate website or a webpage which should exploit the vulnerability Search page There should be a search field where user can search other users The application should return the name of users matching the search term This search functionality should be vulnerable for SQL injection
