<a href="https://www.buymeacoffee.com/jsafe00" target="_blank"><img src="https://cdn.buymeacoffee.com/buttons/default-black.png" alt="Buy Me A Coffee" style="height: 51px !important;width: 217px !important;" ></a>

### Dockerize Laravel Lumen 

#### Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching. https://github.com/laravel/lumen

### You can check the tutorial at: https://josafebalili.com/posts/Dockerize-Existing-Laravel-Project/

To execute:

In the root folder:

```
docker-compose build
```
```
docker-compose up -d
```

Accessing the project in the browser:

```
192.168.99.101:8000
```

CRUD implementation

```
Create - POST - http://192.168.99.101:8000/api/posts/?title={newTitle}&description={newDescription}
Read - GET (all)- http://192.168.99.101:8000/api/posts/
GET (byID) - http://192.168.99.101:8000/api/posts/{id}
Update - PUT - http://192.168.99.101:8000/api/posts/{id}?title={updatedTitle}&description={updatedTitle}
Delete - DELETE - http://192.168.99.101:8000/api/posts/{id}
```
