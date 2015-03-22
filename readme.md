#Nancy Michell
###CSCI E-15
###Project 4
####December 17, 2014

**Project URL [http://p4.scholarpaws.com](http://p4.scholarpaws.com)**

**Git URL [https://github.com/nancymic2/p4.git](https://github.com/nancymic2/p4.git)**

+ Project 4 is a website and database for keeping track of your activities during a job search.
It features operations for:
	+ creating records for completed job applications
	+ creating records for new posted jobs
	+ creating records for resumes
	+ creating user account
	+ storing resume text or links to stored resumes
	+ find returns all the user's saved resumes
	+ find returns all the user's saved jobs
	+ find returns all the user's saved completed applications
	+ users are properly routed based on their logged in / logged out / registered status
	+ password changer sends email to user with link/token for changing password
	+ signup screen has password complexity meter
	+ home page has google charts dynamic chart that reads the CareerTrax databse for salary info (just for fun)
	+ add a completed application page has cool circular input control
	+ incorporated jQuery date picker on the save a job page
	+ add application can generate google calendar reminders
	+ add job can generate google calendar reminders


Tables:

+ Users (users)
+ Resumes (resumes)
+ Saved jobs (postedjobs)
+ Completed applications (applications)
+ Password reminders (password_reminders)
+ Database name (shoes :-))

CRUD operations are:

+ **Create**: a new  resume record, a new application record, a new saved job record, a new user record
+ **Read**: return resumes, return jobs, return applications, read data for salary chart, read account info
+ **Update**: change first name, change last name
+ **Delete**: delete resume


+ Code is both mine and from a variety of places:
	+ The knob/dial input on the add application page is a jQuery plugin from [http://anthonyterrien.com/knob/](http://anthonyterrien.com/knob/ "http://anthonyterrien.com/knob/") with settings approriate for page.
	+  The datepickeer on saved jobs page is from jQuery UI [http://jqueryui.com/datepicker/](http://jqueryui.com/datepicker/ "http://jqueryui.com/datepicker/")
	+ The password meter is complexify [http://danpalmer.me/jquery-complexify/](http://danpalmer.me/jquery-complexify/ "http://danpalmer.me/jquery-complexify/") 
	and [http://tutorialzine.com/2012/06/beautiful-password-strength-indicator/](http://tutorialzine.com/2012/06/beautiful-password-strength-indicator/ "http://tutorialzine.com/2012/06/beautiful-password-strength-indicator/")
	+ The dynamic salary chart on the home page is from google charts [https://developers.google.com/chart/](https://developers.google.com/chart/ "https://developers.google.com/chart/")
	+ Styles are based on bootstrap

+ GitHub URL is [https://github.com/nancymic2/p4.git](https://github.com/nancymic2/p4.git)
+ note: image is modified by me from Google images
+ Potential issues:
	+ I was not able to move all my code to controllers (yet) This is planned.
	+ I plan to relate resumes to applications
	+ I plan to add update capability to applications
	+ I plan to add upload for resume files
	+ I will also add styles to separate files as soon as I move code out of routes into views
	+ I might encrypt the job site password field. The career trax password is of course hashed




***
