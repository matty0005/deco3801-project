# User Guide/Testing Guide
Please visit [**seedlings.site**](https://seedlings.site) in your browser of choice. 
We have provided a testing account for you to simply use our website. The details are as follows: 
## Test Users
|  Username             |  Password  |
| --------------------- | -----------|
| test@example.com      | password   |

If you don't want to use that account, feel free to create an account through the sign up page on the landing page.
<img width="1438" alt="image" src="https://user-images.githubusercontent.com/54462610/139033763-e006a6f9-28f0-409b-aba1-893a6874b340.png">

## Logged In
Once logged in, you will see the dashboard page where you can see: your upcoming consultations, trending community posts, some of our specialists. You can also navigate to our pages in the top nav bar. 
<img width="1438" alt="image" src="https://user-images.githubusercontent.com/54462610/139034062-208492ba-6a13-427d-a905-065f225ca552.png">
## Consultation Page
On our consultation page you can book a consultation with a specialist of your choice. 
<img width="1438" alt="image" src="https://user-images.githubusercontent.com/54462610/139034956-8dbf8820-67e2-4d8c-9c3f-c1785e7ea713.png">
Once you have chosen a specialist, you can specify a date and time for your consultation. 
<img width="1438" alt="image" src="https://user-images.githubusercontent.com/54462610/139035184-dc8fdf4b-4071-4213-9d97-5c5dcf3d020f.png">
Once booked you will be asked to fill out a questionnaire to provide the specialist information about your child. 
<img width="1438" alt="image" src="https://user-images.githubusercontent.com/54462610/139039431-c84bc854-8e9d-40b3-baa1-99447453052c.png">


## Community Page
On the community page you can view posts made by other parents. You can create your own posts, like other posts and comment on other posts. 
<img width="1438" alt="image" src="https://user-images.githubusercontent.com/54462610/139035715-e81ec06d-7db7-4bf0-8a46-eed8929da19d.png">
You're able to search through the existing posts and filter the posts by topics. 
<img width="1438" alt="image" src="https://user-images.githubusercontent.com/54462610/139035853-86719b3e-ff77-400c-bfd4-895ce0208141.png">
You can create a new post by clicking on a topic. The post can be made anonymous if you so choose, and only viewed by specialists if you prefer.
<img width="1438" alt="image" src="https://user-images.githubusercontent.com/54462610/139036474-b2c7b180-93c2-41a3-822f-fed371494cb4.png">
After a posting, you can see a preview of your post with a note that it is awaiting moderation (all posts are moderated to ensure a safe environment). 
<img width="1438" alt="image" src="https://user-images.githubusercontent.com/54462610/139036655-8b7743b4-4bd3-4c2a-8c44-cbbbff112d2c.png">

## Resources Page
On our resources page you can view resources that could provide any assistance with you and your child. 
<img width="1438" alt="image" src="https://user-images.githubusercontent.com/54462610/139036828-dd05170e-d18a-4499-aa5f-75f754e11515.png">

## Kid's Mode
You can enter the kid's mode in the top right hand corner. If you haven't added your child's information you will be asked to provide their name and DOB. 
<img width="1438" alt="image" src="https://user-images.githubusercontent.com/54462610/139038806-2524d447-274b-4407-b83f-45b3f20037d3.png">
You will see our friendly kid's mode, where the child can begin to answer some questions. **Please turn on your audio, so you can hear the narration.**
<img width="1438" alt="image" src="https://user-images.githubusercontent.com/54462610/139039236-1d01a042-5131-4f8c-933c-3891cf8fbc1d.png">
When in the drawing mode, the child can sketch out what's going on in their minds. 
<img width="1438" alt="image" src="https://user-images.githubusercontent.com/54462610/139037414-ed7e651e-1cce-44d2-bda7-cf452787af23.png">
The child can keep track of the number of questions answered in the kids mode by the count in the top left hand corner. 
<img width="1438" alt="image" src="https://user-images.githubusercontent.com/54462610/139038428-8e1827e3-4b2e-402c-b0dc-5f624101dcde.png">
The child can also press the arrows on either side of the bouncing mascot to change the mascot to the one that they prefer. 
<img width="1438" alt="image" src="https://user-images.githubusercontent.com/54462610/139039592-7aaf548a-3c84-431d-964e-eecd39f9a9cb.png">
By 'unlocking' the kid's mode using the lock in the top right hand corner and entering your password, you will be brought back to the parent's side of the website. 
<img width="1438" alt="image" src="https://user-images.githubusercontent.com/54462610/139039863-d1af5afb-61b1-4d62-a560-ae36256dbe0e.png">


# Developer Guide
## Local Installation
### Requirements
- PHP8
- composer (latest)
- npm
- node v14.17.4 
- docker (if using laravel Sail)

### Setting up
-   create a local mysql database called DecoDB
-   `composer install`
-   `npm install`
-   `npm run watch`
-   `cp .env.example .env`
-   `php artisan key:generate`
-   `php artisan migrate:fresh --seed`

Once this is complete, populate the .env file

# Running
```
php artisan serve
```

```
npm run watch
```

# Commiting code
Please note before commiting code - especially when to staging or main branch, you need to run 
```
npm run prod
```
This builds all the assets for the server


## Test Users
|  Username             |  Password  |
| --------------------- | -----------|
| test@example.com      | password   |



