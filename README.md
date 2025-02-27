Step-1: Download file or git pull project from following git link.
Step-2: Composer update for vendor file and others
Step-3: create a database and setup into .env file here DB_DATABASE=TestTask-master,DB_USERNAME=root
Step-4: run migration command like php artisan migrate
Step-5: run command php artisan serve or you can run also localhost on your pc.
Step-6: if showing error like that 'Vite manifest not found' than install npm and setup on your pc
Step-7: if you local than http://localhost/TestTask-master/public/api/register or run serve than http://127.0.0.1:8000/api/register
of postman for register user like:
{
"name": "Masud Rana",
"email": "rana@example.com",
"password": "12345678"
}
## For Setup on postman 
a)url method post
b)select body and raw and format json


Step-8: After success registration than message and you login of project 
using email and password.

Step-9: After login successfully than you can get a simple templating dashboard.
Step-10: Post API like:
##For post create and get(only method change) post for following postman previous instruction
Method: POST
URL: http://localhost/TestTask-master/public/api/posts or http://127.0.0.1:8000/api/posts

Step-11:Task API
Method: POST
URL: http://localhost/TestTask-master/public/api/tasks or http://127.0.0.1:8000/api/tasks

Raw Data like for task create
{
"title": "Finish Laravel test"
}


Method: GET
URL: http://localhost/TestTask-master/public/api/tasks/pending or http://127.0.0.1:8000/api/tasks/pending

##For Status Change
Method: PATCH
URL: http://localhost/TestTask-master/public/api/tasks/1 or http://127.0.0.1:8000/api/api/tasks/1

Raw Data like
{
"is_completed": true
}

I am very interested in doing a job in Bogura. Because it would be nice if I could do a job from my home town. 
I have been trying for a long time but I am not getting any good opportunity. 
If you give me a chance, I will try my best to serve your purpose.

Thank You.
If any query contact with me(01773332537);
