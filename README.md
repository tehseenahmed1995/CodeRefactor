# CodeRefactor
## BookingController
##### 1. Service encapsulates a specific piece of business logic and used to abstract complex operations from controllers, making controllers leaner and promoting a better separation of concerns and allow controllers to focus on handling HTTP requests and responses, so I'll use service to make code more clean.
##### 2. The combination of repositories and services can provide a structured and modular architecture for application so both can we used togather.
##### 3 . Further we can have request validator in Controller parameters and pass the validated data to service but as application is not functional, so I add only 1 FormReqest for demo mean how we can use the power of form request in Laravel to keep our code clean and precise.
##### 4 . Defining interfaces and separate class implementations for services is a good practice in software development, and it follows the principle of dependency inversion and separation of concerns. In Laravel service provider, bind the interface to the implementation. This allows container to resolve the appropriate implementation when the interface is requested.

## **Note:** 
#### I refactor only top three functions of BookingController, approach will be same for all other functions. Idea is to keep controller short to handle request and return response, move business logic to service, so it can be used with other modules as well for code reusability purpose. Inside, service we will add our data layer (Repositories) to interact with database.
#### Few of things I believe can be improved like sending proper (standardized) response with response codes but that I can do if I have functional application by analyzing what is required in response so based on that I'll create my response Utility that will I can use but for now I used the existing response().

## BookingRepository
##### 1.Repository is a Data layer, so it should only perform actions related to data, all other logics like sending email, notification, logger these should be handled from service.
#### 2. Function size is quite large we have to scroll to understand complete code that is not good in terms of readability, so data preparation should happen inside service and pass the prepared data to repository function, so they perform their job. 

## **Note:**
#### I haven't done the complete code refactor but given my thought how I approach my solution. This code was not functional so can't modify based on assumptions. I can show you my code for reference if you want. 

##  Good Things about existing code:
#### Use of base classes for code reusability to have common functionality in base class and in child class get the functionality by extending base class.